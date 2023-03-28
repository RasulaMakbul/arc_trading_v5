<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">

    <!-- Scripts -->
    @livewireStyles
    <title>{{$title}}</title>
</head>

<body>
    <x-admin.partials.navbar />
    <div class="container-fluid">
        <div class="row">
            <x-admin.partials.sidebar />


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @if (session()->has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('error_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @elseif (session()->has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('success_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                {{$slot}}
            </main>
        </div>
    </div>




    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @livewireScripts
    @stack('js')

</body>

</html>
