<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <style type="text/css">
      body {
        background: MediumTurquoise;
      }
      table {
        font-size: 45px;
        font-family: chiler;
        color: white;
      }
      .yellow {
        background-color: yellow;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th colspan="2"><marquee scrollamount="1100">Biodata</marquee></th>
      </tr>
      <tr>
        <td>Nama</td>
        <td><marquee scrollamount="1100">: <?= $nama ?></marquee></td>
      </tr>
      <tr>
        <td>Usia</td>
        <td><marquee scrollamount="1100">: <?= $usia ?></marquee></td>
      </tr>
      <tr>
        <td>Kelamnin</td>
        <td><marquee scrollamount="1100">: <?= $kelamin ?></marquee></td>
      </tr>
        <td>Tempat Lahir</td>
        <td><marquee scrollamount="1100">: <?= $tempat_lahir ?></marquee></td>
      <tr>
        <td>Tanggal Lahir</td>
        <td><marquee scrollamount="1100">: <?= $tanggal_lahir ?></marquee></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><marquee scrollamount="1100">: <?= $alamat ?></marquee></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td><marquee scrollamount="1100">: <?= $agama ?></marquee></td>
      </tr>
      <tr>
        <td>Catatan Kejahatan</td>
        <td><marquee scrollamount="1100">: <?= $c_jahat ?></marquee></td>
      </tr>
    </table>
  </body>
</html>
