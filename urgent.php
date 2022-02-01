<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
 <div class="col-12">
          <div class="card">
            <div class="card-body">
              Welcome <?php echo $_SESSION['login_name'] ?>!
            </div>
          </div>
  </div>
  <hr>
  <?php
  $sql = $sql = "SELECT project_list.name, users.firstname, project_list.start_date, CONCAT(users.firstname,\" \",users.lastname) FROM project_list INNER JOIN users ON users.id=project_list.manager_id AND CURRENT_DATE= project_list.end_date  And project_list.status=!5 where CONCAT(users.firstname,\" \",users.lastname)='{$_SESSION['login_name']}' ";
?>
 <div class="container shadow p-5 text-centre bg-white rounded" margin-top="100px">       
        <table class="table table-hover bg-red">
          <thead class="thead-dark">
          <tr>
                <th scope="col">Client Name</th>
                <th scope="col">Prince Folk</th>
                <th scope="col">Start Date</th>
                <!-- <th scope="col">Email Address</th>
                <th scope="col">Message Received</th>
                <th scope="col">Action</th> -->
              </tr>
          </thead>
              <?php
              if($conn->connect_error){
                die("connection failed".$conn->connect_error);

              }
              $result= $conn->query($sql);
              if($result-> num_rows >  0){
                while($row=$result->fetch_assoc()){
                  echo "<tr><td >".$row["name"]."</td><td>".$row["firstname"]."</td><td>".$row["start_date"]."</td></tr>";
                }
                echo" </table>"; 
              }
                else{
                  echo"0 result";
                }
                $conn->close();          
              ?>
        </table>
              </div>
       </div>