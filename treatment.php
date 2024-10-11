<?php include 'treatment_data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Treatment</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<section class="treatment_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Hospital <span>Treatment</span>
      </h2>
    </div>
    <div class="row">
      <?php foreach ($treatments as $treatment): ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="<?= $treatment['img']; ?>" alt="">
            </div>
            <div class="detail-box">
              <h4><?= $treatment['title']; ?></h4>
              <p><?= $treatment['description']; ?></p>
              <a href="<?= $treatment['link']; ?>">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</body>
</html>
