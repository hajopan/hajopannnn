
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Dosen</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div>
  
        <div class="panel">
    <div>
  <h3>Buat Pesan Baru</h3>
  </div>
  <!-- Pengirim -->
  <form action="kirim.php" method="post" target="_blank">
  <div>
    
  <table>
    <tr>
      <th><b>Informasi Pengirim</b></th>
    </tr>
    <tr>
      <td>Masukkan Nama</td>
      <td>:</td>
      <td><input type="text" name="nama_pengirim" placeholder="albert"></td>
    </tr>
    <tr>
      <td>Masukkan Nim</td>
      <td>:</td>
      <td><input type="text" name="nim" placeholder="19102222"></td>
    </tr>
    <tr>
      <td>Masukkan Kelas</td>
      <td>:</td>
      <td><input type="text" name="kelas" placeholder="S1-SI-O3C"></td>
    </tr>
  </table>
</div>

  <br>

  <!-- Penerima -->

  <div>
    <table >
      <tr>
        <td><b>Informasi Penerima</b></td>
    </tr>

    <TR>
      <td>Jenis Kelamin</td>
      <td>:</td>
  <td>
  <input type="radio" id="pria" name="jk" value="bapak">
  <label for="pria">Pria</label>
  </td> 
  <td>
  <input type="radio" id="wanita" name="jk" value="ibu">
  <label for="wanita">Wanita</label>
</td>
  </TR>

  <tr>
    <td>Nama Penerima</td>
    <td> :</td>
    <td colspan="2"><input type="text" name="nama_penerima" placeholder="bagus"></td>
  </tr>
</table>
<br>

<!-- Isi Pesan -->

<table >
  <tr>
    <td><b>Isi Pesan</b></td>
  </tr>
  <tr>
    <td colspan="2">Gunakan Assalamualaikum  </td>
  <td>
    <label class="switch">
        <input type="checkbox" name="salam" value="Assalamualaikum Wr.Wb">
        <span class="slider round"></span>
    </label>
  </td>
</tr>
    <tr>
      <td>Selamat</td>
      <td>:</td>
      <td>
        <select name="selamat">
          <option value="Selamat Pagi">Selamat Pagi</option>
          <option value="Selamat Siang">Selamat Siang</option>
          <option value="Selamat Sore">Selamat Sore</option>
          <option value="Selamat Malam">Selamat Malam</option>
        </select>
      </td>
    </tr>

  <tr>
  <td>Tujuan</td>
  <td>:</td>
  <td><input type="text" name="tujuan" placeholder="Tuliskan Tujuan"></td>
  </tr>

<td>Pertanyaan</td>
  <td>:</td>
  <td><input type="text" name="pertanyaan" placeholder="Ajukan Pertanyaan"></td>
  </tr>
  <td>Terimakasih</td>
  <td>:</td>
  <td><input type="text" name="terimakasih" placeholder="Ucapkan Terimakasih"></td>
  </tr>

  <tr>

    <td colspan="3" align="center" ><button type="submit" name="submit">Kirim</button></td>
  </tr>
</table>
</div>
<div>
  
</div>

</div>
</form>
</body>
</html>