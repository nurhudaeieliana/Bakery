<?php include ('config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from register where RegID = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection, $query));
    }

    else{
        header('location:customerList.php?delete_msg=You have deleted the record.');
    }
}
?>