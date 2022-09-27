<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('message_update'); ?>
            <div class="row justify-content-end mb-3 mr-3">
                <a href="<?= base_url('pr/add_article') ?>" class="btn btn-primary"> Add Article</a>
            </div>


            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Berita</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col" colspan="2" width=10%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($article as $pr) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $pr['penulis']; ?></td>
                                <td><?= $pr['judul_artikel']; ?></td>
                                <td width=30% height=30%><?= $pr['berita']; ?></td>
                                <td><img src="<?= base_url() ?>assets/image/artikel/<?= $pr['image']; ?>?>" alt="" width="150px"></td>
                                <td><?= $pr['tanggal']; ?></td>
                                <td onclick="javascript: return confirm('Apakah anda yakin menghapus artikel ini?')"><?php echo anchor('pr/delete/' . $pr['id_artikel'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                <td><?php echo anchor('pr/edit_article/' . $pr['id_artikel'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></div>') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>