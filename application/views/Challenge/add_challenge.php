<!-- Main content -->

<section class="content ml-3">

    <div class="row">

        <div class="col-lg-11">

            <div class="box box-warning">

                <div class="box-body ">

                    <!-- Widget: user widget style 1 -->

                    <div class="box box-widget widget-user-2">

                        <!-- Add the bg color to the header using any of the bg-* classes -->

                        <div class="widget-user-header ml-3">

                            <!-- /.widget-user-image -->

                            <h3 class="widget-user-username">Challenge</h3>

                            <h5 class="widget-user-desc">New Challenge</h5>

                            <hr>

                        </div>

                        <form action="<?= base_url() ?>challenge/add_challenge" method="post" enctype="multipart/form-data">
                            <div class="form-group ">

                                <label for="title" class="col-sm-2 control-label">Judul Challenge

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <input type="text" class="form-control" name="title" id="title" placeholder="Judul Challenge" value="<?= set_value('title'); ?>">

                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="deskripsi" class="col-sm-2 control-label">Deskripsi

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <textarea id="deskripsi" name="deskripsi" rows="5" cols="80"><?= set_value('deskripsi'); ?></textarea>

                                    <small class="info help-block">

                                    </small>

                                </div>

                            </div>

                            <div class="form-group ">

                                <label for="s&k" class="col-sm-2 control-label">Cara Berpartisipasi

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <textarea id="s&k" name="s&k" rows="5" cols="80"><?= set_value('s&k'); ?></textarea>

                                    <small class="info help-block">

                                    </small>

                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-8">
                                    <label>Poster</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="periode" class="col-sm-2 control-label">Periode

                                        <i class="required">*</i>
                                        <?php $now = date_create()->format('Y-m-d');
                                        ?>
                                    </label>
                                    <input type="date" name="periode" class="form-control" min='<?= $now ?>'>
                                </div>
                            </div>










                            <div class="message"></div>
                            <div class="modal-footer">
                                <div class="col-lg-5">
                                    <button type="submit" class="btn btn-sm btn-success">Add Challenge</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

                <!--/box body -->

            </div>

            <!--/box -->

        </div>

    </div>

</section>

<script src="<?= base_url() ?>assets/ckeditor/ckeditor1/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
    CKEDITOR.replace('s&k');
</script>