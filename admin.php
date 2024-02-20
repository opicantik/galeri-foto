<?php
  //menghubungkan ke database
    $koneksi = mysqli_connect("localhost", "root", "", "galeri foto");
    $hasil = mysqli_query($koneksi, "SELECT * FROM foto");
    $hasil = mysqli_query($koneksi, "SELECT * FROM album");
    $hasil= mysqli_query($koneksi, "SELECT * FROM user");
    $hasil= mysqli_query($koneksi, "SELECT * FROM komentarfoto");
    $hasil= mysqli_query($koneksi, "SELECT * FROM likefoto");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body><a href="">login</a>
    <a href="">logout</a>
     
  <h1>WEBSITE GALERI FOTO</h1>  
    <a href="">tambah data</a>
    
    <table border="1">
            <tr>  

                <th>FOTO</th>
                <th>fotoid</th>
                <th>judul foto</th>
                <th>deskripsi foto</th>
                <th>tanggal unggah</th>
                <th>lokasi file</th>
                <th>albumid</th>
                <th>userid</th>
        
    
            </tr>
            <tr>
                 <th>ALBUM</th>
                <th>albumid</th>
                <th>nama album</th>
                <th>tanggal dibuat</th>/th>
                <th>userid</th>


            </tr> 
            <th>LIKE FOTO</th>
              <th>likeid</th>
              <th>fotoid</th>
              <th>userid</th>
              <th>tanggal like</th>
              <tr>
                
              <th>USER</th>
              <th>userid</th>
              <th>username</th>
              <th>nama Lengkap</th>
</tr>
          
            <tr> 
                <th>KOMENTAR FOTO</th>
              <th>komentarid</th>
              <th>fotoid</th>
              <th>userid</th>
              <th>tanggal komentar</th>     
               

                
        </tr>
                   
               

        </thead>
        <tbody>
            <?php
                $i=1; 
          while ($row= mysqli_fetch_assoc($hasil)):?>

           
            <tr>
                <td><?= $i  ?></td>
                <td><?= $row['foto'] ?></td>
                <td><?= $row['keterangan']?></td>
                <td>08-12-2024</td>
                <td>
                    <a href="">edit</a> | <a href="">hapus</a>
                </td>
            </tr>
            <?php 
            $i++;
            endwhile 
            ?>
        </tbody>
    </table>
</body>
</html>