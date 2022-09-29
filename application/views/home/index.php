<!-- section 2 -->
<div class="container my-5">
    <div class="row row-cols-1 row-cols-lg-3 pt-5">
        <?php foreach ($category as $c) : ?>
            <div class="col mt-3">
                <div data-aos=" zoom-in">
                    <a href="<?= base_url() ?>home/variasi/<?= $c['id_category'] ?>">
                        <div class="card text-white">
                            <img src="<?= base_url() ?>assets/image/category/<?= $c['image'] ?>" class="card-img h-100" alt="...">
                            <div class="overlay-kece mt-3">
                                <div class="mt-3">
                                    <h3 class="card-title"><?= $c['nama_category'] ?></h3>
                                    <p class="card-text"><?= $c['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- end section 2 -->