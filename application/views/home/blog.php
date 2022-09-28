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
<div class="container my-5">
  <h4 class="text-white text-center pb-4"><strong>Pinter Hits Blog</strong></h4>
  <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
    <?php foreach ($blog as $b) : ?>
      <a href="<?= base_url() ?>home/read/<?= $b['id_artikel']; ?>" style="text-decoration: none;">
        <div class="col">
          <div class="card mb-3 bg-dark text-white">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src="<?= base_url() ?>assets/image/artikel/<?= $b['image']; ?>" class="img-fluid rounded-start p-2" style="height:200px" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $b['judul_artikel']; ?></h5>
                  <?php
                  $getData =  $this->M_pr->shorten($b['berita'], 120);
                  ?>
                  <p class="card-text"><small class="text-muted"><?= $getData ?></small></p><br><br>
                  <p class="card-text text-end"><small class="text-white"><?= $b['tanggal']; ?></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach ?>
  </div>
</div>
<!-- end section 2 -->
<!-- footer -->