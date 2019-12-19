<!DOCTYPE html>
<html lang="en">

<head>

	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Zainudin's Porfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="zainudin's porfolio" />
	<meta name="keywords" content="zainudin, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="zainudn abdullah" />

	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">

	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="<?= base_url('template/assets/css/basic.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/layout.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/blogs.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/line-awesome.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/magnific-popup.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/animate.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('template/assets/css/simplebar.css'); ?>" />

	<!-- theme colors -->
	<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/green.css'); ?>" />
	<!--<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/blue.css'); ?>" />-->
	<!--<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/red.css'); ?>" />-->
	<!--<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/orange.css'); ?>" />-->
	<!--<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/pink.css'); ?>" />-->
	<!--<link rel="stylesheet" href="<?= base_url('template/assets/css/theme-colors/purple.css'); ?>" />-->

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js');?>"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js');?>"></script>
	<![endif]-->

	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">

</head>

<body>
	<div class="page">

		<!--
			Preloader
		-->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!--
			Header
		-->
		<header class="header">

			<!-- logo -->
			<div class="logo">
				<a href="#"><span>Z</span></a>
			</div>

			<!-- menu -->
			<div class="top-menu">
				<ul>
					<li class="active">
						<a href="#home-card">
							<span class="icon la la-home"></span>
							<span class="link">Home</span>
						</a>
					</li>
					<li>
						<a href="#about-card">
							<span class="icon la la-user"></span>
							<span class="link">About</span>
						</a>
					</li>
					<li>
						<a href="#resume-card">
							<span class="icon la la-gear"></span>
							<span class="link">Resume</span>
						</a>
					</li>
					<li>
						<a href="#works-card">
							<span class="icon la la-eye"></span>
							<span class="link">Portfolio</span>
						</a>
					</li>
					<li>
						<a href="#blog-card">
							<span class="icon la la-newspaper-o"></span>
							<span class="link">Blog</span>
						</a>
					</li>
					<li>
						<a href="#contacts-card">
							<span class="icon la la-envelope"></span>
							<span class="link">Contacts</span>
						</a>
					</li>
				</ul>
			</div>

			<!-- Started socials -->
			<div class="social">
				<a target="_blank" href="https://facebook.com/zai.abdullah91"><span class="icon la la-facebook"></span></a>
				<a target="_blank" href="https://github.com/"><span class="icon la la-github"></span></a>
				<a target="_blank" href="https://instagram.com/zaiabdullah_91"><span class="icon la la-instagram"></span></a>
			</div>

			<!-- Mobile Menu -->
			<span class="menu-btn">
				<span class="m-line"></span>
			</span>

		</header>

		<!--
			Container
		-->
		<div class="container">

			<!--
				Card - Started
			-->
			<div class="card-inner card-started active" id="home-card">

				<!-- Started Background -->
				<div class="slide" style="background-image: url(<?= base_url('template/assets/img/6.jpg'); ?>);"></div>

				<div class="centrize full-width">
					<div class="vertical-center">

						<!-- Started titles -->
						<div class="title"><span>Zainudin</span> Abdullah</div>
						<div class="subtitle">
							I am
							<div class="typing-title">
								<p>a <strong>Web Developer.</strong></p>
								<p>a <strong>PHP Programmer.</strong></p>
							</div>
							<span class="typed-title"></span>
						</div>

					</div>
				</div>

			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner" id="about-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- About Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(<?= base_url('template/assets/img/2.jpg') ?>);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">About Me</div>
									<div class="text">
										<p>
											<strong>Hello, My Name is Zainudin</strong>, web-developer based on Bekasi.
											<br />
											I am a beginner but have a lot experience in web site building <br />
											and customization. Also I am good at <strong>html, css, <br />
												php, bootstrap.</strong>
										</p>
									</div>
									<div class="circle-bts">
										<a href="<?= base_url('dokumen/CV - Zainudin Abdullah.pdf'); ?>"><span><i class="icon la la-download"></i>Download CV</span></a>
										<a href="https://github.com/yUm1k4"><i class="icon la la-github"></i></a>
									</div>
								</div>
							</div>
						</div>

						<!--
							Services
						-->
						<div class="content services">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>My</span> Services</div>

								</div>
							</div>

							<!-- service items -->
							<div class="row service-items">

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-code"></i></div>
										<div class="name">Web Development</div>
										<p>
											Modern and mobile-ready website that will help of your marketing.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-flash"></i></div>
										<div class="name">Fast</div>
										<p>
											Fast and Lightweight web application.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la l la-lightbulb-o"></i></div>
										<div class="name">Ideas</div>
										<p>
											Also, i'll give you an amazing ideas for your Website.
										</p>
									</div>
								</div>

								<!-- service item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><i class="la la-html5"></i></div>
										<div class="name">Responsive Design</div>
										<p>
											Made with modern design like Bootstrap and suitable to any
											device.
										</p>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>
			</div>

			<!-- 
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Resume Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile2.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">Resume</div>
								</div>
							</div>
						</div>

						<!--
							Resume
						-->
						<div class="content resume">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>Work</span> Experience</div>

									<!-- resume items -->
									<div class="resume-items card-box">

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">PHP Programmer</div>
											<div class="date">2018 - Now <span></span></div>
											<p>
												Mengkolaborasi Back-End dalam mengelola Aplikasi Web Site. Menggunkan Framework Codeigniter dan Laravel.
												<br />
												<a style="color: #5ac14e" target="_blank" href="#">Surat
													Referensi
												</a>
											</p>
										</div>

										<!-- resume item
										<div class="resume-item">
											<div class="name">PT. Bussan Auto Finance</div>
											<div class="date">2018 - Present <span>|</span> IT App Jr Specialist.</div>
											<p>
												Collaborate with Back-End Team to Develop Web Aplication.
											</p>
										</div> -->

									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>Formal</span> Education</div>

									<!-- resume items -->
									<div class="resume-items card-box">

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">SMK Negeri 2 Kota Bekasi</div>
											<div class="date">2018 - 2021 <span>|</span> Rekayasa Perangkat Lunak</div>
											<p>
												Mengasah kemampuan HTML dan CSS (Bootstrap). Menggunakan Framework Codeigniter dan Laravel. Serta mempelajari database MySQL.
											</p>
										</div>

									</div>
								</div>
							</div>
						</div>


						<!--
							Certification
						-->
						<div class="content resume">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>Organization</span> Experience</div>

									<!-- resume items -->
									<div class="resume-items card-box">

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">Jambore Nasional</div>
											<div class="date">2016</div>
											<p>
												Mengikuti Pagelaran Jambore Nasional yang di hadiri Presiden Joko Widodo dalam memperingati Hari Pramuka.
											</p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">OSIS</div>
											<div class="date">2017 - 2018 <span>|</span> Wakil Ketua OSIS.</div>
											<p>
												Menjabat sebagai Wakil Ketua OSIS di SMP Negeri 8 Kota Bekasi..
											</p>
										</div>

										<!-- resume item -->
										<div class="resume-item">
											<div class="name">IKRAM</div>
											<div class="date">2018 - 2020 <span>|</span> Anggota.</div>
											<p>
												Aktif dalam kegiatan keagamaan di SMKN 2 Bekasi untuk meningkatkan keimanan dan ketaqwaan..
											</p>
										</div>


									</div>
								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>My</span> Certification</div>

									<!-- resume items -->
									<div class="resume-items card-box">
										<!-- resume item -->
										<div class="resume-item">
											<div class="name">Blank</div>
											<div class="date">No Expired Data<span>|</span> by SoloLearn</div>
											<p>
												I am Beginner but have a lot experince.

												<br />
												<a style="color: #5ac14e" target="_blank" href="#">
													No Have Certificate Yet
												</a>
											</p>
										</div>

										<!-- resume item
										<div class="resume-item">
											<div class="name">PHP Tutorial Course</div>
											<div class="date">No Expired Data<span>|</span> by SoloLearn</div>
											<p>
												PHP Tutorial Course Certification issued by SoloLearn.

												<br />
												<a style="color: #5ac14e" target="_blank" href="#">
													Certificate
												</a>
											</p>
										</div> -->

									</div>
								</div>
							</div>
						</div>


						<!--
							Skills
						-->
						<div class="content skills">
							<div class="row">
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>Personal</span> Skills</div>

									<!-- skills -->
									<div class="skills-list card-box">
										<ul>
											<li>
												<div class="name">Communication</div>
												<div class="progress">
													<div class="percentage" style="width:90%;"></div>
												</div>
											</li>
											<li>
												<div class="name">Team Work</div>
												<div class="progress">
													<div class="percentage" style="width:60%;"></div>
												</div>
											</li>
											<li>
												<div class="name">Leadership</div>
												<div class="progress">
													<div class="percentage" style="width:75%;"></div>
												</div>
											</li>
											<li>
												<div class="name">Language</div>
												<div class="progress">
													<div class="percentage" style="width:70%;"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

									<!-- title -->
									<div class="title"><span>Professional</span> Skills</div>

									<!-- skills -->
									<div class="skills-list card-box">
										<ul>
											<li>
												<div class="name">Git Hub</div>
												<div class="progress">
													<div class="percentage" style="width:60%;"></div>
												</div>
											</li>
											<li>
												<div class="name">PHP / MYSQL</div>
												<div class="progress">
													<div class="percentage" style="width:85%;"></div>
												</div>
											</li>
											<li>
												<div class="name">HTML / CSS</div>
												<div class="progress">
													<div class="percentage" style="width:90%;"></div>
												</div>
											</li>
											<li>
												<div class="name">Photoshop</div>
												<div class="progress">
													<div class="percentage" style="width:60%;"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!-- 
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Work Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile3.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">Portfolio</div>
								</div>
							</div>
						</div>

						<!--
							Works
						-->
						<div class="content works">
							<div class="row">
								<div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

									<!-- title -->
									<div class="title"><span>My</span> Portfolio</div>

								</div>
								<div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

									<!-- filters -->
									<div class="filter-menu filter-button-group">
										<div class="f_btn active">
											<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="photo" />PHP</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="video" />HTML & CSS</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="music" />Design</label>
										</div>
										<div class="f_btn">
											<label><input type="radio" name="fl_radio" value="design" />Other</label>
										</div>
									</div>

								</div>
							</div>

							<!-- work items -->
							<div class="row grid-items">

								<!-- work item photo -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
									<div class="box-item card-box">
										<div class="image">
											<a href="images/works/work1.jpg" class="has-popup-image">
												<img src="images/works/work1.jpg" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="images/works/work1.jpg" class="name has-popup-image">Motorcycle
												Helmet</a>
											<div class="category">Photo</div>
										</div>
									</div>
								</div>

								<!-- work item video -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://vimeo.com/97102654" class="has-popup-video">
												<img src="images/works/work2.jpg" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="https://vimeo.com/97102654" class="name has-popup-video">Minimalism
												Shapes</a>
											<div class="category">Video</div>
										</div>
									</div>
								</div>

								<!-- work item music -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="images/works/work3.jpg" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#" class="name has-popup">Staircase</a>
											<div class="category">Music</div>
										</div>
									</div>
								</div>

								<!-- work item design -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-1" class="has-popup-media">
												<img src="images/works/work4.jpg" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-1" class="name has-popup-media">Mobile Application</a>
											<div class="category">Design</div>
										</div>
										<div id="popup-1" class="popup-box mfp-fade mfp-hide">
											<div class="content">
												<div class="image">
													<img src="images/works/work4.jpg" alt="">
												</div>
												<div class="desc">
													<div class="post-box">
														<h1>Mobile Application</h1>
														<div class="blog-detail">Design</div>
														<div class="blog-content">
															<p>
																So striking at of to welcomed resolved. Northward by
																described up household therefore
																attention. Excellence decisively nay man yet impression
																for contrasted remarkably.
															</p>
															<p>
																Forfeited you engrossed but gay sometimes explained.
																Another as studied it to evident.
																Merry sense given he be arise. Conduct at an replied
																removal an amongst. Remaining
																determine few her two cordially admitting old.
															</p>
															<blockquote>
																Vestibulum ante ipsum primis in faucibus orci luctus et
																ultrices posuere cubilia
																Curae; Pellentesque suscipit.
															</blockquote>
															<p>
																Tiled say decay spoil now walls meant house. My mr
																interest thoughts screened of outweigh
																removing. Evening society musical besides inhabit ye my.
																Lose hill well up will he over on.
																Increasing sufficient everything men him admiration
																unpleasing sex.
															</p>
															<ul class="list-style">
																<li>Greatest properly off ham exercise all.</li>
																<li>Unsatiable invitation its possession nor off.</li>
																<li>All difficulty estimating unreserved increasing the
																	solicitude.</li>
															</ul>
															<p>
																Unpleasant astonished an diminution up partiality. Noisy
																an their of meant. Death means
																up civil do an offer wound of.
															</p>
														</div>
														<a href="#" class="button">
															<span class="text">View Project</span>
															<span class="arrow"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- work item photo -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
									<div class="box-item card-box">
										<div class="image">
											<a href="images/works/work5.jpg" class="has-popup-image">
												<img src="images/works/work5.jpg" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="images/works/work5.jpg" class="name has-popup-image">Gereal
												Travels</a>
											<div class="category">Photo</div>
										</div>
									</div>
								</div>

								<!-- work item music -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="images/works/work8.jpg" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#" class="name has-popup">Daylight Entrance</a>
											<div class="category">Music</div>
										</div>
									</div>
								</div>

								<!-- work item video -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
									<div class="box-item card-box">
										<div class="image">
											<a href="https://vimeo.com/97102654" class="has-popup-video">
												<img src="images/works/work6.jpg" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
											<div class="category">Video</div>
										</div>
									</div>
								</div>

								<!-- work item design -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
									<div class="box-item card-box">
										<div class="image">
											<a href="#popup-2" class="has-popup-media">
												<img src="images/works/work7.jpg" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
										</div>
										<div class="desc">
											<a href="#popup-2" class="name has-popup-media">Social Website</a>
											<div class="category">Design</div>
										</div>
										<div id="popup-2" class="popup-box mfp-fade mfp-hide">
											<div class="content">
												<div class="image">
													<img src="images/works/work7.jpg" alt="">
												</div>
												<div class="desc">
													<div class="post-box">
														<h1>Mobile Application</h1>
														<div class="blog-detail">Design</div>
														<div class="blog-content">
															<p>
																So striking at of to welcomed resolved. Northward by
																described up household therefore
																attention. Excellence decisively nay man yet impression
																for contrasted remarkably.
															</p>
															<p>
																Forfeited you engrossed but gay sometimes explained.
																Another as studied it to evident.
																Merry sense given he be arise. Conduct at an replied
																removal an amongst. Remaining
																determine few her two cordially admitting old.
															</p>
															<blockquote>
																Vestibulum ante ipsum primis in faucibus orci luctus et
																ultrices posuere cubilia
																Curae; Pellentesque suscipit.
															</blockquote>
															<p>
																Tiled say decay spoil now walls meant house. My mr
																interest thoughts screened of outweigh
																removing. Evening society musical besides inhabit ye my.
																Lose hill well up will he over on.
																Increasing sufficient everything men him admiration
																unpleasing sex.
															</p>
															<ul class="list-style">
																<li>Greatest properly off ham exercise all.</li>
																<li>Unsatiable invitation its possession nor off.</li>
																<li>All difficulty estimating unreserved increasing the
																	solicitude.</li>
															</ul>
															<p>
																Unpleasant astonished an diminution up partiality. Noisy
																an their of meant. Death means
																up civil do an offer wound of.
															</p>
														</div>
														<a href="#" class="button">
															<span class="text">View Project</span>
															<span class="arrow"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 
				Card - Blog
			-->
			<div class="card-inner" id="blog-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Blog Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/profile4.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">My Blog</div>
								</div>
							</div>
						</div>

						<!--
							Blog
						-->
						<div class="content blog">
							<div class="row">
								<div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

									<!-- title -->
									<div class="title"><span>My</span> Blog</div>

								</div>
								<div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

									<!-- filters -->
									<div class="all-blog">
										<a href="blog.html">All Blog</a>
									</div>

								</div>
							</div>

							<!-- blog items -->
							<div class="row">


								<!-- blog item -->
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="box-item card-box">
										<div class="image">
											<a href="blog-post.html">
												<img src="images/blog/blog2.jpg" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>19</strong>Jun</span>
											</a>
										</div>
										<div class="desc">
											<a href="blog-post.html" class="name">Not Have Yet</a>
											<div class="category">Coding</div>
										</div>
									</div>
								</div>


							</div>

						</div>

					</div>

				</div>
			</div>

			<!-- 
				Card - Contacts
			-->
			<div class="card-inner" id="contacts-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

						<!-- Map -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
							<div class="map" id="map"></div>
						</div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">Contacts</div>
								</div>
							</div>
						</div>

						<!--
							Contacts Info
						-->
						<div class="content contacts-info">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>Get</span> in Touch</div>

								</div>
							</div>

							<!-- contacts items -->
							<div class="row contacts-items">

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-map-marker"></i></div>
										<div class="name">Address</div>
										<p>
											Jl. Raya Narogon Km. 12 Bekasi, Indonesia
										</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-at"></i></div>
										<div class="name">Email</div>
										<p>
											zaiabdullah99@gmail.com
										</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-phone"></i></div>
										<div class="name">Phone</div>
										<p>
											0812 9267 6265 (WA)
										</p>
									</div>
								</div>

								<!-- contacts item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="contacts-item card-box">
										<div class="icon"><i class="la la-check-square"></i></div>
										<div class="name">Freelance</div>
										<p>
											Available
										</p>
									</div>
								</div>

							</div>

						</div>

						<!--
							Contacts Form
						-->
						<div class="content contacts-form">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>Contact</span> Form</div>

								</div>
							</div>
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- form -->
									<div class="contact_form card-box">
										<form id="cform" method="post">
											<div class="row">
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="name" placeholder="Full Name" />
													</div>
												</div>
												<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
													<div class="group-val">
														<input type="text" name="email" placeholder="Email Address" />
													</div>
												</div>
												<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
													<div class="group-val">
														<textarea name="message" placeholder="Your Message"></textarea>
													</div>
												</div>
											</div>
											<div class="align-left">
												<a href="#" class="button" onclick="$('#cform').submit(); return false;">
													<span class="text">Send Message</span>
													<span class="icon"><i class="la la-arrow-right"></i></span>
												</a>
											</div>
										</form>
										<div class="alert-success">
											<p>Thanks, your message is sent successfully.</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!-- 
				Lines Grid
			-->
			<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 10s;"></div>
						</div>
					</div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
						</div>
					</div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 0s;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--
		jQuery Scripts
	-->
	<script src="<?= base_url('template/assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/jquery.validate.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/jquery.magnific-popup.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/imagesloaded.pkgd.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/masonry.pkgd.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/masonry-filter.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/simplebar.js'); ?>"></script>
	<script src="<?= base_url('template/assets/js/typed.js'); ?>"></script>

	<!--
		Google map api
	-->
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

	<!--
		Main Scripts
	-->
	<script src="<?= base_url('template/assets/js/scripts.js'); ?>"></script>

</body>

</html>