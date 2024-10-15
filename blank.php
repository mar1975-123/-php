<?php
function formSubmit(){
    echo '
    <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="./success.php" method="GET">
              <div>
                <input type="text" name="fullName" placeholder="Full Name" required/>
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" required/>
              </div>
              <div>
                <input type="text" name="phoneNumber" placeholder="Phone Number" required/>
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" required/>
              </div>
              <div class="btn_box">
                <button type="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>';
}


