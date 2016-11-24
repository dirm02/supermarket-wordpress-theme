
    <!-- Footer -->
    <footer id="page7" class="footer-1 bg-dark">
			<div class="container">
				<div class="row">
          <div class="col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="title">ΤΟΠΟΘΕΣΙΑ</h6>
							<hr>
							<ul class="link-list recent-posts">
								<li>
									<strong>Υποκατάστημα 1:</strong>
									<span class="date">Ρήγα Φεραίου 59,
										<span class="number">Πύργος Ηλείας</span>
									</span>
								</li>
								<li>
									<strong>Υποκατάστημα 2:</strong>
									<span class="date">Γερμανού 39,
										<span class="number">Πύργος Ηλείας</span>
									</span>
								</li>
								<li>
									<strong>Υποκατάστημα 3:</strong>
									<span class="date">Μανωλοπούλου 42,
										<span class="number">Πύργος Ηλείας</span>
									</span>
								</li>
                <li>
									<strong>Cash &amp; Carry:</strong>
									<span class="date">2o' χλμ. Ε.Ο. Πύργου Ολυμπίας
										<span class="number">&nbsp;</span>
									</span>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="title">ΣΧΕΤΙΚΑ</h6>
							<hr>
							<ul class="link-list recent-posts">
								<li>
									<a href="#">H Ιστορία</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
								<li>
									<a href="#">Η Εταιρία</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
								<li>
									<a href="#">Η Ομάδα</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="title">ΥΠΗΡΕΣΙΕΣ</h6>
							<hr>
              <ul class="link-list recent-posts">
								<li>
									<a href="#">Παράδοση</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
								<li>
									<a href="#">Πληρωμές</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
								<li>
									<a href="#">Κάρτα Plus</a>
									<span class="date">&nbsp;
										<span class="number">&nbsp;</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="title">ΕΠΙΚΟΙΝΩΝΙΑ</h6>
							<hr>
              <ul class="link-list recent-posts">
								<li>
									<strong>Κεντρικά</strong>
									<span class="date">Τηλ:
										<span class="number">26210 31901</span>
									</span>
								</li>
								<li>
									<strong>Email:</strong>
									<span class="date">iterzis@yahoo.gr
										<span class="number">&nbsp;</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<span class="sub"><?php echo date("Y"); ?> © <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo("name"); ?></a> | Developed by <a href="http://webartworks.gr/">Web Artworks</a></span>
					</div>
					<div class="col-sm-6 text-right">
						<ul class="list-inline social-list">
							<li>
								<a href="#">
									<i class="ti-twitter-alt"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ti-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ti-dribbble"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ti-vimeo-alt"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<a class="fade-half back-to-top inner-link" href="#top"><i class="ti ti-arrow-circle-up"></i></a>
		</footer>

	</div>

  <?php wp_footer(); ?>

  <script>
    $( ".mobile-toggle" ).click(function() {
      if ( $( ".nav-open" ).length ) {
          $('.ti-angle-up').addClass('ti-angle-down').removeClass('ti-angle-up');
      } else {
          $('.ti-angle-down').addClass('ti-angle-up').removeClass('ti-angle-down');
      }
    });
  </script>

</body>
</html>
