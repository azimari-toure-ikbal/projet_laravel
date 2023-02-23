
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <div class="flex justify-between items-end gap-4 mb-6">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">Nos produits</h2>

            <form action=" {{ (Route::currentRouteName() == "product-category") ? route('product-category', ['id'=>$category->id]) : route('products')}} " method="GET">
                @csrf
                @method('GET')
                <label>
                    @if(Route::currentRouteName() == "product-category")
                        <input type="text" name="search"
                               class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 border text-gray-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3"
                               placeholder="Recherchez un produit">
                        <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus-visible:ring ring-blue-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3">Rechercher</button>
                    @else
                        <select onchange="searchBycategory()" name="category" id="category" class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 border text-gray-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3">
                            <option value="all">Toutes les catégories</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                            @endforeach
                        </select>
                    @endif
                </label>
            </form>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-4 md:gap-x-6 gap-y-8">
            <!-- product - start -->
            @forelse($produits as $produit)
                @include('layout.single_product')
            @empty
                <div class="text-center">
                    <p class="text-gray-500">Aucun produit n'est disponible pour le moment.</p>
                </div>
            @endforelse
            <!-- product - end -->

            <script>
                function confirmDelete(url) {
                    if (confirm('Voulez-vous vraiment supprimer ce produit ?')) {
                        window.location.href = url;
                    }
                }

                function showDetail(url) {
                    window.location.href = url;
                }

                function editProduct(url) {
                    window.location.href = url;
                }

                function searchBycategory() {
                    // submit the form containing the select
                    document.getElementById('category').form.submit();
                }
            </script>
        </div>
    </div>
</div>
