<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="page-legal mt-5">
	<!-- Header -->
	<section id="header">	
		<div class="container">
			<div class="row justify-content-center"">
		    	<div class="col-8 text-center">
		      		<h1>What Exactly Do You Mean by &ldquo;Making Systems Talk?!&rdquo;</h1>
		    	</div>
		  	</div>
	</section>


	<!-- Main Content -->
	<section id="main-content">	
		<div class="container">
		  <div class="row justify-content-center">
		    <div class="col-8">
				<p>Software rocks, but sometimes it’s hard to get information from one platform to another. For example, it’s practically impossible to get the Dubsado CRM to integrate  with Acuity, a scheduling software, or Zoom for webinars.</p>

				<p><strong>How</strong> we get information from one system to another depends entirely on the software in question.  There are basically two ways this type of integration is done: either by configuration or programmatically.</p>

				<p><strong>Configuration</strong> happens when the two systems have a user interface that allows you to connect them. An example of that is ClickFunnels, where you can click a few buttons to integrate with Aweber, Kajabi, etc:</p>

				<img style="max-width: 100%; margin: 1em auto;" src="<?php echo URLROOT; ?>/public/img/ClickFunnels-API-Integrations.png" alt="Screenshot of API integrations screen in ClickFunnels">

				<p>Many companies have developed configurable integrations through the Zapier platform. Integration created on Zapier are called “zaps.” In the case of Dubsado, zaps can be set up that take some type of action when a customer makes a payment or a lead is received.</p>

				<p><strong>Programmatic</strong> integrations are done when there's no guided method to make the connection. If the platform in question allows "API" access, then we write a program that automatically exchanges data. HubSpot provides a fairly extensive set of API functions &mdash; <a href="https://developers.hubspot.com/docs/overview" target="_blank">retrieving and updating contacts</a> is one example.</p>


				<p>At Battlestar Digital, we handle configurations and programmatic integrations. We love taking the nerdy stuff off of your hands so you can focus on what you do best: growing your business!</p>
		    </div>
		  </div>
		</div>
	</section>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>