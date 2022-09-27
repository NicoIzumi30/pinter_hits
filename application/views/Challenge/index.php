<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('message_update'); ?>
            <div class="row justify-content-end mb-3 mr-3">
                <a href="<?= base_url('challenge/add_challenge') ?>" class="btn btn-primary">Add Challenge</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Challenge</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Cara Berpartisipasi</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Periode</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($challenge as $cha) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $cha['title']; ?></td>
                                <?php
                                $getData1 =  $this->M_pr->shorten($cha['deskripsi'], 30);
                                $getData2 =  $this->M_pr->shorten($cha['sk'], 50);
                                ?>
                                <td width="20%"><?= $getData1; ?></td>
                                <td width=30% height=30%><?= $getData2; ?></td>
                                <td><img src="<?= base_url() ?>assets/image/challenge/<?= $cha['poster']; ?>?>" alt="" width="100px"></td>
                                <td><small><?= $cha['tanggal']; ?></small></td>
                                <td><small><?= $cha['tanggal']; ?> - <?= $cha['periode']; ?></small></td>
                                <td onclick="javascript: return confirm('Apakah anda yakin menghapus challenge ini?')"><?php echo anchor('challenge/delete/' . $cha['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                <td><?php echo anchor('challenge/edit/' . $cha['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></div>') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>