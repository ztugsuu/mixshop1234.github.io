<?php ?>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <h4>Үндсэн Цэс</h4> 
      <div><hr></div>
    <?php wp_nav_menu(array('theme_location' => 'footer_1', 'container' => false, 'items_wrap' => '%3$s')); ?>
    </div>
    <div class="col-sm">
     <h4>Ангилал</h4> 
      <div><hr></div>
    <?php wp_nav_menu(array('theme_location' => 'footer_2', 'container' => false, 'items_wrap' => '%3$s')); ?>
    </div>
    <div class="col-sm ">
     <h4>Бараа Хүлээн Авах</h4>  
      <div><hr></div>
     Таны захиалсан бараа 7-14 хоногт Улаанбаатарт ирэх ба ирсэн тохиолдолд танд SMS-ээр мэдэгдэл илгээнэ. Та бараагаа өөрийн биер ирж авах боломжтой ба өөрийн хаягаар хүргүүлэн хүлээн авж болно. Баярлалаа.
    </div>
    <div class="col-sm footer_tailbar">
     <h4>Холбоо Барих</h4> 
      <div><hr></div>
     <strong>Хаяг:</strong> Улаанбаатар хот, Баянзүрх дүүрэг, 16-р хороо, Дандарын 8-2-1
     <br>
     <strong>Утас:</strong> +976 8889-4848
     <br>
     <strong>Имэйл:</strong> info@mix-shop.mn
    </div>
  </div>
</div>
<div class="row align-items-end">
    <div class="col">

    </div>
  </div>
</div>




<script>
const swiper = new Swiper('.swiper-container'
, {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    console.log("ner");
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
    </script>

<?php wp_footer(); ?>

</body>
</html>
