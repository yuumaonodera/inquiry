<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card">
    @foreach ($item as $todo)
    <option value="{{ $todo->id }}">{{ $todo->content}}</opition>
    @endforeach
  </div>
</body>

</html>