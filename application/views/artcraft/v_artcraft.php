<!--================Category Area =================-->
	<section class="category_area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<?php
                        $no = 1; 
                        foreach($query as $row){                   
                        ?>  
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="<?php echo $no++;?>s" data-wow-delay=".2s">
								<figure>
									<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>"><?php echo $row->judul; ?></a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>">
												<span class="icon fa fa-calendar"></span>  <?php echo $row->created_at; ?>
								<!-- 				<span class="icon fa fa-comments"></span> 05 -->
											</a>
										</div>
										<div>
											<a class="read_more" href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
                         }
                        ?>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<nav class="blog-pagination justify-content-center d-flex">
								<ul class="pagination">
									<li class="page-item">
										<a href="#" class="page-link" aria-label="Previous">
											<span aria-hidden="true">
												<span class="lnr lnr-chevron-left"></span>
											</span>
										</a>
									</li>
									<li class="page-item"><a href="#" class="page-link">01</a></li>
									<li class="page-item active"><a href="#" class="page-link">02</a></li>
									<li class="page-item"><a href="#" class="page-link">03</a></li>
									<li class="page-item"><a href="#" class="page-link">04</a></li>
									<li class="page-item"><a href="#" class="page-link">09</a></li>
									<li class="page-item">
										<a href="#" class="page-link" aria-label="Next">
											<span aria-hidden="true">
												<span class="lnr lnr-chevron-right"></span>
											</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				