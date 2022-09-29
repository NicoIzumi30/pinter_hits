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
    <?php foreach ($blog as $b) : ?>
        <div class="text-center">
            <h4 class="text-white"><strong><?= $b->judul_artikel; ?></strong></h4>
            <div class=" text-white pb-4 d-inline-flex">
                <p><i class="fa fa-calendar me-2" aria-hidden="true"></i><?= $b->tanggal; ?></p>
                <p class="px-3">|</p>
                <p><i class="fa fa-user-circle me-2" aria-hidden="true"></i><?= $b->penulis; ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card bg-transparent text-white border-0">
                    <div class="text-center">
                        <img src="<?= base_url() ?>assets/image/artikel/<?= $b->image; ?>" class="card-img-top w-50 h-50" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $b->berita; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>