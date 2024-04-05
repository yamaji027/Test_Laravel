<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Hash;

class TestController extends Controller
{
    public function index() {

        // testsテーブルの情報
        $tests = Test::all();

        // トップページ
        return view('front.index', compact('tests'));
    }

    public function create() {
        //  新規登録画面
        return view('front.create');
    }

    public function store(Request $request) {
        
        // testsテーブルに保存
        Test::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('index');
    }

    public function show($id) {

        // 詳細ページ
        $test =  Test::find($id);
        return view('front.show', compact('test'));
    }

    public function edit($id) {
        // 編集ページ
        $test =  Test::find($id);
        return view('front.edit' , compact('test'));
    }

    public function update(Request $request, $id) {

        // 更新ページ
        $test =  Test::find($id);
        $test->name = $request->name;
        $test->email = $request->email;

        $test->save();

        return to_route('index');
    }

    public function destroy($id) {

        // 削除ページ
        $test = Test::find($id);
        $test->delete();

        return to_route('index');
    }
}
