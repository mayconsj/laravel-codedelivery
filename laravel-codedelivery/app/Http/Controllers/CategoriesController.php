<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }
}
