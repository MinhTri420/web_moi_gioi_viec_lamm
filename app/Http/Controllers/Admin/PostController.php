<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PostCurrencySalaryEnum;
use App\Http\Controllers\Controller;
use App\Imports\PostImport;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    private object $model;
    private string $table;

    public function __construct()
    {
        $this->model = Post::query();
        $this->table = (new Post())->getTable();


        View::share('title', ucwords($this->table));
        View::share('table', $this->table);

    }
    public function index()
    {
        return view('admin.posts.index');
    }
    public function create()
    {
        $currencies = PostCurrencySalaryEnum::asArray();
        return view('admin.posts.create',[
            'currencies' => $currencies
        ]);
    }

    public function importCsv(Request $request)
    {
        Excel::import(new PostImport, $request->file('file'));
    }
}
