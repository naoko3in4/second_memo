<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>メモ list</title>
</head>

<body>
  <h1>メモ入力画面</h1>

  <tbody>

    @foreach ($memos as $memo)
    <tr>
      <td>タイトル：{{ $memo->title }}</td>
      <td>内容：{{ $memo->content }}</td>
      <td>
        <form action="/memo/edit" method="post">
          @method('GET')
          @csrf
          <button type="submit" name="ids" value="{{$memo->id}}">
            編集


          </button>
        </form>
      </td>
      <td>
        <form action="/memo" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" name="ids" value="{{$memo->id}}">
            削除
          </button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>

  <form action="/memo" method="post">
    <input type="text" name="title" placeholder="タイトル">
    <input type="text" name="content" placeholder="メモ内容">
    <input type="submit" value="送信">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </form>
</body>

</html>