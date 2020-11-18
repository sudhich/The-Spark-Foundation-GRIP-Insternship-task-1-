<html>
   <head>
	   <?php
	   include('header.php');
	   ?>
      <?php


                        $servername="localhost";
                        $username="root";
                        $password="";
                        $database="admin90";
                        $conn=mysqli_connect($servername,$username,$password,$database);
                        if ($conn) {
                            echo "";
                        }
                        else{
                            echo "";
                        }
                        ?>
   </head>
   <body>
      <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
         <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
               <span class="icon-close2 js-menu-toggle"></span>
            </div>
         </div>
         <div class="site-mobile-menu-body"></div>
      </div>
      <?php    
               $sql="select * from addbanner limit 1";
               $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                // output data of each row
                  while($row = $result->fetch_assoc()) {
                 
                  ?>
              <img src="uploadbanner/<?php echo $row['b_file'];?>" alt="not get">

                  

                 
               

      <div class="site-blocks-cover overlay" style="background-image: url(./admin/uploadbanner/<?php echo $row['b_file'];?>);" data-aos="fade" data-stellar-background-ratio="0.5">
         <div class="container">

            <div class="row align-items-center justify-content-center text-center">
               <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                  <div class="row justify-content-center mb-4">
                     <div class="col-md-8 text-center">
                        <h1>We Love To Build <span class="typed-words"></span></h1>
                        <p class="lead mb-5">Free Web Template by <a href="https://images.app.goo.gl/dsoHmodE37RHss4CA" target="_blank">link</a></p>
                        <div><a data-fancybox data-ratio="2" href="https://youtu.be/HFX6AZ5bDDo" class="btn btn-primary btn-md">Watch Video</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     <?php
       }
               
      }else{
                  echo "0 results";
                    }

              ?>
      <section class="site-section">

                        <?php
                        $sql="select * from Innovate";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        
                        
                      
                           ?>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <div class="p-3 box-with-humber">
                     <div class="number-behind">01.</div>
                     <h2 class="text-primary">Innovate</h2>
                     <p class="mb-4"><?php echo $row['content']."<br>";?></p>
                     <ul class="list-unstyled ul-check primary">
                        <li><?php echo $row['content1']."<br>";?></li>
                        <li><?php echo $row['content2']."<br>";?></li>
                        <li><?php echo $row['content3']."<br>";?></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="p-3 box-with-humber">
                     <div class="number-behind">02.</div>
                     <h2 class="text-primary">Create</h2>
                     <p class="mb-4"><?php echo $row['content']."<br>";?></p>
                     <ul class="list-unstyled ul-check primary">
                        <li><?php echo $row['content1']."<br>";?></li>
                        <li><?php echo $row['content2']."<br>";?></li>
                        <li><?php echo $row['content3']."<br>";?></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="p-3 box-with-humber">
                     <div class="number-behind">03.</div>
                     <h2 class="text-primary">Scale</h2>
                     <p class="mb-4"><?php echo $row['content']."<br>";?></p>
                     <ul class="list-unstyled ul-check primary">
                        <li><?php echo $row['content1']."<br>";?></li>
                        <li><?php echo $row['content2']."<br>";?></li>
                        <li><?php echo $row['content3']."<br>";?></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="site-section" id="work-section">
   <div class="container">
      <div class="row mb-5 justify-content-center">
         <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Our Works</h2>
            <p class="lead"><?php echo $row['content']."<br>";?></p>
         </div>
      </div>
   </div>
   <?php    
               $sql="select * from addbanner limit 1";
               $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                // output data of each row
                  while($row = $result->fetch_assoc()) {
                 
                  ?>
              
<div class="container-fluid">
   <div class="row">
      <div class="col-md-6 col-lg-4">
         <a href="images/img_1.jpg" class="media-1" data-fancybox="gallery">
            <img src="./admin/uploadbanner/<?php echo $row['b_file'];?>" alt="not get">
            <div class="media-1-content">
               <h2>Bonzai Tree</h2>
               <span class="category">Web Application</span>
            </div>
         </a>
      </div>
      <div class="col-md-6 col-lg-4">
         <a href="images/img_2.jpg" class="media-1" data-fancybox="gallery">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="media-1-content">
               <h2>Simple Woman</h2>
               <span class="category">Branding</span>
            </div>
         </a>
      </div>
      <div class="col-md-6 col-lg-4">
         <a href="images/img_3.jpg" class="media-1" data-fancybox="gallery">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="media-1-content">
               <h2>Fruits</h2>
               <span class="category">Website</span>
            </div>
         </a>
      </div>
      <div class="col-md-6 col-lg-4">
         <a href="images/img_4.jpg" class="media-1" data-fancybox="gallery">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="media-1-content">
               <h2>Design Material</h2>
               <span class="category">Web Application</span>
            </div>
         </a>
      </div>
      <div class="col-md-6 col-lg-4">
         <a href="images/img_5.jpg" class="media-1" data-fancybox="gallery">
            <img src="./admin/uploadbanner/<?php echo $row['b_file'];?>" alt="not get">
            <div class="media-1-content">
               <h2>Handy Food</h2>
               <span class="category">Branding</span>
            </div>
         </a>
      </div>
      <div class="col-md-6 col-lg-4">
         <a href="images/img_6.jpg" class="media-1" data-fancybox="gallery">
            <img src="images/img_6.jpg" alt="Image" class="img-fluid">
            <div class="media-1-content">
               <h2>Cat With Cup</h2>
               <span class="category">Website</span>
            </div>
         </a>
      </div>
</div>
   <?php
       }
               
      }else{
                  echo "0 results";
                    }

              ?>
