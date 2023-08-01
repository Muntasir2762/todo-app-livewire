<div>
    <h1>ToDo App</h1>
    <!-- Add Task -->
    <input wire:model="task" type="text" placeholder="Enter Task">
    <button wire:click="createTask">Add Task</button>

    <!-- Edit or Delete Tasks -->
    @foreach ($tasks as $task)
        <div>
            @if ($editing && $editingTaskId === $task->id)
                <input wire:model="task" type="text" placeholder="Edit Task">
                <button wire:click="updateTask({{ $task->id }})">Update</button>
            @else
                {{ $task->name }}
                <button wire:click="editTask({{ $task->id }})">Edit</button>
            @endif
            <button wire:click="deleteTask({{ $task->id }})">Delete</button>
        </div>
    @endforeach
</div>
