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
<x-app-layout>
    <x-slot name="header">
        <center>
            <div class="alert alert-primary ml-5" style="width: 50%">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('library.Welcome') }} {{ Auth::user()->name }}
                </h2>
            </div>
        </center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container max-w-7xl pt-5 pb-12 mb-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="gradient-background__wrapper">
                            <div class="gradient-background">
                                <div class="gradient-background__shape gradient-background__shape--1"></div>
                                <div class="gradient-background__shape gradient-background__shape--2"></div>
                            </div>
                            <div class="gradient-background__noise"></div>
                        </div>
                    </div>
                    <section data-gtm-key="tesla-fixed-background-11" class="" id="tesla_fixed_background_11">
                        <div class="dx-fixed-background" id="react-data-tesla_fixed_background_11"
                            data-component-status="initialized">
                            <section>
                                <div class="dx-fixed-background__separator-container">
                                    <div
                                        class="tds-theme--replicant-separator  tds-theme--replicant-separator--reversed">
                                    </div>
                                </div>
                                <div class="dx-fixed-background__container">
                                    <div class="card-container">
                                        @empty($books)
                                            <b>
                                                <p class="mb-5 text-danger ">
                                                    Library Is Empty Go Back Later</p>
                                            </b>
                                        @endempty
                                        @foreach ($books as $book)
                                            <div class="card card-custom">
                                                <div class="card-header card-header-custom">
                                                    {{ $book->title }}
                                                </div>
                                                <div class="card-body card-body-custom">
                                                    <h5 class="card-title text-custom">{{ $book->author }}</h5>
                                                    <p class="card-text">{{ $book->description }}</p>
                                                    @if ($book->is_available)
                                                        <form action="{{ route('books.select', $book->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-custom">Select</button>
                                                        </form>
                                                    @else
                                                        <p class="text-danger">Not Available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="dx-fixed-background__separator-container">
                                    <div class="tds-theme--replicant-separator"></div>
                                </div>
                            </section>
                        </div>
                    </section>


                </div>
            </div>
        </div>
        </div>
        </div>

</x-app-layout>
