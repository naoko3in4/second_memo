<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
  public function list()
  {
    // メモを表示
    $memos = Memo::get();
    return view('memo.index', ['memos' => $memos]);
  }

  public function update(Request $request)
  {
    $memo = Memo::find($request);
    $memo_title = $request->input('title');
    $memo_content = $request->input('content');
    $memo[0]->update(['title' => $memo_title, 'content' => $memo_content]);
    return redirect('/memo');
  }


  public function store(Request $request)
  {
    // dbへ値を追加
    $memo_title = $request->input('title');
    $memo_content = $request->input('content');
    Memo::create(['title' => $memo_title, 'content' => $memo_content]);
    //return redirect()->back()->with('success_message', 'SUCCESS!!');
    return redirect('memo/');
  }

  public function delete(Request $request)
  {
    Memo::destroy($request->input('ids'));
    //return redirect()->back()->with('success_message', 'SUCCESS!!');
    return redirect('/memo');
  }
}
