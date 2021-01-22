<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Request $request)
    {
        //return view('memo/edit');
        $memo = Memo::find($request);
        return view('memo.edit', ['memo' => $memo]);
    }
}
