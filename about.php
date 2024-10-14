<?php include 'functions.php'; ?> <!-- ფუნქციების ფაილის ჩართვა -->

<?php 
// ექიმების სიის გამოტანა
$doctors = getDoctors(); 
?>

<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>Doctors</span>
            </h2>
        </div>
        <div class="carousel-wrap">
            <div class="owl-carousel team_carousel">
                <?php foreach ($doctors as $doctor) : ?>
                    <?php renderDoctor($doctor); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
