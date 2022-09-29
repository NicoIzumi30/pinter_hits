<!-- section one -->
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
<div class="container my-5 text-white">
    <h4 class="text-white text-center pb-4"><b>Pinter Hits Boxs Chalenge</b></h4>
    <?php foreach ($challenge as $c) : ?>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3 text-white bg-dark">
                    <div class="row g-0">
                        <div class="col-md-2 text-center">
                            <img src="<?= base_url() ?>assets/image/challenge/<?= $c['poster'] ?>" style="height:200px" class="img-fluid rounded-start p-2" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body py-5">
                                <h5><?= $c['title']; ?></h5>
                                <?php
                                $getData =  $this->M_pr->shorten($c['deskripsi'], 120);
                                ?>
                                <p class="card-text"><?= $getData ?></p>
                                <div class="float-end mt-5">
                                    <a href="<?= base_url('') ?>home/detail/<?= $c['id'] ?>" style="text-decoration: none;">Lihat Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>