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
    <h2 class="text-white text-center">Detail Challenge</h2>
    <?php foreach ($challenge as $dc) : ?>
        <div class="card mb-3 text-white bg-dark mt-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url() ?>assets/img/poster.jpg" class="img-fluid rounded-start h-100 w-100 p-4" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body py-5">
                        <h3><?= $dc->title; ?></h3>
                        <p class="pt-2 fw-bold">Tata cara mengikuti Pinter Hits Challenge</p>
                        <p class=""><?= $dc->sk; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- end section 2 -->