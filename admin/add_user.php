
      <div class="breadcrumb-holder">   
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Charts</li>
          </ul>
        </div>
      </div>
      <section class="charts">
        <div class="container-fluid">
          <header> 
            <h1 class="h3">Add User ::<a href="?page=users">See User</a></h1>
          </header>
          <div class="row">

           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-block">

                  <?php
                    if (isset($_POST['submit'])) {
                      //print_r($_POST);
                      $fname=mysqli_real_escape_string($con,$_POST['fname']);
                      $lname=mysqli_real_escape_string($con,$_POST['lname']);
                      $uname=mysqli_real_escape_string($con,$_POST['uname']);
                      $email=mysqli_real_escape_string($con,$_POST['email']);
                      $password=mysqli_real_escape_string($con,$_POST['password']);
                      $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
                      $phone=mysqli_real_escape_string($con,$_POST['phone']);
                      $address=mysqli_real_escape_string($con,$_POST['address']);
                      $status=mysqli_real_escape_string($con,$_POST['status']);
                     //print_r($_POST);

                      if($password!=$cpassword){
                         echo '
                             <div class="alert alert-danger alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span    aria-hidden="true">&times;</  span></button>
                             <strong>Error!</strong>Your Password And Confirm Password Not Mach!</div>';
                      }else{

                        $sql="INSERT INTO `spiphp_project`.`spi_admin` (`fname`, `lname`, `username`, `email`, `password`, `phone`, `address`, `status`) VALUES ($fname,$lname, $uname,$email,$password,$phone,$address,$status,)";
                        $query=mysqli_query($con,$sql);
                        //print_r($query);
                        if ($query) {
                          echo '
                             <div class="alert alert-success alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span    aria-hidden="true">&times;</  span></button>
                             <strong>success!</strong>Your Registration Successfully Compleate!</div>';
                        }else{
                          echo '
                             <div class="alert alert-danger alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span    aria-hidden="true">&times;</  span></button>
                             <strong>Error!</strong>Your Registration Not Successfully Compleate!</div>';
                        }
                      }

                    }
                  ?>

                  <form action="" method="POST">
                    <table class="table table-striped table-hover">
                      <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="fname" id="fname"></td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lname" id="lname"></td>
                      </tr>
                      <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" id="uname"></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" id="email"></td>
                      </tr>
                      <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password"></td>
                      </tr>
                      <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="cpassword" id="password"></td>
                      </tr>
                      <tr>
                        <td>Phone:</td>
                        <td><input type="text" name="phone" id="phone"></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><textarea name="address"></textarea></td>
                      </tr>
                      <tr>
                        <td>Status:</td>
                        <td>
                          <select name="status">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <input type="submit" name="submit" id="submit" value="Submit">
                          <input type="reset" name="reset" id="reset" value="Reset">

                        </td>
                      </tr>
                   
                   </table>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
