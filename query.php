<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin portal</title>
    <link rel="stylesheet" href="query.css">

    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">

</head>
<body>
  <section id="sidebar">
 <div class="sidebar-logo">
     <h3> <i class="fa fa-hospital"></i><span> Paraheal Hospital</span></h3>
     </div>
     <div class="sidebar-menu">
         <ul>
             
             <li><a href="doctorinfo.php">Doctors</a></li>
             <li><a href="appointmentinfo.php"> Appointment History</a></li>
             <li><a href="query.php">Query History</a></li>
             <li><a href="emergencydata.php">Emergency</a></li>
             <li><a href="adminlogin.html">logout</a></li>
            
         </ul>
     </div>
 </div>
  </section>
  <section id="main-content">
<header class="main-header">
    <div class="header-left"> <h2> <i class="fa fa-bars"></i> <span> Query</span></h2></div>
    <div class="header-left"><h1>Paraheal Hospital</h1></div>
    <div class="header-left"><img src="image/download (4).jpg" alt="" class="img-responsive">
    <h2>Paraheal</h2>
        <p>admin</p></div>
<div class="clear"></div>
</header>
<div class="clear"></div>
<div class="main-content-info container">
    <div class="card-box"> <i class="fa fa-address-book fa-3x"></i> <h2>Query</h2></div>
    <div class="clear"></div>
    <div >
    <table border="3"width="100%"> 
        <tr><th><h4>Sr. No.</h4></th>
            <th><h4>Name</h4></th>
            <th><h4>email</h4></th>
            <th><h4>Phone</h4></th>
            <th><h4>Query</h4></th>
            <th><h4>Registerd time</h4></th>
            <th><h4>Action</h4></th>
        </tr>
        <?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hospital";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $query="select * from contact";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
    while($result=mysqli_fetch_assoc($data))
    {
    echo "<tr>
            <td>".$result['user_id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['query']."</td>
            <td>".$result['datetime']."</td>
            <td><a href=\"deletequery.php?use=$result[user_id]\"><input type='submit'value='Delete'></a></td>
            </tr>";
    }
    }
    else
    {
    echo "no record found";
    }
    ?>
    </table>
</div>
</section>

</body>
</html>