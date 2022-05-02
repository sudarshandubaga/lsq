@extends('layouts.app')
 
@section('main_content')
    <!-- Page Header Start -->
    <section id="page-header">
        <div class="container-fluid text-white">
            <h1>@yield('page_title')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <section id="page-content">
        @yield('page_content')
    </section>
    <!-- Page Content End -->
@endsection