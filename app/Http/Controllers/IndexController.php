<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // return Member::all();
        return Member::with('getGroup')->get();
        // return Member::with('group')->get();
    }

    public function group()
    {
        return Group::with('member')->get();
    }
}
