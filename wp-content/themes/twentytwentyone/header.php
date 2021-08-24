<?php ?>
<!doctype html>
<!-- Swiper - CDN -->
<script type="module">
  import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper(...)
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- top bar -->

<div class="container-xl  border topbar_helber">
  <div class="row">
    <div class="col">
    <ul class="nav nav-left medium-nav-center nav-small  nav-divided padding_2" class="html custom html_topbar_left"><strong class="uppercase">Тавтай морилно уу</strong>
                </ul>
    </div>
    <div class="col-md-auto">
    </div>
    <div class="col col-lg-4">
    <ul class="nav nav-left medium-nav-center nav-small  nav-divided" id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-44 topbar_left"><a href="http://localhost/mixshop/%d2%af%d0%b9%d0%bb%d1%87%d0%b8%d0%bb%d0%b3%d1%8d%d1%8d%d0%bd%d0%b8%d0%b9-%d0%bd%d3%a9%d1%85%d1%86%d3%a9%d0%bb/" class="nav-top-link" >Үйлчилгээний нөхцөл</a>
       </ul>
    </div>
  </div>
</div>



<!-- <div id="top-bar" class="header-top hide-for-sticky nav-dark topbar_2">
    <div class="flex-row container">
      <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
              <li class="html custom html_topbar_left"><strong class="uppercase">Тавтай морилно уу</strong></li>  
              <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-44 topbar_left"><a href="http://localhost/mixshop/%d2%af%d0%b9%d0%bb%d1%87%d0%b8%d0%bb%d0%b3%d1%8d%d1%8d%d0%bd%d0%b8%d0%b9-%d0%bd%d3%a9%d1%85%d1%86%d3%a9%d0%bb/" class="nav-top-link">Үйлчилгээний нөхцөл</a></li>        </ul>
      </div>

      <div class="flex-col hide-for-medium flex-center">
          <ul class="nav nav-center nav-small  nav-divided">
                        </ul>
      </div>

      <div class="flex-col hide-for-medium flex-right">
 
      
    </div>
</div> -->




  <!-- start -->
<div class="container con">
    <div class="row">
      <div class="col-sm-4">
          <div class="logo">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="">
            </a>
          </div>
      </div>
      <div class="col-sm-8">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <div class="main-nav">
                <ul id="menu-navbar" class="menu">
                  <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s')); ?>
                </ul>
              </div>

            </div>
          </div>
        </nav>
      </div>
      
    </div>
  </div>
  <!-- end -->
