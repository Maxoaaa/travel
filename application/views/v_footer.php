
	<!--================ start footer Area  =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="single-footer-widget footer_middle">
				<img src="<?php echo base_url() ?>assett/img/logo3.png" alt="" width="250" height="150">
				<p class="mt-50">Stay updated with our latest trends</p>
				<div id="mc_embed_signup">
					<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
					 method="get" class="subscribe_form relative">
						<div class="input-group d-flex flex-row">
							<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
							 required="" type="email">
							<button class="btn sub-btn">
								<span class="lnr lnr-arrow-right"></span>
							</button>
						</div>
						<div class="mt-10 info"></div>
					</form>
				</div>
			</div>
			<div class="footer-bottom footer_copy">
				<div class="footer-social">
					<?php foreach($this->M_dokumen->listAll_kuliner() as $listAll) { /*echo $listAll->kode_html;*/} ?>
					<!-- <a href="https://www.facebook.com/informatika.upj/">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="https://www.twitter.com">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="https://api.whatsapp.com/send?phone=6285219427222">
						<i class="fa fa-whatsapp"></i>
					</a>
					<a href="https://www.instagram.com/informatika_upj">
						<i class="fa fa-instagram"></i>
					</a> -->
				</div>

				<p class="col-lg-12 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
All data reserved <script>document.write(new Date().getFullYear());</script> | This website is love by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?php echo base_url() ?>" target="_blank">Aqil Halim and Theofilus</a> from Universitas Pembangunan Jaya
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() ?>assett/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assett/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assett/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assett/js/stellar.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/isotope/isotope-min.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assett/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="<?php echo base_url() ?>assett/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url() ?>assett/js/mail-script.js"></script>
	<script src="<?php echo base_url() ?>assett/js/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?php echo base_url() ?>assett/js/theme.js"></script>
</body>

</html>