<!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Bienvenidos</span>
            <h2 class="mu-slider-title">Electronica LH</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#mu-gallery" class="mu-readmore-btn mu-reservation-btn">Ver ofertas</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Titulo 2</span>
            <h2 class="mu-slider-title">Subtitulo 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
           <a href="#mu-gallery" class="mu-readmore-btn mu-reservation-btn">Ver ofertas</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/3.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Titulo 3</span>
            <h2 class="mu-slider-title">Subtitulo 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#mu-gallery" class="mu-readmore-btn mu-reservation-btn">Ver Ofertas</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Aca te contamos</span>
              <h2>Sobre Nosotros</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/img/about-us.png" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                 <div class="mu-about-us-right">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>                              
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->



  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Aprovechalas!</span>
              <h2>Ofertas</h2>
            </div>

            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <?php $k=0; foreach ($productsOffers as $key => $value) { ?>
                  <li <?=($k==0?'class="active"':'');?>><a  href="#<?=$key;?>" data-toggle="tab"><?=$key?></a></li>
                <?php $k++; } ?>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <?php $k=0; foreach ($productsOffers as $key => $categories) { ?>
                <div class="tab-pane fade <?=($k==0?'in active':'');?>" id="<?=$key;?>">
                  <div class="row">
                    <?php foreach ($categories as $keyOffer => $offer) {?>
                    <div class="col-md-6 offer" >
                      <div class="col-md-6">
                        <img class="media-object" src="<?=Yii::app()->request->baseUrl.'/images/productsoffers/'.$offer['id'].'/'.$offer['image'];?>" alt="img">
                      </div>
                      <div class="col-md-6">
                        <h4><?=$offer['name'];?></h4>
                        <span>$<?=$offer['price'];?></span>
                        <p><?=$offer['description'];?></p>
                      </div>
                    </div>
                    <?php  } ?>
                  </div>
                </div>
                <?php $k++; } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->