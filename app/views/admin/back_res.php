

<?php
/**
 * Created by PhpStorm.
 * User: Yibie
 * Date: 5/8/2020
 * Time: 12:01 PM
 */

require APPROOT . '/views/inc/header.php';
?>



<?php
require APPROOT . '/views/admin/sidebar.php';

?>
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Back up and restore</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Back up and restore</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-12 col-md-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs justify-content-lg-start" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Restore</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Back Up</a>
                            </li>


                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <div class="row">
                                    <div class="col-12">

                                            <?php
                                            if (! empty($response)) {
                                                ?>
                                                <div class="response <?php echo $response["type"]; ?>
    ">
                                                    <?php echo nl2br($response["message"]); ?>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <form method="post" action="<?php echo URLROOT;?>/cadmin/restore" enctype="multipart/form-data">
                                                <label>Choose Backup File:</label>
                                                <div class=" input-group col-md-6">

                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                        </div>
                                                    <input type="submit" name="restore" value="Restore" class="btn btn-success" />
                                                    </div>


                                            </form>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">

                                          uu
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Zone List</h3>

                                                <div class="card-tools">
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                                <table class="table table-head-fixed text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Country Name</th>
                                                        <th>Region Name</th>
                                                        <th>Zone Name</th>
                                                        <th>Status</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>John Doe</td>
                                                        <td>John Doe</td>
                                                        <td>John Doe</td>
                                                        <td>
                                                            <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#reg-add"><span class="fas fa-plus-square">Add</span></a>
                                                            <a href="" class="btn btn-outline-warning" data-toggle="modal" data-target="#reg-edit"><span class="fas fa-edit">Edit</span></a>
                                                            <a href="" class="btn btn-outline-danger"><span class="fas fa-remove-format">Delete</span></a>

                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Worda List</h3>

                                                <div class="card-tools">
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                                <table class="table table-head-fixed text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Country Name</th>
                                                        <th>Region Name</th>
                                                        <th>Zone Name</th>
                                                        <th>Worda Name</th>
                                                        <th>Status</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>John Doe</td>
                                                        <td>John Doe</td>
                                                        <td>John Doe</td>
                                                        <td>John Doe</td>
                                                        <td>
                                                            <a href="" class="btn btn-outline-success"  data-toggle="modal" data-target="#zone-add"><span class="fas fa-plus-square">Add</span></a>
                                                            <a href="" class="btn btn-outline-warning" data-toggle="modal" data-target="#zone-edit"><span class="fas fa-edit">Edit</span></a>
                                                            <a href="" class="btn btn-outline-danger"><span class="fas fa-remove-format">Delete</span></a>

                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>






<?php

require APPROOT. '/views/inc/footer.php';
?>
