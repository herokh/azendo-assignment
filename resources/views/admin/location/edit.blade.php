<form action="/admin/location/{{ $location->id }}" method="POST" class="mb-5">
    @csrf
    @method('PUT')
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" name="name" value="{{ $location->name }}">
    @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" name="address" value="{{ $location->address }}">
    @error('address')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" name="number" value="{{ $location->number }}">
    @error('number')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
</form>
