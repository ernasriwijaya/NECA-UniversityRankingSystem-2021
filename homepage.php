<?php
include 'inc/header.php';


 ?>
      <div class="card ">
        <div class="card-header">
          <h3><i class="fas fa-home mr-2"></i>Malaysia University Rankings<span class="float-right"> <strong>
            <span class="badge badge-lg badge-secondary text-white">
<?php
$username = Session::get('username');
if (isset($username)) {
  echo $username;
}
 ?></span>
<link rel="stylesheet" href="assets/style.css">
          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-2">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th  class="text-center">National Rank</th>
                      <th  class="text-center">Institution</th>
                      <th  class="text-center">Country</th>
                      <th  class="text-center">Alumni Employment Rank</th>
                      <th  class="text-center">Quality of Education Rank</th>
                      <th  class="text-center">Research Performance Rank</th>
                      <th  class="text-center">World Rank</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include("config/database.php");
                    $sqlRankings = "SELECT * FROM tbl_rankings ORDER BY worldrank ASC";
                    $resultRankings = mysqli_query($conn, $sqlRankings);
                    
                    while($row = mysqli_fetch_assoc($resultRankings)) {
                    ?>
                    <tr>
                      <td><?php echo $row["nationalrank"]; ?></td>
                      <td><?php echo $row["institution"]; ?></td>
                      <td><?php echo $row["country"]; ?></td>
                      <td><?php echo $row["alumnirank"]; ?></td>
                      <td><?php echo $row["qualityrank"]; ?></td>
                      <td><?php echo $row["researchrank"]; ?></td>
                      <td><?php echo $row["worldrank"]; ?></td>
                    </tr>
                    <?php } ?>
                   
                  </tbody>
                  
                  <?php
                  include 'inc/footer.php';

                  ?>
