<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/bulma/css/bulma.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung MaBar | Makan Bareng, yuk!</title>
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>
    <!-- hero section -->
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Warung MaBar
            </p>
            <p class="subtitle">
                Tempat asik untuk makan dan bersantai~
            </p>
        </div>
    </section>

    <!-- isi website -->
    <div class="container">
        <div class="hero-body">

            <p class="title mt-4">
                Daftar Menu
            </p>

            <a href="" class="button is-primary">Tambah Paket</a>
            <div class="columns mt-4">
                <?php
                $connect = new mysqli("127.0.0.1,", "root", "", "warungmakan_online", 3306);
                if ($connect->connect_error) {
                    die("koneksi gagal" . $connect->connect_error);
                }
                echo "koneksi berhasil";
                $sql = "SELECT * FROM minuman";
                $query = mysqli_query($connect, $sql);
                $showMinuman = mysqli_fetch_array($query); ?>

                <?php foreach ($showMinuman as $minuman) : ?>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="assets/img/1280x960.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4"><?= $minuman['nama_minuman'] ?></p>
                                        <p class="subtitle is-6"><?= $minuman['harga_minuman'] ?></p>
                                    </div>
                                </div>

                                <div class="content">
                                    <a href="" class="button is-info" referrerpolicy="no-referrer" target="_blank">
                                        <span class="icon-text">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="ml-2">Edit</span>
                                    </a>
                                    <a href="" class="button is-danger ml-2">
                                        <span class="icon-text">

                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                        <span class="ml-2">

                                            Hapus
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/img/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Es Teh</p>
                                    <p class="subtitle is-6">Teh manis dengan tambahan es batu</p>
                                </div>
                            </div>

                            <div class="content">
                                <a href="" class="button is-info" referrerpolicy="no-referrer" target="_blank">
                                    <span class="icon-text">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="ml-2">Edit</span>
                                </a>
                                <a href="" class="button is-danger ml-2">
                                    <span class="icon-text">

                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                    <span class="ml-2">

                                        Hapus
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>


    </div>
</body>

</html>