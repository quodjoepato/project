<?php 
require('./includes/header.php');
require('./includes/user-side-bar.php');
require('./includes/nav-bar.php');
 ?>

               
         <div class="content-inner container-fluid pb-0" id="page_layout">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="row row-cols-1">
            <div class="overflow-hidden d-slider1">
                <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                <?php
        $query = "SELECT r.region_id, r.region_name, IFNULL(SUM(tr.results), 0) AS total_results
                  FROM tblregion r
                  LEFT JOIN tblresults tr ON tr.region_id = r.region_id
                  GROUP BY r.region_id";

        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) { ?>
            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                <div class="card-body">
                    <div class="progress-widget">
                        <div class="text-center circle-progress-01 circle-progress circle-progress-primary"
                            data-min-value="0" data-max-value="100"
                            data-value="<?php echo $row['total_results']; ?>" data-type="percent">
                            
                        </div>
                        <div class="progress-detail">
                            <p class="mb-2"><?php echo $row['region_name']; ?></p>
                            <h4 class="counter"><?php echo $row['total_results']; ?></h4>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4 class="card-title">$855.8K</h4>
                            <p class="mb-0">Gross Sales</p>
                        </div>
                        <div class="d-flex align-items-center align-self-center">
                            <div class="d-flex align-items-center text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <div class="ms-2">
                                    <span class="text-secondary">Sales</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-3 text-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <div class="ms-2">
                                    <span class="text-secondary">Cost</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton22"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                This Week
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="d-main" class="d-main"></div>
                    </div>
                </div>
            </div>
            
           
            
        </div>
    </div>
    
</div>
            </div>
            
        <?php require('./includes/footer.php'); ?>  