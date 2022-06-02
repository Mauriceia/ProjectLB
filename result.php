<?php
    

$conn = mysqli_connect('localhost', 'root', '2BfmCmwFs21@', 'login');

if (!$conn){
    echo "Connection failed!";
}
 //$sql="select * from abc where user_name='".$_POST['user']."' and password='". $_POST['psw']."'";
$sql_code="SELECT * FROM lb_member";
     $result = mysqli_query($conn, $sql_code);
    
     ?>
<!DOCTYPE html>
<html>
<body>
    <table><tr><td>Member Name: </td><td>Name</td><td>EDIT</td><td>DELETE</td></tr>
    
    

<?php
     if(mysqli_num_rows($result)>0){
         
            while($row = mysqli_fetch_assoc($result)) {
      ?>
    <tr><td><?php echo $row['member_name'];?></td>
        <td><?php echo $row['email'];?></td><br />
        <a href="bookreport.php"></a>
        <td><a href="update.php?id=<?php echo $row['id'];?>">UpDate</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
        </tr>
    


    <?php
    }

     
    }

?>
    

        </table>
    </body>
</html>