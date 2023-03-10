<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Universitas Gua</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">UG</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="../"><i class="fas fa-fire"></i> <span>Home</span></a></li>
      <li class="menu-header">Main</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../users/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../users/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dosen</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../dosen/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../dosen/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Mahasiswa</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../mahasiswa/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../mahasiswa/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Mata Kuliah</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../matakuliah/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../matakuliah/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Ruang</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../ruang/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../ruang/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Program Studi</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../prodi/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../prodi/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Nilai</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../nilai/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../nilai/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Mengajar</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../mengajar/index.php">List</a></li>
          <?php if (checkRole() == 'admin') : ?>
            <li><a class="nav-link" href="../mengajar/create.php">Tambah Data</a></li>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </aside>
</div>