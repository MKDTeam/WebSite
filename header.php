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
  <div id="main_description">
  </div>
  <!-- </tr>
  <tr align="center">
   <td align="right"><a href="javascript:chgImg(-1)">Предыдущая</a></td>
   <td align="center"><a href="javascript:auto()">Старт/Стоп</a></td>
   <td align="left"><a href="javascript:chgImg(1)">Следующая</a></td>
  </tr> -->


    <!--<img id="main_description" src="img/description.png"> -->
    <a href="index.php">
        <img id="logo" src="img/logo.png"/>
    </a>

    <a class="menu_button" href="index.php?page=info">
        Подбор и доставка
    </a>
   <!-- <img class="graphic_description" src="img/main_description.png"> -->

    <a class="menu_button" href="index.php?page=order">
        Выкуп авто  
    </a>

    <a class="menu_button" href="index.php?page=order">
        Автозапчасти
    </a>
    <!-- <img class="graphic_description" src="img/order_description.png"> -->
    <a class="menu_button" href="index.php?page=order">
        Сделать заказ 
    </a>
    <a class="menu_button">
        Контакты
    </a>
   <!-- <img class="graphic_description" src="img/contacts_description.png"> -->
   <a class="menu_button">
        Обратная связь
    </a>

    <a class="menu_button" href="index.php?page=info">
        О нас
    </a>
 <!--   <img class="graphic_description" src="img/info_description.png"> -->

</div>