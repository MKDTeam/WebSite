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

  <img id="slide_show" src="img/slide_1.png" name="slide_show">

  <a class="menu_button" href="index.php?page=sel_del">
    Подбор и доставка <!--div class="symbol">&#128666;</div-->
  </a>

  <a class="menu_button" href="index.php?page=ransom">
    Выкуп авто <!--div class="symbol">&#8381;</div-->
  </a>

<a class="menu_button" href="index.php?page=protection">
    Защита картера <!--div class="symbol">&#128176;</div-->
  </a>

  <a class="menu_button" href="index.php?page=spare_part">
    Автозапчасти <!--div class="symbol">&#128295;</div-->
  </a>

  <a class="menu_button" href="index.php?page=contact">
    Контакты <!--div class="symbol">&#128214;</div-->
  </a>

  <a class="menu_button" href="index.php?page=info">
    О нас <!--div class="symbol">&#8505;</div-->
  </a>
</div>