<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LaravelTodoApp</title>
</head>

<body>
  <h1>LaravelTodoApp</h1>
  <h2>Tasks</h2>
  <ul>
    @foreach ($tasks as $task)
    <li>
      {{ $task->title }}
    </li>
    @endforeach
  </ul>
  <form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title">
    <button type="submit">Create Task</button>
  </form>
</body>

</html>