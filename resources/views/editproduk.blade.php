<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="jumbotron justify-content-center">
        <div class="container">
            
            <form action="/produk/update" method="post">
                {{ csrf_field() }}
                @foreach ($produk as $tp)
                <div class="form-group">
                    <input class="form-control" type="hidden" name="id_p" value="{{$tp->id}}">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input class="form-control" type="text" name="produk_p" value="{{$tp->produk}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Stok</label>
                  <input class="form-control" type="text" name="stok_p" value="{{$tp->stok}}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" name="kategori_p" id="exampleFormControlSelect1">
                        <option>{{$tp->kategori_id}}</option>
                        @foreach ($kategori as $kt)
                      <option>{{$kt->id}}</option>
                      @endforeach
                    </select>
                  </div>
                  @endforeach
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>