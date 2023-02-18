@extends('layout.head')

@section('content')

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <p class="text-indigo-500 lg:text-lg font-semibold text-center mb-2 md:mb-3">Introducing</p>

            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Revolutionary way to build the web</h2>

            <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
        </div>
    </div>

    <!-- products - start -->
    @include('layout.product_list')
    <!-- products - end -->

    <!-- footer - start -->
    @include('layout.footer')
    <!-- footer - end -->
@endsection
