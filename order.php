<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="utf-8" />
  <title>Reserve a table</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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

      <section class="order main_wrapper">
        <div class="row main_row">
          <div class="col-xl-6 left_div">
            <div class="rigt_img"></div>
          </div>
          <div class="col-xl-6 d_center">
            <form class="order_form" action="#" method="POST">

              <div class="row step_1">
                <div class="col-md-4">
                  <label>Date</label>
                  <input id="litepicker" type="text" placeholder="Choose a date" required>
                </div>
                <div class="col-md-4 select-container">
                  <label>Time</label>
                  <select>
                    <option value="11">11:00</option>
                    <option value="11">11:30</option>
                    <option value="11">12:00</option>
                    <option value="11">12:30</option>
                    <option value="11">13:00</option>
                    <option value="11">13:30</option>
                    <option value="11">14:00</option>
                    <option value="11">14:30</option>
                    <option value="11">15:00</option>
                    <option value="11">15:30</option>
                    <option value="11">16:00</option>
                    <option value="11">16:30</option>
                    <option value="11">17:00</option>
                    <option value="11">17:30</option>
                    <option value="11">18:00</option>
                    <option value="11">18:30</option>
                    <option value="11">19:00</option>
                    <option value="11">19:30</option>
                    <option value="11">20:00</option>
                    <option value="11">20:30</option>
                    <option value="11">21:00</option>
                  </select>
                  <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
                    fill="currentColor" />
                    </svg>
                  </span>
                </div>
                <div class="col-md-4">
                  <label>Number of people</label>
                  <input type="number" min="1" max="20" placeholder="1" required />
                </div>

                <div class="col-md-6">
                  <label>Name</label>
                  <input type="text" placeholder="Name" required/>
                </div>
                <div class="col-md-6">
                  <label>Last name</label>
                  <input type="text" placeholder="Last name" required />
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
                <div class="col-md-6 select-container">
                  <label>Occasion</label>
                  <select>
                    <option value="">-- Your occasion (optional) --</option>
                    <option value="lunch">Lunch</option>
                    <option value="business">Business meal</option>
                    <option value="dating">Dating</option>
                    <option value="birthday">Birthday</option>
                    <option value="anniversary">Anniversary</option>
                    <option value="celebration">Celebration</option>
                  </select>
                  <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
                    fill="currentColor" />
                    </svg>
                  </span>
                </div>
                <div class="col-md-6">
                  <label>Have a special request?</label>
                  <textarea rows="1"></textarea>
                </div>
                <button class="send_form" type="submit" name="send_order">Send</button>
              </div>

              <button class="step" type="button">Continue</button>

            </form>
          </div>
        </div>

      </section>

    </main>

    <style type="text/css">

      .rigt_img {
        width: 100%;
        min-height: 100%;
        background-image: url(assets/img/food/about.jpg);
        background-position: bottom;
        background-size: cover;
        background-repeat: no-repeat;
      }
    
      .main_row {
        height: 820px;
        overflow: hidden;
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
      <script src="https://cdn.jsdelivr.net/npm/litepicker@2.0.12/dist/nocss/litepicker.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/luxon@2.3.1/build/global/luxon.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {

          // Function to change button text
          $.fn.toggleText = function(text1, text2) {
            if(this.text() == text1){
              this.text(text2);
            } else {                   
              this.text(text1);
            }
            return this;
          };

          $(".step").click(function() {
            $(this).toggleText("Continue","Back").toggleClass("back");

            // Toggle steps
            $(".step_2").toggle("slide");
            $(".step_1").toggle("slide");

          });

          // Litepicker
          const picker = new Litepicker({
            element: document.getElementById('litepicker'),
            lockDaysFilter: (day) => {
                const d = day.getDay();

                return [0, 1].includes(d);
              },
            plugins: ['mobilefriendly'],
            format: {
                parse(date) {
                  if (date instanceof Date) {
                    return date;
                  }
                  if (typeof date === 'string') {
                    return luxon.DateTime.fromFormat(date, 'yyyy LLL dd').toJSDate();
                  }
                  if (typeof date === 'number') {
                    return new Date(date);
                  }
                  return new Date();
                },
                output(date) {
                  return luxon.DateTime.fromJSDate(date)
                      .toFormat('ccc, LLL dd');
                }
              },
              lockDaysFilter: (day) => {
                const d = day.getDay();

                return [0, 1].includes(d);
              },
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
