<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class ToDo extends Component
{
    public $tasks;
    public $task;
    public $editing = false;


    public function render()
    {
        $this->tasks = ModelsTodo::all();
        return view('livewire.to-do');
    }

    public function createTask()
    {
        Task::create(['name' => $this->task]);
        $this->task = '';
    }

    public function editTask($taskId)
    {
        $this->editing = true;
        $this->task = ModelsTodo::find($taskId)->name;
    }

    public function updateTask($taskId)
    {
        ModelsTodo::find($taskId)->update(['name' => $this->task]);
        $this->task = '';
        $this->editing = false;
    }

    public function deleteTask($taskId)
    {
        ModelsTodo::find($taskId)->delete();
    }

}
