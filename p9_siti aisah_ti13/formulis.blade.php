<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-color: #9DB2BF;
        font-family: 'Nunito', Arial;
        padding: 80px;
        margin: 3%;
    }
    
    h1{
        text-align: center;
    }
</style>
<body>
    <h1><strong>Formulir Pendaftaran</strong></h1>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ ('formulir') }}" method="post" >
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
                <div class="col-8">
                <select id="lokasi" name="lokasi" class="custom-select">
                    <option value="Jakarta">Jakarta</option>
                    <option value="Depok">Depok</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Medan">Medan</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                    <label for="jk_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
                </div>
            <div class="form-group row">
                <label class="col-4">Skill</label> 
                <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="php"> 
                    <label for="skill_0" class="custom-control-label">PHP</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="mysql"> 
                    <label for="skill_1" class="custom-control-label">MySQL</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="javascript"> 
                    <label for="skill_2" class="custom-control-label">Javascript</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="html"> 
                    <label for="skill_3" class="custom-control-label">HTML</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="css"> 
                    <label for="skill_4" class="custom-control-label">CSS</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        @if(isset($data))
        <ul>
            <li>Nama: {{ $data['nama'] }}</li>
            <li>Email: {{ $data['email'] }}</li>
            <li>Lokasi: {{ $data['lokasi'] }}</li>
            <li>Jenis Kelamin: {{ $data['jk'] }}</li>
            <li>Skill: {{ $data['skill'] }}</li>
        </ul>
        @endif
    </div>
    </div>
    </div>
</body>
</html>
