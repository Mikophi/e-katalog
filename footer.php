<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>


    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM social");
    while ($data = mysqli_fetch_array($query))
    {
    ?>
        <div class="col">
            <ul class="nobullet social">
                <li><a href="<?= $data['link'] ?>"> <img width="20" height="20" src="admin/social/gambar/<?= $data['icon'] ?>" alt="image 1" /> <span> <?= $data['nama_sosmed'] ?></span></a></li>
            </ul>

        </div>
    <?php } ?>

    <!-- TWITTER -->
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM twitter");
    while ($data = mysqli_fetch_array($query))
    {
    ?>
        <div class="col col_3">
            <h4><?= $data['judul'] ?></h4>
            <ul class="nobullet twitter">
                <li>
                    <p><a href="#">@templatemo</a> <?= $data['isi'] ?></p>
                </li>
                <li>
                    <p><a href="#">#FREE</a><?= $data['isi'] ?></p>
                </li>
                <li><?= $data['isi'] ?><a href="#">http://bit.ly/13IwZO</a></li>
            </ul>
        </div>
    <?php } ?>


    <!-- About -->
    <?php include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM about");
    while ($data = mysqli_fetch_array($query))
    {
    ?>
        <div class="col col_3">
            <h4><?= $data['judul'] ?></h4>
            <p><?= $data['isi'] ?></p>
        </div>
    <?php
    } ?>

    <div class="clear"></div>
</div>