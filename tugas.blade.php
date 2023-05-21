<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas P8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3 row">
                <label for="nama" class="col-md-4 col-form-label">
                  Nama :
                </label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="tanggal" class="col-md-4 col-form-label">
                  Tanggal Pemeriksaan :
                </label>
                <div class="col-md-8">
                  <input type="date" class="form-control" id="tanggal">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="tanggal" class="col-md-4 col-form-label">
                  Tanggal lahir/usia :
                </label>
                <div class="col-md-4">
                  <input type="date" class="form-control" id="tanggal">
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control" id="tanggal">
                  </div>
              </div>
              <div class="mb-3 row">
                <label for="jenisKelamin" class="col-md-4 col-form-label">Jenis Kelamin :</label>
                <div class="col-md-8">
                <select class="form-select" id="jenisKelamin">
                  <option value="">Pilih jenis kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                </div>
              </div>
            </form>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Jenis Tes</th>
                    <th scope="col">Hasil Pemeriksaan</th>
                    <th scope="col">Normal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tekanan Darah</td>
                    <td>Kosong</td>
                    <td>120/80 mmHg</td>
                  </tr>
                  <tr>
                    <td>Asam Urat</td>
                    <td>Kosong</td>
                    <td>Pria: &lt; 7 mg/dL<br>Wanita: &lt; 6 mg/dL</td>
                  </tr>
                  <tr>
                    <td>Kolesterol Total</td>
                    <td>Kosong</td>
                    <td>&lt; 200 mg/dL</td>
                  </tr>
                  <tr>
                    <td>Gula Darah</td>
                    <td>Kosong</td>
                    <td>Puasa: 70-110 mg/dL<br>2 Jam Setelah Makan: 100-150 mg/dL<br>Sewaktu/Acak: 70-125 mg/dL</td>
                  </tr>
                </tbody>
              </table>
              
          </div>
        </div> 
      </div>
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>