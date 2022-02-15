<div class="flex justify-center">
    <div class="card rounded my-10 w-6/12">
        <h1 class="mt-10 text-3xl">To-do List</h1>
        <div class="mt-4 flex">
            <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Add your new todo." />
            <div class="py-2">
                <button class="bg-blue-500 w-20 rounded shadow text-white p-2">+</button>
            </div>
        </div>
        <div class="mt-10">
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
                    <tr>
                        <td class="text-center"><input type="checkbox"/></td>
                        <td class="text-center">Task 1</td>
                        <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white p-2">Edit</button></td>
                        <td class="text-center"><button class="bg-red-500 w-20 rounded shadow text-white p-2">X</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox"/></td>
                        <td class="text-center">Task 2</td>
                        <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white p-2">Edit</button></td>
                        <td class="text-center"><button class="bg-red-500 w-20 rounded shadow text-white p-2">X</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox"/></td>
                        <td class="text-center">Task 3</td>
                        <td class="text-center"><button class="bg-amber-500 w-20 rounded shadow text-white p-2">Edit</button></td>
                        <td class="text-center"><button class="bg-red-500 w-20 rounded shadow text-white p-2">X</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>