<?php

namespace App\Http\Controllers;

use App\Models\Memo;

class MemoController extends Controller
{
  public function showMemo()
  {
    // メモを表示

    // memo.blade.php のフォームの入力値を取得
    // memo.blade.phpに表示
    $memos = Memo::get();
    //dd($memos);
    return view('memo', ['memos' => $memos]);

    // dbへ値を追加
    //$memo = Memo::create([]);
  }
}
