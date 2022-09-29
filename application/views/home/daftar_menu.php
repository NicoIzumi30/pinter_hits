<section>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-green mb-5">
        <div class="container py-2" id="navCont">
            <a class="navbar-brand">Pinter Hits Boxs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('home/about') ?>">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('home/blog') ?>">Pinter Hits Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('home/challenge') ?>">Pinter Hits Challenge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Survey.html">Survey</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- section 2 -->
<div class="container my-5" style="min-height:560px">
    <h2 class="text-white text-center">Daftar Variasi Menu</h2>
    <div class="row row-cols-1 row-cols-lg-4 g-4 mt-3">
        <?php foreach ($variasi as $menu) : ?>
            <div class="col">
                <div data-aos="zoom-in">
                    <div class="card bg-green">
                        <img src="<?= base_url() ?>assets/image/variasi/<?= $menu->image; ?>" class="card-img-top img250px" alt="img/lemper.jpg">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white"> <?= $menu->nama_variasi; ?></h5>
                            <a href="<?= base_url() ?>home/menu/<?= $menu->id_variasi ?>" class="btn btn-outline-light w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- end section 2 -->