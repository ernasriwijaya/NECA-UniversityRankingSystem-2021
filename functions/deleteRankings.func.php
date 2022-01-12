<?php 


include("../config/database.php");

$rankingID = intval($_GET["id"]);
$sqlDelete = "DELETE FROM tbl_rankings WHERE ranking_id = '$rankingID' ";

if(!mysqli_query($conn, $sqlDelete)) {
    echo "<script>alert('Delete University Ranking Failed.'); window.history.go(-1);</script>";
    exit();
} else {
    echo "<script>alert('Delete University Ranking Successfully.'); window.location='../dashboard.php';</script>";
    exit();
}

mysqli_close($conn);


?>