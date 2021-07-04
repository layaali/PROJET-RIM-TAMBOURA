<x-tambouraabdoulaye-layout>

  <div class="container">
<div class="row">
<div class="col-md-12 mt-4">
<h1 class="text-center">Tous nos Livres </h1> </div>
</div>
<div class="row">
<table class="table">
<thead>
<tr>
<th>libelle</th> <th>auteur</th>
<th>Description</th> <th>categorie</th>
</tr>
</thead>
<tbody>
@foreach ($books as $books)
<tr>
<td>{{ $books->libelle }}</td>
<td>{{ $books->auteur }}</td>
<td>{{ $produit->description }}</td>
<td>{{ $books->categorie }}</td> </tr>
@endforeach
</tbody>
</table>
<div class="mt-5 d-flex justify-content-center">
{{ $books->links() }} </div>

</div>
</div>
</div>



</x-tambouraabdoulaye-layout>