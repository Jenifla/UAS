<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sew.nSlay</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- my style -->
    <link rel="stylesheet" href="css/beranda.css">

</head>
<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Sew.nSlay</a>
        
        <div class="navbar-nav">
            <a href="beranda.html" class="button-beranda">Beranda</a>
            <a href="upload.php" class="button-unggah">Unggah</a>
        </div>

        <div class="navbar-search">
          <input type="text" placeholder="Cari...">
          <button type="button">Cari</button>
      </div>
        <div class="navbar-ikon">
            <a href="profilUpload.html" class="navbar-orang"><i data-feather="user"></i></a>
            <a href="" class="navbar-orang"><i data-feather="log-out"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
    <div class="filter-menu">
      <button class="filter-button" onclick="toggleFilter()">Filter</button>
      <div class="filter-items">
        <div id="tingkat-kemampuan" class="filter-item hidden">
          <select id="tingkat-kemampuan-select">
            <option disabled selected hidden>Tingkat Kemampuan</option>
            <option value="pemula">Pemula</option>
            <option value="menengah">Menengah</option>
            <option value="atas">Atas</option>
          </select>
        </div>
        <div id="jenis-pakaian" class="filter-item hidden">
          <select id="jenis-pakaian-select">
            <option disabled selected hidden>Jenis Pakaian</option>
            <option value="atasan">Atasan</option>
            <option value="bawahan">Bawahan</option>
            <option value="sweater">Sweater</option>
            <option value="gaun">Gaun</option>
            <option value="jumpsuits">Jumpsuits</option>
          </select>
        </div>
        <div id="ukuran" class="filter-item hidden">
          <select id="ukuran-select">
              <option disabled selected hidden>Ukuran</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
              <option value="xxl">XXL</option>
          </select>
        </div>      
        <div id="jenis-acara" class="filter-item hidden">
          <select id="jenis-acara-select">
            <option disabled selected hidden>Jenis Acara</option>
            <option value="formal">Formal</option>
            <option value="nonformal">Non-Formal</option>
            <option value="casual">Casual</option>
            <option value="sports">Sports</option>
            <option value="party">Party</option>
          </select>
        </div>
      </div>
    </div>    
    <!-- hero section end -->

     <!-- about section start -->
     <section id="beranda" class="gallery-wrapper">
      <div class="gallery-item">
        <a href="detail-gambar1.html">
          <img src="img/7.jpg" alt="Image 1">
        </a>
      </div>
        <div class="gallery-item">
          <a href="detail-gambar2.html">
            <img src="img/5.jpg"  alt="Image 2">
          </a>
          </div>
        </div>
        <div class="gallery-item">
          <a href="detail-gambar3.html">
            <img src="img/6.jpg"  alt="Image 3">
          </a>
        </div>
    </section>
    <!-- about section end -->

    
    
    <!-- feather icons -->
    <script>
        feather.replace();
      </script> 
     <!-- feather icons end-->
    
     <!--JavaScript  untuk mengubah status tampilan filter -->
    <script>
      function toggleFilter() {
  var tingkatKemampuan = document.getElementById("tingkat-kemampuan");
  var jenisPakaian = document.getElementById("jenis-pakaian");
  var ukuran = document.getElementById("ukuran");
  var jenisAcara = document.getElementById("jenis-acara");

  tingkatKemampuan.classList.toggle("hidden");
  jenisPakaian.classList.toggle("hidden");
  ukuran.classList.toggle("hidden");
  jenisAcara.classList.toggle("hidden");
}
    </script>
</body>
</html>