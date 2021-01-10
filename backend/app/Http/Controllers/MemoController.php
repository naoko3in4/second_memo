<?php

namespace App\Http\Controllers;

class MemoController extends Controller
{
  public function showMemo()
  {
    // メモを表示
    return view('memo');
    //dd('showMemoだよ');
  }
}
