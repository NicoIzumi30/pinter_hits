<!-- Main content -->

<section class="content ml-3">

    <div class="row">

        <div class="col-md-12">

            <div class="box box-warning">

                <div class="box-body ">

                    <!-- Widget: user widget style 1 -->

                    <div class="box box-widget widget-user-2">

                        <!-- Add the bg color to the header using any of the bg-* classes -->

                        <div class="widget-user-header ">

                            <!-- /.widget-user-image -->

                            <h3 class="widget-user-username">Article</h3>

                            <h5 class="widget-user-desc">New Article</h5>

                            <hr>

                        </div>

                        <form action="<?= base_url() ?>pr/add_article" method="post">
                            <div class="form-group ">

                                <label for="judul_artikel" class="col-sm-2 control-label">Judul Artikel

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <input type="text" class="form-control" name="judul_artikel" id="judul_artikel" placeholder="Judul Artikel" value="<?= set_value('judul_artikel'); ?>">

                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="berita" class="col-sm-2 control-label">Berita

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <textarea id="berita" name="berita" rows="5" cols="80"><?= set_value('Berita'); ?></textarea>

                                    <small class="info help-block">

                                    </small>

                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="penulis" class="col-sm-2 control-label">Penulis

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?= $this->session->userdata('name') ?>">


                                </div>

                            </div>





                            <div class="form-group ">

                                <label for="image" class="col-sm-2 control-label">Image

                                    <i class="required">*</i>

                                </label>

                                <div class="col-sm-8">

                                    <div id="artikel_image_galery"></div>

                                    <input class="data_file" name="artikel_image_uuid" id="artikel_image_uuid" type="hidden" value="<?= set_value('artikel_image_uuid'); ?>">

                                    <input class="data_file" name="artikel_image_name" id="artikel_image_name" type="hidden" value="<?= set_value('artikel_image_name'); ?>">


                                </div>

                            </div>






                            <div class="message"></div>
                            <button type="submit" class="btn btn-success">Add</button>

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
    CKEDITOR.replace('berita');
</script>
<script>
    $('#artikel_image_galery').fineUploader({

        template: 'qq-template-gallery',

        request: {

            endpoint: BASE_URL + '/administrator/artikel/upload_image_file',

            params: params

        },

        deleteFile: {

            enabled: true,

            endpoint: BASE_URL + '/administrator/artikel/delete_image_file',

        },

        thumbnails: {

            placeholders: {

                waitingPath: BASE_URL + '/asset/fine-upload/placeholders/waiting-generic.png',

                notAvailablePath: BASE_URL + '/asset/fine-upload/placeholders/not_available-generic.png'

            }

        },

        multiple: false,

        validation: {

            allowedExtensions: ["*"],

            sizeLimit: 0,


        },

        showMessage: function(msg) {

            toastr['error'](msg);

        },

        callbacks: {

            onComplete: function(id, name, xhr) {

                if (xhr.success) {

                    var uuid = $('#artikel_image_galery').fineUploader('getUuid', id);

                    $('#artikel_image_uuid').val(uuid);

                    $('#artikel_image_name').val(xhr.uploadName);

                } else {

                    toastr['error'](xhr.error);

                }

            },

            onSubmit: function(id, name) {

                var uuid = $('#artikel_image_uuid').val();

                $.get(BASE_URL + '/administrator/artikel/delete_image_file/' + uuid);

            },

            onDeleteComplete: function(id, xhr, isError) {

                if (isError == false) {

                    $('#artikel_image_uuid').val('');

                    $('#artikel_image_name').val('');

                }

            }

        }

    }); /*end image galery*/
</script>