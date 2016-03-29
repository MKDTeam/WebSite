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

<div id="main_description">
</div>

<div id="site_header">
  <img class="graphic_description" src="img/main_description.png" name="slide_show">
  <table>
  <tr>
    <td>
      <a href="index.php">
        <img id="logo" src="img/logo.png"/>
      </a>
    </td>
    <td>
      <a class="menu_button" href="index.php?page=info">
        Подбор и доставка <div class="symbol">&#128666;</div>
      </a>
    </td>
    <td>
      <a class="menu_button" href="index.php?page=order">
        Выкуп авто <div class="symbol">&#8381;</div>
      </a>
    </td>
    <td>
      <a class="menu_button" href="index.php?page=order">
        Автозапчасти <div class="symbol">&#128295;</div>
      </a>
    </td>
  </tr>
  <tr>
    <td>
      <a class="menu_button" href="index.php?page=order">
        Сделать заказ <div class="symbol">&#128176;</div>
      </a>
    </td>
    <td>
      <a class="menu_button">
        Контакты <div class="symbol">&#128214;</div>
      </a>
    </td>
    <td>
      <a class="menu_button">
        Контакты <div class="symbol">&#128214;</div>
      </a>
    </td>
    <td>
      <a class="menu_button">
        Обратная связь <div class="symbol">&#128222;</div>
      </a>
    </td>
    <td>
      <a class="menu_button" href="index.php?page=info">
        О нас <div class="symbol">&#8505;</div>
      </a>
    </td>
  </tr>
  </table>
</div>