
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
            <h1 class="h3">Users ::<a href="?page=add_user">Add User</a></h1>
          </header>
          <div class="row">

           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-block">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Si No</th>
                        <th>Full Nmae</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        $sql="SELECT * FROM spi_admin";
                        $query=mysqli_query($con, $sql);

                        while($userdata=mysqli_fetch_array($query)){
                        //print_r($userdata);

                      ?>

                      <tr>
                        <th><?php echo $userdata['id']?></th>
                        <td><?php echo $userdata['fname'].' '.$userdata['lname'];?></td>
                        <td><?php echo $userdata['email']?></td>
                        <td><?php echo $userdata['address']?></td>
                        <td><?php echo $userdata['phone']?></td>
                        <td><?php echo $userdata['status']?></td>
                        <td>
                          <a class="btn btn-success" href="#">Edit</a>
                          <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                     </tr>

                      <?php
                        }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
