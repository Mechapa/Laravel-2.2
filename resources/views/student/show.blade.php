<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Информация о студенте</h1>

  <a class="btn" href="{{ route('group.show', $group->id) }}"> К списку студентов</a>

  {{-- <h3>group: {{$group}}</h3>
  <h3>student: {{$student}}</h3>
  <h3>group title from student: {{$group_title}}</h3> --}}


  
  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <th>group_id</th>
      <th>group_title</th>
      <th>name</th>
      <th>surname</th>
      <th>updated_at</th>
      <th>created_at</th>
    </tr>
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->group_id }}</td>
        <td>{{ $group_title }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->surname }}</td>
        <td>{{ $student->updated_at }}</td>
        <td>{{ $student->created_at }}</td>
    </tr>
  </table>
</body>
</html>