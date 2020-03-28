
    <script src="//cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

<style>
    h3{
        font-family: Verdana;
        font-size: 18pt;
        font-style: normal;
        font-weight: bold;
        color:red;
        text-align: center;
    }
    table{
        font-family: Verdana;
        color:black;
        font-size: 12pt;
        font-style: normal;
        font-weight: bold;
        text-align:left;
        border-collapse: collapse;
    }
    .error{
        color:red;
        font-size: 11px;
    }
</style>



    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="">
                            <a href="#">
                                <img src="<?php bs() ?>uploads/<?php echo $page_details->image ?>" width="390" alt="">
                            </a>
                            <h1><?php echo $page_details->name ?></h1>

                        </div>

<!--                        <ul class="nav nav-pills nav-stacked">-->
<!--                            <li><a href="--><?php //bs() ?><!--users/profile"> <i class="fa fa-user"></i> Profile</a></li>-->
<!--                            <li  class="active">-->
<!--                                <a href="--><?php //bs() ?><!--users/edit_profile">-->
<!--                                    <i class="fa fa-edit"></i> Edit profile-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
                                <a href="<?php bs() ?>users/article/change_image_projets/<?php echo $page_details->id ?>" class="btn btn-primary">
                                   Changer l'image
                                </a>
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="--><?php //bs() ?><!--users/auth/change_password">-->
<!--                                    <i class="fa fa-unlock-alt"></i> Change Password-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->

                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="bio-graph-heading">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i> <b>Modification de projet</b>
                        </div>
                        <div class="panel-body bio-graph-info">
                            <form method="post" action="<?php bs() ?>users/article/edit_projet/<?php echo $page_details->id ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Titre </label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $page_details->title  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Lieu</label>
                                    <input type="text" class="form-control" name="lieu" value="<?php echo $page_details->lieu ?>">
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <label for="exampleInputPassword1">Email</label>-->
<!--                                    <input type="email" class="form-control" name="email" value="--><?php //echo $page_details->creation_date ?><!--">-->
<!--                                </div>-->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contenu</label>
                                    <tr>
                                        <td><textarea name="content" id="content" class="form-control"> <?php echo $page_details->content ?></textarea>
                                            <script>
                                                CKEDITOR.replace( 'content', {
                                                    toolbar: [
                                                        { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
                                                        { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                                                        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                                                        { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                                                        '/',
                                                        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                                                        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                                                        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                                                        { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                                                        '/',
                                                        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                                                        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                                                        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                                                        { name: 'others', items: [ '-' ] },
                                                    ]
                                                });
                                            </script></td>
                                    </tr>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