</section>
<?php
                        $sql="select * from Innovate";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        
                        
                      
                           ?>

<section class="site-section border-bottom" id="services-section">
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-8 text-center aos-init aos-animate" data-aos="fade-up">
            <h2 class="text-black h1 site-section-heading text-center">Our Services</h2>
         </div>
      </div>
      <div class="row align-items-stretch">
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
               <div>
                  <h3>Web Design</h3>
                  <p><?php echo $row['content']."<br>";?></p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
               <div>
                  <h3>eCommerce</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
               <div>
                  <h3>Web Applications</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
               <div>
                  <h3>Branding</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
               <div>
                  <h3>Copy Writing</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
               <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
               <div>
                  <h3>Mobile Applications</h3>
                  <p><?php echo $row['content3']."<br>";?></p>
                  <p><a href="#">Learn More</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php    
               $sql="select * from addbanner limit 1";
               $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                // output data of each row
                  while($row = $result->fetch_assoc()) {
                 
                  ?>

<section class="section ft-feature-1">
   <div class="container">
      <div class="row align-items-stretch">
         <div class="col-12 bg-black w-100 ft-feature-1-content">
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <img src="./admin/uploadbanner/<?php echo $row['b_file'];?>" alt="not get">
                  <?php
       }
               
      }else{
                  echo "0 results";
                    }

              ?>
               </div>
               <div class="col-lg-3 ml-auto">
                  <div class="mb-5">
                     <h3 class="d-flex align-items-center"><span class="icon icon-beach_access mr-2"></span><span>Strategy</span></h3>
                     <p><?php echo $row['content3']."<br>";?></p>
                     <p><a href="#">Read More</a></p>
                  </div>
                  <div>
                     <h3 class="d-flex align-items-center"><span class="icon icon-build mr-2"></span><span>Web Development</span></h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                     <p><a href="#">Read More</a></p>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="mb-5">
                     <h3 class="d-flex align-items-center"><span class="icon icon-format_paint mr-2"></span><span>Art Direction</span></h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                     <p><a href="#">Read More</a></p>
                  </div>
                  <div>
                     <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>Copywriting</span></h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                     <p><a href="#">Read More</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="site-section testimonial-wrap">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Testimonials</h2>
         </div>
      </div>
   </div>
   <div class="slide-one-item home-slider owl-carousel">
      <div>
         <div class="testimonial">
            <blockquote class="mb-5">
               <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
               <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
               <p>John Smith</p>
            </figure>
         </div>
      </div>
      <div>
         <div class="testimonial">
            <blockquote class="mb-5">
               <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
               <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
               <p>Christine Aguilar</p>
            </figure>
         </div>
      </div>
      <div>
         <div class="testimonial">
            <blockquote class="mb-5">
               <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
               <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
               <p>Robert Spears</p>
            </figure>
         </div>
      </div>
      <div>
         <div class="testimonial">
            <blockquote class="mb-5">
               <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
               <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
               <p>Bruce Rogers</p>
            </figure>
         </div>
      </div>
   </div>
