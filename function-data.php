<?php

//Contact Nav
function contactnav(){
  $contactnav=[
    [
      'data'=>'+01 123455678990',
      'icon'=>'phone' 
    ],
    [
      'data'=>'demo@gmail.com',
      'icon'=>'envelope' 
    ],
    [
      'data'=>'Location',
      'icon'=>'market' 
    ]
    ];

    foreach($contactnav as $conav){
      echo '<a href="">
              <i class="fa fa-'.$conav['icon'].'" aria-hidden="true"></i>
              <span>
              '.$conav['data'].'
              </span>
            </a>';
    };
  };

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
        "url" => "doctors.php", 
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



// SLIDER SECTION
function slider(){
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

// TREATMENT SECTION
function treatment(){
  $treatments = [
    [
        'img' => 'images/t1.png',
        'title' => 'Nephrologist Care',
        'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => '#'
    ],
    [
        'img' => 'images/t2.png',
        'title' => 'Eye Care',
        'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => '#'
    ],
    [
        'img' => 'images/t3.png',
        'title' => 'Pediatrician Clinic',
        'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => '#'
    ],
    [
        'img' => 'images/t4.png',
        'title' => 'Parental Care',
        'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'link' => '#'
    ]
  ];
  
  foreach($treatments as $treatment){
    echo '<div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="'.$treatment ['img'].'" alt="">
            </div>
            <div class="detail-box">
              <h4>
                '.$treatment['title'].'
              </h4>
              <p>
                '.$treatment['description'].'
              </p>
              <a href="'.$treatment['link'].'">
                Read More
              </a>
            </div>
          </div>
        </div>';
    };

  };

//DOCTORS SECTION
function doctor(){
  $doctors = [
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

    foreach($doctors as $doctor){
      echo '<div class="item">
            <div class="box">
              <div class="img-box">
                <img src="'.$doctor['image'].'" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  '.$doctor['name'].'
                </h5>
                <h6>
                  '.$doctor['degree'].'
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>';
      } 
  };

// ABOUT SECTION
function about(){
  $about=[
    'title' => 'About',
    'titlespan' => 'Hospital',
    'text' => "has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors",
    'image' => 'images/about-img.jpg',
    'button' => 'Read More'
  ];

      echo '<div class="row">
              <div class="col-md-6 ">
                <div class="img-box">
                  <img src="'.$about['image'].'" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <div class="heading_container">
                    <h2>
                      '.$about['title'].' <span>'.$about['titlespan'].'</span>
                    </h2>
                  </div>
                  <p>
                    '.$about['text'].'
                  </p>
                  <a href="">
                    '.$about['button'].'
                  </a>
                </div>
              </div>
            </div>';
  };


// TESTIMONIAL SECTION
function testimonial(){
    $testimonials= [
      [
        'name'=>'Morijorch',
        'model'=>'Default model text',
        'text'=>"editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
        'active'=>true
      ],
      [
        'name'=>'Rochak',
        'model'=>'Default model text',
        'text'=>"Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
        'active'=>false
      ],
      [
        'name'=>'Brad Johns',
        'model'=>'Default model text',
        'text'=>"Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
        'active'=>false
        ]
      ];

      foreach($testimonials as $testimonial){
        echo '<div class="carousel-item '.($testimonial['active'] ? 'active' : '').'">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    '.$testimonial['name'].'
                  </h5>
                  <h6>
                    '.$testimonial['model'].'
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                '.$testimonial['text'].'
              </p>
            </div>
          </div>';
      };
  };
// INFO SECTION  
function address(){
  $theData=[
   [
   'data'=>'Location',
   'url' => '#'
   ],
   [
     'data'=>'+01 123455678990',
     'url' => '#'
   ],
   [
     'data'=>'demo@gmail.com',
     'url' => '#'
   ],
 ];

 foreach($theData as $data){
 echo '<a href="'.$data['url'].'">
         <i class="fa fa-map-marker" aria-hidden="true"></i>
         <span>
           '.$data['data'].'
         </span>';
       }
 };

function social(){

  $social_links = [
    [
      'name'=>'facebook',
      'url' => 'https://www.facebook.com/'
    ],
    [
      'name'=>'twitter',
      'url' => 'https://www.twitter.com/'
    ],
    [
      'name'=>'linkedin',
      'url' => 'https://www.linkedin.com/'
    ],
    [
      'name'=>'instagram',
      'url' => 'https://www.instagram.com/'
    ]
  ];

    foreach ($social_links as $platform){
      echo '<a href="'.$platform['url'].'">
              <i class="fa fa-'.$platform['name'].'" aria-hidden="true"></i>
            </a>';
    };
  };


function usefullink(){

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
        "url" => "doctors.php", 
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
    echo '<a class="'.($item['active'] ? 'active' : '').'" href="'.$item['url'].'">
             '.$item['name'].'
          </a>';
    };
  };

function posts(){
  $post=[
      'title'=>'LATEST POSTS',
      'text'=>'Normal distribution',
      'image1'=>'images/post1.jpg',
      'image2'=>'images/post2.jpg'
  ];

    echo '<div class="info_post">
              <h5>
                '.$post['title'].'
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="'.$post['image1'].'" alt="">
                </div>
                <p>
                  '.$post['text'].'
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="'.$post['image2'].'" alt="">
                </div>
                <p>
                   '.$post['text'].'
                </p>
              </div>
            </div>';
  
  };

function news(){
    $news=[
        'title'=>'NEWS',
        'text'=>'Normal distribution',
        'image1'=>'images/post3.jpg',
        'image2'=>'images/post4.png'
    ];
  
      echo '<div class="info_post">
                <h5>
                  '.$news['title'].'
                </h5>
                <div class="post_box">
                  <div class="img-box">
                    <img src="'.$news['image1'].'" alt="">
                  </div>
                  <p>
                    '.$news['text'].'
                  </p>
                </div>
                <div class="post_box">
                  <div class="img-box">
                    <img src="'.$news['image2'].'" alt="">
                  </div>
                  <p>
                    '.$news['text'].'
                  </p>
                </div>
            </div>';
    };
