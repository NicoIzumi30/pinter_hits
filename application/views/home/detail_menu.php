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
<div class="container my-5">
    <h2 class="text-white text-center">Detail Menu</h2>
    <div class="card mt-3  bg-green text-white">
        <?php foreach ($variasi as $vm) : ?>
            <div class="row g-0">
                <div class="col-md-4 p-3">
                    <img src="<?= base_url() ?>assets/image/variasi/<?= $vm->image; ?>" class="img-fluid rounded w-100 border border-light" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body my-3">
                        <h3 class="card-title"><?= $vm->nama_variasi; ?></h3>
                        <!-- <div class="d-flex">
                        <i class="fa fa-star text-warning me-2" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning me-2" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning me-2" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning me-2" aria-hidden="true"></i>
                        <i class="fa fa-star text-warning me-2" aria-hidden="true"></i>

                    </div> -->
                        <div class="mt-4">
                            <h5>Cara Pembuatan <?= $vm->nama_variasi; ?></h5>
                            <div>
                                <?= $vm->cara_pembuatan; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end section 2 -->