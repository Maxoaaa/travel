 
	<!--================ Travel Category Area =================-->
	<section class="travel_category">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Best Travel Experience Within the Universe.</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row owl-carousel" id="travel_cat">
				<?php
                        $no = 1; 
                        foreach($query as $row){                   
                        ?>  
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".<?php echo $no+=3;?>s">
					<figure>
						<img class="img-fluid" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" style="width: 272;height: 273;"  width=272 height=273 alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#"><?php echo $row->judul; ?></a>
						</h3>
						<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
							<div class="meta">
								<a href="#">
									<span class="icon fa fa-calendar"></span> <?php echo $row->created_at; ?>
									<!-- <span class="icon fa fa-comments"></span> 05 -->
								</a>
							</div>
							<div>
								<a class="read_more" href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>">Read More</a>
							</div>
						</div>
					</div>
				</div>
						<?php
                         }
                        ?>
			</div>
		</div>
	</section>
	<!--================ End Travel Category Area =================-->

	<!--================ Latest Blog Area =================-->
	<section class="latest_blog_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Latest
							<br> Blog Posts.</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<?php
                        $no = 1; 
                        foreach($query4 as $rou){                   
                        ?>  
				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp" data-wow-duration="<?php echo $no++;?>s" data-wow-delay=".2s">
						<figure>
							<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $rou->url_image; ?>" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="<?php echo site_url(); ?>Content/index/<?php echo $rou->id; ?>"><?php echo $rou->judul; ?></a>
							</h3>
							<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="<?php echo site_url(); ?>Content/index/<?php echo $rou->id; ?>">
										<span class="icon fa fa-calendar"></span> <?php echo $rou->created_at; ?>
										<!-- <span class="icon fa fa-comments"></span> 05 -->
									</a>
								</div>
								<div>
									<a class="read_more" href="<?php echo site_url(); ?>Content/index/<?php echo $rou->id; ?>">Read More</a>
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
				<div class="offset-lg-7 col-lg-4">
					<div class="blog-meta bottom d-flex justify-content-end align-items-center">
						<div>
							<a class="read_more" href="#">Load More Posts</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Latest Blog Area =================-->

	<!--================ Places Area =================-->
	<section class="different_places">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Let Us Find Your Places Within a Sec.</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<?php foreach($query3 as $row){ ?>  
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
						<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/places/p1.jpg" alt="">
						<div class="overlay"></div>
						<h4><?php echo $row->judul; ?></h4>
					</div>
				</div>
				<?php } ?>
				<div class="col-lg-3 col-md-6">
					<?php foreach($query3b as $row){ ?>  
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
						<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" alt="">
						<div class="overlay"></div>
						<h4><?php echo $row->judul; ?></h4>
					</div>
					<?php } ?>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
						<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/places/p3.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
				<?php $no=0;foreach($query3c as $row){ ?>  
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".<?php echo $no+=4?>s">
						<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" alt="">
						<div class="overlay"></div>
						<h4><?php echo $row->judul; ?></h4>
					</div>					
				<?php } ?>
				</div>
				<div class="col-lg-3 col-md-6">
					<?php $no=0;foreach($query3d as $row){ ?> 
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
						<img class="img-fluid w-100" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" alt="">
						<div class="overlay"></div>
						<h4><?php echo $row->judul; ?></h4>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Places Area =================-->

	<!--================ Popular Post Area =================-->
	<section class="popular_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Popular <br> Posts to Remember</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<?php
                        $no = 1; 
                        foreach($query as $row){                   
                        ?>  
				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" width=110 height=120 alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>"><?php echo $row->judul; ?></a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="<?php echo site_url(); ?>Content/index/<?php echo $row->id; ?>">
										<span class="icon fa fa-calendar"></span> <?php echo $row->created_at; ?>
												<!-- <span class="icon fa fa-comments"></span> 05 -->
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
                         }
                        ?>
			</div>
		</div>
	</section>
	<!--================ End Popular Post Area =================-->
