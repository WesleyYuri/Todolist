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
                            <tr class="{{$todo['completed'] == 1 ? "bg-gray-100" : ""}}">
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
                                <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white font-bold p-2" wire:click="openModal({{ $todo['id'] }})">Edit</button></td>
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
                <h3 class="text-md py-1/5 text-gray-800 font-bold">Edit TODO</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="closeModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="p-4">
                <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="{{ $todoUpdateItem }}" wire:model.lazy="todoUpdateItem" />
                
                <div class="flex justify-end mt-4 p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button wire:click="editTodo" type="button" class="text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    <button wire:click="closeModal" type="button" class="text-white bg-red-500 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5">Cancel</button>
                </div>
            </div>
        </x-modal>
    </div>
</div>