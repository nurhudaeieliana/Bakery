<?php include ('config.php');




if(isset($_GET['id'])){
    $RegID = $_GET['id'];


    $query = "delete from register where RegID = '$RegID'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection, $query));
    }

    else{
        header('location:customerlist.php?delete_msg=You have deleted the record.');
    }
}

// $query = "delete from 'register' where id"

?>

// $custID = $_POST['RegID'];

// $arahan_sql= "DELETE FROM register WHERE RegID=$RegID";
// if(mysqli_query($conn,$arahan_sql)) {
//     echo "Data deleted successfully.";
// } else {
//     echo "Error deleting data: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>