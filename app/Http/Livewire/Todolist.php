<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todolist extends Component
{
    public $item;
    public $todos;
    public $todoUpdateId;
    public $todoUpdateItem;
    public $modalOpen = false;

    public function mount(){
        $this->todos = Todo::latest()->get();
    }

    public function completedTodo($todoId){
        $todo = Todo::find($todoId);
        if($todo['completed'] == 0){
            optional(Todo::find($todoId))->update(['completed' => 1]);
        }else{
            optional(Todo::find($todoId))->update(['completed' => 0]);
        }
        $this->todos = Todo::latest()->get();
    }

    public function addTodo(){
        Todo::create([
            'item' => $this->item,
            'completed' => 0,
        ]);
        $this->reset('item');
        $this->todos = Todo::latest()->get();
    }

    public function removeTodo($todoId){
        $todo = Todo::find($todoId);
        Todo::destroy($todoId);
        $this->todos = Todo::latest()->get();
    }

    public function editTodo(){
        optional(Todo::find($this->todoUpdateId))->update(['item' => $this->todoUpdateItem]);
        $this->reset('todoUpdateId');
        $this->reset('todoUpdateItem');
        $this->closeModal();
        $this->todos = Todo::latest()->get();
    }

    public function openModal($todoId){
        $this->modalOpen = true;
        $todo = optional(Todo::find($todoId));
        $this->todoUpdateId = $todo["id"];
        $this->todoUpdateItem = $todo["item"];
    }

    public function closeModal(){
        $this->modalOpen = false;
    }

    public function render(){
        return view('livewire.todolist');
    }
}
