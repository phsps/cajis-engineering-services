<?php include_once 'front_header.php';
        include_once './services_writeup.php';
?>

<link rel="stylesheet" href="assets/css/services.css">

<!-- content -->

 <!--------Hero--------->

 <section class="hero">
        <div class="about-container">
            <div class="container row">
                <div class="more">
                    <span data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">BUILDING COMMUNITIES</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <!--------End Hero--------->




    <section class="reputation container section-padding">

        <div class="r-content">
            <span data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">WHAT WE DO</span>
            <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Services</h2>
         </div>
        
        <div class="reputation-cards column">

        <?php for($i = 1; $i < count($servicesList)+1; $i++ ):?>

            <div class="r-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <h2>0<?=$i?></h2>
                <h3><?=$servicesList["0".$i]['heading']?></h3>
                <p><?=substr($servicesList["0".$i]['text'], 0, 200).' ...';?></p>
                <a href="particular_service?key=<?="0".$i;?>">Details</a>
                <!-- <a href="<?=$servicesList["0".$i]['page']?>">Details</a> -->
            </div>

        <?php endfor;?>
        </div>
    </section>





             <!-----Experience------>
           
                <!-----End Experience------>


                  <!-----Subscribe------>
         <section class="subscribe section-padding">
            <div class="subscribe-content row container">
                <section class="experience section-padding row flex container">

                    <div class="experience-video row">
                        <video muted autoplay loop data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <source src="assets/videos/full.mp4">
                        </video>
                       </div>
        
                    <div class="experience-content-2">
                        <span data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">WHAT WE DO</span>
                         <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Building The Future on a <span>Foundation of Excellence</span></h2>
                        <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Our civil and structural team is committed to providing sustainable, creative & efficient engineering solutions for our communities</p>
             
                        <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                          We maximize the ways in which materials are used together to make the different components of
                          your projects. We are known for the best in town remodeling services that go hassle free with our trained
                          professionals at work 
                        </p>
                        
                         <a href="contact_us" class="page-btn-2" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">Contact Us</a>
                     </div>
    
    
                     <div class="experience-rating column">
                        <div class="rate">
                            <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">99%</h2>
                            <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Building Control Approval Rate</p>
                        </div>
                        <div class="rate">
                            <h2 data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">320+</h2>
                            <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Active Projects in Construction Management</p>
                        </div>
                        <div class="rate">
                            <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">200+</h2>
                            <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Completed Projects Every Year</p>
                        </div>
                        <div class="rate">
                            <h2 data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1000">4.253</h2>
                            <p data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">Million euros Turnover in 2020</p>
                        </div>
                     </div>

                  
                   </section>
                  
            </div>
         </section>
         <!-----End Subscribe------>





         <section class="experience section-padding row flex container">

            <div class="experience-img row">
                <img src="assets/images/3.webp" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
            </div>


            <div class="experience-content-3">
                <span data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">WHAT WE DO</span>
                 <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Trusted Quality for Over <span>20 Years</span></h2>
                <!-- <p>Convallis a cras semper auctor neque vitae. Lectus proin nibh nisl condimentum fermentum odio eu. Augue neque gravida in fermentum et sollicitudin</p> -->

                 <div class="experience-rating3 column">
                    <div class="rate2">
                        <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">100%</h2>
                        <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Efficiency</p>
                    </div>
                    <div class="rate2">
                        <h2 data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">100%</h2>
                        <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Reliability</p>
                    </div>
                    <div class="rate2">
                        <h2 data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">100%</h2>
                        <p data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">Time Management</p>
                    </div>
                    <div class="rate2">
                        <h2 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">99%</h2>
                        <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Customer Satisfaction</p>
                    </div>
                 </div>
             </div>
          
           </section>



<!-- ./content -->
<?php include_once 'front_footer.php' ?>