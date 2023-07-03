<?php include "header.php" ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('./assets/img/modular_kitchen_designs.webp');">
        
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Structural Renovation</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container" data-aos="fade-up">

        <p>
        Transform your kitchen to the heart of your home with the help of HomeLane. From coffee dates to dinner parties, our end-to-end design and installation services will turn your kitchen into a stylish and functional space.
        </p>

        <!-- LIGHTBOX FADING SHOW/HIDE EFFECT (as explained in documentation) -->
        <style type="text/css">
        .elem, .elem * {
          box-sizing: border-box;
          margin: 0 !important;	
        }
        .elem {
          display: inline-block;
          font-size: 0;
          width: 33%;
          border: 20px solid transparent;
          border-bottom: none;
          background: #fff;
          padding: 10px;
          height: auto;
          background-clip: padding-box;
        }
        .elem > span {
          display: block;
          cursor: pointer;
          height: 0;
          padding-bottom:	70%;
          background-size: cover;	
          background-position: center center;
        }
        .lcl_fade_oc.lcl_pre_show #lcl_overlay,
        .lcl_fade_oc.lcl_pre_show #lcl_window,
        .lcl_fade_oc.lcl_is_closing #lcl_overlay,
        .lcl_fade_oc.lcl_is_closing #lcl_window {
          opacity: 0 !important;
        }
        .lcl_fade_oc.lcl_is_closing #lcl_overlay {
          -webkit-transition-delay: .15s !important; 
          transition-delay: .15s !important;
        }
        </style>

        <div class="content">
            
            <a class="elem" href="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>
            <a class="elem" href="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 2" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1502082553048-f009c37129b9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>
            <a class="elem" href="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 3" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>
            
            
            <a class="elem" href="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 4" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1431794062232-2a99a5431c6c?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>
            <a class="elem" href="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 5" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>
            <a class="elem" href="https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb">
              <span style="background-image: url(https://images.unsplash.com/photo-1482192505345-5655af888cc4?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
            </a>

            <br/><br/>
          </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- LIGHTBOX INITIALIZATION -->
<script type="text/javascript">
window.onload = function() {
   
	// live handler
	lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,	
		thumb_attr: 'data-lcl-thumb', 
		
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
		socials : true,
	});	

}
</script>

  <!-- REQUIRED ELEMENTS -->

<script src="./assets/lib/jquery.js" type="text/javascript"></script>

<script src="./assets/js/lc_lightbox.lite.js" type="text/javascript"></script>
<link rel="stylesheet" href="./assets/css/lc_lightbox.css" />


<!-- SKINS -->
<link rel="stylesheet" href="./assets/css/minimal.css" />


<!-- ASSETS -->
<script src="./assets/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>

  <?php include "footer.php" ?>