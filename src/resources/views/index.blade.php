@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="notification-wrapper">
    <p class="notification-text">Todoを作成しました</p>
</div>

<div class="main-wrapper">
    <div class="registration-wrapper">
        <form class="registration-form" action="">
            <input class="registration-todo" type="text" name="todo">
            <button class="btn-registration" type="submit">作成</button>
        </form>
    </div>
    <div class="todo-wrapper">
        <div class="todo-title-wrapper">
            <h2 class="todo-title">Todo</h2>
        </div>
        <div class="todo-list-wrapper">
            <div class="todo-list">
                <p class="todo-content">test</p>
                <div class="btn-wrapper">
                    <form action="">
                        <button class="btn update" type="submit">更新</button>
                    </form>
                    <form action="">
                        <button class="btn delete" type="submit">削除</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="todo-list-wrapper">
            <div class="todo-list">
                <p class="todo-content">test2</p>
                <div class="btn-wrapper">
                    <form action="">
                        <button class="btn update" type="submit">更新</button>
                    </form>
                    <form action="">
                        <button class="btn delete" type="submit">削除</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection