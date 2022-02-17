<div class="flex justify-center">
    <div class="card rounded my-10 w-6/12">
        <h1 class="mt-10 text-3xl">To-do List</h1>
        <form class="mt-4 flex" wire:submit.prevent="addTodo">
            <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Add your new todo." wire:model.lazy="item" />
            <div class="py-2">
                <button type="submit" class="bg-blue-500 w-20 rounded shadow text-white p-2">+</button>
            </div>
        </form>
        <div class="mt-10">
            <table class="w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>STATUS</th>
                        <th>TODO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($todos as $todo)
                        <tr>
                            <td class="text-center">{{ $todo['id'] }}</td>
                            <td class="text-center"><input type="checkbox" wire:click="completedTodo({{ $todo['id'] }})" @if($todo['completed'] == 1) checked @endif/></td>
                            <td class="text-center">
                                @if($todo['completed'] == 1)
                                    <s> 
                                        {{ $todo['item'] }}
                                    </s>
                                @else
                                    {{ $todo['item'] }}
                                @endif
                            </td>
                            <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white p-2">Edit</button></td>
                            <td class="text-center"><button class="bg-red-500 w-20 rounded shadow text-white p-2">X</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>