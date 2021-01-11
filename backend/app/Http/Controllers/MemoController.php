<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
  public function showMemo()
  {
    // メモを表示
    // memo.blade.php のフォームの入力値を取得
    // memo.blade.phpに表示
    $memos = Memo::get();
    return view('memo', ['memos' => $memos]);
  }

  public function store(Request $request)
  {
    // dbへ値を追加
    $memo_title = $request->input('title');
    $memo_content = $request->input('content');
    Memo::create(['title' => $memo_title, 'content' => $memo_content]);
    return redirect('/memo');
    // return redirect()->back()->with('success_message', 'SUCCESS!!');
  }
}
