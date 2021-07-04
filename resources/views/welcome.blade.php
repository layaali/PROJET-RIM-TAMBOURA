<x-tambouraabdoulaye-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
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
@foreach ($books as $book)
<tr>
<td>{{ $book->libelle }}</td>
<td>{{ $book->auteur }}</td>
<td>{{ $book->description }}</td>
<td>{{ $book->categorie }}</td> </tr>
@endforeach
</tbody>
</table>
<div class="mt-5 d-flex justify-content-center">
{{ $books->links() }} </div>


</div>
</div>
</div>

    </body>
</html>




 


</x-master-layout>
