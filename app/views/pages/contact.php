<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="strategy-session-page mt-5">
	<!-- Header -->
	<section id="header">	
		<div class="container">
			<div class="row">
		    	<div class="col-sm text-center">
		      		<h1>Schedule Your Free Strategy Session Now</h1>
		    	</div>
		  	</div>
			<div class="row">
		    	<div class="col-lg-10 text-center sub-head">
		      		<h3>Please wait for our scheduler to load...</h3>
		    	</div>
	  		</div>	
	</section>


	<!-- Scheduler -->
	<section id="scheduler">	
		<div class="container">
		  <div class="row justify-content-center">
		    <div class="col-8">
				<!-- Calendly inline widget begin -->
				<div class="calendly-inline-widget" data-url="https://calendly.com/paulmiller3000" style="min-width:290px;max-width:900px;height:580px;"></div>
				<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
				<!-- Calendly inline widget end -->
		    </div>
		  </div>
		</div>
	</section>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>