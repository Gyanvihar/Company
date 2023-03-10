<!doctype html>
<html class="no-js" lang="zxx">

<head>
  


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Salesforce Jobs</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->

  
</head>

<body>
  
  <div class="our-services ">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-tittle text-center">
            <!-- <span>FEATURED TOURS Packages</span> -->
            <h2>Data to be Displayed </h2>
            <!-- <p>List of Employer</p> -->
          </div>
        </div>
      </div>





      <table class="">
        <tr>

          <th name="first_name"> FirstName</th>
          <th name="last_name">LastName</th>
          <th name="company">Company</th>
          <th name="jobtype">Gender</th>
          <th name="link">Email</th>
          <th>password</th>
          <th>Number</th>

        </tr>
        <!-- $Lname=$_POST['last_name'];
  $link=$_POST['link'];
  $jobtype=$_POST['jobtype'];
  $company=$_POST['company' -->



        <?php

        // include "fetchdata.php"; 

        // or below

        include "connect.php";
        //$conn=mysqli_connect("localhost","root","","db_sms");


        $sql = " select * from registration";
        $res = mysqli_query($conn, $stmt);
        //$op='edit';

        if ($res->num_rows > 0) {

          while ($result = $res->fetch_assoc()) {

            echo '
        
        <tr>

      <td>   ' . $result['fname'] . '  </td>
      <td >' . $result['lname'] . ' </td>
      <td> ' . $result['gender'] . ' </td>
      <td> ' . $result['email'] . ' </td>
      <td >  ' . $result['password'] . ' </td>
      <td >  ' . $result['number'] . ' </td>
      <td>
      <a class="btn btn-primary" href="add.php?rn=$result[fname]">ADD </a> 
     
      </td>
    </tr>
    ';
            // echo  "<tr><td>".$row['id'].    "<td>".$row['name'].   "<td>".$row['LastName']. 
            //   "<td >"."<a href='update.php?rn=$row[id] & sn=$row[name] & sln=$row[LastName]'> Edit </a> " . "<td>".  "<a href='delete.php?rn=$row[id] & sn=$row[name] & sln=$row[LastName]'  onclick=' return checkdelete()'> Delete </a> " . "</tr>";
          }
        }




        ?>

      </table>
    </div>
  </div>

</body>

</html>





