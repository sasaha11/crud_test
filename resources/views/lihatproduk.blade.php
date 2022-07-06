<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>crud-test</title>
  </head>
  <body>
    <ul class="nav nav-tabs bg-primary">
      <li class="nav-item">
        <a class="nav-link active" href="/produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="/kategori">Kategori</a>
      </li>
    </ul>
<h1 class="text-center"> List Produk</h1>
@if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
            </div>
              @endif
            <div class="jumbotron-fluid d-flex justify-content-center">
              
                <div class="container-fluid">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">stock</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($produk as $tp)
                      <tr>
                        <td>{{$tp->id}}</td>
                        <td>{{$tp->produk}}</td>
                        <td>{{$tp->kategori}}</td>
                        <td>{{$tp->stok}}</td>
                        <td><a href="/produk/edit/{{$tp->id}}/update/{{$tp->kategori_id}}"><button type="button" class="btn btn-primary">Edit</button></a><a href="produk/delete/{{$tp->id}}"><button type="button" class="btn btn-primary">Hapus</button></a></td>
                      </tr>   
                      @endforeach
                    </tbody>
                  </table>
                  <a href="/produk/tambah"><button type="button" class="btn btn-primary btn-lg">Tambah</button></a>
                </div>
            </div>
          </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>