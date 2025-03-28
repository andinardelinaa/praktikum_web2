
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWEB 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar 1 (Utama) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_mahasiswa.php">Mahasiswa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_nilai.php">Nilai</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="tampil_lulus.php">Lulus</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="tampil_remidi.php">Remidi</a>
                </li>
            </ul>
           
        </div>
    </nav>

<body>
<div class="container mt-3">
  <!-- Judul halaman yang menampilkan daftar mahasiswa yang harus mengikuti remidi -->
  <h2>REMIDI</h2>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
         <!-- Header tabel, berisi kolom untuk nomor urut, nilai, nilai akhir, ID mahasiswa, ID mata kuliah, dan ID semester -->
        <th>No</th>
        <th>NILAI</th>
        <th>NILAI AKHIR</th>
        <th>MAHASISWA_ID</th>
        <th>MATA KULIAH_ID</th>
        <th>SEMESTER_ID</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    // Memanggil file nilai.php yang mungkin berisi class untuk mengakses nilai mahasiswa
      include('nilai.php');
      // Membuat objek dari class Remidi yang merupakan turunan dari class Nilai
      $remidi = new Remidi();
      // Memanggil method tampilkanData() untuk mendapatkan daftar nilai mahasiswa yang harus remidi
      $query = $remidi->tampilkanData(); 

      $no = 1;
    //   $query = $conn->query("SELECT * FROM nilai");

    // Looping untuk menampilkan setiap baris data dari hasil query
      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {?>
          <tr> <!-- Menampilkan nomor urut, nilai, nilai akhir, ID mahasiswa, ID mata kuliah, dan ID semester -->
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nilai']; ?></td>
            <td><?php echo $row['nilai_akhir']; ?></td>
            <td><?php echo $row['mahasiswa_id']; ?></td>
            <td><?php echo $row['matkul_id']; ?></td>
            <td><?php echo $row['semester_id']; ?></td>
          </tr>
          <!-- <td colspan="6" class="text-center"> -->
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>