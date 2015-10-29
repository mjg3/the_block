<html>
	<head>
		<title>Register with Stripe</title>
		<?php
			$this->load->view('/partials/meta');
		?>
				<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
				<title>Stripe Getting Started Form</title>
				<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
				<!-- jQuery is used only for this example; it isn't required to use Stripe -->
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
				<script type="text/javascript">


						function stripeResponseHandler(status, response) {
							var $form = $('#payment-form');

							if (response.error) {
								// Show the errors on the form
								$form.find('.payment-errors').text(response.error.message);
								$form.find('button').prop('disabled', false);
							} else {
								// response contains id and card, which contains additional card details
								var token = response.id;
								// Insert the token into the form so it gets submitted to the server
								$form.append($('<input type="hidden" name="stripeToken" />').val(token));
								// and submit
								$form.get(0).submit();
							}
						};
								jQuery(function($) {
								$('#payment-form').submit(function(event) {
									// this identifies your website in the createToken call below
									Stripe.setPublishableKey('pk_test_TDsy5q9d81vbIu1BSfaZ12cF');
									var $form = $(this);

									// Disable the submit button to prevent repeated clicks
									$form.find('button').prop('disabled', true);

									Stripe.card.createToken($form, stripeResponseHandler);

									// Prevent the form from submitting with the default action
									return false;
										});
									});
				</script>
	</head>
	<body>
		<div class="container"> <!--Whole Page Container-->
			<div class="row">
				<div class="col s12 center">
					<img class="main_logo" src="/assets/images/hammer.gif" alt="no photo" />
				</div>
			</div>
            <div class="row grey lighten-4 z-depth-2">
                <div class="col s12 col m10 offset-m1">
                    <h4 class="red-text text-darken-3" id="register_stripe">Before you can be a member...</h4>
                    <div class="col s11 offset-s1">
                        <p>
                            Our rapid-fire auction site requires that all bidders have the ability to instantly win the featured product when the auction clock times-out. Rather than requiring you to log in and claim your products, we will conveniently purchase the products for you.
                        </p>
                        <p>
                            Just fill in your card information below and &copy;Stripe will securely store your payment information. As long as your shipping information is up-to-date in our system, you'll receive your auction claims within 5-7 business days.
                        </p>
                        <p>
                            We realize that buying products online can be a huge leap of faith and we wanted to say thank you.
                            We hope that The Hammer provides you with all the instant-gratification your heart desires.
                        </p>
                        <p>
                            It is an honor to have your business!
                        </p>
                        <h5 class="right">the HammerShark Collective&reg;</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 col m6 offset-m3">
        			<div class="row card grey lighten-3 z-depth-5">
        				<div class="col s12 col m8 offset-m2">
        					<div class="row">
        						<div class="col s12 center">
        							<h5 class="red-text text-darken-3" id="register_stripe">Add Card with Stripe</h5>
        							<form action="/handler/create_customer" id="payment-form" method="post" role="form" style="display: block;">
        								<div class="input-field">
        									<label for="card-number">Credit Card Number</label>
        									<input type="text" name="card-number" id="card-number" class="validate" maxlength="16" autocomplete="off"/>
        								</div>
                                        <div class="row">
                                            <div class="col s4">
                                                <div class="input-field">
                									<label for="cvc">CVC</label>
                									<input type="text" name="cvc" id="cvc" maxlength="4" autocomplete="off" class="validate"/>
                								</div>
                                            </div>
                                            <div class="col s4">
                								<div class="input-field">
                                                    <label for="month">(MM)</label>
                                                    <input type="text" maxlength="2" name="month" class=" validate card-expiry-month"/>
                                                </div>
                                            </div>
                                            <div class="col s4">
                								<div class="input-field">
                                                    <label for="year">(YYYY)</label>
                                                    <input type="text" maxlength="4" name="year" class="validate card-expiry-year center-align"/>
                								</div>
                                            </div>
                                        </div>
                                        <div class="row">
                            				<div class="col s12 col m8 offset-m2">
                            					<?php
                            						$this->load->view('partials/flash_messages.php');
                            					?>
                            				</div>
                            			</div>
        								<div class="input-field">
        									<div class="row">
        										<div class="col s12">
        											<button class="btn red darken-3" type="submit" name="stripe_pay">Add Card to Account
        											    <i class="material-icons right">send</i>
        											</button>
        										</div>
                                                <div class="col s12">
                                                    <img class="small_logo responsive-img" src="/assets/images/stripe_logo.gif" alt="No Photo" />
                                                </div>
        									</div>
        								</div>
        							</form>
        						</div>
        					</div>
        				</div>
        			</div> <!--End of Stripe Card-->
                </div>
            </div>
		</div> <!--End of main container-->
	</body>
</html>
