<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DIP4T</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .sidebar {
                background-color: white;
                width: 277px;
                padding: 24px;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="sidebar container">
                        <img src="../assets/img/logo1.png" class="rounded mx-auto d-block" alt="">
                        <div class="container mt-3">
                            <p class="text-center lh-base text-secondary fw-bold fs-6">DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN PERTAHANAN</p>
                        </div>
                        <div class="sidebar container">
                            <img src="../assets/img/logo1.png" class="rounded mx-auto d-block" alt="">
                            <div class="container mt-3">
                                <p class="text-center lh-base text-secondary fw-bold fs-6">DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN PERTAHANAN</p>
                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <a href="<?= base_url('User/ProfileController'); ?>">
                                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                                      <img src="../assets/img/icon/dashboard.svg" alt="" class="icon">
                                      &emsp;Dashboard
                                  </button>
                                </a>
                                <a href="<?= base_url('Admin/dipatcontroller'); ?>">
                                  <button type="button" class="btn btn-primary text-start w-100 fs-6 btn-lg">
                                    <img src="../assets/img/icon/DIP4T-white.svg" alt="" class="icon">
                                    &emsp; DIP4T
                                  </button>
                                </a>

                                <a href="<?= base_url('Admin/grlcontroller'); ?>">
                                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                                    <img src="../assets/img/icon/gantirugilahan.svg" alt="" class="icon">
                                    &emsp; Ganti Rugi Lahan
                                  </button>
                                </a>

                                <a href="<?= base_url('Admin/LaporanController'); ?>">
                                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                                    <img src="../assets/img/icon/laporan.svg" alt="" class="icon">
                                    &emsp; Laporan
                                  </button>
                                </a>

                                <a href="<?= base_url('Admin/PetugasController'); ?>">
                                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                                    <img src="../assets/img/icon/user.svg" alt="" class="icon">
                                    &emsp; Users
                                  </button>
                                </a>

                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <a href="<?= base_url('Admin/LaporanController'); ?>">
                                <button class="btn btn-danger w-100" type="button">Logout</button>
                                </a>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-5">
                            <button class="btn btn-danger w-100" type="button">Logout</button>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="container-fluid">
                        <div id="carouselExampleCaptions" class="carousel slide text-start">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../assets/img/icon/header.svg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-bold fs-3 fw-bold">Data Dan Informasi Penguasaan, Pemilikan,
                                            <br>Penggunaan, Dan Pemanfaatan Tanah(DIP4T)</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid text-secondary mt-3">
                            <div class="search-bar">
                                <div class="row">
                                    <div class="col-2">
                                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Cari Berdasarkan
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">ID</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Bukti Kepemilikan</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Nama Pemilik</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Nomor identitas</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Luas Tanah</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Lokasi</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" placeholder="Search" id="searchInput">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary w-100" onclick="search()">+ Add Customer</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Tabel Bootstrap 5 -->
                            <table class="table text-center">
                                <thead>
                                    <tr style="height: 35px;">
                                        <th scope="col" style="width: 180px;">ID</th>
                                        <th scope="col" style="width: 180px;">Bukti Kepemilikan</th>
                                        <th scope="col" style="width: 180px;">Nama Pemilik</th>
                                        <th scope="col" style="width: 180px;">Nomor Identitas</th>
                                        <th scope="col" style="width: 180px;">Luas Tanah</th>
                                        <th scope="col" style="width: 180px;">Lokasi Objek</th>
                                        <th scope="col" style="width: 180px;">Penggunaan Bidang Tanah</th>
                                        <th scope="col" style="width: 180px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <!-- Check if data is empty -->
                                  <?php if (empty($data_dipat)) : ?>
                                      <tr>
                                          <td colspan="8" class="text-center">Tidak ada data</td>
                                      </tr>
                                  <?php else : ?>
                                      <!-- Loop through the data from backend -->
                                      <?php foreach ($data_dipat as $dipat) : ?>
                                          <tr style="height: 35px;">
                                              <td><?= $dipat['id']; ?></td>
                                              <td><?= $dipat['bukti_kepemilikan']; ?></td>
                                              <td><?= $dipat['nama_pemilik']; ?></td>
                                              <td><?= $dipat['nomor_identitas']; ?></td>
                                              <td><?= $dipat['luas_tanah']; ?></td>
                                              <td><?= $dipat['lokasi_objek']; ?></td>
                                              <td><?= $dipat['penggunaan_bidang_tanah']; ?></td>
                                              <td>
                                                  <!-- Tambahkan tiga tombol ikon di sini -->
                                                  <img src="../assets/img/icon/see.svg" alt="Info" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="infoFunction()">
                                                  <img src="../assets/img/icon/edit.svg" alt="Edit" onclick="seeFunction()">
                                                  <img src="../assets/img/icon/trash.svg" alt="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deletFunction()">
                                              </td>
                                          </tr>
                                      <?php endforeach; ?>
                                  <?php endif; ?>
                              </tbody>
                            </table>
                            <!-- Modal Pop-up Delete -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-danger">Hapus</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Pop-up View -->
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <p>Form DIP4T</p>
                                                        <embed src="data_informasi_pemilikan_lahan_.pdf" height="450px" width="100%"/>
                                                    </div>
                                                    <div class="col-4">
                                                        <p>Berkas Tersimpan</p>
                                                        <div class="list-1 bg-secondary mb-2" style="height: 50px;"></div>
                                                        <div class="list-2 bg-secondary mb-2" style="height: 50px;"></div>
                                                        <div class="list-3 bg-secondary mb-2" style="height: 50px;"></div>
                                                        <div class="list-4 bg-secondary mb-2" style="height: 50px;"></div>
                                                        <div class="list-5 bg-secondary mb-2" style="height: 50px;"></div>
                                                        <div class="list-6 bg-secondary" style="height: 50px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

            </div>
        </div>
    </body>
</html>
