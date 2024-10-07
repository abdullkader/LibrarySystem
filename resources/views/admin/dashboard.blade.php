<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card-custom {
            background-color: #f8f9fa;
            border-color: #dee2e6;
            width: 300px;
            height: 400px;
            overflow: hidden;
            margin: 10px;
        }

        #users {
            background-color: #f8f9fa;
            border-color: #dee2e6;
            overflow: hidden;
            margin: 10px;
            width: 30%;
            float: left;
        }

        .card-body-custom {
            height: 100%;
            overflow-y: auto;
        }

        .card-header-custom {
            background-color: #007bff;
            color: white;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .text-custom {
            color: #007bff;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="text-2xl font-bold mb-4">All Users</h1>
        <div class="mb-4">
            @foreach ($users as $user)
                <div class="card" id="users">
                    <div class="card-header card-header-custom">
                        {{ $user->name }}
                    </div>
                    <div class="card-body card-body-custom">
                        <h5 class="card-title text-custom">{{ $user->email }}</h5>
                        <h5 class="card-title text-custom text-danger">{{ $user->role }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <h1 class="text-2xl font-bold mb-4">All Books</h1>
        <div class="card-container">
            @foreach ($books as $book)
                <div class="card card-custom">
                    <div class="card-header card-header-custom">
                        {{ $book->title }}
                    </div>
                    <div class="card-body card-body-custom">
                        <h5 class="card-title text-custom">{{ $book->author }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        @if ($book->is_available)
                            <form action="{{ route('books.select', $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-custom">Select</button>
                            </form>
                        @else
                            <p class="text-danger">Not Available</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
