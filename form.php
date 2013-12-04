<!DOCTYPE HTML>
<html>
<head>
	<title>PHP Form Mailer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- CUSTOM STYLES -->
<style type="text/css">
	.controls.left{
		margin-left: 0;
	}
</style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body>

	<div class="container">
		<div class="span12">
	
        <div class="page-header">
            <h1>PHP Form Mailer</h1>
        </div>
<?php

		// check for a successful form post
		if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

		// check for a form error
		elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

?>

        <form method="POST" action="form-submission.php" class="form-horizontal">


<!-- ==============================================
		TEXT FIELD
============================================== -->
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" name="job_name" id="name" placeholder="Your Name">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="email">email</label>
                <div class="controls">
                    <input type="email" name="email" id="email" placeholder="Your Email">
                </div>
            </div>


<!-- ==============================================
		CHECKBOX MESSAGE
============================================== -->
			<div class="page-header">
	            <h2>Checkboxes</h2>
	        </div>

		        <label class="checkbox">
					<input type="checkbox" name="option_a" value="Yes">
				  	Option A
				</label>

		        <label class="checkbox">
					<input type="checkbox" name="option_b" value="Yes">
				  	Option B
				</label>

				<label class="checkbox">
					<input type="checkbox" name="option_c" value="Yes">
				  	Option C
				</label>
			</div>

<!-- ==============================================
		TEXT AREA MESSAGE
============================================== -->
			<div class="page-header">
	            <h2>Text Area</h2>
	        </div>			

	        <div class="control-group"> 
                <label class="control-label" for="message">Message</label>  
                <div class="controls left">
                    <textarea name="text_area" id="message" rows="8" class="message" placeholder="Your Message"></textarea>
                </div>
            </div>

<!-- ==============================================
		CHOOSE RECIPIENTS
============================================== -->            
	        <div class="page-header">
	            <h2>Order Recipients</h2>
	        </div>

				<label class="checkbox">
					<input type="checkbox" name="ron" value="Yes">
				  	Ron Burgandy 
				</label>

				<label class="checkbox">
					<input type="checkbox" name="brian" value="Yes">
				  	Brian Fantana
				</label>

				<label class="checkbox">
					<input type="checkbox" name="champ" value="Yes">
				  	Champ Kind 
				</label>

				<label class="checkbox">
					<input type="checkbox" name="brick" value="Yes">
				  	Brick Tamland
				</label>

<!-- ==============================================
		SUBMIT BUTTON
============================================== -->
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
            </div>
        </form>
        
    	</div> <!-- end span -->
    </div> <!-- end container -->


</body>
</html>
