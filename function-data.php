<?php

  $phone = "+01 123455678990";
  $email = "demo@gmail.com";
  $location = "Location";

  // Navigation menu

function headernavigation(){
  $menuItems = [
    [
        "name" => "Home", 
        "url" => "index.php", 
        "active" => true
    ],
    [
        "name" => "About", 
        "url" => "about.php", 
        "active" => false
    ],
    [
        "name" => "Treatment", 
        "url" => "treatment.php", 
        "active" => false
    ],
    [
        "name" => "Doctors", 
        "url" => "doctor.php", 
        "active" => false
    ],
    [
        "name" => "Testimonial", 
        "url" => "testimonial.php", 
        "active" => false
    ],
    [
        "name" => "Contact Us", 
        "url" => "contact.php", 
        "active" => false
        ]
  ];

  foreach ($menuItems as $item) {
    echo '<li class="nav-item '.($item['active'] ? 'active' : '').'">
            <a class="nav-link" href="'.$item['url'].'">'.$item['name'].' 
            <span class="sr-only">(current)</span></a>
          </li>';
    };
    };


    // SLIDER

function carousel(){
    $carouselItems = [
        [
            "title" => "Mico",
            "titlespan" => "Hospital", 
            "description" => "when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.", 
            "image" => "images/slider-img.jpg",
            "active" => true
        ],
        [
            "title" => "Mico",
            "titlespan" => "Hospital",  
            "description" => "when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.", 
            "image" => "images/slider-img.jpg",
            "active" => false
        ],
        [
            "title" => "Mico",
            "titlespan" => "Hospital", 
            "description" => "when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.", 
            "image" => "images/slider-img.jpg",
            "active" => false
            ]
      ];

      foreach ($carouselItems as $carouselItem){
        echo '<div class="carousel-item '.($carouselItem['active'] ? 'active' : '').'">
                <div class="container ">
                 <div class="row">
                    <div class="col-md-6">
                     <div class="detail-box">
                     <div class="play_btn">
                         <button>
                         <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        </div>
                        <h1>'.$carouselItem['title'].'<br>
                            <span>'.$carouselItem['titlespan'].'</span>
                        </h1>
                    <p>
                      '.$carouselItem['description'].'
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="'.$carouselItem['image'].'" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>';
        };
    };

