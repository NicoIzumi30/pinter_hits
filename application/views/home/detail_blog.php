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
                        <img src="<?= base_url() ?>assets/img/lemper.jpg" class="card-img-top w-50 h-50" alt="...">
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