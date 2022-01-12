<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addRakings'])) {

  $rankingAdd = $rankings->addNewRankingsByAdmin($_POST);
}

if (isset($rankingAdd)) {
  echo $raankingAdd;
}


 ?>

<link rel="stylesheet" href="assets/style.css">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>University Profile</h3>
        </div>
        <div class="cad-body">

            <div style="width:600px; margin:0px auto">

            <?php 
            include("config/database.php");

            $rankingID = intval($_GET["id"]);
            $sql = "SELECT * FROM tbl_rankings WHERE ranking_id = '$rankingID' ";
            $result = mysqli_query($conn, $sql);
        
            if($row = mysqli_fetch_assoc($result)) {
            ?>
            <form action="editProfile.php" method="POST">
                <div class="form-group pt-3">
                  <label for="nationalrank">National Rank</label>
                  <input type="text" name="nationalrank"  class="form-control" value="<?php echo $row["nationalrank"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="institution">Institution</label>
                  <input type="text" name="institution"  class="form-control" value="<?php echo $row["institution"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" name="Country"  class="form-control" value="<?php echo $row["country"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="alumnirank">Alumni Employment Rank</label>
                  <input type="text" name="alumnirank"  class="form-control" value="<?php echo $row["alumnirank"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="qualityrank">Quality of Education Rank</label>
                  <input type="text" name="qualityrank" class="form-control" value="<?php echo $row["qualityrank"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="research rank">Research Performance Rank</label>
                  <input type="text" name="researchrank" class="form-control" value="<?php echo $row["researchrank"]; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="worldrank">World Rank</label>
                  <input type="text" name="worldrank" class="form-control" value="<?php echo $row["worldrank"]; ?>" readonly>
                </div>

                <div class="form-group">
                  <a href="editUniversityProfile.php?id=<?php echo $row["ranking_id"]; ?>" name="addrankings" class="btn btn-success">Edit University</a>
                </div>
               
                <?php } ?>

            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index.php');



}
 ?>

  <?php
  include 'inc/footer.php';

  ?>
