<div class="flex justify-center">
    <div class="card rounded my-10 w-6/12">
        <h1 class="mt-10 text-3xl">To-do List</h1>
        <form class="mt-4 flex" wire:submit.prevent="addTodo">
            <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Add your new todo." wire:model.lazy="item" />
            <div class="py-2">
                <button type="submit" class="bg-blue-500 w-20 rounded shadow text-white font-bold p-2">Add</button>
            </div>
        </form>
        <div class="mt-10">
            @if (sizeof($todos) == 0)
                <div class="text-center">
                    <h2 class="text-3xl">There are no tasks added yet.</h2>
                </div>
            @else
                <table class="w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th>STATUS</th>
                            <th>TODO</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($todos as $todo)
                            <tr class="bg-gray-100">
                                <td class="text-center"><input type="checkbox" wire:click="completedTodo({{ $todo['id'] }})" {{$todo['completed'] == 1 ? "checked" : ""}}/></td>
                                <td class="text-center">
                                    @if($todo['completed'] == 1)
                                        <s> 
                                            {{ $todo['item'] }}
                                        </s>
                                    @else
                                        {{ $todo['item'] }}
                                    @endif
                                </td>
                                <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white font-bold p-2" wire:click="showModal">Edit</button></td>
                                <td class="text-center"><button class="bg-red-500 w-20 rounded shadow text-white font-bold p-2" wire:click="removeTodo({{ $todo['id'] }})">X</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <div>
        <x-modal wire:model="modalOpen">
            <div class="flex justify-between items-center border-b p-2 text-md">
                <h6 class="text-md py-1/5 text-gray-800 font-bold">Edit TODO</h6>
            </div>
            <div class="p-4">
                ok.....
            </div>
        </x-modal>
    </div>
</div>