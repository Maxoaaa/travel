<div class="col-lg-4">
    <?php $query_profile = $this->M_dokumen->getprofile(); foreach ($query_profile as $namaass) {
                              $nama_lengkap= $namaass->nama_lengkap;
                              $job = $namaass->job;
                              $deskripsi = $namaass->deskripsi;
                            }?>
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img img-fluid" src="<?php echo base_url() ?>assett/img/blog/author.png" alt="">
                            <h4><?php  
                            echo $nama_lengkap;
                            ?></h4>
                            <p><?php  
                            echo $job;
                            ?></p>

                            <p><?php  
                            echo $deskripsi;
                            ?>
                            </p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com/informatika.upj/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/informatika_upj"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.github.com/Maxoaaa"><i class="fa fa-github"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=6285219427222"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <!-- <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="<?php echo base_url() ?>assett/img/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?php echo base_url() ?>assett/img/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?php echo base_url() ?>assett/img/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside> -->
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="btn sub-btn">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                        <div class="br"></div>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                            <?php  
                                 foreach ($qpopular_post as $row) {
                                 //exit();
                            ?>
                                <li>
                                    <a href="<?php echo site_url(). $row->nama_kategori; ?>" class="d-flex justify-content-between">
                                        <p><?php echo $row->nama_kategori; ?></p> 
                                        <p><?php echo $row->total_post; ?></p>
                                    </a>
                                </li>
                            <?php  } ?>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->