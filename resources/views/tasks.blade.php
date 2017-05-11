@extends('layouts.app')<!--наследувание-->
@section('content')
<!-- Bootstrap шаблон... -->

@if (count($tasks) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Товари
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

	    <!-- Заголовок таблицы -->
	    <thead>
            <th>Товар</th>
	    <th>Цена</th>
	    <th>Удалить</th>
            <th>&nbsp;</th>
	    </thead>

	    <!-- Тело таблицы -->
	    <tbody>
		@foreach ($tasks as $task)
		<tr>
		    <!-- Имя задачи -->
		    <td class="table-text">
			<div>{{ $task->name }}
			    <div class="descript" hidden>{{ $task->descript }}</div>
			</div>
		    </td>
		    <td class="table-text">
			<div>{{ $task->price }}</div>
		    </td>

		    <td>
			<form action="{{ url('task/'.$task->id) }}" method="POST">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}
			    <button type="submit" class="btn btn-danger">
				<i class="fa fa-trash"></i> Удалить
			    </button>
			</form>
		    </td>
		</tr>
		@endforeach
	    </tbody>
        </table>
    </div>
</div>
@endif
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
	{{ csrf_field() }}
	<!-- Имя задачи -->
	<div class="form-group">
	    <label for="task" class="col-sm-3 control-label">Новый товар</label>

	    <div class="col-sm-6">
		<input type="text" name="name" id="task-name" class="form-control">
	    </div>
	</div>
	<div class="form-group">
	    <label for="descript" class="col-sm-3 control-label">Описание</label>

	    <div class="col-sm-6">
		<input type="text" name="descript" id="task-descript" class="form-control">
	    </div>
	</div>
	
	<!-- Имя задачи -->
	<div class="form-group">
	    <label for="price" class="col-sm-3 control-label">Цена</label>

	    <div class="col-sm-6">
		<input type="text" name="price" id="task-price" class="form-control">
	    </div>
	</div>

	<!-- Кнопка добавления задачи -->
	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-6">
		<button type="submit" class="btn btn-default">
		    <i class="fa fa-plus"></i> Добавить новый товар
		</button>
	    </div>
	</div>
    </form>
</div>

<!-- TODO: Текущие задачи -->
@endsection