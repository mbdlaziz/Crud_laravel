<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Form</title>
    <style media="screen">
      html,
      body{
        height: 100%;
        color: #636b6f;
        background-color: #fff;
      }
      .wrapper{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form{
        width: 25%;
      }
      label{
        font-weight: bold;
      }
      input{
        width: 100%;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #636b6f;
        border-radius: 6px;
      }
      .kirim{
        border: none;
        color: #fff;
        font-weight: bold;
        background-color: #00b0ff
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="form" action="/input" method="post">
        {{ csrf_field() }}
        <label for="judul">Judul</label><br>
        <input type="text" id="judul" name="judul" /><br>
        <label for="penerbit">Penerbit</label><br>
        <input type="text" id="penerbit" name="penerbit"/><br>
        <label for="tahun_terbit">Tahun terbit</label><br>
        <input type="text" id="tahun_terbit" name="tahun_terbit"/><br>
        <label for="pengarang">Pengarang</label><br>
        <input type="text" id="pengarang" name="pengarang"/><br><br>
        <input type="submit" name="submit" class="kirim" />
        <button>
          <a href="/">Kembali</a>
        </button>
      </form>
    </div>
  </body>
</html>