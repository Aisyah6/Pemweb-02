<!-- TUGAS PRAKTIKUM 10 (Membuat tampilan about) -->

@extends('template/main')

@section('content3')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Nunito', Arial;
    }

	h1{
		text-align: center;
		padding: 50px;
        margin: 3%;
	}

	p{
		text-align: justify;
		font-size: 26px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Welcome To Z-Store!
				</h1>
				<p>
				KHANZA OULSOP adalah brand lokal Indonesia yang fokus memproduksi segala jenis pakaian.
				<br>
				Dapatkan style outfit kesukaan mu untuk beragam jenis acara, formal maupun non-formal.
				<br>
				Yuk check out sekarang!
				<br>
				<br>
				Jam operasional
				Setiap hari: 09.00 - 17.00
				</p>
				<br>
		</div>
	</div>
</div>
@endsection
