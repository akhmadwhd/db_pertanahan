<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <title>Sidebar</title>

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
            input[type='radio'] {
                border-radius: 10% !important;
                box-sizing: border-box;
                appearance: none;
                background: white;
                outline: 1px solid #333;
                border: 1px solid white;
            }
            .form-check-input {
                margin-top: 0.35em;
                width: 0.9em;
                height: 0.9em;
            }
            .form-check-label {
                font-size: 16px;
                font-weight: 400;
            }
        </style>
    </head>
    <body>
        <div class="sidebar container">
            <img src="img/logo1.png" class="rounded mx-auto d-block" alt="">
            <div class="container mt-3">
                <p class="text-center lh-base text-secondary fw-bold fs-6">DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN PERTAHANAN</p>
            </div>
            <div class="d-grid gap-2 mt-5">
                <button type="button" class="btn btn-primary text-start w-100 fs-6 btn-lg">
                    <img src="img/icon/dashboard.svg" alt="" class="icon">
                    &emsp;Dashboard
                </button>
                <a href="<?= base_url('Admin/dipatcontroller'); ?>">
                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                    <img src="img/icon/DIP4T-white.svg" alt="" class="icon">
                    &emsp; DIP4T
                  </button>
                </a>

                <a href="<?= base_url('Admin/grlcontroller'); ?>">
                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                    <img src="img/icon/gantirugilahan.svg" alt="" class="icon">
                    &emsp; Ganti Rugi Lahan
                  </button>
                </a>

                <a href="<?= base_url('Admin/LaporanController'); ?>">
                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                    <img src="img/icon/laporan.svg" alt="" class="icon">
                    &emsp; Laporan
                  </button>
                </a>

                <a href="<?= base_url('Admin/PetugasController'); ?>">
                  <button type="button" class="btn btn-light text-start w-100 text-secondary fs-6 btn-lg">
                    <img src="img/icon/user.svg" alt="" class="icon">
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
        <script>
          // selected file show
          $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
          });
        </script>

        </body>

        </html>
