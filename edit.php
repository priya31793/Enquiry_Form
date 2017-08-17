
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Parents Queries</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Parents Enquiry Form <span class="red">.</span></a></h1>
                    </div>
                    <div class="links span8">
                        <a class="home" href="index.php" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="update.php" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                    </div>
                </div>
            </div>
        </div>
<?php

require 'connection.php';
$conn    = Connect();
$name=""; $email="";$add="";$city="";$state="";$feedback=""; $id="";
if(isset($_POST['update']))
{    
 
$id = $conn->real_escape_string($_POST['id']);
$name    = $conn->real_escape_string($_POST['name']);

$email    = $conn->real_escape_string($_POST['email']);

$add    = $conn->real_escape_string($_POST['add']);

$city   = $conn->real_escape_string($_POST['city']);

$state = $conn->real_escape_string($_POST['state']);

$feedback = $conn->real_escape_string($_POST['feedback']);
if(empty($name) || empty($email) || empty($feedback)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
       // if(empty($feedback)) {
         //   echo "<font color='red'>Feedback field is empty.</font><br/>";
        //}
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    }
	else {  


$query   = "update student set name='$name',email='$email',address='$add',city='$city',state='$state' WHERE id=$id";
$success = $conn->query($query);
header("Location: update.php");
	}
}
?>
<?php
//getting id from url

$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = "SELECT * FROM student WHERE id=$id";
$query = mysqli_query($conn, $result);

  while($res = mysqli_fetch_array($query)) {


    $name = $res['name'];
    $email = $res['email'];
    $add = $res['address'];
	    $city = $res['city'];
		    $id = $res['id'];

		    $state = $res['state'];
		    //$feedback = $res['feedback'];

}
?>
        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="assets/img/iphone.png" alt="">
                </div>
                <div class="register span6">
                      <form name="form1" method="post" action="edit.php">
					  <h2>  <span class="red"><strong>Update Your Info</strong></span></h2>
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
			<tr> 
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="add" value="<?php echo $add;?>"></td>
            </tr>
			<tr> 
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
			<tr> 
                <td>State</td>
                <td><input type="text" name="state" value="<?php echo $state;?>"></td>
            </tr>
            <!--<tr> 
                <td>Feedback</td>
                <td><input type="text" name="feedback" value="<?php echo $feedback;?>"></td>
            </tr>-->
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

                <td><button type="submit" name="update" value="Update">Update</button></td>
            </tr>
        </table>
    </form>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

