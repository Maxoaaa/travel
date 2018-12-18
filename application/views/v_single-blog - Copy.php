    <!--================Blog Area =================-->
    <section class="blog_area section-gap single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php                        
                        foreach($query as $row){
                        $idku = $row->id;       
                        $cek = $this->db->query("SELECT * FROM t_post WHERE id='".$idku."'")->num_rows();  
                        $prev_idku = $idku -1;$next_idku = $idku +1;
                        /*echo $prev_idku;
                        exit();*/
                        if ($prev_idku ==0) {
                            $prev_idku =1;
                        }
                        ?> 
                    <div class="main_blog_details">
                        <img class="img-fluid" src="<?php echo base_url() ?>assett/img/culinaries/<?php echo $row->url_image; ?>" alt="maasakan">
                        <a href="#">
                            <h4><?php echo $row->judul; ?></h4>
                        </a>
                        <div class="user_details">
                            <div class="float-left">
                                <a href="#"><?php echo $row->kategori; ?></a>
                               <!--  <a href="#">Gadget</a> -->
                            </div>
                            <div class="float-right">
                                <div class="media">
                                    <div class="media-body">
                                        <h5><?php echo $row->author; ?></h5>
                                        <p><?php echo $row->created_at; ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <?php
                                            foreach($query2 as $roti){                   
                                            ?> 
                                        <img src="<?php echo base_url() ?>assett/img/blog/<?php echo $roti->avatar; ?>" alt="">
                                        <?php
                                            }
                                        ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php echo $row->deskripsi; ?></p>
                        
                        <blockquote class="blockquote">
                            <p class="mb-0">MCSE boot camps have its supporters and its detractors. Some people do not
                                understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit
                                through a self-imposed MCSE training.</p>
                        </blockquote>
                        <p><?php echo $row->deskripsi; ?></p>
                        
                        <div class="news_d_footer">
                            <!-- <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a> -->
                           <!--  <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06
                                Comments</a> -->
                            <div class="news_socail ml-auto">
                                <a href="https://www.facebook.com/informatika.upj/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/informatika_upj" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=6285219427222" target="_blank"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                         }                         
                         if ($prev_idku ==0) {
                            $prev_idku =1;
                        }   
                        $cek = $this->db->query("SELECT * FROM t_post WHERE id='".$next_idku."'")->num_rows();
                        if ($cek == 0) {
                            $next_idku = $next_idku-1;
                        }
                     ?>   
                        
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                                <div class="thumb">
                                    <a href="<?php if ($prev_idku != 0) { echo site_url().'Content/index/'.$prev_idku; }?>"><img class="img-fluid" src="<?php echo base_url() ?>assett/img/blog/nxt4.png" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php if ($prev_idku != 0) { echo site_url().'Content/index/'.$prev_idku; }?>"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="<?php if ($prev_idku != 0) { echo site_url().'Content/index/'.$prev_idku; }?>">
                                       <!--  <h4>A Discount Toner</h4> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="<?php echo site_url().'Content/index/'.$next_idku; ?>">
                                       <!--  <h4>Cartridge Is Better</h4> -->
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo site_url().'Content/index/'.$next_idku; ?>"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="<?php echo site_url().'Content/index/'.$next_idku; ?>"><img class="img-fluid" src="<?php echo base_url() ?>assett/img/blog/nxt3.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <!-- <h4>05 Comments</h4> -->
                        <?php echo $disqus ?>
                        <!-- <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url() ?>assett/img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-capitalize">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url() ?>assett/img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-capitalize">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url() ?>assett/img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-capitalize">reply</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn">Send Message</a>
                        </form>
                    </div> -->
                </div>
                
