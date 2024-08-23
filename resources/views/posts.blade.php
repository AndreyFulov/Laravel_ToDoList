@extends("main")

@section("content")
 <div class="container todo-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center mb-4">ToDot Lost</h1>
                <form class="input-group mb-3" action="{{route("store")}}" method="post">
                    @csrf
                    <input type="text" class="form-control" id="todo-input" placeholder="Введите задачу" name="title">
                    <button type="submit" class="btn btn-primary" id="add-btn">Создать задачу</button>
                </form>
                <ul class="list-group" id="todo-list">
                    @foreach ($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{$task->title}}</span>
                            <form action="{{route('destroy', $task->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection