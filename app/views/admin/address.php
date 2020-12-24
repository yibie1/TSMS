

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
                    <h1 class="m-0 text-dark">Address</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Address</li>
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
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Country</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Regions</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Zone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Worda</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Country List</h3>

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
                                                        <th>Status</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($data['clist'] as $datum) : ?>
                                                    <tr>
                                                        <td><?php echo $datum->id; ?></td>
                                                        <td><?php echo $datum->name; ?></td>

                                                        <td>
                                                            <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-add"><span class="fas fa-plus-square">Add</span></a>
                                                            <a href="" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-edit"><span class="fas fa-edit">Edit</span></a>
                                                            <a href="" class="btn btn-outline-danger"><span class="fas fa-remove-format">Delete</span></a>

                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Region List</h3>

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
                                                        <th>Status</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>John Doe</td>
                                                        <td>O Doe</td>
                                                        <td>
                                                            <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#cou-add"><span class="fas fa-plus-square">Add</span></a>
                                                            <a href="" class="btn btn-outline-warning" data-toggle="modal" data-target="#cou-edit"><span class="fas fa-edit">Edit</span></a>
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




<!-- /.modal-dialog -->
<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo URLROOT;?>/cadmin/addcountry" method="post">
                    <div class="form-group col-lg-6">
                        <input class="form-control" name="cname" placeholder="Enter country name">
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
////
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="cou-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="cou-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php

require APPROOT. '/views/inc/footer.php';
?>
