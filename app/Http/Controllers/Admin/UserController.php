<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    private object $model;
    private string $table;

    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User()) -> getTable();


        View::share('title', ucwords($this->table));
        View::share('table', $this->table);
    }

    public function index()
    {
//        Paginator::useBootstrap();
        $data = $this->model
            ->with('company')
            ->latest()
            ->paginate(4);

        return view("admin.$this->table.index",[
           'data' =>$data,
        ]);

    }


    public function destroy(User $user)
    {
        //
    }
}
