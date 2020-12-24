<?php
/**
 * Created by PhpStorm.
 * User: Yibie
 * Date: 4/5/2020
 * Time: 8:09 AM
 */

require APPROOT . '/views/inc/header.php';
?>
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

    <div class="modal fade" id="modal-more" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">More Information Employer</h4>
                    <button type="button" class="close" id="myButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                    <form method="post" action="<?php echo URLROOT; ?>/Cadmin/addEmp">
                        <div class="modal-body">
                        <div class="row">

                                <label for="name">Full Name<sup>*</sup></label>
                                <input type="text" name="name" required class="form-control"  value="<?php echo $data['more']->name;?>">
                                <span class="invalid-feedback"></span>



                        </div>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sex">Sex<sup>*</sup></label>
                                <select name="sex" class="custom-select" value="<?php echo $data['more']->sex;?>" required>
                                    <option selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="sex">Date Of Birth<sup>*</sup></label>
                                <input type="date" class="form-control" name="dob" value="<?php echo $data['more']->dob;?>" required>
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
                                <input type="number" class="form-control" value="<?php echo $data['more']->phone;?>" name="phone" required>
                            </div>
                            <div class="col-3">
                                <label for="sex">Current Status</label>
                                <select name="status" value="<?php echo $data['more']->active;?>" class="custom-select">
                                    <option value="1">Active</option>
                                    <option value="0"> Inactive</option>
                                </select>
                            </div>

                        </div>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="sex">woreda<sup>*</sup></label>
                                <select class="custom-select">
                                    <option selected>Select Grade</option>
                                    <option value="1">8</option>
                                    <option value="1">9</option>
                                    <option value="1">10</option>
                                    <option value="1">11</option>
                                    <option value="1">12</option>
                                    <option value="1">higher Education</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Zone<sup>*</sup></label>
                                <select class="custom-select">
                                    <option selected>Select Grade</option>
                                    <option value="1">8</option>
                                    <option value="1">9</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Region<sup>*</sup></label>
                                <select class="custom-select" name="reg_id">
                                    <option selected>Select Grade</option>
                                    <option value="1">8</option>
                                    <option value="1">9</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="sex">Country<sup>*</sup></label>
                                <select class="custom-select" name="cont_id" required>
                                    <option selected>Select Grade</option>
                                    <option value="1">8</option>
                                    <option value="1">9</option>

                                </select>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="salary"> Salary<sup>*</sup></label>
                                <input type="number" required class="form-control form-inline" value="<?php echo $data['more']->salary;?>"  name="salary">
                            </div>
                            <div class="col-md-4">
                                <label for="salary"> Profession<sup>*</sup></label>
                                <input type="text" class="form-control form-inline" value="<?php echo $data['more']->profession;?>" required name="pro">
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
                                </select>
                            </div>
                        </div>
                        <hr class="bg-danger"/>









                </div>
                <div class="modal-footer justify-content-end">
                    <input type="submit" value="Edit" class="btn btn-primary" name="reg">
                    <button type="button" id="myButton1" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
                    </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#modal-more").modal('show');
    });
    document.getElementById("myButton").onclick = function () {
        location.href = "<?php echo URLROOT;?>/cadmin/employee";
    };
    document.getElementById("myButton1").onclick = function () {
        location.href = "<?php echo URLROOT;?>/cadmin/employee";
    };

</script>

<?php

require APPROOT . '/views/inc/footer.php';
?>