<?php

namespace App\Http\Controllers;

use App\Models\InfoStudent;
use Illuminate\Http\Request;

class StudentAjaxController extends Controller
{
    public function index() {
        $students = InfoStudent::orderBy('id', 'asc')->get();

        return view('student.index', ['students' => $students]);
    }

    public function create() {

    }

    public function store(Request $request) {
        $student = InfoStudent::create($request->all());
        return response()->json([
            'data' => $student,
            'message' => 'Created successfully!!!'
        ],200);
    }

    public function show($id) {
        $student = InfoStudent::find($id);
        return response()->json([
            'data' => $student
        ], 200);
    }

    public function  edit($id) {
        $student = InfoStudent::find($id);
        return response()->json([
            'data' => $student
        ],200);
    }

    public function update(Request $request, $id) {
        $student = InfoStudent::find($id)->update($request->all());
        return response()->json([
            'data' => $student,
            'student' => $request->all(),
            'studentid' => $id,
            'message' => 'Updated successfully!!!'
        ], 200);
    }

    public function destroy($id) {
        InfoStudent::find($id)->delete();
        return response()->json(['data' => 'removed'], 200);
    }
}
