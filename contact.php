<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'hello@webdevable.com';
		$to = 'rodneygauna@gmail.com';
		$subject = 'RodneyCodes Contact Email';

		$body ="From: $name\nE-Mail: $email\nPhone: $phone\nMessage:\n$message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name.';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address.';
		}

        //Check if phone has been entered
        if (!$_POST['phone']) {
			$errPhone = 'Please enter your phone number.';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try calling us at <a href="tel:+1-760-587-0052" class="btn btn-primary"> (760) 587-0052</a></div>';
	}
}
	}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
				<!-- Metadata -->
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="keywords" content="portfolio, web design, ux design, vista, vista ca, san diego, san diego ca, ux designer,ux researcher, ux/ui, ux portfolio, ux engineer, ux analyst, ux architect, ux and ui, ux best practices, ux basics, ux builder, ux certification, ux case study, ux classes, ux designer san diego, ux developer, ux designer skills">
				<meta name="author" content="Rodney Gauna">

				<!-- HTML Meta Tags -->
				<title>Rodney.Codes - Rodney Gauna's Portfolio Site</title>
				<meta name="description" content="Rodney Gauna's Portfolio Site. UX Designer and Front End Developer.">

				<!-- Google / Search Engine Tags -->
				<meta itemprop="name" content="Rodney.Codes - Rodney Gauna's Portfolio Site">
				<meta itemprop="description" content="Rodney Gauna's Portfolio Site. UX Designer and Front End Developer.">
				<meta itemprop="image" content="http://rodney.codes/images/profile_square.png">

				<!-- Facebook Meta Tags -->
				<meta property="og:url" content="http://rodney.codes">
				<meta property="og:type" content="website">
				<meta property="og:title" content="Rodney.Codes - Rodney Gauna's Portfolio Site">
				<meta property="og:description" content="Rodney Gauna's Portfolio Site. UX Designer and Front End Developer.">
				<meta property="og:image" content="http://rodney.codes/images/profile_square.png">

				<!-- Twitter Meta Tags -->
				<meta name="twitter:card" content="summary_large_image">
				<meta name="twitter:title" content="Rodney.Codes - Rodney Gauna's Portfolio Site">
				<meta name="twitter:description" content="Rodney Gauna's Portfolio Site. UX Designer and Front End Developer.">
				<meta name="twitter:image" content="http://rodney.codes/images/profile_square.png">

				<!-- Meta Tags Generated via http://heymeta.com -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
        <link rel="icon" href="/favicon.png" type="image/x-icon">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="styles/stylesheet.less.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- DevIcons (http://konpa.github.io/devicon/) -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster|Playfair+Display|Raleway">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
				<!-- Fullstory Analytics -->
			  <script>
			    window['_fs_debug'] = false;
			    window['_fs_host'] = 'fullstory.com';
			    window['_fs_org'] = '7149P';
			    window['_fs_namespace'] = 'FS';
			    (function(m, n, e, t, l, o, g, y) {
			      if (e in m) {
			        if (m.console && m.console.log) {
			          m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');
			        }
			        return;
			      }
			      g = m[e] = function(a, b) {
			        g.q ? g.q.push([a, b]) : g._api(a, b);
			      };
			      g.q = [];
			      o = n.createElement(t);
			      o.async = 1;
			      o.src = 'https://' + _fs_host + '/s/fs.js';
			      y = n.getElementsByTagName(t)[0];
			      y.parentNode.insertBefore(o, y);
			      g.identify = function(i, v) {
			        g(l, {
			          uid: i
			        });
			        if (v) g(l, v)
			      };
			      g.setUserVars = function(v) {
			        g(l, v)
			      };
			      g.identifyAccount = function(i, v) {
			        o = 'account';
			        v = v || {};
			        v.acctId = i;
			        g(o, v)
			      };
			      g.clearUserCookie = function(c, d, i) {
			        if (!c || document.cookie.match('fs_uid=[`;`]*`[`;`]*`[`;`]*`')) {
			          d = n.domain;
			          while (1) {
			            n.cookie = 'fs_uid=;domain=' + d +
			              ';path=/;expires=' + new Date(0).toUTCString();
			            i = d.indexOf('.');
			            if (i < 0) break;
			            d = d.slice(i + 1)
			          }
			        }
			      };
			    })(window, document, window['_fs_namespace'], 'script', 'user');
			  </script>
    </head>

    <body>
        <!-- Contact Page -->
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg sticky-top">
					<button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" width="40" height="30" alt="">
					</a>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/resume/Rodney%20Gauna_UX%20Designer.pdf" target="_blank">Resume</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Header -->
						<section class="intro">
				      <div class="head">
				        <h1>Talk Nerdy To Me!</h1>
				      </div>
				    </section>
            <!-- Container (Fluid) -->
            <div class="container-fluid">
                <div>
                    <?php echo $result; ?>
                </div>
                <!-- Form -->
                <form role="form" method="post" action="contact.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="* First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="* example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="* (123) 456-7890" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                        <?php echo "<p class='text-danger'>$errPhone</p>";?>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="4" name="message" placeholder="Add your message here." value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </form>
                <!-- Footer -->
                <div class="row footer">
                    <!-- Navigation -->
                    <div class="col">
                        <a href="index.html">Home</a><br>
                        <a href="about.html">About</a><br>
                        <a href="portfolio.html">Portfolio</a><br>
                        <a href="resume/Rodney%20Gauna_UX%20Designer.pdf" target="_blank">Resume</a><br>
                        <a href="contact.php">Contact</a>
                    </div>
                    <!-- logo -->
                    <div class="col">
                        <img src="images/logo.png" alt="Logo Image">
                        <br>
                        <p class="text-center">&copy; 2016
                            <script>
                                new Date().getFullYear() > 2010 && document.write("- " + new Date().getFullYear());

                            </script>, Rodney Gauna</p>
                    </div>
                    <!-- Social Media Links -->
                    <div class="col text-right">
                        <a href="tel:+1-760-587-0052"><i class="fa fa-phone" alt="Phone Icon"><span class="sr-only">Call Rodney</span></i></a>
                        <a href="mailto:rodneygauna@gmail.com"><i class="fa fa-envelope" alt="Email Icon"><span class="sr-only">Send an email to Rodney</span></i></a>
                        <a href="https://www.linkedin.com/in/rodneygauna/" target="_blank"><i class="fa fa-linkedin" alt="Linked In Icon"><span class="sr-only">Linked In icon</span></i></a>
                        <a href="https://codepen.io/Sindroxa" target="_blank"><i class="fa fa-codepen" alt="Code Pen Icon"><span class="sr-only">Code Pen link icon</span></i></a>
                        <a href="https://github.com/sindroxa" target="_blank"><i class="fa fa-github" alt="Git Hub Icon"><span class="sr-only">Git Hub Link Icon</span></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS for Page -->
        <script>
            // loading spinner
            var load;

            function siteLoader() {
                load = setTimeout(showPage, 100);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("content").style.display = "block";
            }

            // if viewport is mobile, remove the profile picture
            var width = window.innerWidth;
            var pic = document.getElementById("pic");
            if (width < 767) {
                if (pic) {
                    pic.style.display = "none";
                }
            }

        </script>
        <!-- Bootstrap JS Files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <!-- Google Analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75024344-2', 'auto');
            ga('send', 'pageview');

        </script>
    </body>

    </html>
