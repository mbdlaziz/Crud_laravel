<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Perpustakaan</title>
    <style media="screen">
      html,
      body{
        height: 100%;
        color: #636b6f;
        background-color: #fff;
      }
      .container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .title-wrapper{
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }
      .title-wrapper > div {
        display: flex;
      }
      .goto-home{
        color: #fff;
        background-color: #2196f3;
        width: 150px;
        height: 40px;
        margin: auto 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        transition-duration: 0.2s;
      }
      .tambah{
        background-color: #fbc02d;
      }
      .goto-home:hover{
        color: white;
        text-decoration: none;
        background-color: #1976d2;
      }
      .tambah:hover{
        background-color: #f9a825;
      }
      .links{
        display: flex;
        justify-content: center;
      }
      .links > div > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
      .table thead th{
        color: white;
        background-color: #607d8b;
        font-weight: bolder;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div>
        <div class="title-wrapper">
          <h1 class="daftar-title">Daftar Buku</h1>
          <div>
            <a href="/" class="goto-home">Halaman Utama</a>
            <a href="/create" class="goto-home tambah">Tambah</a>
          </div>
        </div>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-hover">
              @foreach($buku as $buku)
                <tr>
                  <th>{{$buku->id}}</th>
                  <td>{{$buku->judul}}</td>
                  <td>{{$buku->pengarang}}</td>
                  <td>{{$buku->tahun_terbit}}</td>
                  <td>{{$buku->penerbit}}</td>
                  <td>
                    <a href="#" class="btn btn-outline-secondary">View</a>
                    <a href="/edit/{{ $buku->id }}" class="btn btn-warning">Edit</a>
                    <a href="/destroy/{{ $buku->id }}" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>