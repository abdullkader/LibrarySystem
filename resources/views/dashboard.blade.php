<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Admin Dashboard</title>
                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
                            rel="stylesheet">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                            rel="stylesheet"
                            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                            crossorigin="anonymous">
                    </head>

                    <body class="bg-gray-100">
                        <center>
                            <div class="container mx-auto p-4">
                                <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
                                <div class="mb-4">
                                    <a href="{{ route('admin.createUser') }}"
                                        class="bg-green-500 text-white px-4 py-2 rounded">
                                        Add New User</a>
                                    <a href="{{ route('admin.createBook') }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded">
                                        Add New Book</a>
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="bg-green-500 text-white px-4 py-2 rounded">
                                        Users And Books</a>
                                </div>
                            </div>
                        </center>
                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
