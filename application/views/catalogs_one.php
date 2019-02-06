<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Книги</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
<!--                <button type="button" class="btn btn-primary open-modal" data-modalka_id="#modal_add">Add</button>-->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <?php
        foreach ($data as $category):

            if($category->image_name){
                $image=base_url()."assets/upload/images/cat_one/".$category->image_name;
            }
        else{
            $image=base_url()."assets/upload/no-image.jpg";
        }
        ?>
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="<?php echo $image ?>" style="width: 80%; height: 200px;" class="img-thumbnail">
                            <h4 class="card-title m-t-10" style="font-size: 15px"><?php echo $category->title ?></h4>
                            <div>
                                <textarea style="width:85%;min-height:100px; border:none;"><?php echo $category->description ?></textarea>
                            </div>
                            <h4 class="card-title m-t-10" style="font-size: 15px">Цена: <?php echo $category->price ?> $</h4>
                            <button id="edit_cat<?= $category->id;?>" type="button" class="btn btn-success open-modal edit_cat" data-modalka_id="#modal_edit"
                                    data-img="<?php echo $category->image_name ?>"
                                    data-id="<?php echo $category->id ?>"
                                    data-title="<?php echo $category->title ?>"
                                    data-description="<?php echo $category->description ?>"
                                    data-price="<?php echo $category->price ?>"
                                    data-id_author="<?php echo $category->id_author ?>"
                            >Редактировать</button>
<!--                            <button type="button" class="btn btn-danger delete_cat" data-id="--><?php //echo $category->id?><!--" data-img="--><?php //echo $category->image_name?><!--">Delete</button>-->
                        </center>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!--   UPDATE MODALS   -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<!--<div class="modals" id="modal_add">
    <div class="maska close-modal" data-modalka_id="#modal_add"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_add">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Добавление</h3><br>
            <form id="forma_add" class="w3-container"  action="javascript:void(0)" method="post" enctype="multipart/form-data">

                <p>
                    <label style="float: left;">Заголовок</label>
                    <input id="add_title" class="w3-input w3-border form-control" name="title" type="text" >
                </p>
                <p>
                    <label style="float: left">Описание</label>
                    <textarea id="add_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <div id="cont_new_inp">

                </div>
                <input id="add_img" type="file" name="img_catone" style="float: left;">
                <br>
                <br>
                <br>
                <input id="add_cat_one" class="btn btn-primary" type="submit" value="Добавить" style="float:right;">
            </form>

        </div>
    </div>
</div>-->
<div class="modals" id="modal_edit">
    <div class="maska close-modal" data-modalka_id="#modal_edit"></div>
    <div class="modal_content">
        <span class="close_modal close-modal" data-modalka_id="#modal_edit">
            <i class="material-icons">close</i>
        </span>
        <div class="content">
            <h3 style="width: 95%; margin: 0 auto">Редактирование</h3><br>
            <form id="forma_update" class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">

                <p><label style="float: left;">Заголовок</label>
                    <input id="update_title" class="w3-input w3-border form-control" name="title" type="text" >
                </p>
                <p><label style="float: left">Описание</label>
                    <textarea id="update_content" rows="6" class="w3-input w3-border form-control" name="content"></textarea>
                </p>
                <p><label style="float: left;">Цена($)</label>
                    <input id="update_price" class="w3-input w3-border form-control" name="price" type="text" >
                </p>
                <div id="cont_new_inp_edit">

                </div>
                <input id="update_id" class="form-control" type="hidden" name="id" >
                <input id="id_author" class="form-control" type="hidden" >
                <input id="update_img" type="file" name="img_catone" style="float: left;">
                <input id="update_img_name" type="hidden" name="img_name" style="float: left;">
                <br>
                <br>
                <br>
                <input id="update_cat_one" class="w3-button w3-indigo" type="submit" value="Редактировать" style="float:right;">
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/dist/js/script_cat_one.js"></script>