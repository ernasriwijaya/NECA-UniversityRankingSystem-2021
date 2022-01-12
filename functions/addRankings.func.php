<?php 

include("../config/database.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {


    $nationalRank = mysqli_real_escape_string($conn, $_POST["nationalrank"]);
    $institution  = mysqli_real_escape_string($conn, $_POST["institution"]);
    $Country      = mysqli_real_escape_string($conn, $_POST["Country"]);
    $alumnirank   = mysqli_real_escape_string($conn, $_POST["alumnirank"]);
    $qualityrank  = mysqli_real_escape_string($conn, $_POST["qualityrank"]);
    $researchrank = mysqli_real_escape_string($conn, $_POST["researchrank"]);
    $worldrank    = mysqli_real_escape_string($conn, $_POST["worldrank"]);


    if(empty($nationalRank)) {
        echo "<script>alert('Please Enter National Rank'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($institution)) {
        echo "<script>alert('Please Enter Institution'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($Country)) {
        echo "<script>alert('Please Enter Country'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($alumnirank)) {
        echo "<script>alert('Please Enter Alumni Rank'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($qualityrank)) {
        echo "<script>alert('Please Enter Quality Rank'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($researchrank)) {
        echo "<script>alert('Please Enter Research Rank'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($worldrank)) {
        echo "<script>alert('Please Enter World Rank'); window.history.go(-1);</script>";
        exit();
    }

    $sqlRankings = "SELECT * FROM tbl_rankings";
    $result      = mysqli_query($conn, $sqlRankings);

    while($row = mysqli_fetch_assoc($result)) {
        if($row["worldrank"] == $worldrank) {
            echo "<script>alert('World Ranking of Number $worldrank Already Exists.'); window.history.go(-1);</script>";
            exit();
        }
    }

    $sql = "INSERT INTO tbl_rankings (nationalrank, institution, country, alumnirank, qualityrank, researchrank, worldrank) 
    VALUES ('$nationalRank', '$institution', '$Country', '$alumnirank', '$qualityrank', '$researchrank', '$worldrank')";

    if(!mysqli_query($conn, $sql)) {
        echo "<script>alert('Add Rankings Failed.'); window.history.go(-1);</script>";
        exit();
    } else {
        echo "<script>alert('Add Rankings Successfully.'); window.location='../dashboard.php';</script>";
        exit();
    }

    mysqli_close($conn);
}


?>


