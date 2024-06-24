<div>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        {{-- data table --}}
        <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 font-light">ID</th>
                            <th class="px-4 py-2 font-light">Title</th>
                            <th class="px-4 py-2 font-light">Shortened URL</th>
                            <th class="px-4 py-2 font-light">Created At</th>
                            <th class="px-4 py-2 font-light">Actions</th>  
                        </tr>
                    </thead>
                    <tbody class="divide-y ">
                        @foreach($urls as $url)
                            <tr>
                                <td class="px-4 py-2">{{ $url->id }}</td>
                                <td class="px-4 py-2">{{ $url->title }}</td>
                                <td class="px-4 py-2">{{ $url->shortened_url }}</td>
                                <td class="px-4 py-2">{{ $url->created_at }}</td>
                                <td class="px-4 py-2">
                                    <button wire:click="edit({{ $url->id }})" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                    <button wire:click="delete({{ $url->id }})" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
