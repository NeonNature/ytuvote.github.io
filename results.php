<?php
include('connect.php');


 $result = mysqli_query($connection, "SELECT voteCount FROM candidate");

    $can = array();

    while ($row = mysqli_fetch_array($result)) {
          array_push($can,$row['voteCount']);
    }
   

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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


</head>
<body>

<div class="container">
	<ul class="nav nav-tabs nav-justified">
  <li  class="active"><a data-toggle="tab" href="#donuttab">Donut</a></li>
  <li><a data-toggle="tab" href="#bartab">Horizontal Bar</a></li>
</ul>


  <div class="tab-content">
  <div id="donuttab" class="tab-pane fade in active">
  
      	<div class="row">
  			<div class="col-sm-6">   
        		<canvas id="presD" width="250" height="250"></canvas>
			</div>
			<div class="col-sm-6">   
        		<canvas id="secrD" width="250" height="250"></canvas>
			</div>
		</div>  
		<hr />
		<div class="row">
  			<div class="col-sm-6">   
        		<canvas id="lcprD" width="250" height="250"></canvas>
			</div>
			<div class="col-sm-6">   
        		<canvas id="acprD" width="250" height="250"></canvas>
			</div>
		</div>
		<hr />
	
	</div>
	<div id="bartab" class="tab-pane fade in">
		<br />
     <div class="row">
     	<div class="col-md-6">
        		<canvas id="presB" width="250" height="250"></canvas>
		</div>
		<div class="col-md-6">	  
        		<canvas id="secrB" width="250" height="250"></canvas>
		</div>
	</div>
		<hr />
		<div class="row">
     	<div class="col-md-6">
        		<canvas id="lcprB" width="250" height="250"></canvas>
		 </div>
     	<div class="col-md-6">
        		<canvas id="acprB" width="250" height="250"></canvas>
			</div>
		</div>
		<hr />
	
	
	</div>
</div>
</div>
</body>

<script>

    //---------------------------------------------------


/*
function type(){
if(document.getElementById('typecheck').checked){
    type = 'doughnut';
    charts();
}
else{
    type = 'horizontalBar';
    charts
};
};
*/


var type = "doughnut";
    
var D1 = new Chart(document.getElementById("presD"), {
    type: type,
    data: {
      labels: ["President 1", "President 2", "President 3"],
      datasets: [
        {
          label: "Vote Count",
          backgroundColor: ["#e74c3c", "#46BFBD","#FDB45C"],
          data: [<?php echo $can[0] ?>,<?php echo $can[1] ?>,<?php echo $can[2] ?>]
        }
      ]
    },
    options: {
    	maintainAspectRatio: false,
      title: {
        display: true,
        text: 'President'
      }

    }
});
   
//--------------------------------------------------

var D2 = new Chart(document.getElementById("secrD"), {
    type: type,
    data: {
      labels: ["Secretary 1", "Secretary 2", "Secretary 3"],
      datasets: [
        {
          label: "Vote Count",
          backgroundColor: ["#6ab04c", "#686de0","#e056fd"],
          data: [<?php echo $can[3] ?>,<?php echo $can[4] ?>,<?php echo $can[5] ?>]
        }
      ]
    },
    options: {
    	maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Secretary'
      }

    }
});

//-------------------------------------------------

var D3 = new Chart(document.getElementById("lcprD"), {
    type: type,
    data: {
      labels: ["LC President 1", "LC President 2", "LC President 3"],
      datasets: [
        {
          label: "Vote Count",
          backgroundColor: ["#05c46b", "#fa8231","#f7b731"],
          data: [<?php echo $can[6] ?>,<?php echo $can[7] ?>,<?php echo $can[8] ?>]
        }
      ]
    },
    options: {
    	maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Literature Club President'
      }

    }
});

//-------------------------------------------------

var D4 = new Chart(document.getElementById("acprD"), {
    type: type,
    data: {
      labels: ["AC President 1", "AC President 2", "AC President 3"],
      datasets: [
        {
          label: "Vote Count",
          backgroundColor: ["#0fb9b1", "#778ca3","#4b6584"],
          data: [<?php echo $can[9] ?>,<?php echo $can[10] ?>,<?php echo $can[11] ?>]
        }
      ]
    },
    options: {
    	legend: { display: false },
    	maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Art Club President'
      }

    }
});




//---------------------------------------

var B1 = new Chart(document.getElementById("presB"), {
    type: 'horizontalBar',
    data: {
      labels: ["President 1", "President 2", "President 3"],
      datasets: [
        {
          backgroundColor: ["#e74c3c", "#46BFBD","#FDB45C"],
          data: [<?php echo $can[0] ?>,<?php echo $can[1] ?>,<?php echo $can[2] ?>]
        }
      ]
    },
    options: {
    	//maintainAspectRatio: false,
    	responsive: true,
    	 legend: { display: false },

      title: {
        display: true,
        text: 'President'
      }

    }
});
   
//--------------------------------------------------

var B2 = new Chart(document.getElementById("secrB"), {
    type: 'horizontalBar',
    data: {
      labels: ["Secretary 1", "Secretary 2", "Secretary 3"],
      datasets: [
        {
          backgroundColor: ["#6ab04c", "#686de0","#e056fd"],
          data: [<?php echo $can[3] ?>,<?php echo $can[4] ?>,<?php echo $can[5] ?>]
        }
      ]
    },
    options: {
    	//maintainAspectRatio: false,
    	responsive: true,
    	 legend: { display: false },

      title: {
        display: true,
        text: 'Secretary'
      }

    }
});

//-------------------------------------------------

var B3 = new Chart(document.getElementById("lcprB"), {
    type: 'horizontalBar',

    data: {
      labels: ["LC President 1", "LC President 2", "LC President 3"],
      datasets: [
        {
          backgroundColor: ["#05c46b", "#fa8231","#f7b731"],
          data: [<?php echo $can[6] ?>,<?php echo $can[7] ?>,<?php echo $can[8] ?>]
        }
      ]
    },
    options: {
    	//maintainAspectRatio: false,
responsive: true,
 legend: { display: false },

      title: {
        display: true,
        text: 'Literature Club President'
      }

    }
});

//-------------------------------------------------

var B4 = new Chart(document.getElementById("acprB"), {
    type: 'horizontalBar',
    data: {
      labels: ["AC President 1", "AC President 2", "AC President 3"],
      datasets: [
        {
          backgroundColor: ["#0fb9b1", "#778ca3","#4b6584"],
          data: [<?php echo $can[9] ?>,<?php echo $can[10] ?>,<?php echo $can[11] ?>]
        }
      ]
    },
    options: {
    	 legend: { display: false },

    	//maintainAspectRatio: false,
    	responsive: true,
      title: {
        display: true,
        text: 'Art Club President'
      }

    }
});



</script>

</html>
