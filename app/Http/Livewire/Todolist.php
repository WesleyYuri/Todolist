<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todolist extends Component
{
    public $newTodo;

    public $todolist = [
        [
            "todo" => "task 1"
        ]
    ];

    public function addTodo(){
        if($this->newTodo == ""){
            return;
        }
        array_unshift($this->todolist, [
            "todo" => $this->newTodo
        ]);
        $this->newTodo = "";
    }

    public function render()
    {
        return view('livewire.todolist');
    }
}
