<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <div class="flex justify-between items-end gap-4 mb-6">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">Collections</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-4 md:gap-x-6 gap-y-6">
            @forelse ($categories as $categorie)
                {{-- affichage des catégories --}}
                <div>
                    <a href="{{ route('product-category', ['id'=>$categorie->id]) }}"
                        class="group h-96 block bg-gray-100 rounded-lg overflow-hidden shadow-lg mb-2 lg:mb-3">
                        <img src="/images/categories/{{$categorie->image}}" loading="lazy"
                            alt="Photo de {{ $categorie->nom }}"
                            class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200" />
                    </a>

                    <div class="flex flex-col">
                        <span class="text-gray-500">{{ $categorie->nom }}</span>
                        <a href="{{ route('product-category', ['id'=>$categorie->id]) }}"
                            class="text-gray-800 hover:text-gray-500 text-lg lg:text-xl font-bold transition duration-100">{{ $categorie->description }}</a>
                    </div>
            @empty
                <div class="text-center">
                    <p class="text-gray-500">Aucune catégorie n'est disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
