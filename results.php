<?php
include('connect.php');


 $result = mysqli_query($connection, "SELECT voteCount FROM candidate");

    $can = array();

    while ($row = mysqli_fetch_array($result)) {
          array_push($can,$row['voteCount']);
    }
    $c=mysqli_num_rows($result);
    for ($i=0; $i < $c; $i++) { 
        echo $can[i];
    }

print_r($can);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>YTU Voting Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
</head>
<body>

<div class="container">

  <div class="row">
    <div class="col-sm-4">
        <canvas id="pres" width="400" height="400"></canvas>

    </div>
    <div class="col-sm-8">
        President 1 - <?php echo $pres1 ?>
        President 2 - <?php echo $pres2 ?>
        President 3 - <?php echo $pres3 ?>
    </div>
  </div>

 
</div>

</body>

<script>
  $(document).ready(function() {

    //---------------------------------------------------

    var pres1 = "<?php echo $pres1 ?>";
    var pres2 = "<?php echo $pres2 ?>";
    var pres3 = "<?php echo $pres3 ?>";


	var pres = "pres";
  var presDONUT = new Chart(pres, {
    type: 'doughnut',
    data: {
                    datasets: [{
                        data: ['pres1', 'pres2', 'pres3']
                    }],
                
                   labels: [
                       'Chit Poat 1',
                       'Chit Poat 2',
                       'Chit Poat 3'
    ]
};

    ,
    options: options
  });


  //--------------------------------------------------------------------------




}
</script>

</html>
