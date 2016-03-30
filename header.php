<script type="text/javascript">
all_images = new Array (
"img/slide_1.png",
"img/slide_2.png",
"img/slide_3.png",
"img/slide_4.png",
"img/slide_5.png");
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
  <a href="index.php">
    <img id="logo" src="img/logo.png"/>
  </a>

  <div id="main_description">
  </div>
  <img class="graphic_description" src="img/slide_1.png" name="slide_show">

  <a class="menu_button" href="index.php?page=">
    Подбор и доставка <!--div class="symbol">&#128666;</div-->
  </a>

  <a class="menu_button" href="index.php?page=">
    Выкуп авто <!--div class="symbol">&#8381;</div-->
  </a>

  <a class="menu_button" href="index.php?page=">
    Автозапчасти <!--div class="symbol">&#128295;</div-->
  </a>

  <a class="menu_button" href="index.php?page=order">
    Сделать заказ <!--div class="symbol">&#128176;</div-->
  </a>

  <a class="menu_button" href="index.php?page=">
    Контакты <!--div class="symbol">&#128214;</div-->
  </a>

  <a class="menu_button" href="index.php?page=">
    Обратная связь <!--div class="symbol">&#128222;</div-->
  </a>

  <a class="menu_button" href="index.php?page=info">
    О нас <!--div class="symbol">&#8505;</div-->
  </a>
</div>