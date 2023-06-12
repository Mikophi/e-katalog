<div id="templatemo_header">
  <div class="templatemo_header_box left">
    <div id="site_title"><a href="#">Eco Tree</a></div>
  </div> <!-- END of headar box -->
  <div id="templatemo_slider"><span class="sliderframe"></span>
    <div class="slider-wrapper theme-orman">
      <div id="slider" class="nivoSlider">
        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM slider");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <img src="admin/slider/gambar/<?= $data['gambar']; ?>" alt="image" class="slider_image">
        <?php
        }
        ?>

      </div>
    </div>
    <script type="text/javascript" src="assets_front/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="assets_front/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
        $('#slider').nivoSlider({
          controlNav: false,
          directionNavHide: false
        });
      });
    </script>
  </div><!-- END of templatemo_slider -->
  <div class="templatemo_header_box right">
    <ul id="templatemo_menu">
      <li><a href="index.php" class="selected home">Home</a></li>
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM kategori");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <li><a href="index2.php?id=<?= $data['id']; ?>" class="selected home"><?= $data['nama_kategori'] ?></a></li>
      <?php
      } ?>

    </ul>
  </div> <!-- END of headar box -->
  <div class="clear"></div>
</div>