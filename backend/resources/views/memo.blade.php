<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>メモ</title>
</head>

<body>
  <h1>メモ入力画面です。</h1>

  <tbody>
    @foreach ($memos as $memo)
    <tr>
      <td>タイトル：{{ $memo->title }}</td>
      <td>内容：{{ $memo->content }}</td>
    </tr>
    @endforeach
  </tbody>

  <form action="memo" method="post">
    <input type="text" name="title" placeholder="タイトル">
    <input type="text" name="content" placeholder="メモ内容">
    <input type="submit" value="送信">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </form>
</body>

</html>