const deleteButton = document.getElementById('deleteBtn');

deleteButton.addEventListener('click', function (e) {
    e.preventDefault();
    if (confirm('Voulez-vous vraiment supprimer ce produit ?')) {
        deleteButton.href = "{{ route('home') }}";
    }
});
