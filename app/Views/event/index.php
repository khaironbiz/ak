<section class="bg-event-box">
    <div class="container">
        <div class="row">
            <div class="event-search-box-option">
                <div class="row">
                    <div class="col-md-3">
                        <div class="event-box">
                            <div class="form-group">
                                <label for="date">events from</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                            </div>
                            <!-- .form-group -->
                        </div>
                        <!-- .search-box -->
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="event-box">
                            <div class="form-group">
                                <label for="search">search</label>
                                <input type="text" class="form-control" id="search" placeholder="Keyword">
                            </div>
                            <!-- .form-group -->
                        </div>
                        <!-- .search-box -->
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="event-box">
                            <div class="form-group">
                                <label for="location">location</label>
                                <input type="text" class="form-control" id="location" placeholder="Type to search">
                            </div>
                            <!-- .form-group -->
                        </div>
                        <!-- .search-box -->
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="event-box">
                            <a href="#" class="btn btn-default">find events</a>
                        </div>
                        <!-- .search-box -->
                    </div>
                    <!-- .col-md-3 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .event-search-box-option -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>


<section class="bg-upcoming-events">
    <div class="container">
        <div class="row">
            <div class="upcoming-events">
                <div class="row">
                    <?php
                    $x = 1;
                    while ($x <= 20) {
                    ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-6 col-xs-6 col-xs-4">
                            <div class="blog-items">
                                <div class="blog-img">
                                    <a href="<?php echo base_url('event/detail') ?>"><img src="<?php echo base_url() ?>/assets/green/assets/images/about/blog-img-2.jpg" alt="blog-img-1" class="img-responsive" /></a>
                                </div>
                                <!-- .blog-img -->
                                <div class="blog-content-box">
                                    <div class="blog-content">
                                        <h5><a href="<?php echo base_url('event/detail') ?>">Actualze Cententrc Staled</a></h5>

                                    </div>
                                    <!-- .blog-content -->
                                    <div class="meta-box">
                                        <ul class="meta-post">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i> 22.04.2017</li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 24 Like</a></li>
                                            <li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i> 24 Comment</a></li>
                                        </ul>
                                    </div>
                                    <!-- .meta-box -->
                                </div>
                                <!-- .blog-content-box -->
                            </div>
                            <!-- .blog-items -->
                        </div>
                    <?php
                        $x++;
                    } ?>
                </div>
                <!-- .row -->

                <div class="pagination-option">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- .pagination_option -->

            </div>
            <!-- .upcoming-events -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>


<!-- End Upcoming Events Section -->