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
   
          <form action="/mahasiswa/updateMhs/{{ $mahasiswa -> id}}" method="POST" class="pt-2 pb-2">
              @csrf
              @method('PUT')
              <div class="form-group w-25 ">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" require>
              </div>
              
              <label>Gender</label>
              <div class="form-check w-25 bg-info">
                  <input type="radio" name="gender" value="1" class="form-check-input" {{ $mahasiswa ->gender == '1' ? 'checked':''}}>
                  <label>1</label>
              </div>
              <div class="form-check w-25 bg-info">
                  <input type="radio" name="gender" value="2" class="form-check-input" {{ $mahasiswa -> gender == '2' ? 'checked':''}}>
                  <label>2</label>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" value="Sistem Informasi" value= "{{ $mahasiswa->nama }}" default>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Bidang Minat</label>
                  <select name="bidang_minat" class="form-control">
                      <option value="0">--Pilih Bidang Minat--</option>
                      <option value="Sistem Informasi Akuntasi" {{$mahasiswa->bidang_minat=='Sistem Informasi Akuntasi' ? 'selected':''}} > 
                          Sistem Informasi Akuntasi </option>
                      <option value="Sistem Informasi Layanan Kesehatan" {{$mahasiswa->bidang_minat=='Sistem Informasi Layanan Kesehatan' ? 'selected':''}} > 
                          Sistem Informasi Layanan Kesehatan </option>
                      <option value="Desain Restful Web API" {{$mahasiswa->bidang_minat=='Desain Restful Web API' ? 'selected':''}} > 
                          Desain Restful Web API </option>
                  </select>
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