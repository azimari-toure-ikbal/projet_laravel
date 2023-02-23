<!-- product - start -->
<div>
    <a href="{{ route('product-detail', ['id'=>$produit->id] ) }}" class="group h-80 block bg-gray-100 rounded-lg overflow-hidden relative mb-2 lg:mb-3">
        <img src="/images/produits/{{$produit->image}}" loading="lazy" alt="Photo " class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200" />

        <span class="bg-red-500 text-white text-sm tracking-wider uppercase rounded-br-lg absolute left-0 top-0 px-3 py-1.5">sale</span>
    </a>

    <div>
        <a href="{{ route('product-detail', ['id'=>$produit->id] ) }}" class="text-gray-500 hover:gray-800 lg:text-lg transition duration-100 mb-1">{{$produit->nom}}</a>

        <div class="flex items-end gap-2">
            @if ($produit->solde == "oui")
                <span class="text-gray-800 lg:text-lg font-bold">${{$produit->prix - $produit->montantSolde}}</span>
                <span class="text-red-500 line-through mb-0.5">${{$produit->prix}}</span>
            @else
                <span class="text-gray-800 lg:text-lg font-bold">${{$produit->prix}}</span>
            @endif
        </div>
        <div class="flex items-end gap-2">
            <button id="detail-button" onclick="showDetail('{{ route('product-detail', ['id'=>$produit->id] )}}')" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded transition duration-100" >Détails</button>
            <button id="edit-button" onclick="editProduct('{{ route('editProductForm', ['id'=>$produit->id] )}}')" class="bg-indigo-500 hover:bg-indigo-700 text-white py-1 px-2 rounded transition duration-100" >Modifier</button>
            <button id="delete-button" onclick="confirmDelete('{{ route('deleteProduct', ['id'=>$produit->id] )}}')" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded transition duration-100" >Supprimer</button>
        </div>
    </div>
</div>

<!-- product - end -->
