<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- <link rel="stylesheet" href="../../css/app.css"> --}}

  <title>Document</title>
</head>
<body>
  <h1>Список студентов группы "{{ $group->title }}"</h1>

  <div>
    <a class="btn" href="{{ route('group.index') }}"> Назад</a>
  </div>
  <br>
  
  <table class="table">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Start_from</th>
        <th>Is_active</th>
        <th>updated_at</th>
        <th>created_at</th>
    </tr>
    <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->title }}</td>
        <td>{{ $group->start_from }}</td>
        <td>{{ $group->is_active }}</td>
        <td>{{ $group->updated_at }}</td>
        <td>{{ $group->created_at }}</td>
    </tr>
  </table>

  <table class="table">
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
  <a class="btn" href="{{ route('student.create', $group) }}">Добавить студента в группу</a>
</body>
</html>