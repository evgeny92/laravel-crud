<?php

namespace App\Http\Controllers;

use App\Http\Requests\createTaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $tasks = Task::all();
      return view('tasks.index', compact('tasks'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      return view('tasks.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(createTaskRequest $request){

     $task = new Task;
     $task->fill($request->all());

     $task->save();
     return redirect()->route('tasks.index');

   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Task $task
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $task = Task::find($id);
      return view('tasks.show', compact('task'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Task $task
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $task = Task::find($id);
      return view('tasks.edit', compact('task'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Task $task
    * @return \Illuminate\Http\Response
    */
   public function update(createTaskRequest $request, $id){

      $task = Task::find($id);
      $task->fill($request->all());
      $task->save();
      return redirect()->route('tasks.show', $task->id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Task $task
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      Task::find($id)->delete();
      return redirect()->route('tasks.index');
   }
}
