<!--footer new-->
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="footer-column">
						<h4>INVENTORY</h4>
						<ul>
							<li><a href="#">NEW VEHICLES</a></li>
							<li><a href="#">USED VEHICLES</a></li>
							<li><a href="#">PRE-OWNED VEHICLE SPECIALS</a></li>
							<li><a href="#">PRICED UNDER 15K</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="footer-column">
						<h4>FINANCING</h4>
						<ul>
							<li><a href="#">GET FINANCING</a></li>
							<li><a href="#">PAYMENT CALCULATOR</a></li>
							<li><a href="#">VALUE YOUR TRADE</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="footer-column">
						<h4>QUICK LINKS</h4>
						<ul>
							<li><a href="#">FAQS</a></li>
							<li><a href="#">WHY BUY FROM ALM</a></li>
							<li><a href="#">FIVE QUESTIONS TO ASK</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="footer-column">
						<h4>CONTACT</h4>
						<ul>
							<li><a href="tel:94769057272">076 905 7272</a></li>
							<li><a href="mailto:villoauto@gmail.com">villoauto@gmail.com</a></li>
							<li><a href="#">No. 614, Colombo road, Nanuoya, Pilimathalawa</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div>
				<img src="{{ asset('NewAssts/img/logo-footer.png') }}" alt="logo" class="footer-logo">
			</div>
			<div class="copyright">
				2025 © All Rights Reserved | Villo Auto Cars (Pvt) Ltd | Designed & Developed by Silicon Radon Networks (Pvt) Ltd.
			</div>
		</div>
	</div>
</footer>
	<div class="car-top">
	<span><img src="{{ asset('NewAssts/img/car.png') }}" alt="car"></span>
	</div>

    </div>
    <!-- end #wrapper -->
  </div>
  <!-- end layout-theme -->

<!-- Messenger and WhatsApp Floating btns -->
<a href="https://m.me/94769057272" class="float" style="z-index: 999999;">
	<i class="fa-brands fa-facebook-messenger my-float"></i>
</a>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
	var wa_btnSetting = { "btnColor": "#16BE45", "ctaText": "", "cornerRadius": 40, "marginBottom": 20, "marginLeft": 20, "marginRight": 20, "btnPosition": "right", "whatsAppNumber": "94769057272", "welcomeMessage": "Hello! How can we help you today?", "zIndex": 999999, "btnColorScheme": "light" };
	window.onload = () => {
		_waEmbed(wa_btnSetting);
	};
</script>

<!-- Vehicle Details Modal -->
<div class="modal fade" id="vehicleModal" tabindex="-1" role="dialog" aria-labelledby="vehicleModalLabel">
	<div class="modal-dialog modal-lg modal-center" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="vehicleModalLabel">2019 Honda Vezel Z</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ asset('NewAssts/img/from-fb/2-wide.jpg') }}" class="img-responsive img-rounded" alt="2019 Honda Vezel Z">
					</div>
					<div class="col-md-6">
						<h4>Key Details</h4>
						<ul class="list-unstyled">
							<li><strong>Make:</strong> Honda</li>
							<li><strong>Model:</strong> Vezel Z</li>
							<li><strong>Year:</strong> 2019</li>
							<li><strong>Transmission:</strong> Automatic</li>
							<li><strong>Fuel Type:</strong> Hybrid (Petrol/Electric)</li>
							<li><strong>Mileage:</strong> 45,000 km</li>
							<li><strong>Color:</strong> Pearl White</li>
							<li><strong>Price:</strong> Rs. 8,450,000</li>
						</ul>
						<p>Well-maintained Honda Vezel Z with excellent fuel efficiency and advanced safety features. Equipped with push start, reverse camera, alloy wheels, and full service history.</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<a href="#" class="btn btn-primary">Enquire Now</a>
			</div>
		</div>
	</div>
</div>
