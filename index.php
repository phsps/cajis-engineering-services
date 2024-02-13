<?php include_once 'front_header.php'; ?>

<style>
  .experience-content-2 ul li {
    /* width: 200px; */
    height: 40px;
    display: flex;
    align-items: center;
    margin: 1.5em;
    cursor: pointer;
    padding: 1em;
    background: #580b00;
    position: relative;
    color: white;
    border-radius: 5px;
}
.experience-content-2 ul li::before,
.experience-content-2 ul li::after {
    content: "";
    position: absolute;
    z-index: -1;
    border-radius: 5px;
    width: 105%;
    transition: all 0.4s;
}
.experience-content-2 ul li::before {
    left: 0%;
    height: 130%;
    background: linear-gradient(to right, #c7c53d, #580b00);
}
.experience-content-2 ul li::after {
    left: -10%;
    height: 120%;
    background: #ffffff56;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.164);
}
.experience-content-2 ul li:hover::before {
    transform: translateX(-2.5%);
}
.experience-content-2 ul li:hover::after {
    transform: translateX(15%);
}
</style>

<link rel="stylesheet" href="./assets/css/style.css">
    <!-----End Navigation------>

    <!-----Hero Section------>
    <div class="hero swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container row cajis1">
                      <!-- <img src="assets/images/CAJIS-ICON.png" alt=""> -->
                        <h1>CAJIS Engineerng Services</h1>
                        <div class="row">
                           
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container row cajis2">
                        <h1>Construction</h1>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="container row cajis2">
                        <h1>Renovation & Repair</h1>
                        <div class="row">
                           
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                  <div class="container row cajis2">
                      <h1>Installation</h1>
                      <div class="row">
                         
                      </div>
                  </div>
              </div>

              <div class="swiper-slide">
                <div class="container row cajis2">
                    <h1>Architecture</h1>
                    <div class="row">
                        
                    </div>
                </div>
            </div>


            <div class="swiper-slide">
              <div class="container row cajis2">
                  <h1>EKCO DREDGING</h1>
                  <div class="row">
                      <!-- <div>
                          <h3>Feature Projects</h3>
                          <p>The National University Of Architecture</p>
                      </div> -->
                  </div>
              </div>
          </div>

          <div class="swiper-slide">
            <div class="container row cajis2">
                <h1>Marine Logistics</h1>
                <div class="row">
                   
                </div>
            </div>
        </div>

            </div>
          </div>
          
    <!-----End Hero Section------>
    

    <!-----Reputation------>

      <!-----Experience------>
      <section class="experience  row flex container">
        <div class="experience-img row">
            <img src="assets/images/img17.jpg" alt="" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
        </div>

        <div class="experience-content-2">
            <h1 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">What We Do</h1>
            <ul>
              <li><a href="ekco_dredging"> Sales and Supply of Sand.</a></li>
              <li><a href="blut_logistics"> Marine Logistics.</a></li>
              <li><a href="./particular_service?key=01"> Training and Development.</a></li>
              <li><a href="particular_service?key=02">Building Construction and Maintenance.</a></li>
              <li><a href="./particular_service?key=04">Erosion Control Works.</a></li>
              <li><a href="particular_service?key=05">Industrial and General Structural Works.</a></li>
              <li><a href="particular_service?key=08">Water Resource Works.</a></li>
              <li><a href="particular_service?key=09">Heavy and Light Weight Construction.</a></li>
            </ul> 
           
            <a href="./our_services" class="page-btn-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Our Services</a>
        </div>
       </section>
        <!-----End Experience------>

    <section class="reputation container">
        <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Our reputation</h2>
        <div class="reputation-cards column">
            <div class="r-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <i class="fa-solid fa-headphones"></i>
                <i class="bi bi-headset"></i>
                <h3>Best Service</h3>
                <p>"To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity."</p>
            </div>

            <div class="r-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <i class="bi bi-people-fill"></i>
                <h3>Best Team</h3>
                <p>Coming together is a beginning. Keeping together is progress. Working together is success.</p>
            </div>

            <div class="r-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                <i class="bi bi-palette-fill"></i>
                <h3>Best Designer</h3>
                <p>"Every great design begins with an even better story."</p>
            </div>

        </div>
    </section>

    <!-----End Reputation------>

    <!-----About------>
    <!-- <section class="about column container section-padding" id="about">
        <div class="about-img"><img src="assets/images/p8.jpg" alt=""></div>
        <div class="about-content">
            <h2>About Us</h2>
            <p>For more than 30 years we have been delivering world class construction and we've built many lasting relationship along the way</p>
            <p>We've matured into an industry leader and trusted resource for those seeking quality, innovation and reliability when building in Nigeria.</p>
            <a href="#" class="page-btn">More on our history</a>
        </div>
    </section> -->
    <!-----End About------>


      <!-----Experience------>
      <section class="experience row flex container">
  
        <div class="experience-content-2">
            <h1 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Why Choose Us</h1>
            <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">We analyse, design and achieve design goals whilst ensuring the safety and comfort of users and occupants.</p>
              <ul>
                  <li data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><i class="bi bi-arrow-right-short"></i> Making lives easier</li>
                  <li data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"><i class="bi bi-arrow-right-short"></i> Get every solution right here</li>
                  <li data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i class="bi bi-arrow-right-short"></i> Innovation and creativity</li>
                  <li data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"><i class="bi bi-arrow-right-short"></i> Fine engineering only with us</li>
                 </ul>     
            <a href="about_us" class="page-btn-2" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Read More</a>
        </div>

        <div class="experience-img row">
          <img src="assets/images/img4.jpg" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
      </div>
       </section>
        <!-----End Experience------>

        <section class="site" id="page">
          <div class="container">
              <div class="testi">
                  <div class="head">
                      <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Cajis Engineering Services</h2>
                      <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">A Reliable and Quality-driven firm</p>
                  </div>
  
                  <div class="body swiper">
                      <ul class="swiper-wrapper">
                          <li class="swiper-slide" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We encourage and foster a culture of innovation and creativity. We embrace new ideas, technologies, and approaches to problem-solving to drive continuous improvement and advancement.</p>
                                      <div class="name">
                                      <h4>Innovation and Creativity</h4>
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                          <li class="swiper-slide" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We strive for excellence in everything we do. WecCommit to delivering high-quality products, services, and solutions that meet or exceed customer expectations and industry standards.</p>
                                      <div class="name">
                                        <h4>Excellence and Quality</h4>
                                        
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We uphold the highest ethical standards in all our actions and decisions. We act with honesty, transparency, and integrity, maintaining trust with clients, partners, employees, and the community.</p>
                                      <div class="name">
                                        <h4>Integrity and Ethics</h4>
                                        
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                           <li class="swiper-slide">
                              <div class="wrapper">
                                  
                                  <div class="aside">
                                      <p>We foster a collaborative and inclusive environment where teamwork, mutual respect, and diverse perspectives are valued. Encourage open communication and knowledge sharing among teams to achieve common goals.</p>
                                      <div class="name">
                                          <h4>Collaboration and Teamwork</h4>
                                          
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We put customers at the center of our operations; listen to their needs, understand their challenges, and provide solutions that add value and contribute to their success.</p>
                                      <div class="name">
                                        <h4>Customer-Centric Focus</h4>
                                        
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We embrace a culture of continuous learning and professional development. We encourage our employees to expand their skills, knowledge, and expertise to stay at the forefront of the industry.</p>
                                      <div class="name">
                                        <h4>Continuous Learning and Development</h4>
                                        
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We prioritize the health, safety, and well-being of employees, clients, and the community. We commit to sustainable practices that minimize environmental impact and promote a healthier future.</p>
                                      <div class="name">
                                        <h4>Safety and Sustainability</h4>
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We take ownership of our actions and outcomes. Hold ourselves accountable for our commitments, and take responsibility for achieving results in a reliable and transparent manner.</p>
                                      <div class="name">
                                        <h4>Accountability and Responsibility</h4>
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We embrace change and adaptability in a fast-paced and dynamic industry. Remain flexible and agile to respond quickly to evolving technologies, market demands, and customer needs.</p>
                                      <div class="name">
                                        <h4>Adaptability and Flexibility</h4>
                                      </div>
                                  </div>
                              </div>
                          </li>

                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
                              <div class="wrapper">
                                  <div class="aside">
                                      <p>We empower individuals to take initiative, make decisions, and contribute meaningfully to the society. We respect and value each individual's contributions, skills, and perspectives.</p>
                                      <div class="name">
                                        <h4>Empowerment and Respect</h4>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
  
                      <!-- <div class="swiper-pagination"></div> -->
  
                      <!-- If we need navigation buttons -->
                      <!-- <div class="swiper-button-prev"></div> -->
                      <!-- <div class="swiper-button-next"></div> -->
                  </div>
              </div>
          </div>
         </section>
     <!-----Services------>
     <section class="service" id="service">
        <div class="container">
            <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Services</h2>
            <div class="service-cards column">
                <a href="./our_services" class="s-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <h4>Construction</h4>
                </a>

                <a href="./our_services" class="s-card" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                        <ion-icon name="git-pull-request-outline"></ion-icon>
                    </div>
                    <h4>Renovation</h4>
                </a>

                <a href="./our_services" class="s-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                      <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h4>Consultation</h4>
                </a>

                <a href="./our_services" class="s-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                      <i class="bi bi-gear-wide-connected"></i>
                    </div>
                    <h4>Repair Services</h4>
                </a>

                <a href="./our_services" class="s-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                      <i class="bi bi-pencil"></i>
                    </div>
                    <h4>Architecture</h4>
                </a>

                <a href="./our_services" class="s-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="icon">
                      <i class="bi bi-battery-charging"></i>
                    </div>
                    <h4>Electrical</h4>
                </a>

                
            </div>
        </div>
     </section>
      <!-----End Services------>


       

       <!-----Experience------>
       <section class="experience row flex container">
        <div class="experience-cards row">
            <div class="e-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                <h1>10+</h1>
                <p>Happy Clients</p>
            </div>

            <div class="e-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <h1>10+</h1>
                <p>Project Completed</p>
            </div>

            <div class="e-card" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                <h1>4</h1>
                <p>Awards Won</p>
            </div>

            <div class="e-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <h1>13+</h1>
                <p>Years in Business</p>
            </div>
        </div>

        <div class="experience-content">
            <h1 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">13 years experience</h1>
            <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Our company has been leading, providing construction services to clients throughout Nigeria and beyond since 2010</p>
            <a href="contact_us" class="page-btn-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Contact Us</a>
        </div>
       </section>
        <!-----End Experience------>


        <section class="reputation container section-padding">

          <div class="r-content">
            <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">How We Can Help You</h2>
         </div>
        
          <div class="reputation-cards column">
  
              <div class="r-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                <img src="assets/images/engineering.jpg" alt="">
                  <h3>Engineering & Design</h3>
                  <p>With offices in strategic locations and 24/7 engineering capabilities, Cajis Engineering can meet clients' project needs anywhere. Our disciplines include civil, electrical, mechanical,piping and structural engineering, as well as advanced specialities such as simulation, enterprises integration, integrated automation processes.</p>
              </div>
  
              <div class="r-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <img src="assets/images/procurement.jpg" alt="">
                  <h3>Procurement</h3>
                  <p>Cajis Engineering leverages international procurement expertise, market knowledge and global supply chain networks to provide the best value for clients' capital investments. Our procurement organization manages a huge global spend in equiptment, materials and services through strategic sourcing, material management, contract management.</p>
              </div>
  
              <div class="r-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                 <img src="assets/images/construction-copy.jpg" alt="">
                  <h3>Construction</h3>
                  <p>A global execution platform gives client the confidence Cajis Engineering can deliver complex, logistically challenging projects anywhere in the world. With a huge workforce of employees deployed on project in over 100 countries and 24/7 project-execution capabilities, we deliver projects with the quality and safety our clients expect. </p>
              </div>
  
          </div>
      </section>

         <!-----Subscribe------>
         <section class="subscribe section-padding">
            <div class="subscribe-content row container">
                <div>
                    <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Free Consultation with exceptional quality.</h2>
                    <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Just one call away: <a href="tel:+234 803 749 2692">+234 803 749 2692</a></p>
                </div>
                <a href="contact_us" class="page-btn-2 active" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"><i class="bi bi-whatsapp"></i> Consult Us</a>
            </div>
         </section>
         <!-----End Subscribe------>

         <!-----Projects------>
         <section class="project section-padding" id="project">
         
            <div class="section-padding2">
                <div class="container">
                    <div class="section-title">
                      <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Projects</h2>
                    </div>
        
                  <div class="row container">
                    <div class="col-md-12 container">
                      <div class="blog_slider_area owl-carousel">
                        <div class="box-area" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                          <div class="single-blog">
                            <div class="post-img">
                              <img src="assets/images/img12.jpg" alt="">
                            </div>
        
                            <div class="single_blog2">
                              <a href="#"><h4 class="post-title">Reconstruction Of Old Factory Building</h4></a>
                              <p class="blog-text">
                              </p>
        
        
                              <div class="btn-area">
                              </div>
                            </div>
                          </div>
                        </div>
        
                        <div class="box-area" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                          <div class="single-blog">
                            <div class="post-img">
                              <img src="assets/images/jetty.jpg" alt="">
                            </div>
        
                            <div class="single_blog2">
                              <a href="#"><h4 class="post-title">Fresh Concept Construction Renovation</h4></a>
                              <p class="blog-text">
                              </p>
        
                              <!-- <p><i class="bi bi-clock-fill"></i> Posted: 2hrs ago</p> -->
        
        
        
                              <div class="btn-area">
                                <!-- <a href="news.html" class="btn btn-default main_btn">Read More</a> -->
                              </div>
                            </div>
                          </div>
                        </div>
        
        
                        
                        <div class="box-area" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                          <div class="single-blog">
                            <div class="post-img">
                              <img src="assets/images/terminal.jpg" alt="">
                            </div>
        
                            <div class="single_blog2">
                              <a href="#"><h4 class="post-title">Installation And Creation Of A Supply System</h4></a>
                              <p class="blog-text">
                              </p>
        
                              <!-- <p><i class="bi bi-clock-fill"></i> Posted: 2hrs ago</p> -->
        
        
        
                              <div class="btn-area">
                                <!-- <a href="news.html" class="btn btn-default main_btn">Read More</a> -->
                              </div>
                            </div>
                          </div>
                        </div>
        
                        
                        <div class="box-area" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                          <div class="single-blog">
                            <div class="post-img">
                              <img src="assets/images/img1.jpg" alt="">
                            </div>
        
                            <div class="single_blog2">
                              <a href="#"><h4 class="post-title">Jazzy Elite Construction Shopping Center</h4></a>
                              <p class="blog-text">
                              </p>
        
                              <!-- <p><i class="bi bi-clock-fill"></i> Posted: 2hrs ago</p> -->
        
        
        
                              <div class="btn-area">
                                <!-- <a href="news.html" class="btn btn-default main_btn">Read More</a> -->
                              </div>
                            </div>
                          </div>
                        </div>
        
                        <div class="box-area" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                          <div class="single-blog">
                            <div class="post-img">
                              <img src="assets/images/img10.jpg" alt="">
                            </div>
        
                            <div class="single_blog2">
                              <a href="#"><h4 class="post-title">Fresh Concept Construction Renovation</h4></a>
                              <p class="blog-text">
                              </p>
        
                              <!-- <p><i class="bi bi-clock-fill"></i> Posted: 2hrs ago</p> -->
        
                              <div class="btn-area">
                                <!-- <a href="news.html" class="btn btn-default main_btn">Read More</a> -->
                              </div>
                            </div>
                          </div>
                        </div>


                       
        
                       
        
                        
                       
                      </div>
                    </div>
                  </div>

                 <center>
                  <a href="our_projects" class="page-btn-2 view" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">View All</a>
                 </center>
                </div>
              </div>
        
         </section>




         <section class="site" id="page">
          <div class="container">
              <div class="testi">
                  <div class="head">
                      <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">What Our Clients Say</h2>
                      <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">What people say about us...</p>
                  </div>
  
                  <div class="body swiper">
                      <ul class="swiper-wrapper">
                          <li class="swiper-slide" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                              <div class="wrapper">
                                  <div class="thumbnail">
                                      <img src="assets/images/founder.webp" alt="">
                                  </div>
                                  <div class="aside">
                                      <p>"Thank you again for your assistance with this project. As usual, you do an excellent job. The team was very thorough with the planning and kept me informed. They did a wonderful job with the construction, left the completed offices in neat and clean and were very pleasant to work with</p>
                                      <div class="name">
                                        <h4>Martin Franklin</h4>
                                        <p>Founder</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                          <li class="swiper-slide" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                              <div class="wrapper">
                                  <div class="thumbnail">
                                      <img src="assets/images/founder.webp" alt="">
                                  </div>
                                  <div class="aside">
                                      <p>"....how pleased I am with the way our construction and renovation project went earlier this year. Everything from the start of the project through completion confirmed that we made the right choice when we selected. CJ Engineering as our general contractor.“</p>
                                      <div class="name">
                                        <h4>Mrs. Cynthia M.</h4>
                                        <p>Founder</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                          <li class="swiper-slide" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                              <div class="wrapper">
                                  <div class="thumbnail">
                                      <img src="assets/images/founder.webp" alt="">
                                  </div>
                                  <div class="aside">
                                      <p>“I wanted to thank you and the project team for the build-out of our new headquarters in Lagos. The team was reliable, talented, and communicated with the whole project team throughout the course of construction. They were easily accessible from day one, promptly returned telephone calls, provided realistic options.</p>
                                      <div class="name">
                                        <h4>Alhaji Danjuma A</h4>
                                        <p>Founder</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
  
                          <!-- <li class="swiper-slide">
                              <div class="wrapper">
                                  <div class="thumbnail">
                                      <img src="assets/images/founder.webp" alt="">
                                  </div>
                                  <div class="aside">
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam harum vero commodi tempora quia. Inventore soluta temporibus laudantium consectetur quod qui? Cum molestias illum mollitia sit sunt voluptatibus iure dicta?</p>
                                      <div class="name">
                                          <h4>James Chadwick</h4>
                                          <p>Founder</p>
                                      </div>
                                  </div>
                              </div>
                          </li> -->
                      </ul>
  
                      <!-- <div class="swiper-pagination"></div> -->
  
                      <!-- If we need navigation buttons -->
                      <!-- <div class="swiper-button-prev"></div> -->
                      <!-- <div class="swiper-button-next"></div> -->
                  </div>
              </div>
          </div>
         </section>




      











          <!-- <section id="blog_area">
            <div class="container">
           <center>
            <div class="section_heading text-center">
              <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Our<span> Blog</span></h2>
            </div>
           </center>

              <div class="row">
                <div class="col-md-12 container">
                  <div class="blog_slider_area_2 owl-carousel">

                    <div class="box-area" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                      <div class="single-blog">
                        <div class="post-img">
                          <img src="assets/images/img1.jpg">
                        </div>

                        <div class="single_blog">
                          <a href="#"><h3 class="post-title">Blog News</h3></a>
                          <ul class="icon-area">
                            <li><ion-icon name="person-outline"></ion-icon>Admin</li>
                            <li><ion-icon name="timer-outline"></ion-icon>April 21,2023</li>
                          </ul>
                          <p class="blog-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum officiis omnis sint vitae non libero accusantium commodi enim.
                          </p>

                          <div class="btn-area">
                            <a href="" class="btn btn-default main_btn">View All <i class="bi bi-eye-fill"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </section> -->




              <!-------------Partners------------------>

    <section class="partner">
      <div class="container">
        <div class="row eportal">
          <div
            class="col-2"
            data-aos="fade-left"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <div class="b-button">
              <h2>Our Partners</h2>
              <!-- <button class="btn mb-3">See Brand</button> -->
            </div>
          </div>

          <div
            class="col-2"
            data-aos="fade-right"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <div class="slides owl-carousel">
              <div
                class="content"
                data-aos="fade-right"
                data-aos-delay="100"
                data-aos-duration="1000"
              >
                <div class="img-area">
                  <img src="assets/images/powerec.jpg" alt=""/>
                </div>
              </div>

              <div
                class="content"
                data-aos="fade-up"
                data-aos-delay="100"
                data-aos-duration="1000"
              >
                <div class="img-area">
                  <img src="assets/images/kodinate.jpg" alt=""/>
                </div>
              </div>

              <div
                class="content"
                data-aos="fade-left"
                data-aos-delay="100"
                data-aos-duration="1000"
              >
                <div class="img-area">
                  <img src="assets/images/homlens.jpg" alt="" />
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


       <!----Form---->
       <section class="contact" id="contact">
        <div class="container">
            <div class="contact-content">
                <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">What can we do for you</h2>
                <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">We are ready to work on project of any complexity, whether it's commercial or residential</p>
                <form action="">
                    <div class="form row">
                        <input type="text" name="" id="" placeholder="Your Name" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                        <input type="email" name="" id="" placeholder="Email" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <select name="" id="" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" title="Reason For Contacting">
                            <option value="" selected disabled>Reason For Contacting</option>
                            <option value="Construction">Construction</option>
                            <option value="Renovation">Renovation</option>
                            <option value="Consultation">Consultation</option>
                            <option value="Repair Services">Repair Services</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Logistics">Marine Logistics</option>
                            <option value="Procerement">Procerement</option>
                        </select>
                        <input type="text" name="" id="" placeholder="Phone" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Write in details..." data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"></textarea>
                    </div>
                    <div>
                      
                        <!-- <p>* Indicates a required field</p> -->
                    </div>
                    <button class="page-btn-2" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
     </section>
      <!----End Form---->









         <!-----------Footer-------------->
<?php include_once 'front_footer.php' ?>