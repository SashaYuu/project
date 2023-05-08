<?php 
session_start();
if(!isset($_SESSION['adminusername'])){
   header("Location:forum.php");
   exit();
}
?>











<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="forum.css"  href="style.css">
    <title>Admin Page</title>

<head>
<body>
<lax class= lax>
      <td><label for="adminnamn"></label>
      <input name="adminnamn" type="text"  class="formfield" maxlength= "50" id="adminnamn" Value= "<?php echo $_SESSION['adminusername']; ?>" readonly> </td>
    <?php    
    $db = mysqli_connect("localhost", "root", "", "forum");
    
    if (isset($_POST['delete'])) {
        // Get the user's id from the delete button's value attribute
        $user_id = $_POST['delete'];

        // Query to delete the user
        $query = "DELETE FROM forum WHERE namn = '{$user_id}'";

        // Execute the query, passing the database connection and the query
        $result = mysqli_query($db, $query);
    
        // Query to delete the user
        $query = "DELETE FROM forumm WHERE username = '{$user_id}'";
    
        // Execute the query, passing the database connection and the query
        $result = mysqli_query($db, $query);
    
        // Check if the query was successful
        if ($result) {
            // Print a success message
            echo "Successfully deleted user with id: $user_id";
        } else {
            // Print an error message
            echo "Failed to delete user: " . mysqli_error($db);
        }
    }
    // Query to select all users
    $query = "SELECT * FROM forumm";

    // Execute the query
    $result = mysqli_query($db, $query);

    // Check if the query was successful
    if ($result) {
        // Start a table tag
        echo "<table>";

        // Print the table headers
        echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Email</th>";
        echo "<th>Actions</th>";
        echo "</tr>";

        // Loop through the result and print each user
        while ($user = mysqli_fetch_assoc($result)) {
            echo "<form method=\"post\" action=\"admin_delete.php\"><tr>";
            echo "<td>" . $user['username'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<input type='hidden' name='delete' value='" . $user['username'] . "'>";
            echo "<td><button>delete</button></td>";
            echo "</td>";
            echo "</tr></form>";
        }
        echo "</table>";
    } else {
        echo "Failed to retrieve users: " . mysqli_error($db);
    }
    mysqli_close($db);
    ?>
<br>
<br>
<a href="admin_login.php">Logout</a>

</lax>








<!------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
session_start();
$connection = mysqli_connect("localhost", "user1", "secret");
$db = mysqli_select_db($connection, 'forum');
$query_run="";

if (isset ($_POST ['search']))
{
$namn = $_POST ['name'];
$query = "SELECT * FROM `forum` WHERE namn = '{$namn}' order by tid DESC";
$query_run = mysqli_query($connection,$query);
}
?>



<?php
if (isset ($_POST ['deletetid']) && isset ($_POST ['deleteuser'])){
$tid = $_POST ['deletetid'];
$name = $_POST ['deleteuser'];

$query = "DELETE FROM `forum` WHERE namn = '{$name}' and tid = '{$tid}'";
$query_run = mysqli_query($connection,$query);
$query = "SELECT * FROM `forum` WHERE namn = '{$name}' order by tid DESC";
 $query;
$query_run = mysqli_query($connection,$query);
}

?>



<main>
    <form action="admin_delete.php" method="post">
        <h1>Search user and delete posts</h1>
        <br>        

        <form name="users" method="POST" action="admin_delete.php">

        <div>
            <label for="name">Enter Username:</label>
            <input type="text" name="name" maxlength= "50"   placeholder= "Enter user"  ?>
        </div>
        <div class="button">    

         <input type="submit" name="search" value="Search">
</div>
    </form>

    <table>
  <tr>    
    <td><h4>Action</h4></td>
    <td><h4>Username</h4></td>
    <td><h4>Message</h4></td>
    <td><h4>Time</h4></td>
  </tr>
  <?php while ($row = mysqli_fetch_array($query_run)){  
    echo "<tr>
    <form action=\"admin_delete.php\" method=\"post\">
    <input type='hidden' name='deletetid' value='" . $row['tid'] . "'>
    <input type='hidden' name='deleteuser' value='" . $row['namn'] . "'>
    <td><button>delete</button></td>
    <td>". $row ['namn']."</td>
    <td>".  $row ['msg']."</td>   
    <td>".  $row ['tid']."</td></form></tr>";           

  }
     ?>   
     
</table>

<script>  
                function validation()  
                {  
                    var ms=document.f1.msg.value;  
 
                    if(ms=="") {  
                        document.getElementById("error").innerHTML="Please write something first!";  
                        return false;  
                    }  
                                              
                }  
            </script>  

</main>
</body>
</html>
