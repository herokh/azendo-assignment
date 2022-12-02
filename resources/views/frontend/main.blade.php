<x-frontend-layout>


    <section class="">

        <div class="bg-center bg-no-repeat bg-cover bg-fixed"
            style="background-image: url(frontend/e-fire.jpg); height: 780px">
            <div class="opacity-40" style="background-color: #1D232A"></div>
            <div>
                <div class="text-white">
                    <h3 class="text-2xl">SIMPLE, DIGITAL AND SUSTAINABLE</h3>
                    <h2 class="text-5xl">FIRE <br> SAFETY</h2>
                </div>

                <div class="p-10 text-white inline-block" style="background: #1D232A">
                    <h3 class="text-2xl">GET AN OVERVIEW OF THE <br> BUILDING'S FIRE SAFETY</h3>
                    <div class="mt-8">
                        <a class="border-white border-2 text-white font-bold py-2 px-4 rounded" href="/admin">Read
                            more</a>
                        <a class="bg-blue-500 hover:bg-transparent text-white font-bold py-2 px-4 rounded"
                            href="/admin">Admin
                            area</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container mx-auto my-10">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 px-4 md:px-0">
            @foreach ($products as $p)
                <div class="border border-black p-4 pt-0 flex flex-wrap">
                    <img class="object-cover w-100 h-40 mx-auto" src="{{ $p['thumbnail'] }}" alt="">
                    <span class="basis-full text-center text-lg py-8">{{ $p['title'] }}</span>
                    @auth
                        <div class="flex justify-between w-full">
                            <span>Brand : {{ $p['brand'] }}</span>
                            <span>{{ $p['price'] }}.-</span>
                        </div>
                    @endauth
                </div>
            @endforeach
        </div>
    </section>

    <section class="my-10" style="background: #2C343A">
        <div class="container mx-auto text-white py-20 flex items-center justify-center">
            <div class="px-4 md:px-0">
                <h2 class="text-3xl font-bold mb-4">WHY E-FIRE?</h2>
                <p>
                    E-Fire takes into account all fire requirements for buildings and their users. <br>
                    Simple structure makes complex fire requirements simple. <br>
                    We collect, digitize, streamline and save, with an eye on people, the environment and the economy.
                </p>
            </div>
            <div>
                <img src="frontend/e-fire-flamme.svg" alt="">
            </div>
        </div>
    </section>

    <section class="container mx-auto my-20 px-4 md:px-0">
        <h2 class="text-3xl font-bold mb-10">THAT'S WHAT OUR CUSTOMERS SAY</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-8" style="background: #f1f5f9">
                <img src="frontend/lars-larsen.webp" alt="">
                <p class="py-8">
                    Lars Larsen Group contacted E-Fire to get an overview of property and tenancy fire safety. In
                    addition to an overview of legislation, there was a desire to make fire safety more efficient
                </p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">See case</button>
            </div>
            <div class="p-8" style="background: #f1f5f9">
                <img src="frontend/lars-larsen.webp" alt="">
                <p class="py-8">
                    Lars Larsen Group contacted E-Fire to get an overview of property and tenancy fire safety. In
                    addition to an overview of legislation, there was a desire to make fire safety more efficient
                </p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">See case</button>
            </div>
        </div>

        <hr class="border-1 border-black my-10">
    </section>


</x-frontend-layout>
