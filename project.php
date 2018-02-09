<!DOCTYPE html>
<?php
// Create connection
$conn = mysqli_connect("localhost","root","");

// Check connection
if (!$conn) {$m=oci_error();
echo $m['message'],"\n";
exit;
}
else{

}
?> 
<html lang="en">
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
        <h2 class="text-muted">G-TRAP</h2>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="home.html">Home</a></li>
            <li class="active"><a href="project.php">Project</a></li>
            <li><a href="Download.html">Downloads</a></li>
            <li><a href="ContactUs.html">Contact</a></li>
          </ul>
        </nav>
      </div>
	  <br/><br/><br/><br/>
		  
	  <form class = "form-inline" role = "form" action = "Results.php" method = "post">
	  <div class = "form-group">
	  <label for = "focusedInput"> <h4> Enter ID: </h4> </label>
	  <input class = "form-control" name = "focusedInput" id = "focusedInput" type = "text">
	  <input class = "form-control" id = "focusedInput1" type = "submit">
	  <!--<button class = "btn btn-default" type = "button"> Go! </button> <br/>-->
	  <br/>
	  <label for = "sel1" > <h4> Retrieve Info: </h4> </label>
	  <select class = "form-control" name = "sel1" id = "sel1">
	  <option> Gene (ID or Symbol)</option>
	  <option> Transcript (ENSG ID)</option> 
	  <option> Splicing (ENSG ID)</option>
	  <option> Protein (PROTEIN ID)</option>
	  <option> Variations(P ID)  </option>
	  <option> Modification(P ID) </option>
	  </select>
	  </form>
	  </div>
</script>

	  <br/><br/>
		 <h4>NOTE</h4>
  <h5></h5>  
<h5>Please use gene symbol/ENSG ID for gene information retrieval and then copy its ENSG ID for further search.<br/>Please use Protein ID for retrieving protein information (Protein ID available from Splice information)</h5>
<br/><br/><h4>Dataset Information</h4>
<h5>Gene Data is retrieved from <a href="http://www.ensembl.org/index.html">ENSEMBL database</a> that include human genome data release 84.<br/>
Transcription factors data is retrieved from <a href="http://www.transcriptionfactor.org/index.cgi?Home">TF database</a> and <a href="http://www.pazar.info/cgi-bin/index.pl">PAZAR database</a>.<br/>
Splicing factors and splicing sites data has been retrieved from <a href="http://193.206.120.249/splicing_tissue.html">SpliceAid database</a>.<br/>
Protein data has been retrieved from <a href="http://www.uniprot.org/">Uniprot database</a>.</h5>
  
        <div><footer class="footer">
		<p class="style32" align="center"><a href="http://soic.iupui.edu/" class="style19"><img src="logo.png" alt="logoarea"/></a></p>
        <p><center>SCHOOL OF INFORMATICS AND COMPUTING, IUPUI</center></p>
      </footer>
	  </div>
     
  </body>
</html>