</section>
<div class="site-section" id="about-section">
   <div class="container">
      <div class="row mb-5">
         <div class="col-md-5 ml-auto mb-5 order-md-2 aos-init aos-animate" data-aos="fade">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
         </div>
         <div class="col-md-6 order-md-1 aos-init aos-animate" data-aos="fade">
            <div class="row">
               <div class="col-12">
                  <div class="text-left pb-1">
                     <h2 class="text-black h1 site-section-heading">About Us</h2>
                  </div>
               </div>
               <div class="col-12 mb-4">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
               </div>
               <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                     <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                     <div>
                        <h3>Web &amp; Mobile Specialties</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                        <p class="mb-0"><a href="#">Learn More</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                     <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                     <div>
                        <h3>Intuitive Thinkers</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                        <p class="mb-0"><a href="#">Learn More</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   </div>  
   <div class="site-section border-bottom" id="team-section">
	   <div class="container">
	      <div class="row justify-content-center mb-5">
	         <div class="col-md-7 text-center">
	            <h2 class="text-black h1 site-section-heading">Our Team</h2>
	         </div>
	      </div>
	      <div class="row">
	         <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade" data-aos-delay="100">
	            <div class="person text-center">
	               <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
	               <h3>John Rooster</h3>
	               <p class="position text-muted">Co-Founder, President</p>
	               <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
	               <ul class="ul-social-circle">
	                  <li><a href="#"><span class="icon-facebook"></span></a></li>
	                  <li><a href="#"><span class="icon-twitter"></span></a></li>
	                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
	                  <li><a href="#"><span class="icon-instagram"></span></a></li>
	               </ul>
	            </div>
	         </div>
	         <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade" data-aos-delay="200">
	            <div class="person text-center">
	               <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
	               <h3>Tom Sharp</h3>
	               <p class="position text-muted">Co-Founder, COO</p>
	               <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
	               <ul class="ul-social-circle">
	                  <li><a href="#"><span class="icon-facebook"></span></a></li>
	                  <li><a href="#"><span class="icon-twitter"></span></a></li>
	                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
	                  <li><a href="#"><span class="icon-instagram"></span></a></li>
	               </ul>
	            </div>
	         </div>
	         <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade" data-aos-delay="300">
	            <div class="person text-center">
	               <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
	               <h3>Winston Hodson</h3>
	               <p class="position text-muted">Marketing</p>
	               <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
	               <ul class="ul-social-circle">
	                  <li><a href="#"><span class="icon-facebook"></span></a></li>
	                  <li><a href="#"><span class="icon-twitter"></span></a></li>
	                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
	                  <li><a href="#"><span class="icon-instagram"></span></a></li>
	               </ul>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
	<section class="site-section" id="blog-section">
      <div class="container">
         <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
               <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
               <div class="h-entry">
                  <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                  <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                  <div class="meta mb-4">Ham Brook <span class="mx-2">•</span> Jan 18, 2019<span class="mx-2">•</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                  <p><a href="#">Continue Reading...</a></p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
               <div class="h-entry">
                  <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                  <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                  <div class="meta mb-4">James Phelps <span class="mx-2">•</span> Jan 18, 2019<span class="mx-2">•</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                  <p><a href="#">Continue Reading...</a></p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
               <div class="h-entry">
                  <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                  <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                  <div class="meta mb-4">James Phelps <span class="mx-2">•</span> Jan 18, 2019<span class="mx-2">•</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                  <p><a href="#">Continue Reading...</a></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="site-section bg-light" id="contact-section">
   <div class="container">
      <div class="row mb-5">
         <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Contact Us</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7 mb-5">
            <form action="#" class="p-5 bg-white">
               <h2 class="h4 text-black mb-5">Contact Form</h2>
               <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                     <label class="text-black" for="fname">First Name</label>
                     <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                     <label class="text-black" for="lname">Last Name</label>
                     <input type="text" id="lname" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <label class="text-black" for="email">Email</label>
                     <input type="email" id="email" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <label class="text-black" for="subject">Subject</label>
                     <input type="subject" id="subject" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <label class="text-black" for="message">Message</label>
                     <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-5">
            <div class="p-4 mb-3 bg-white">
               <p class="mb-0 font-weight-bold">Address</p>
               <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
               <p class="mb-0 font-weight-bold">Phone</p>
               <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
               <p class="mb-0 font-weight-bold">Email Address</p>
               <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="b2cbddc7c0d7dfd3dbdef2d6dddfd3dbdc9cd1dddf">[email&nbsp;protected]</span></a></p>
            </div>
         </div>
      </div>
   </div>
</section>
      <?php
	   	include('footer.php');
	   ?>   
    <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/typed.js"></script>
<script>
            var typed = new Typed('.typed-words', {
            strings: ["Web Apps"," WordPress"," Mobile Apps"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> 
	</body>
</html>