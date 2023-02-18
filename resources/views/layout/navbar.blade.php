<div class="bg-white lg:pb-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <header class="flex justify-between items-center border-b py-4 md:py-8 mb-8 md:mb-12 xl:mb-16">
            <!-- logo - start -->
            <a href="{{ route('home')  }}" class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">
                <img
                    src="https://e7.pngegg.com/pngimages/957/512/png-clipart-nami-monkey-d-luffy-brook-one-piece-grand-line-anniversary-post-it-note-ideas-text-manga.png"
                    alt="1berry logo" width="95" height="94" class="w-6 h-auto text-indigo-500">

                1Berry
            </a>
            <!-- logo - end -->

            <!-- nav - start -->
            <nav class="hidden lg:flex gap-12">
                <a href="{{ route('home')  }}" class="{{ (Route::currentRouteName() == "home") ? "text-indigo-500" : "text-gray-600"}} text-lg font-semibold">Accueil</a>
                <a href="{{ route('products')  }}" class="{{ (Route::currentRouteName() == "products") ? "text-indigo-500" : "text-gray-600"}} hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Liste des produits</a>
                <a href="{{ route('add-product') }}" class="{{ (Route::currentRouteName() == "add-product") ? "text-indigo-500" : "text-gray-600"}} hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Ajouter un produit</a>
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">A propos</a>
            </nav>
            <!-- nav - end -->

            <!-- buttons - start -->
            <a href="#" class="hidden lg:inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Contact</a>

            <button type="button" class="inline-flex items-center lg:hidden bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold rounded-lg gap-2 px-2.5 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>

                Menu
            </button>
            <!-- buttons - end -->
        </header>
    </div>
</div>
