<?php
// ექიმების მონაცემები ფუნქციით
function getDoctors() {
    return [
        [
            "name" => "Hennry",
            "degree" => "MBBS",
            "image" => "images/team1.jpg",
            "social" => [
                "facebook" => "#",
                "twitter" => "#",
                "linkedin" => "#",
                "instagram" => "#"
            ]
        ],
        [
            "name" => "Jenni",
            "degree" => "MBBS",
            "image" => "images/team2.jpg",
            "social" => [
                "facebook" => "#",
                "twitter" => "#",
                "linkedin" => "#",
                "instagram" => "#"
            ]
        ],
        [
            "name" => "Morco",
            "degree" => "MBBS",
            "image" => "images/team3.jpg",
            "social" => [
                "facebook" => "#",
                "twitter" => "#",
                "linkedin" => "#",
                "instagram" => "#"
            ]
        ]
        
    ];
}

// ექიმების გამოსატანი შაბლონი
function renderDoctor($doctor) {
    ?>
    <div class="item">
        <div class="box">
            <div class="img-box">
                <img src="<?php echo $doctor['image']; ?>" alt="" />
            </div>
            <div class="detail-box">
                <h5><?php echo $doctor['name']; ?></h5>
                <h6><?php echo $doctor['degree']; ?></h6>
                <div class="social_box">
                    <a href="<?php echo $doctor['social']['facebook']; ?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $doctor['social']['twitter']; ?>">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $doctor['social']['linkedin']; ?>">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $doctor['social']['instagram']; ?>">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
