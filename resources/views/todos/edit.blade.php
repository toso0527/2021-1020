<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoリスト - 更新</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Todoリスト - 更新</h1>
    </div>
    <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => ['todos.update', $todo->id], 'method' => 'POST']) !!}
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="row">
                    {{ Form::text('updateTodo', $todo->todo, ['class' => 'form-control col-7 mr-4']) }}
                    {{ Form::date('updateDeadline', $todo->deadline, ['class' => 'mr-4']) }}
                    {{ Form::submit('Todoリストを更新', ['class' => 'btn btn-primary mr-3']) }}
                    <a href="{{ route('todos.index') }}" class="btn btn-danger">戻る</a>
                </div>
            {!! Form::close() !!}
        </div>
        @if ($errors->has('updateDeadline'))
            <p class="alert alert-danger">{{ $errors->first('updateDeadline') }}</p>
        @endif
    </div>
</body>
</html>
