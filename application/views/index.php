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
                        <h4 class="text-themecolor">Главная страница</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Авторы</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive col-8">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Count_books</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $authors): ?>
                                            <tr>
                                                <td class="txt-oflo"><a href="/main/catalogs_one/<?=$authors->id?>"><?=$authors->name?></a></td>
                                                <td class="txt-oflo"><h6><?=$authors->count_books?></h6></td>
                                            </tr>
                                        <?endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>            
        </div>
        