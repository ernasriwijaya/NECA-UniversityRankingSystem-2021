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
          <h3 class='text-center'>Add University</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">
            <br><br>
            <img src="https://img.icons8.com/doodle/96/000000/museum.png"/>
            <form class="" action="functions/addRankings.func.php" method="POST">
                <div class="form-group pt-3">
                  <label for="nationalrank">National Rank</label>
                  <input type="text" name="nationalrank"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="institution">Institution</label>
                  <input type="text" name="institution"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" name="Country"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="alumnirank">Alumni Employment Rank</label>
                  <input type="text" name="alumnirank"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="qualityrank">Quality of Education Rank</label>
                  <input type="text" name="qualityrank" class="form-control">
                </div>
                <div class="form-group">
                  <label for="research rank">Research Performance Rank</label>
                  <input type="text" name="researchrank" class="form-control">
                </div>
                <div class="form-group">
                  <label for="worldrank">World Rank</label>
                  <input type="text" name="worldrank" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="addrankings" class="btn btn-success">Add University</button>
                </div>


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
