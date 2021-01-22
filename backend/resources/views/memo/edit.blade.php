<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ編集</title>
</head>

<body>
  <h1>メモ編集画面</h1>

  <form action="/" method="post">
    @method('PUT')
    <input type="hidden" name="id" value={{$memo[0]->id}}>
    <input type="text" name="title" value={{ $memo[0]->title }}>
    <input type="text" name="content" value={{ $memo[0]->content }}>
    <input type="submit" value="送信">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </form>
</body>

</html>