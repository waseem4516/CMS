<?php require_once('inc/top.php');?>
  </head>
  <body>
<?php require_once('inc/header.php');?>
    
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>Contact <span>Us</span></h1>
                <p>We are available 24x7. So Feel Free to Contact Us.</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=House%2345%2F5%20street%20%233%20PAC%20Kamra%20Attock%20Pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"> </a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
                        </div>
                        <div class="col-md-12 contact-form">
                           <h2>Contact Form</h2><hr>
                            <form action="">
                                <div class="form-group">
                                    <label for="full-name">Full Name*:</label>
                                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email*:</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email Address">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="text" id="website" class="form-control" placeholder="Website">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Messages:</label>
                                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should be Here"></textarea>
                                </div>
                                
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <?php require_once('inc/sidebar.php');?>                  
                </div>
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php');?>