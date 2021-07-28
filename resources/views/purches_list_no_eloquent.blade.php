<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 20px 40px;
        }
    </style>
</head>

<body>
    <h1>The list of buyer, by total items taken in ascending order.</h1>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Buyer id</th>
      <th scope="col">Buyer Name</th>
      <th scope="col">Total Diary Taken</th>
      <th scope="col">Total Pen Taken</th>
      <th scope="col">Total Eraser Taken</th>
      <th scope="col">Total items Taken</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($products as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
         <td>{{ $item->diary_taken }}</td>
        <td>{{ $item->pen_taken }}</td>
        <td>{{ $item->eraser_taken }}</td>
        <td>{{ $item->total }}</td>
      </tr>
      </tr>
      @endforeach
  </tbody>
</table>
</body>

</html>
