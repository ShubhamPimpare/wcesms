<?php include("header.php"); ?>
<?php include("sidepanel.php"); ?>
<div class="page-container">
   <div class="main-content">
      <div class="container-fluid">
         <div class="page-header">
            <div class="card">
               <div class="card-body">
                  <h1 class="header-title">Change Password</h1>
                  <br>
                  <br>
                  <div class="row m-v-30">
                     <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                        <div class="p-v-25">
                           <form method="POST" action="app/change_passcrud.php">
                              <div class="form-group">
                                 <label class="control-label">Old  Password</label>
                                 <input id="password" type="text" class="form-control" name="opass" placeholder="Enter your password">
                              </div>
                              <div class="form-group">
                                 <label class=" control-label">New  Password</label>
                                 <input id="password" type="text" class="form-control" name="npass" placeholder="Enter your new password">
                              </div>
                              <div class="form-group">
                                 <label class="control-label">Confirm  Password</label>
                                 <input type="text" class="form-control" name="cpass" placeholder="Enter your password again">
                                 <br>
                              </div>
                              <br>
                              <br>
                              <button name="save" class="btn btn-success btn-lg">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer.php");?>