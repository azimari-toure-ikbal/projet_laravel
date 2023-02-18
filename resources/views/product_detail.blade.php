@extends('layout.head')

@section('content')

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- images - start -->
                <div class="grid lg:grid-cols-5 gap-4">
                    <div class="lg:col-span-4 bg-gray-100 rounded-lg overflow-hidden relative">
                        <img src="https://images.unsplash.com/flagged/photo-1571366992942-be878c7b10c0?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Himanshu Dewangan" class="w-full h-full object-cover object-center" />
                        <span class="bg-red-500 text-white text-sm tracking-wider uppercase rounded-br-lg absolute left-0 top-0 px-3 py-1.5">sale</span>

                        <a href="#" class="inline-block bg-white hover:bg-gray-100 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 border text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 absolute right-4 top-4 px-3.5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- images - end -->

                <!-- content - start -->
                <div class="md:py-8">
                    <!-- name - start -->
                    <div class="mb-2 md:mb-3">
                        <span class="inline-block text-gray-500 mb-0.5">Maybe la categorie</span>
                        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">Pullover with pattern</h2>
                    </div>
                    <!-- name - end -->

                    <!-- color - start -->
{{--                    <div class="mb-4 md:mb-6">--}}
{{--                        <span class="inline-block text-gray-500 text-sm md:text-base font-semibold mb-3">Color</span>--}}

{{--                        <div class="flex flex-wrap gap-2">--}}
{{--                            <span class="w-8 h-8 bg-gray-800 border ring-2 ring-offset-1 ring-gray-800 rounded-full transition duration-100"></span>--}}
{{--                            <button type="button" class="w-8 h-8 bg-gray-500 border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>--}}
{{--                            <button type="button" class="w-8 h-8 bg-gray-200 border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>--}}
{{--                            <button type="button" class="w-8 h-8 bg-white border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- color - end -->

                    <!-- size - start -->
{{--                    <div class="mb-8 md:mb-10">--}}
{{--                        <span class="inline-block text-gray-500 text-sm md:text-base font-semibold mb-3">Size</span>--}}

{{--                        <div class="flex flex-wrap gap-3">--}}
{{--                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">XS</button>--}}
{{--                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">S</button>--}}
{{--                            <span class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">M</span>--}}
{{--                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">L</button>--}}
{{--                            <span class="w-12 h-8 flex justify-center items-center bg-white text-gray-400 text-sm font-semibold text-center border border-transparent rounded-md cursor-not-allowed">XL</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- size - end -->

                    <!-- price - start -->
                    <div class="mb-4">
                        <div class="flex items-end gap-2">
                            <span class="text-gray-800 text-xl md:text-2xl font-bold">$15.00</span>
                            <span class="text-red-500 line-through mb-0.5">$30.00</span>
                        </div>

                        <span class="text-gray-500 text-sm">incl. TVA et livraison</span>
                    </div>
                    <!-- price - end -->

                    <!-- description - start -->
                    <div class="mb-6">
                        <h3 class="text-gray-800 text-lg font-semibold mb-2">Description</h3>
                        <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet lorem. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet lorem.</p>
                    </div>
                    <!-- description - end -->

                    <!-- shipping notice - start -->
                    <div class="flex items-center text-gray-500 gap-2 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>

                        <span class="text-sm">2-4 jours</span>
                    </div>
                    <!-- shipping notice - end -->

                    <!-- buttons - start -->
                    <div class="flex gap-2.5">
                        <a href="#" class="inline-block flex-1 sm:flex-none bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Ajouter au panier</a>

                        <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Acheter</a>
                    </div>

                    <div class="flex items-end gap-2 mt-8">
                        <button id="edit-button" onclick="editProduct()" class="bg-indigo-500 hover:bg-indigo-700 text-white py-1 px-2 rounded transition duration-100" >Modifier</button>
                        <button id="delete-button" onclick="confirmDelete()" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded transition duration-100" >Supprimer</button>
                    </div>

                    <!-- buttons - end -->
                </div>
                <!-- content - end -->
            </div>
        </div>
    </div>

    <!-- footer - start -->
    @include('layout.footer')
    <!-- footer - end -->

    <script>
        function confirmDelete() {
            if (confirm('Voulez-vous vraiment supprimer ce produit ?')) {
                {{--window.location.href = "{{ route('') }}";--}}
            }
        }

        function editProduct() {
            {{--window.location.href = "{{ route('') }}";--}}
        }

    </script>
@endsection
