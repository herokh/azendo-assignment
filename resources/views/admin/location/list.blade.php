<x-admin-layout>


    <section class="bg-white p-4">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl">Locations</h2>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="/admin/location/create">create</a>
        </div>

        <form action="/admin/location" method="GET" class="mb-5">
            @csrf
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="search" placeholder="search">
        </form>

        {{-- <livewire:show-locations /> --}}



        <table class="table-auto">
            <tr>
                <td><strong>Location</strong></td>
                <td><strong>Address</strong></td>
                <td><strong>Number</strong></td>
                <td><strong>Created</strong></td>
                <td><strong>Action</strong></td>
            </tr>
            @foreach ($locations as $l)
                <tr>
                    <td>{{ $l->name }}</td>
                    <td>{{ $l->address }}</td>
                    <td>{{ $l->number }}</td>
                    <td>{{ $l->created_at }}</td>
                    <td>
                        <a href="/admin/location/{{ $l->id }}/edit">edit</a>
                        <form action="/admin/location/{{ $l->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div class="mt-6 p-4">
            {{ $locations->links() }}
        </div>
    </section>

</x-admin-layout>
