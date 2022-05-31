<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>email</th>
        <th>pwd</th>
        <th>comment</th>
    </tr>
    </thead>
    <tr>



    </tr>

    <tbody>
        @foreach ($products as $v)

    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->pwd}}</td>
        <td>{{$v->comment}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
