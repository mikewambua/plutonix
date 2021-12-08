<?php
    include('path.php');
    include(ROOT_PATH . '/app/includes/header.php');
    include(ROOT_PATH . '/app/includes/navbar.php');
?>
<div class="container-fluid">
    <div class="row mb-4 pt-2">
        <h2 class="fw-bold text-info">About Us</h2>
        <div class="col-sm-12 col-lg-6">
            <div class="card bg-light">
                <img class="img-fluid" src="./img/slide.jpg" alt="about us">
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-body shadow">
                    <div class="card-title fw-bold text-primary">About our business</div>
                    <div class="card-text">We are a IT firm specializing in digital content and IT and information solutions.
                    There's no denying thke fact that customer service is important to a small or mid-sized business. The quality of that service will either enhance or degrade customer loyalty to your brand and your business. With the economy in recession, customers have more alternatives than ever. The business that proves to be responsive to customer questions, complaints, or other needs can gain a clear competitive advantage. That's why it's so important to understand how new technologies can help you anticipate customer needs, tailor business processes to best serve customers, and ultimately improve the efficiency of your business – the latter of which can keep costs down.
                    </div>
                    <br>
                    <a href="services.php" class="btn btn-primary btn-lg">Learn More <span &arr;></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include(ROOT_PATH . '/app/includes/scripts.php');
    include(ROOT_PATH . '/app/includes/footer.php');
?>