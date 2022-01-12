<?php 

include("../config/database.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $rankingID    = mysqli_real_escape_string($conn, $_POST["ranking_id"]);
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

    $sql = "UPDATE tbl_rankings SET nationalrank = '$nationalRank', institution = '$institution', country = '$Country', 
    alumnirank = '$alumnirank', qualityrank = '$qualityrank', researchrank = '$researchrank', 
    worldrank = '$worldrank' WHERE ranking_id = '$rankingID'" ; 

    if(!mysqli_query($conn, $sql)) {
        echo "<script>alert('Update University Profile Failed.'); window.history.go(-1);</script>";
        exit();
    } else {
        echo "<script>alert('Update University Profile Successfully.'); window.location='../editUniversityProfile.php?id=$rankingID';</script>";
        exit();
    }

    mysqli_close($conn);
}


?>


