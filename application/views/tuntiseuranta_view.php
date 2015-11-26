<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tuntiseuranta</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>

<div id="container" align="center" style="padding:10px;
						   width:700px;
  						   margin-left: auto;
  						   margin-right: auto;
						   width:30%;
						   ">
	<h1>Tuntiseuranta</h1><br>

	<style>
	#button{
		  display: inline-block;
  		  vertical-align: middle;
		  -webkit-transform: translateZ(0);
		  transform: translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		  -moz-osx-font-smoothing: grayscale;
		  overflow: hidden;
		  -webkit-transition-duration: 0.5s;
		  transition-duration: 0.5s;
		  -webkit-transition-property: color, background-color;
		  transition-property: color, background-color;
	}
	#button:hover, #button:focus, #button:active{
		  transform:scale(1.1);
		  -webkit-animation-name: hvr-back-pulse;
		  animation-name: hvr-back-pulse;
		  -webkit-animation-duration: 1s;
		  animation-duration: 1s;
		  -webkit-animation-delay: 0.5s;
		  animation-delay: 0.5s;
		  -webkit-animation-timing-function: linear;
		  animation-timing-function: linear;
		  -webkit-animation-iteration-count: infinite;
		  animation-iteration-count: infinite;
		  background-color: #2098d1;
		  background-color: #2098d1;
		  color: white;
	}

	.error {
		color:red;
		text-align:center;
	}



	</style>


	

	<?php

	echo form_open('tuntiseuranta/form_validation', array('name' => 'myform'));

 	echo "<p>Aloitus: ";
	$data = array(
		  'name'        => 'Aloitus',
          'id'          => 'Aloitus',
          'placeholder' => 'MM/DD/YYYY'
        );
	echo form_input($data);
	echo "</p>";

	echo "<p>Lopetus: ";
	$data2 = array(
			'name' 		  => 'Lopetus',
			'id' 		  => 'Lopetus',
			'placeholder' => 'MM/DD/YYYY'
		);
	echo form_input($data2);
	echo "</p>";

	echo "<p>Tyoaika: ";
	$data3 = array(
			'name'		  => 'Tyoaika',
			'id' 		  => 'Tyoaika',
			'placeholder' => ''
		);
	echo form_input($data3);
	echo "</p>";

	echo "<p>Raportti: ";
	$data4 = array(
			'name'		  => 'Raportti',
			'id' 		  => 'Raportti',
			'placeholder' => ''
		);
	echo form_input($data4);
	echo "</p>";

	echo "<p>Projekti: ";
	$data5 = array(
			'name' 		  => 'Projekti',
			'id' 		  => 'Projekti',
			'placeholder' => ''
		);
	echo form_input($data5);
	echo "</p>";

	echo "<p>";
	$data6 = array(
			'name'   => 'Tallenna',
			'class'  => 'btn btn-primary btn-lg',
			'id'     => 'button'   
		);
	echo form_submit('submit', 'Tallenna', $data6);
	echo "</p>";

	echo form_error('Aloitus');
	echo form_error('Lopetus');
	echo form_error('Tyoaika');
	echo form_error('Raportti');
	echo form_error('Projekti');

	//echo validation_errors('<p class="error">'); 

	echo form_close();

	?>

</div>


</body>
</html>

