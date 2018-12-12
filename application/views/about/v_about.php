<!--================Contact Area =================-->
    <section class="contact_area section-gap">
        <div class="container">
            <div id="mapBox" class="mapBox" data-lat="-6.290959" data-lon="106.724899" data-zoom="16" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                data-mlat="-6.290959" data-mlon="106.724899">
            </div>
            <div class="map-wrap" style="width:100%;" id="mapBox"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Program Studi Informatika, Universitas Pembangunan Jaya</h6>
                            <p>Tangerang Selatan</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="https://api.whatsapp.com/send?phone=6285219427222">0852 - 1942 - 7222</a></h6>
                            <p>Senin - Jumat, 8am sampai 5 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">aqil.halim@student.upj.ac.id</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->