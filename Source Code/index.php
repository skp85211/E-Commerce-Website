<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">
 
	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner21.png" alt="First slide">
		                  </div>
		  
		                </div>
		            
		            </div>
		             
	        	</div>
	        	<div class="col-sm-3" style="background-color:lightgreen; border-radius: 20px; padding-bottom: 20px;
	        						padding-top: 20px; box-shadow: 5px 10px lightgray;	">
	        		<div style="color: white;font-size: 20px;font-family: FontAwesome"><b>PROJECT PREPARED BY :-</b>
	        		<hr><div style="color: green; font-size: 17px; ">
	        			<I>Naman Agarwal - 9917103069</I>
	        			<br>
	        			<I>Shashank Sharma - 9917103070 </I><br>
	        			<I>Sunny Kumar Pathak - 9917103095</I><br>
	        			<I>Nipun Dang - 9917103097</I>
	        		</div>
	        		</div>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>