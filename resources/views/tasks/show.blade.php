@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} 詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {{-- 編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', '編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

@endsection