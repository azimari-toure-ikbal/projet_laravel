@extends('layout.head')

@section('content')
    <div class="bg-white py-4 sm:py-8 lg:py-4">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Ajoutez un nouveau produit
                </h2>
            </div>
            <!-- text - end -->

            <!-- form - start -->
            {{-- En fonction de la route, on modifie ou on crée un nouveau produit --}}
            <form class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto" enctype="multipart/form-data"
                action=" {{ Route::currentRouteName() == 'editProductForm' ? route('editProduct', ['id' => $produit->id]) : route('addProduct') }} "
                method="POST">
                @csrf
                {{-- PUT ou POST en fonction de la route --}}
                @if (Route::currentRouteName() == 'editProductForm')
                    @method('PUT')
                @else
                    @method('POST')
                @endif
                <div>
                    <label for="productName" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Nom*</label>
                    <input type="text" name="productName"
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        maxlength="90" value="{{ Route::currentRouteName() == 'editProductForm' ? $produit->nom : '' }}"
                        required />
                </div>

                <div>
                    <label for="productQte" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Quantité*</label>
                    <input type="number" name="productQte"
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        value="{{ Route::currentRouteName() == 'editProductForm' ? $produit->quantite : '' }}" required />
                </div>

                <div class="sm:col-span-2">
                    <label for="productPrice" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Prix*</label>
                    <input type="number" name="productPrice"
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        value="{{ Route::currentRouteName() == 'editProductForm' ? $produit->prix : '' }}" required />
                </div>

                <div class="sm:col-span-2">
                    <label for="productImg" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Image*</label>
                    <input type="file" name="productImg"
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        {{ Route::currentRouteName() == 'editProductForm' && $produit->image ? '' : 'required' }} />
                    @if (Route::currentRouteName() == 'editProductForm')
                        <img src="/images/produits/{{$produit->image}}" alt="{{ $produit->nom }}"
                            class="w-20 h-20 mt-2">
                        <span>{{ $produit->image}}</span>
                    @endif
                </div>

                <div class="sm:col-span-2">
                    <label for="categorieProduit"
                        class="inline-block text-gray-800 text-sm sm:text-base mb-2">Cat&eacute;gorie*</label>
                    <select name="categorieProduit" id=""
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        required>
                        @foreach ($categories as $categorie)
                            <option
                                {{ Route::currentRouteName() == 'editProductForm' && $produit->categorie_id == $categorie->id ? 'selected' : '' }}
                                value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="sm:col-span-2">
                    <label for="productSolde" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Solde*</label>
                    <select name="productSolde" id=""
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        required>
                        <option
                            {{ Route::currentRouteName() == 'editProductForm' && $produit->solde == 'non' ? 'selected' : '' }}
                            value="non">Non</option>
                        <option
                            {{ Route::currentRouteName() == 'editProductForm' && $produit->solde == 'oui' ? 'selected' : '' }}
                            value="oui">Oui</option>
                    </select>
                </div>

                <div class="hidden sm:col-span-2" id="solde-value">
                    <label for="productSoldeValue" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Montant
                        solde*</label>
                    <input type="number" name="productSoldeValue"
                        class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        value="{{ Route::currentRouteName() == 'editProductForm' ? $produit->montantSolde : '' }}"
                        required />
                </div>

                <div class="sm:col-span-2">
                    <label for="productDesc"
                        class="inline-block text-gray-800 text-sm sm:text-base mb-2">Description*</label>
                    <textarea maxlength="100" name="productDesc"
                        class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ Route::currentRouteName() == 'editProductForm' ? $produit->description : '' }}</textarea>
                </div>

                <div class="sm:col-span-2 flex justify-between items-center">
                    <button type="submit"
                        class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">{{ Route::currentRouteName() == 'editProductForm' ? 'Modifier' : 'Ajouter' }}</button>

                    <span class="text-gray-500 text-sm">*Required</span>
                </div>
            </form>
            <!-- form - end -->
        </div>
    </div>

    <script>
        // Make the solde value input visible when the solde select is set to "Oui"
        const soldeSelect = document.querySelector('select[name="productSolde"]');
        const soldeValue = document.querySelector('#solde-value');
        document.addEventListener('DOMContentLoaded', () => {
            if (soldeSelect.value === 'non') {
                soldeValue.classList.add('hidden');
                // remove the required attribute from the solde value input
                soldeValue.querySelector('input').removeAttribute('required');
            } else {
                soldeValue.classList.remove('hidden');
                // add the required attribute to the solde value input
                soldeValue.querySelector('input').setAttribute('required', '');
            }
        });
        soldeSelect.addEventListener('change', () => {
            if (soldeSelect.value === 'non') {
                soldeValue.classList.add('hidden');
                // remove the required attribute from the solde value input
                soldeValue.querySelector('input').removeAttribute('required');
            } else {
                soldeValue.classList.remove('hidden');
                // add the required attribute to the solde value input
                soldeValue.querySelector('input').setAttribute('required', '');
            }
        });
    </script>
    <!-- footer - start -->
    @include('layout.footer')
    <!-- footer - end -->
@endsection
