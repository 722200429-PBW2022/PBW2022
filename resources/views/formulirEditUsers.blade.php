<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid  mt-4">
          <form action="/user/updateUser/{{ $user -> id}}" method="POST" class="pt-2 pb-2">
              @csrf
              @method('PUT')
              <div class="form-group w-25 ">
                  <label>NIM</label>
                  <input type="text" name="nim" class="form-control" value="{{ $user->nim }}" require autofocus>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Nama Pengguna</label>
                  <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}" require>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>No HP</label>
                  <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}" require>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Password Pengguna</label>
                  <input type="password" name="password" class="form-control" value="{{ $user->password }}" require>
              </div>

              <div class="form-check mt-4">
                  <input type="submit" value ="SIMPAN" class = "btn btn-outline-primary">
              </div>
          </form>         
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>