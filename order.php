<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="utf-8" />
  <title>Reserve a table</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />
  <style type="text/css">
    .plate-slider__image {
      transform: rotate(0deg);
      position: relative;
    }
    
    .plate-slider__title {
      transform: translateY(200px);
      transition: transform ease-in-out 0.7s;
    }
    
    .title_show {
      transform: translateY(0px);
      transition: transform ease-in-out 0.7s;
    }
    
    .change_right {
      transform: translateX(120px) !important;
      transition: transform ease-in-out 0.7s;
    }
    
    .plate-slider__image-wrapper {
      transition: transform ease-in-out 0.7s;
    }
  </style>
</head>

<body class="body--dark">

  <?php 
    include 'blocks/header.php';
  ?>

    <main>

      <section class="order_ main_wrapper">
        <div class="row main_row">
          <div class="col-xl-6 left_div">
            <div class="rigt_img"></div>
          </div>
          <div class="col-xl-6 d_center">
            <form class="order_form" action="#" method="POST">

              <div class="row step_1">
                <div class="col-md-6">

                  <label>Date</label>
                  <input id="litepicker" type="text" required>
                </div>
                <div class="col-md-6">
                  <label>Number of people</label>
                  <input type="number" min="1" max="20" placeholder="1" required />
                </div>

                <div class="col-md-6">
                  <label>Name</label>
                  <input type="text" placeholder="Name" required/>
                </div>
                <div class="col-md-6">
                  <label>Surname</label>
                  <input type="text" placeholder="Surname" required />
                </div>
              </div>

              <div class="row step_2" style="display: none;">

                <div class="col-md-6">
                  <label>Phone</label>
                  <input id="phone" type="tel" placeholder="Phone" />
                </div>

                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" placeholder="Email" required />
                </div>
                <div class="col-md-12 ">
                  <label>Occasion</label>
                  <select class="w-90">
                    <option value="">-- Your occasion (optional) --</option>
                    <option value="lunch">Lunch</option>
                    <option value="business">Business meal</option>
                    <option value="dating">Dating</option>
                    <option value="birthday">Birthday</option>
                    <option value="anniversary">Anniversary</option>
                    <option value="celebration">Celebration</option>
                  </select>
                  <label>Add a special request</label>
                  <textarea class="w-90" rows="5"></textarea>
                  <button class="send_form" type="submit" name="send_order">Send</button>
                </div>

              </div>

              <div class="change_step">
                <img id="change_step_" style="margin: 20px auto;" src="assets/img/right.png" width="80" height="80">
              </div>

            </form>
          </div>
        </div>

      </section>

    </main>

    <style type="text/css">
      .change_step {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
      }
      
      .change_step img {
        cursor: pointer;
        transition: transform 0.5s;
        transform: rotate(90deg);
      }
      
      .rigt_deg {
        transform: rotate(-90deg) !important;
        transition: transform 0.5s;
      }
      
      .order_form {
        padding: 50px;
      }


      .rigt_img {
        width: 100%;
        min-height: 100%;
        background-image: url(assets/img/food/about.jpg);
        background-position: bottom;
        background-size: cover;
        background-repeat: no-repeat;
      }
      
      input {
        box-sizing: border-box;
        width: 100%;
        height: 55px;
      }
      
      select {
        box-sizing: border-box;
        width: 100%;
      
      }
      
      textarea {
        width: 100%;
        box-sizing: border-box;
      }
      
      .send_form {
        width: 100%;
      }
      
      .main_row {
        height: 820px;
        overflow: hidden;
      }
      
      @media only screen and (max-width: 700px) {
        .send_form {
          margin-top: 40px;
        }
        .main_row {
          padding: 40px 0px;
        }
        .order_form {
          padding: 30px;
        }
      }
      
      @media only screen and (max-width: 1200px) {
        .left_div {
          display: none;
        }
      }
    </style>

    <?php 
    include 'blocks/footer.php';
  ?>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $("#change_step_").click(function() {
            $(this).toggleClass("rigt_deg");
            $(".step_2").toggle("slide");
            $(".step_1").toggle("slide");
          });
          const picker = new Litepicker({
            element: document.getElementById('litepicker'),
            plugins: ['mobilefriendly'],
          });
          $("header").addClass("header_down");
          $(".plate-slider__title").addClass("title_show");
          setTimeout(function() {
            $(".plate-slider__image-wrapper").addClass("change_right");
          }, 700);
          $('.link ').click(function(e) {
            $("header").removeClass("header_down");
            $(".plate-slider__title").removeClass("title_show");
            $(".plate-slider__image-wrapper").removeClass("change_right");
            e.preventDefault();
            setTimeout(function(url) {
              window.location = url
            }, 1100, this.href);
          });
        });
      </script>

      <script src="assets/js/animate.js"></script>
</body>

</html>
