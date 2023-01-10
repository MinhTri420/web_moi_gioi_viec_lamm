@extends('layout.master')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('admin.posts.create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Company</label>
                            <select class="form-control" name="company" id="select-company"></select>
                        </div>
                        <div class="form-group">
                            <label>Language (*) </label>
                            <select class="form-control" multiple name="language" id="select-language"></select>
                        </div>
                        <div class="form row">
                            <div class="form-group col-6">
                                <label>City (*)</label>
                                <select class="form-control" name="city" id="select-city"></select>
                            </div>
                            <div class="form-group col-6">
                                <label>District</label>
                                <select class="form-control" name="district" id="select-district"></select>
                            </div>
                        </div>
                        <div class="form row">
                            <div class="form-group col-4">
                                <label>Min Salary</label>
                                <input class="form-control" type="number" name="min_salary">
                            </div>
                            <div class="form-group col-4">
                                <label>Max Salary</label>
                                <input class="form-control" type="number" name="max_salary">
                            </div>
                            <div class="form-group col-4">
                                <label>Currency Salary</label>
                                <select name="currency_salary" class="form-control">
                                    @foreach($currencies as $currency => $value)
                                        <option value="{{$value}}">
                                            {{$currency}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Requirement</label>
                                <textarea name="requirement" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <label>Number Applicants</label>
                                <input type="number" name="number_applicants" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Start Date</label>
                                <input class="form-control" type="date" name="start_date">
                            </div>
                            <div class="form-group col-6">
                                <label>End Date</label>
                                <input class="form-control" type="date" name="end_date">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" id="title">
                            </div>
                            <div class="form-group col-6">
                                <label>Slug</label>
                                <input class="form-control" type="text" name="slug" id="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="btn-submit" disabled>Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        function generateTitle(){
            let languages = [];
            const selectedLanguages = $("#select-language :selected").map(function (i,v){
                languages.push($(v).text());
            });
            languages = languages.join(', ');
            const city = $("#select-city").val();
            const company = $("#select-company").text();
            let title = `(${city}) ${languages}`;
            if (company){
                title += ' - ' + company;
            }

            $("#title").val(title);
            generateSlug(title);
        }
        function generateSlug(title){
            $.ajax({
                url: '{{route('api.posts.slug.generate')}}',
                type: 'POST',
                dataType: 'json',
                data: {title},
                success: function (response) {
                    $("#slug").val(response.data);
                    $("#slug").trigger("change");
                },
                error: function (response) {
                }
            })

        }



        async function loadDistrict() {
            $("#select-district").empty();
            const path = $("#select-city option:selected").data('path');
            const response = await fetch('{{asset('locations/')}}' + path);
            const districts = await response.json();
            $.each(districts.district, function (index, each) {
                if (each.pre === 'Quận') {
                    $("#select-district").append(`
                <option>
                    ${each.name}
                </option>`);
                }
            })
        }

        $(document).ready(async function () {
            $("#select-city").select2();
            const response = await fetch('{{asset('locations/index.json')}}');
            const cities = await response.json();
            $.each(cities, function (index, each) {
                $("#select-city").append(`
                <option data-path='${each.file_path}'>
                    ${index}
                </option>`)
            })
            $("#select-city").change(function () {
                loadDistrict();
            });
            loadDistrict();
            $("#select-district").select2();
            $("#select-company").select2({
                tags: true,
                ajax: {
                    url: '{{route('api.companies')}}',

                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data.data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id,
                                }
                            })
                        };
                    },
                }
            });
            $("#select-language").select2({
                ajax: {
                    url: '{{route('api.languages')}}',

                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data.data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id,
                                }
                            })
                        };
                    },
                }
            });

            $(document).on('change','#select-language,#select-company,#select-city',function (){
                generateTitle();
            })

            $("#slug").change(function (){
                $("#btn-submit").attr('disabled',true);
                $.ajax({
                    url: '{{route('api.posts.slug.check')}}',
                    type: 'GET',
                    dataType: 'json',
                    data: {slug:$(this).val()},
                    success: function (response) {
                        if (response.success)
                            $("#btn-submit").attr('disabled',false);
                    },
                })
            })
        });
    </script>
@endpush
