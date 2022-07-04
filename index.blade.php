<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    <label>{{$name}}</label><br>
    <input type="text" name="name" ><br>
    <label>{{$mail}}</label><br>
    <input type="text" name="mail" ><br>
    <input type="submit" value="送信する" >
  </form>
</body>

</html>