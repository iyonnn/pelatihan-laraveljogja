<h2>Daftar Informasi </h2>

Kode: {{$kode}}<br>
Lokasi:{{$lokasi}}<br>

<h2>Daftar Divisi </h2>
@foreach ($divisi as $div)
ID: {{$div->id}}<br>
Nama: {{$div->nama}}<br>
<br>    
@endforeach
