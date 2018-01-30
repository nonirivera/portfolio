<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Noni Rivera | Web Developer</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="script/scrollreveal.js"></script>
    <script type="text/javascript">
    function _(id){ return document.getElementById(id); }
    function submitForm(){
        _("mybtn").disabled = true;
        _("status").innerHTML = 'please wait ...';
        var formdata = new FormData();
        formdata.append( "n", _("n").value );
        formdata.append( "e", _("e").value );
        formdata.append( "m", _("m").value );
        var ajax = new XMLHttpRequest();
        ajax.open( "POST", "message_form.php" );
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200) {
                if(ajax.responseText == "success"){
                    _("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
                } else {
                    _("status").innerHTML = ajax.responseText;
                    _("mybtn").disabled = false;
                }
            }
        }
        ajax.send( formdata );
    }
    </script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#showcase">Home</a></li>
            <li><a href="#info1">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://github.com/nonirivera" target="_blank" data-toggle="tooltip" title="GitHub Page"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/nonirivera" target="_blank" data-toggle="tooltip" title="Facebook Profile"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section id="showcase">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6">
    				<div class="showcase-left">
    					<img src="img/image1.jpg">
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6">
    				<div class="showcase-right">
    					<h1 class="site-greeting">Hi, I'm Noni.</h1>
    					<p>I'm a developer from the Philippines who specializes in web application development.</p>
    				</div>
    				<br>
    				<a class="btn btn-default btn-lg showcase-btn" href="#testimonial">Services offered</a>
    			</div>
    		</div>
    	</div>
    </section>
    <br>
    <br>
    <section id="testimonial">
    	<div class="container">
    		<div class="row">
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-code fa-4x" style="color:red;"></i>
                    <h3 class="site-greeting" style="color: red;">Code</h3>
                    <hr>
                    <p class="customer">Backend development using PHP framework (CodeIgniter) with MySQL as well as NodeJS.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-lightbulb-o fa-4x" aria-hidden="true" style="color:green;"></i>
                    <h3 class="site-greeting" style="color: green;">Design</h3>
                    <hr>
                    <p class="customer">Design pages from scratch or also work with front-end frameworks such as Bootstrap.</p>
                </div>     
                <div class="col-md-4 col-sm-4">
                    <i class="fa fa-line-chart fa-4x" aria-hidden="true" style="color: yellow;"></i>
                    <h3 class="site-greeting" style="color: yellow;">Analyze</h3>
                    <hr>
                    <p class="customer">Offer easy report-handling for robust web applications.</p>
                </div>           
            </div>
    	</div>
    </section>
    <hr>
    <section id="info1">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6">
    				<div class="info-right">
    					<h2>Sample Work</h2>
    					<p><u>abrietoCart</u>, derived from the Spanish word <i>abierto</i> which means <i>open</i>, is an open-source e-commerce solution.</p>
    					<br>
    					<a class="btn btn-default btn-lg" href=""><i class="fa fa-github" aria-hidden="true"></i>View on GitHub</a>
    				</div>
    			</div>
                <div class="col-md-6 col-sm-6">
                    <div class="info-left">
                        <!--- carousel -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="img/product1.jpg" alt="Los Angeles" style="width:80% height:80%;">
                              </div>

                              <div class="item">
                                <img src="img/product2.jpg" alt="Chicago" style="width:80% height:80%;">
                              </div>
                            
                              <div class="item">
                                <img src="img/product1.jpg" alt="New york" style="width:80% height:80%;">
                              </div>
                            </div>
                          </div>
                        <!-- carousel end -->
                    </div>
                </div>
    		</div>
    	</div>
    </section>
    <section id="info2">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6">
    				<div class="info-left">
    					<div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="thumbnail">
                                    <img src="img/product3.png" style="width: 100%">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="thumbnail">
                                    <img src="img/product4.png" style="width: 100%">
                                </div>
                            </div>                 
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="thumbnail">
                                    <img src="img/product6.png" style="width: 100%">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="thumbnail">
                                    <img src="img/product5.png" style="width: 100%">
                                </div>
                            </div>                 
                        </div>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6">
    				<div class="info-right">
    					<h2>List of Features</h2>
    					<ul class="fa-ul">
                            <li><i class="fa-li fa fa-check"></i>Easy and secure registration</li>
                            <li><i class="fa-li fa fa-check"></i>View featured and latest products</li>
                            <li><i class="fa-li fa fa-check"></i>Customer review for an easier reference</li>
                            <li><i class="fa-li fa fa-check"></i>Administrator Control Panel that offers:</li>
                                <ul>
                                    <li>dashboard page with quick access to different lists</li>
                                    <li>products page that monitors critical level for quantity</li>
                                    <li>complete control of public site content</li>
                                    <li>order tracking for faster transaction</li>
                                </ul>                
                        </ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <br>
    <br>
    <section id="contact">
    	<div class="container">
    		<div class="row">
                <div class="col-md-2 col-sm-2">
                    
                </div>
    			<div class="col-md-5 col-sm-5">
                    <h1 class="site-greeting">get in touch</h1>
                    <br>
    				<form id="my_form" onsubmit="submitForm(); return false;">
		              <div class="form-group">
		                <label>Name: </label>
		                <input class="form-control" type="text" id="n" name="" value="" placeholder="Enter Name" required>
		              </div>
		              <div class="form-group">
		                <label>Email: </label>
		                <input class="form-control" type="email" id="e" name="" value="" placeholder="Enter Email" required>
		              </div>
		              <div class="form-group">
		                <label>Message: </label>
		                <textarea class="form-control" id="m" name="" value="" placeholder="Enter Message" required></textarea>
		              </div>
                      <input type="submit" id="mybtn" value="Submit" class="btn btn-primary">
                      <br>
                      <span id="status"></span>
		            </form>
    			</div>
    			<!-- <div class="col-md-7 col-sm-7" id="contactTouch">
    				<h1>get in touch</h1>
    			</div> -->
    		</div>
    	</div>
    </section>

    <footer>
        <hr>
    	<p class="text-center">Noni Rivera &copy; 2018</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/myscript.js"></script>
</body>
</html>