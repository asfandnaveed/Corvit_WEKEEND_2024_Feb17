<?php

require 'connection.php';

$sql = "SELECT * FROM products";

$result = $con->query($sql);

	if($result->num_rows>0){

		while($row = $result->fetch_assoc()){

			echo $row['name'].'\n';

		}
		
	}



?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Marketplace | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
	

            <div class="page-content">
                <div class="container-fluid">


	<div class="row">
                        <div class="col-3">
                            <div class="card explore-box card-animate">
                                <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                                <div class="explore-place-bid-img">
                                    <img src="assets/images/nft/img-02.jpg" alt="" class="card-img-top explore-img" />
                                    <div class="bg-overlay"></div>
                                    
                                </div>
                                <div class="card-body">
                                    <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                                    <h5 class="mb-1"><a href="apps-nft-item-details.html">Produc Name</a></h5>
                                    <p class="text-muted mb-0">Description</p>
                                </div>
                                <div class="card-footer border-top border-top-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 fs-14">
                                            <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Stock: <span class="fw-medium">45 items</span>
                                        </div>
                                        <h5 class="flex-shrink-0 fs-14 text-primary mb-0">Rs 300</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        

    </body>
    </html>