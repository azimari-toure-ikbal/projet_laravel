<div class="bg-white py-6 sm:py-8 lg:py-12" id="product-list">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <div class="flex justify-between items-end gap-4 mb-6">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">Nos produits</h2>

            <form action="" method="GET">
                @csrf
                @method('GET')
                <label>
                    @if(Route::currentRouteName() == "product-category")
                        <input type="text" name="search"
                               class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 border text-gray-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3"
                               placeholder="Recherchez un produit">
                    @else
                        <select name="category" id="category" class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 border text-gray-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3">
                            <option value="all">Toutes les catégories</option>
                            <option value="fruit">Fruits</option>
                            <option value="vegetable">Légumes</option>
                            <option value="meat">Viandes</option>
                        </select>
                    @endif
                </label>
            </form>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-4 md:gap-x-6 gap-y-8">
            <!-- product - start -->
            @for($i = 0; $i < 6; $i++)
                @include('layout.single_product')
            @endfor
            <!-- product - end -->
        </div>
    </div>
</div>
