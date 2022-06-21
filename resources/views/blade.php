<div class="container-fluid  mt-4">
          <form action="">
              <div class="form-group w-25 ">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" require>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Mahasiswa" require>
              </div>
              
              <label>Gender</label>
              <div class="form-check w-25 bg-info">
                  <input type="radio" name="gender" value="1" class="form-check-input">
                  <label>1</label>
              </div>
              <div class="form-check w-25 bg-info">
                  <input type="radio" name="gender" value="2" class="form-check-input">
                  <label>2</label>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" value="Sistem Informasi" class="form-control" default>
              </div>

              <div class="form-group w-25 bg-info">
                  <label>Bidang Minat</label>
                  <select name="bidang_minat" class="form-control">
                      <option value="0">--Pilih Bidang Minat--</option>
                      <option value="Sistem Informasi Akuntasi">Sistem Informasi Akuntasi</option>
                      <option value="Sistem Informasi Layanan Kesehatan">Sistem Informasi Layanan Kesehatan</option>
                      <option value="Desain Restful Web API">Desain Restful Web API</option>
                  </select>
              </div>
              <div class="form-check mt-4">
                  <input type="submit" value ="SIMPAN" class = "btn btn-outline-primary">
              </div>
          </form>     
      </div>