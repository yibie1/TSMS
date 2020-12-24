
<?php

if ($_SESSION['role'] == 'officer' ) {
    ?>

    <?php require_once  APPROOT . '/views/inc/header.php'; ?>
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
<?php

function calcutateAge($dob){

    $dob = date("Y-m-d",strtotime($dob));

    $dobObject = new DateTime($dob);
    $nowObject = new DateTime();

    $diff = $dobObject->diff($nowObject);

    echo $diff->y;
}


?>
        <nav class="navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can

                                    </p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"></span>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-edit"></i> Update Profile

                        </a>
                        <a href="<?php  echo URLROOT;?>/users/logout" class="dropdown-item">
                            <i class="fas fa-users mr-lg-0"></i> Logout

                        </a>
                        <div class="dropdown-divider"></div>

                </li>
            </ul>
        </nav>
        <div class="card card-dark card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Licence Applicant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Number plate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent" style="padding-left: 50px; padding-right: 40px">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                        <div class="row">
                            <div class="col-md-2 small-box bg-light">
                                <div class="inner">


                                    <p> Add new Applicant</p>

                                </div>
                                <div class="icon">
                                    <i class="fa fa-plus-square"></i>

                                </div>

                                <a href="#" class="small-box-footer bg-success" data-toggle="modal" data-target="#modal-lg">ADD <i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Applicant</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Sex</th>
                                        <th>Educational Status</th>
                                        <th>Health Status</th>
                                        <th>Age</th>
                                        <th>Woreda</th>
                                        <th>Zone</th>
                                        <th>Region</th>
                                        <th>Country</th>
                                        <th >Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($data['shows'] as $show) : ?>
                                        <tr>
                                            <td class="gfgusername"><?php echo $show->id; ?></td>
                                            <td><?php echo $show->name; ?></td>
                                            <td><?php echo $show->sex; ?></td>
                                            <td><?php echo $show->edu_status; ?></td>
                                            <td><?php echo $show->health_status; ?></td>
                                            <td><?php calcutateAge($show->dob); ?></td>
                                            <td>worda</td>
                                            <td>z</td>
                                            <td>r</td>
                                            <td>c</td>


                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-success gfgselect " data-toggle="modal" data-target="#modal-appo">Apo <span class="fa fa-book-medical"></span></a>
                                                <a href="<?php echo URLROOT;?>/cadmin/edit/<?php echo $show->id?>"  class="btn btn-sm btn-outline-warning" >Edit  <span class="fas fa-edit"></span></a>
                                            </td>


                                        </tr>
                                    <?php endforeach;


                                    ?>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

    <div class="modal fade" id="modal-appo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Make Appointment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="<?php echo URLROOT;?>/Cofficer/appo">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                       <hr class="bg-danger"/></h1
                        <div class="row"
                        <div class="col-md-12">
                            <input type="hidden" id="divGFG" name="userid">
                            <label for="name">Return Date</label>
                            <input type="datetime-local" name="date" class="form-control" id="datepicker">
                        </div>
                        </div>




                <div class="modal-footer justify-content-start">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Save" class="btn btn-primary" name="reg">
            </div>

                    </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Add New Applicant</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo URLROOT; ?>/Cofficer/regigster">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">First Name<sup>*</sup></label>
                                <input type="text" name="name" required class="form-control">
                                <span class="invalid-feedback"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="name">Last Name<sup>*</sup></label>
                                <input type="text" name="lname" required class="form-control">
                                <span class="invalid-feedback"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="name">Grand Name<sup>*</sup></label>
                                <input type="text" name="gname" required class="form-control">
                                <span class="invalid-feedback"></span>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Health Status<sup>*</sup></label>
                                <input type="text" name="health_status"  required class="form-control">
                                <span class="invalid-feedback"></span>
                            </div>
                            <div class="col-md-4">
                                <label for="sex">Date Of Birth<sup>*</sup></label>
                                <input type="date" class="form-control" name="dob" required>
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
                            <div class="col-md-4">
                                <label for="sex">Sex<sup>*</sup></label>
                                <select name="sex" class="custom-select" required>
                                    <option selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                        </div>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="sex">woreda<sup>*</sup></label>
                                <select class="custom-select" name="w">
                                    <option selected>Select Worda</option>
                                    <?php foreach ($data['w'] as $c): ?>
                                        <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Zone<sup>*</sup></label>
                                <select class="custom-select" name="z">
                                    <option selected>Select Zone</option>
                                    <?php foreach ($data['z'] as $c): ?>
                                        <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                    <?php endforeach; ?>


                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Region<sup>*</sup></label>
                                <select class="custom-select" name="r">
                                    <option selected>Select Region</option>
                                    <?php foreach ($data['r'] as $c): ?>
                                        <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Country<sup>*</sup></label>
                                <select class="custom-select" name="c" required>
                                    <option selected>Select Country</option>
                                    <?php foreach ($data['clist'] as $c): ?>
                                        <option value="<?php echo $c->id?>"> <?php echo $c->name;?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                        <hr class="bg-primary">

                        <hr class="bg-danger"/>
                        <div class="modal-footer justify-content-between">
                        <input type="reset" class="btn btn-danger" value="Reset">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Register" class="btn btn-primary" name="reg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">


      <div class="row">
          <div class="col-md-6 small-box bg-light">
              <div class="inner">


                  <p> Add new Vehicles</p>

              </div>
              <div class="icon">
                  <i class="fa fa-car"></i>

              </div>

              <a href="#" class="small-box-footer bg-success" data-toggle="modal" data-target="#modal-ve">ADD <i class="fas fa-plus-circle"></i></a>
          </div>
      </div>


      <div class="card">
          <div class="card-header">
              <h3 class="card-title">New Applicant</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Sex</th>
                      <th>Educational Status</th>
                      <th>Health Status</th>
                      <th>Age</th>
                      <th>Woreda</th>
                      <th>Zone</th>
                      <th>Region</th>
                      <th>Country</th>
                      <th >Status</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach($data['shows'] as $show) : ?>
                      <tr>
                          <td class="gfgusername"><?php echo $show->id; ?></td>
                          <td><?php echo $show->name; ?></td>
                          <td><?php echo $show->sex; ?></td>
                          <td><?php echo $show->edu_status; ?></td>
                          <td><?php echo $show->health_status; ?></td>
                          <td><?php calcutateAge($show->dob); ?></td>
                          <td>worda</td>
                          <td>z</td>
                          <td>r</td>
                          <td>c</td>


                          <td class="btn btn-group-sm">
                              <a href="#" class="btn btn-sm btn-outline-success gfgselect " data-toggle="modal" data-target="#modal-appo">Apo <span class="fa fa-book-medical"></span></a>
                              <a href="<?php echo URLROOT;?>/cadmin/edit/<?php echo $show->id?>"  class="btn btn-sm btn-outline-warning" >Edit  <span class="fas fa-edit"></span></a>
                          </td>


                      </tr>
                  <?php endforeach;


                  ?>

                  </tbody>

              </table>
          </div>
          <!-- /.card-body -->
      </div>


                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">



                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Appointment </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Description</th>
                                        <th>Appointed date</th>
                                        <th>Return Date</th>
                                        <th >Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($data['appo'] as $show) : ?>
                                        <tr>
                                            <td><?php echo $show->aid; ?></td>
                                            <td><?php echo $show->name; ?></td>

                                            <td><?php echo $show->description; ?></td>
                                            <td><?php echo $show->apdate; ?></td>
                                            <td><?php echo $show->rdate; ?></td>



                                            <td>

                                                <a href="<?php echo URLROOT;?>/cofficer/delete/<?php echo $show->aid?>"  class="btn btn-sm btn-outline-danger" >Delete Appointment  <span class="fas fa-edit"></span></a>
                                            </td>


                                        </tr>
                                    <?php endforeach;


                                    ?>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">




                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>


    </div>

    <?php require_once  APPROOT . '/views/inc/footer.php'; ?>
    <?php

}else{
    redirect('users/login');
}
?>
<script>
    mobiscroll.datepicker('#datepicker', {
        controls: ['calendar'],
        min: '1920-01-01',
        max: '2050-01-01T12:00'
    });
</script>
 <script>
                $(function () {
                    // ON SELECTING ROW
                    $(".gfgselect").click(function () {
                        //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
                        var a =$(this).parents("tr").find(".gfgusername").text();

                        var p = "";
                        // CREATING DATA TO SHOW ON MODEL
                        p += "<p id='a' name='GFGusername' >GFG UserHandle: "
                            + a + " </p>";
                        document.getElementById('divGFG').value = a;

                        p +="<p id='e' name='GFGcoding' >GFG Article: "
                            + e + " </p>";
                        //CLEARING THE PREFILLED DATA
                        $("#divGFG").empty();
                        //WRITING THE DATA ON MODEL
                        $("#divGFG").append(p);
                    });
                });
            </script>
