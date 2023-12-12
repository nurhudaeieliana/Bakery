<?php include ('config.php');




if(isset($_GET['id'])){
    $id = $_GET['id'];


    $query = "delete from product where id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection, $query));
    }

    else{
        header('location:productadmin.php?delete_msg=You have deleted the record.');
    }
}
?>