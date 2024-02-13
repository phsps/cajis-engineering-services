<?php 
include_once 'front_header.php'; 
include_once './services_writeup.php';
$key = $_GET['key']; //01
$keys = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '010'];
if(!in_array($key, $keys)){
 header('Location: ./');
}
error_reporting(0);
?>
<link rel="stylesheet" href="assets/css/logistics.css">
<!-- content -->

 <!--------Hero--------->

 <section class="hero">
        <div class="about-container">
            <div class="container row">
                <div class="more">
                    <span data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">BUILDING COMMUNITIES</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <?=$servicesList[$key]['name']?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!--------End Hero--------->



    
          <!-----Experience------>
          <section class="experience section-padding container">

            <div class="experience-img row">
              <img src="./assets/images/<?=$servicesList[$key]['hero_img_url']?>" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
          </div>
          
            <div class="experience-content-2">
                <h2 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><?=$servicesList[$key]['heading']?></h2>
               <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                    <?=$servicesList[$key]['text']?></p>
               <p>
                    <?=$servicesList[$key]['text2']?></p>
               </p>
               <p>
                    <?=$servicesList[$key]['text3']?></p>
               </p>
               <p>
                    <?=$servicesList[$key]['text4']?></p>
               </p>
            </div>
    
           </section>
            <!-----End Experience------>


            <section class="reputation container section-padding">

              <h2><?=$servicesList[$key]['our_works_header']?></p></h2>
        
              <div class="reputation-cards column">
      
                  <div class="r-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                      <img src="./assets/images/<?=$servicesList[$key]['our_works_img1']?>">
                      <h3><?=$servicesList[$key]['our_works_caption1']?></h3>
                    </div>
      
                  <div class="r-card" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                      <img src="./assets/images/<?=$servicesList[$key]['our_works_img2']?>" alt="">
                      <h3><?=$servicesList[$key]['our_works_caption2']?></h3>
                     </div>
      
                  <div class="r-card" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                      <img src="./assets/images/<?=$servicesList[$key]['our_works_img3']?>" alt="">
                      <h3><?=$servicesList[$key]['our_works_caption3']?></h3>
                  </div>
              </div>

          </section>




<!-- ./content -->
<?php include_once 'front_footer.php' ?>