<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect("localhost","root","","GTRAP");

// Check connection
if (!$conn) {$m=oci_error();
echo $m['message'],"\n";
exit;
}
else{

}
?> 

<html>
	<head>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
		    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/jumbotron-narrow.css" rel="stylesheet">
	<link href="css/justified-nav.css" rel="stylesheet">
	</head>
	<div class="container">
	<div class="masthead">
        <h2 class="text-muted"><center>G-TRAP</h2>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="home.html">Home</a></li>
            <li class="active"><a href="Results.php">Results</a></li>
			<li><a href="project.php">Project</a></li>
            <li><a href="Download.html">Downloads</a></li>
            <li><a href="ContactUs.html">Contact</a></li>
          </ul>
        </nav>
      </div>
	  
	  <br/><br/><br/><br/>
	<body>
	
	<?php $gene = $_POST["focusedInput"];
	  $type = $_POST["sel1"];
	  if(strcmp($type,"Gene")==0){
		  
		 $var=0;
	  }
	  if(strcmp($type,"Transcription")==0){
		  $var=1;
	  }
	  if(strcmp($type,"Splicing")==0){
		  $var=2;
	  }
	  if(strcmp($type,"Protein")==0){
		  $var=3;
	  }
	  if(strcmp($type,"Variations")==0){
		  $var=4;
	  }
	  if(strcmp($type,"Modification")==0){
		  $var=5;
	  }
		switch ($var)
		{
			case 0:
				 echo "<h3>"."<center>"."GENE"."</h3>";
					$sql = "select * from Gene where Gene_Symbol LIKE '$gene%'";
	  
					$result = $conn->query($sql);
					?>
					<div class="table-responsive">
						<table class="table table-striped">
					<thead>
                <tr>
                  <th>GENE ID</th>
				  <th>Gene Symbol</th>
				  <th>Gene Name</th>
				  <th>Chromosome</th>
				  <th>Family</th>
                </tr>
              </thead>
              <tbody>
				<?php
				while($row = $result->fetch_assoc()){
				?>
                <tr>
                  <td><?php echo $row["Gene_ID"] ?></td>
			      <td><?php echo $row["Gene_Symbol"] ?></td>
				  <td><?php echo $row["Gene_Name"] ?></td>
				  <td><?php echo $row["Chromosome_Pos"] ?></td>
				  <td><?php echo $row["Family_Name"] ?></td>
                </tr>
				
				<?php }
				?> 
              </tbody>
	
       </table>
      </div>
	  
<?php
					break;
			case 1:
				  	 
					echo "<h3>"."<center>"."Transcription Factors"."</h3>";
					$sql1 = "select * from Transcription where Gene_ID LIKE '$gene%'";
	  
					$result1 = $conn->query($sql1); 
	
	?>
					<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				
                  <th>TF ID</th>
				  <th>TF</th>
				  <th>Start site</th>
				  <th>End site</th>
				  
                </tr>
              </thead>
              <tbody>
				<?php
				while($row1 = $result1->fetch_assoc()){
				?>
                <tr>
                 
				  <td><?php echo $row1["Transcription_Factor_ID"] ?></td>
				  <td><?php echo $row1["TF"] ?></td>
				  <td><?php echo $row1["Start_Site"] ?></td>
				  <td><?php echo $row1["End_Site"] ?></td>
				  
                </tr>
				
				<?php }
				?>
              </tbody>
	
       </table>
      </div>
	<?php
				break;
		case 2:
			echo "<h3>"."<center>"."Splicing"."</h3>";
		$sql = "select Splice_ID,Gene_ID,Type,Protein_ID from Splicing where Gene_ID LIKE '$gene%'";
	  
	$result = $conn->query($sql); 
	
	?>
	<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Splice ID</th>
				  <th>Gene ID</th>
				  <th>Type</th>
				  <th>Protein_ID</th>
				  
                </tr>
              </thead>
              <tbody>
				<?php
				while($row = $result->fetch_assoc()){
				?>
                <tr>
                  <td><?php echo $row["Splice_ID"] ?></td>
			      <td><?php echo $row["Gene_ID"] ?></td>
				  <td><?php echo $row["Type"] ?></td>
				  <td><?php echo $row["Protein_ID"] ?></td>
				  
                </tr>
				
				<?php }
				?>
              </tbody>
	
       </table>
      </div>
	  
	  <?php
					break;
			case 3:
				  
	 
					echo "<h3>"."<center>"."Protein"."</h3>";
					$sql1 = "select Protein_ID,Protein_Name,Protein_Sequence
					from Protein where Protein_ID LIKE'$gene%'";
	  
					$result1 = $conn->query($sql1); 
	
	?>
					<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				
                  <th>Protein ID</th>
				  <th>Protein Name</th>
				  <th>Sequence</th>
				  
				  
                </tr>
              </thead>
              <tbody>
				<?php
				while($row1 = $result1->fetch_assoc()){
				?>
                <tr>
                 
				  <td><?php echo $row1["Protein_ID"] ?></td>
				  <td><?php echo $row1["Protein_Name"] ?></td>
				  <td><?php echo $row1["Protein_Sequence"] ?></td>
				 
				  
                </tr>
				
				<?php }
				?>
              </tbody>
	
       </table>
      </div>

	
	<?php
	break;
	case 4:
	
					echo "<h3>"."<center>"."Protein Variation"."</h3>";
					$sql1 = "select Protein_ID,Protein_Name,Variant,Sequence
					from Variation where Protein_ID LIKE'$gene%'";
	  
					$result1 = $conn->query($sql1); 
	
	?>
					<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				
                  <th>Protein ID</th>
				  <th>Protein Name</th>
				  <th>Variant</th>
				  <th>Sequence</th>
				  
                </tr>
              </thead>
              <tbody>
				<?php
				while($row1 = $result1->fetch_assoc()){
				?>
                <tr>
                 
				  <td><?php echo $row1["Protein_ID"] ?></td>
				  <td><?php echo $row1["Protein_Name"] ?></td>
				  <td><?php echo $row1["Variant"] ?></td>
				  <td><?php echo $row1["Sequence"] ?></td>
				 
				  
                </tr>
				
				<?php }
				?>
              </tbody>
	
       </table>
      </div>
	  <?php
	  break;
	  case 5:
	
					echo "<h3>"."<center>"."Protein Modification"."</h3>";
					$sql1 = "select Protein_ID,Protein_Name,Modification,Sequence
					from Modification where Protein_ID LIKE'$gene%'";
	  
					$result1 = $conn->query($sql1); 
	
	?>
					<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				
                  <th>Protein ID</th>
				  <th>Protein Name</th>
				  <th>Modification</th>
				  <th>Sequence</th>
				  
                </tr>
              </thead>
              <tbody>
				<?php
				while($row1 = $result1->fetch_assoc()){
				?>
                <tr>
                 
				  <td><?php echo $row1["Protein_ID"] ?></td>
				  <td><?php echo $row1["Protein_Name"] ?></td>
				  <td><?php echo $row1["Modification"] ?></td>
				  <td><?php echo $row1["Sequence"] ?></td>
				 
				  
                </tr>
				
				<?php }
				?>
              </tbody>
	
       </table>
      </div>
<?php
break;
		}

	?>
	
	
	
	  
		  
	<footer class="footer">
        <p>© School Of Informatics and Computing</p>
      </footer>  
	  
		
	</body>
</html>