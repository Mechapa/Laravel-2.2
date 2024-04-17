<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1></h1>

  <h1>Список студентов</h1>  

  <table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>group_id</th>
        <th>name</th>
        <th>surname</th>
        <th>updated_at</th>
        <th>created_at</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->group_id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->surname }}</td>
        <td>{{ $student->updated_at }}</td>
        <td>{{ $student->created_at }}</td>
    </tr>
    @endforeach
</table>
  
</body>
</html>