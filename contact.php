<?php include ('header1.php')?>
	<div class="inside_subpage">
		<section class="contact_us "></section>
		<section class="contact_form uk-padding-large uk-padding-remove-right uk-padding-remove-left">
			<div class="uk-container uk-text-center">
				<h2>ILEX EXCHANGE LTD</h2>
				<p>RM101, Maple House, 118 High Street, Purley, London, CR8 2AD, United Kingdom </p>
				<!-- <p>34 WARDOUR STREET LONDON UNITED KINGDOM W1D6QS</p> -->
				<br>
				<p>If you are interested in iLexExchange platform and other questions, <br>Please contact us immediately at : <a href="mailto:info@ilexmargin.com" target="_blank">info@ilexmargin.com</a> .</p>
				<form class="uk-form-horizontal uk-margin-large" method="get" action="phpmailer/test_smtp_basic.php">
				    <div class="uk-margin">
				        <div class="">
				            <input class="uk-input" id="form-horizontal-text" type="text" name="contactname" placeholder="Contact Name">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <div class="">
				            <input class="uk-input" id="form-horizontal-text" type="email" name="email" placeholder="Email">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <div class="">
				            <input class="uk-input" id="form-horizontal-text" type="text" name="subject" placeholder="Subject">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <div class="">
				            <textarea class="uk-textarea" name="description" placeholder="Description"></textarea>
				        </div>
				    </div>
				    <div class="uk-margin">
				    	<button type="submit" class=" uk-button btn_orange uk-margin-top">Submit</button>
				    </div>
				</form>
			</div>
			
		</section>
		<?php include('section-opening.php');?>
		<?php include('section-trading.php');?>
		<?php include('section-contact.php');?>
		<?php include('section-caution-liquidity.php');?>
	</div>
<?php include ('footer.php')?>
