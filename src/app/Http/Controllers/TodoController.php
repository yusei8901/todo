<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    // Todoリストの表示
    public function index()
    {
        $todos = Todo::all();
        // 教材の解答
        return view('index', compact('todos'));
        // 自分の解答
        // return view('index', ['todos' => $todos]);
    }
    // 作成機能
    public function store(TodoRequest $request)
    {
        // 教材の解答
        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/')->with('message', 'Todoを作成しました');
        // 自分の解答
        // $todo = $request->except('_token');
        // Todo::create($todo);
        // return redirect('/')->with('success', 'Todoを作成しました');
    }
    // 更新機能
    public function update(TodoRequest $request)
    {
        // 教材の解答
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);
        return redirect('/')->with('message', 'Todoを更新しました');
        // 自分の解答
        // $id = $request->only(['id']);
        // $todo = Todo::find($id);
        // $todo->update($request->only(['content']));
        // return redirect('/');
    }
    // 削除機能
    public function destroy(Request $request)
    {
        // 教材と解答一致
        Todo::find($request->id)->delete();
        return redirect('/')->with('message', 'Todoを削除しました');
    }
}
