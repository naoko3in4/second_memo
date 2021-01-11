<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>メモ</title>
</head>

<body>
  <h1>メモ入力画面です。</h1>

  <form action="memo" method="post">
    @method('DELETE')
    @csrf

    <tbody>
      @foreach ($memos as $memo)
      <tr>
        <td>
          <input type="checkbox" name="ids" value="{{$memo->id}}">
        </td>
        <td>タイトル：{{ $memo->title }}</td>
        <td>内容：{{ $memo->content }}</td>
      </tr>
      @endforeach
      <input type="submit" value="チェック項目を削除">
    </tbody>

  </form>

  <form action="memo" method="post">

    <input type="text" name="title" placeholder="タイトル">
    <input type="text" name="content" placeholder="メモ内容">
    <input type="submit" value="送信">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
</body>

</html>