<?php include_once 'front_header.php'; 
    include_once './services_writeup.php';
    $key = "01";
?>
<link rel="stylesheet" href="assets/css/dredging.css">
<!-- content -->

 <!--------Hero--------->

 <section class="hero">
        <div class="about-container">
            <div class="container row">
                <div class="more">
                    <span data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">BUILDING COMMUNITIES</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Development</h1>
                </div>
            </div>
        </div>
    </section>

    <!--------End Hero--------->

    <section class="reputation container section-padding">

<h2>Our Works</h2>

<div class="reputation-cards column">

    <div class="r-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
        <img src="assets/images/dredging2.jpg">
        <h3>Training</h3>
      </div>

    <div class="r-card" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
        <img src="assets/images/dredging.jpg" alt="">
        <h3>Growth</h3>
       </div>

    <div class="r-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
        <img src="assets/images/dredging4.jpg" alt="">
        <h3>Development</h3>
    </div>

</div>
</section>


    
          <!-----Experience------>
          <section class="experience section-padding container">

          <div class="experience-content-2">
                <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><?=$servicesList[$key]['name']?></h2>
               <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">In the dynamic realm of engineering, innovation is not just a goal; it's a necessity. At Cajis Engineering Services, we recognize that the success of engineering teams hinges on continuous learning and development. Our mission is to equip your engineers with the skills and knowledge needed to tackle the challenges of today and tomorrow.</p>
                <p><?=$servicesList[$key]['text']?></p>
               <p>Invest in the expertise and proficiency of your engineering team with Cajis Engineering Services. Our specialized training solutions will empower your engineers to not only meet but exceed the challenges of the fast-paced engineering landscape. Let us be your strategic partner in propelling your team to new heights of engineering excellence.</p>
               
            </div>

            <div class="experience-img row">
              <img src="assets/images/Cajis-slide-6.jpg" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
          </div>
          
           
    
           </section>
            <!-----End Experience------>


           



<!-- ./content -->
<?php include_once 'front_footer.php' ?>