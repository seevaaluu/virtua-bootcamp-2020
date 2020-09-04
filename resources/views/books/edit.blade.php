<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Libros | Práctica</title>
  </head>
  <body>
    
    <div class="row">
        <div class="container">
            <div class="col">
                <h1 class="text-center">Editando: {{$book->name}}</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('books.update', $book->id)}}" method="post">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label>Nombre del libro</label>
                                <input class="form-control" value="{{$book->name}}" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input class="form-control" value="{{$book->author}}" type="text" name="author">
                            </div>
                            <div class="form-group">
                                <label>Cantidad disponible</label>
                                <input class="form-control" value="{{$book->stock}}" type="number" name="stock">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if($errors->any()) 
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Optional JavaScript --
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>