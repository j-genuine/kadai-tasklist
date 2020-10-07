@extends('layouts.app')

@section('content')

<p>
{!! link_to_route('signup.get', 'Test SignUp', [], ['class' => 'btn btn-lg btn-primary']) !!}
{!! link_to_route('login', 'Test Login', [], ['class' => 'btn btn-lg btn-primary']) !!}
{!! link_to_route('logout.get', 'Test Logout', [], ['class' => 'btn btn-lg btn-primary']) !!}
</p>

@if (!Auth::check())
    {!! redirect('/login') !!}
@else
    <h1>{{ Auth::user()->name }}さんのタスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endif

    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}

    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスクの登録', [], ['class' => 'btn btn-primary']) !!}

@endsection