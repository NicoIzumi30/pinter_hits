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

                            <h3 class="widget-user-username">Article</h3>

                            <h5 class="widget-user-desc">Edit Article</h5>

                            <hr>

                        </div>

                        <?php foreach($article as $artikel) : ?>
                            <form action="<?= base_url() ?>pr/update_article/<?=$artikel->id_artikel?>" method="post" enctype="multipart/form-data">
                        
                            <div class="form-group ">

                                <label for="judul_artikel" class="col-sm-2 control-label">Judul Artikel

                                    <i class="required" >*</i>

                                </label>

                                <div class="col-sm-8">

                                    <input type="text" class="form-control" name="judul_artikel" id="judul_artikel" placeholder="Judul Artikel" value="<?=$artikel->judul_artikel?>">

                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="berita" class="col-sm-2 control-label">Berita

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <textarea id="berita" name="berita" rows="5" cols="80"><?= set_value('Berita'); ?><?=$artikel->berita?></textarea>

                                    <small class="info help-block">

                                    </small>

                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="penulis" class="col-sm-2 control-label">Penulis

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">
                                <!-- <fieldset disabled> 
                                <div class="mb-3">
                                    <input type="text" id="penulis" name="penulis" class="form-control" value="<?= $this->session->userdata('name') ?>" placeholder="Disabled input">
                                    </div>
                                    </fieldset> -->
                                    <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?= $this->session->userdata('name') ?>" disabled >


                                </div>

                            </div>


                            <div class="form-group">
                            <div class="col-sm-8">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                            </div>
                            <input type="hidden" name="id" value="<?=$artikel->id_artikel?>">
                            <input type="hidden" name="old" value="<?=$artikel->image?>">
                            <input type="hidden" name="tanggal" value="<?=$artikel->tanggal?>">
                           





                            <div class="message"></div>
                            <div class="modal-footer">
                            <div class="col-lg-5">
                            <button type="submit" class="btn btn-sm btn-success">Save Article</button>
                            </div>
                            </div>
                            
                        </form>
                        <?php endforeach; ?>

                    </div>

                </div>

                <!--/box body -->

            </div>

            <!--/box -->

        </div>

    </div>

</section>

<script src="<?= base_url() ?>assets/ckeditor/ckeditor2/ckeditor.js"></script>
<script>
    CKEDITOR.replace('berita');
</script>