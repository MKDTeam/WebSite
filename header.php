<script type="text/javascript">
all_images = new Array (
"img/order_description.png",
"img/contacts_description.png",
"img/info_description.png",
"img/main_description.png");
var ImgNum = 0;
var ImgLength = all_images.length - 1;
var delay = 2500;
var lock = false;
var run;

function chgImg(direction) {
 if (document.images) {
  ImgNum = ImgNum + direction;
  if (ImgNum > ImgLength) { ImgNum = 0; }
  if (ImgNum < 0) { ImgNum = ImgLength; }
  document.slide_show.src = all_images[ImgNum];
 }
}

function auto() {
 if (lock == true) {
  lock = false;
  window.clearInterval(run);
 }
 else if (lock == false) {
  lock = true;
  run = setInterval("chgImg(1)", delay);
 }
}
auto();
</script>

<div id="site_header"> 
  <img class="graphic_description" src="img/main_description.png" name="slide_show">
  <!-- </tr>
  <tr align="center">
   <td align="right"><a href="javascript:chgImg(-1)">Предыдущая</a></td>
   <td align="center"><a href="javascript:auto()">Старт/Стоп</a></td>
   <td align="left"><a href="javascript:chgImg(1)">Следующая</a></td>
  </tr> -->


    <!--<img id="main_description" src="img/description.png"> -->
    <a href="index.php">
        <img id="logo" src="img/logo.svg" style="height: 60px" />
    </a>

    <a class="menu_button" href="index.php?page=info">
        Главная
    </a>
   <!-- <img class="graphic_description" src="img/main_description.png"> -->

    <a class="menu_button" href="index.php?page=order">
        Сделать заказ 
    </a>
    <!-- <img class="graphic_description" src="img/order_description.png"> -->
    
    <a class="menu_button">
        Контакты
    </a>
   <!-- <img class="graphic_description" src="img/contacts_description.png"> -->

    <a class="menu_button" href="index.php?page=info">
        О нас
    </a>
 <!--   <img class="graphic_description" src="img/info_description.png"> -->

</div>