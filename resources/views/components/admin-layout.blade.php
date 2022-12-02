<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin page</title>

    <livewire:styles />
</head>

<body>



    <main class="flex">
        <div class="basis-1/4">
            <div class="p-2 bg-gray-800 text-white h-screen">
                <span><a href="/">LOGO</a></span>
                <div class="mb-5">
                    <span>E-Fire Basic</span>
                    <ul>
                        <li><a href="/admin/location">Locations</a></li>
                        <li>Time line</li>
                    </ul>
                </div>
                <div class="mb-5">
                    <span>E-Fire Project</span>
                    <ul>
                        <li>Projects</li>
                    </ul>
                </div>
                <div>
                    <span>E-Fire Service</span>
                    <ul>
                        <li>Contracts</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="basis-3/4">
            <header class="flex justify-end">
                <span class="text-lg">Welcome, {{ auth()->user()->name }}</span>
                <ul class="">
                    <li><a href="#">Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </header>

            <div>
                {{ $slot }}
            </div>
        </div>
    </main>



    <livewire:scripts />
</body>

</html>
