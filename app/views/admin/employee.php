

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
                    <h1 class="m-0 text-dark">Employee Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h5>
                                Employers
                            </h5>

                            <p> Add new Employee</p>

                        </div>
                        <div class="icon">
                            <i class="fa fa-plus-square"></i>

                        </div>

                        <a href="#" class="small-box-footer bg-success" data-toggle="modal" data-target="#modal-lg">ADD <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>



                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h5>Unavailable Employers</h5>
                            <p>list of unavailable in company  </p>


                        </div>

                        <a href="<?php echo URLROOT;?>/cadmin/empun" class="small-box-footer bg-danger">Show List <i class="fas fa-remove-format"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h5>All Employers</h5>
                            <p>list of all employees </p>

                        </div>
                        <div class="icon">
                            <i class="fa fa-border-all"></i>
                        </div>
                        <a href="<?php echo URLROOT;?>/cadmin/empall" class="small-box-footer btn-outline-info">Show List <i class="fas fa-border-all"></i></a>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employee List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Educational Status</th>
                            <th>Profession</th>

                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data['shows'] as $show) : ?>
                        <tr>
                            <td><?php echo $show->name; ?></td>
                            <td><?php echo $show->sex; ?></td>
                            <td><?php echo $show->edu_status; ?></td>
                            <td><?php echo $show->profession; ?></td>

                            <td>
                                <a href="<?php echo URLROOT;?>/cadmin/showemp/<?php echo $show->id?>" class="btn btn-sm btn-outline-success">More <span class="fas fa-plus-square"></span></a>
                                <a href="<?php echo URLROOT;?>/cadmin/edit/<?php echo $show->id?>"  class="btn btn-sm btn-outline-warning" >Edit  <span class="fas fa-edit"></span></a>
                                <a href="<?php echo URLROOT;?>/cadmin/unactive/<?php echo $show->id?>" class="btn btn-sm btn-outline-danger">Disable <span class="fas fa-remove-format"></span></a>
                            </td>


                        </tr>
                        <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>

</div>






<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Add new employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <style rel="stylesheet">
                    label{
                        font-family: "Times New Roman";
                        font-weight: bolder;
                        font-size: 18px;
                    }
                    sup{
                        color: #cb200d;
                    }

                </style>
                <form method="post" action="<?php echo URLROOT; ?>/Cadmin/addEmp">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name<sup>*</sup></label>
                            <input type="text" name="name" required class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Last Name<sup>*</sup></label>
                            <input type="text" name="lname" required class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>

                    </div>
                    <hr class="bg-primary">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="sex">Sex<sup>*</sup></label>
                            <select name="sex" class="custom-select" required>
                                <option selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="sex">Date Of Birth<sup>*</sup></label>
                            <input type="date" class="form-control" name="dob" max="1995-12-31" id="bday" onblur="return dobcheck()" required>
                        </div>
                        <div class="col-md-4">
                            <label for="sex">Educational Status<sup>*</sup></label>
                            <select name="edu" required class="custom-select">
                                <option selected>Select Grade</option>
                                <option value="4">8</option>
                                <option value="1">9</option>
                                <option value="1">10</option>
                                <option value="1">11</option>
                                <option value="1">12</option>
                                <option value="1">higher Education</option>

                            </select>
                        </div>
                    </div>
                    <hr class="bg-primary">
                    <div class="row">

                        <div class="col-4">
                            <label for="sex">Phone<sup>*</sup></label>
                            <input type="number" class="form-control" name="phone" required>
                        </div>


                    </div>
                    <hr class="bg-primary">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="sex">woreda<sup>*</sup></label>
                            <select class="custom-select">
                                <option selected>Select Worda</option>
                                <?php foreach ($data['w'] as $c): ?>
                                    <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="sex">Zone<sup>*</sup></label>
                            <select class="custom-select">
                                <option selected>Select Zone</option>
                                <?php foreach ($data['z'] as $c): ?>
                                    <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="sex">Region<sup>*</sup></label>
                            <select class="custom-select" name="reg_id">
                                <option selected>Select Region</option>
                                <?php foreach ($data['r'] as $c): ?>
                                    <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="sex">Country<sup>*</sup></label>
                            <select class="custom-select" name="cont_id" required>
                                <option selected>Select Country</option>
                                <?php foreach ($data['clist'] as $c): ?>
                                <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <hr class="bg-primary">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="salary"> Salary<sup>*</sup></label>
                            <input type="number" required class="form-control form-inline" name="salary">
                        </div>
                        <div class="col-md-4">
                            <label for="salary"> Profession<sup>*</sup></label>
                            <input type="text" class="form-control form-inline" required name="pro">
                        </div>
                        <div class="col-md-4">
                            <label for="salary"> Role<sup>*</sup></label>
                            <select class="custom-select" name="role" required>
                                <option selected>Select Employee Role</option>
                                <option value="admin">Admin</option>
                                <option value="examiner">Examiner</option>
                                <option value="officer">IT officer</option>
                                <option value="officer_head">Officer Head</option>
                                <option value="manager">Manager</option>
                                <option value="mahiberat">Mahiberat</option>
                                <option value="traffic">Traffic</option>
                            </select>
                        </div>
                    </div>
                    <hr class="bg-danger"/>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Register" class="btn btn-primary" name="reg">
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script type="text/javascript">
    function dobcheck()
    {
        var birth = document.getElementById('bday')
        if(birth != "")
        {

            var record=document.getElementById('bday').value.trim();
            var currentdate=new Date();
            var day1 = currentdate3.getDate();
            var month1 = currentdate3.getMonth();
            month1++;
            var year11 = currentdate3.getFullYear()-17;
            var year2= currentdate3.getFullYear()-100;
            var record_day1=record.split("/");
            var sum=record_day1[1]+'/'+record_day1[0]+'/'+record_day1[2];
            var current= month1+'/'+day1+'/'+year11;
            var current1= month1+'/'+day1+'/'+year2;
            var d1=new Date(current)
            var d2=new Date(current1)
            var record1 = new Date(sum);
            if(record1 > d1)
            {

                alert("Sorry ! Minors need parential guidance to use this website");
                document.getElementById('bday').blur();
                document.getElementById('bday').value="";
                document.getElementById('bday').focus();
                return false;
            }
        }
    }
</script>



<?php

require APPROOT. '/views/inc/footer.php';
?>
