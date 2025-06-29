@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<!-- 教材の解答↓ -->
<div class="todo__alert">
    @if(session('message'))
    <div class="todo__alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="todo__alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- 自分の解答 -->
    <!-- @error('content')
    <div class="todo__alert--danger">
        <ul>
            <li>ここに$error->first()を書く</li>
        </ul>
    </div>
    @enderror -->

</div>
<div class="todo__content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">Todo</th>
            </tr>
            @foreach($todos as $todo)
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form" action="todos/update" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="delete-form" action="/todos/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="delete-form__button">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>


<!-- 自分の解答↓  -->
<!-- <div class="notification-wrapper">
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
</div> -->

@endsection