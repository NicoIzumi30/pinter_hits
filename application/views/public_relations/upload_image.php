<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('message_update'); ?>
            <div class="row justify-content-end mb-3 mr-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#uploadImage"> Upload Image</button>
            </div>


            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th width="11%" scope="col">#</th>
                            <th width="21%" scope="col">Image</th>
                            <th width="39%"scope="col">Link</th>
                            <th scope="col" colspan="2" width=10%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($upload as $ui) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="<?=base_url()?>assets/image/image/<?=$ui['image']?>" alt="" width="99px"></td>
                                <td><a target="_blank" href="<?=base_url()?>assets/image/image/<?=$ui['image']?>"><?=base_url()?>assets/image/image/<?=$ui['image']?></td>
                                <td onclick="javascript: return confirm('Apakah anda yakin menghapus gambar ini?')"><?php echo anchor('pr/delete_image/' . $ui['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></a></td>
                                <td><?php echo anchor('pr/edit_image/' . $ui['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></div>') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>pr/add_upload_image" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-sm-8">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input class="btn btn-primary" type="submit" value="Upload">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>