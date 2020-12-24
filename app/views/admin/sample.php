<?php

require APPROOT . '/views/inc/header.php';

function calcutateAge($dob){

    $dob = date("Y-m-d",strtotime($dob));

    $dobObject = new DateTime($dob);
    $nowObject = new DateTime();

    $diff = $dobObject->diff($nowObject);

    echo $diff->y;

}
?>

    <div class="modal fade" id="modal-more" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">More Information Employer</h4>
                    <button type="button" class="close" id="myButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                         <div class="row">

                             <div class="col col-md-6">
                                 <table class="table table-responsive-md table-striped">
                                 <tr>
                                     <th>Full name:</th>
                                     <td><?php echo $data['more']->name ?></td>
                                 </tr>
                                 <tr>
                                     <th>Sex:</th>
                                     <td><?php echo $data['more']->sex ?></td>
                                 </tr>
                                 <tr>
                                     <th>Age:</th>
                                     <td><?php
                           calcutateAge($data['more']->dob);
                                         ?></td>
                                 </tr>
                                 <tr>
                                     <th>Phone Number:</th>
                                     <td><?php echo $data['more']->phone ?></td>
                                 </tr>
                                     <tr>
                                         <th>Address:</th>
                                         <td><?php echo $data['more']->phone ?></td>
                                     </tr>
                                     <tr>
                                         <th>Status:</th>
                                         <td><?php
                                             if ($data['more']->active == 0){
                                                 echo "Not available ";
                                             }
                                             else
                                                 echo "Available";
                                              ?></td>
                                     </tr>
                                 </table>
                             </div>


                             <div class="col col-md-6">
                                 <table class="table table-responsive-md table-striped">
                                     <tr>
                                         <th>Educational Status:</th>
                                         <td><?php echo $data['more']->edu_status ?></td>
                                     </tr>
                                     <tr>
                                         <th>Profession:</th>
                                         <td><?php echo $data['more']->profession ?></td>
                                     </tr>
                                     <tr>
                                         <th>Salary:</th>
                                         <td><?php echo $data['more']->salary ?></td>
                                     </tr>
                                     <tr>
                                         <th>Photo:</th>
                                         <td><?php echo $data['more']->name ?></td>
                                     </tr>
                                 </table>
                             </div>
                         </div>



                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" id="myButton1" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
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

<?php require APPROOT . '/views/inc/footer.php'; ?>