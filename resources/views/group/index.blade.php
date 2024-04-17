<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Список Групп</h1>
  <div>
    <a class="btn" href="{{ route('group.create') }}">Создать группу</a>  
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
    @foreach ($groups as $group)
    <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->title }}</td>
        <td>{{ $group->start_from }}</td>
        <td>{{ $group->is_active }}</td>
        <td>{{ $group->updated_at }}</td>
        <td>{{ $group->created_at }}</td>
        <td><a class="btn" href="{{ route('group.edit', $group) }}">Изменить группу</a></td>
        <td><a class="btn" href="{{ route('group.show', $group) }}">Добавить студента</a></td>
        <td>
          <form action="{{ route('group.destroy', $group) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn">Удалить группу</button>
          </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>