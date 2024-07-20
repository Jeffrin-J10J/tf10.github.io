<?php 
include '../includes/header.php'
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">
  <?php include '../includes/head.php' ?>
  <section class="hero-service-wrap hero-section-wrap hero-career-wrap hero-our-field-wrap">
    <div class="hero-section-content-wrap">
      <img src="../assets/imgs/bg-shape-1.svg" alt="Shape" class="animation-slide-left bg-shape" />
      <div class="custom-container">
        <div class="hero-portfolio-body">
          <div class="hero-section-content text-center">
            <h5 class="section-subtitle">Contact us</h5>
            <h2 class="section-title fade-in">
              Your Vision + Our Expertise = Success!
            </h2>

            <p>
              Let's build something amazing together. </p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact-area">
    <div class="custom-container">
      <div class="custom-row">
        <div class="contact-form-wrap">
          <div class="contact-form-body">
            <h5 class="section-subtitle">Contact</h5>
            <h1 class="fw-bold mb-2">Supercharge Your Business?</h1>
            <p>
              Get the Results You Deserve. Contact Us Today. <br>
              <!-- <a class="section-subtitle" href="mailto:support@toolfe.com">support@toolfe.com</a> -->
            </p>
            <form id="form" method="POST" class="contact-form">
              <div class="input-row field">
                <div class="input-row">
                  <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="FullName" placeholder="Enter Your name" />
                  </div>
                </div>
              </div>
              <div class="input-row field">
                <div class="input-group ">

                  <label for="email">Email</label>
                  <input id="email" type="text" name="Email" placeholder="Enter Your Email" />
                </div>

                <div class="input-group field">

                  <label for="Phone">Phone</label>
                  <input id="Phone" type="text" name="Phone" placeholder="Eg: +1 12123232" />
                </div>
              </div>
              <div class="input-row field">
                <div class="input-group ">

                  <label for="organization">Company Name</label>
                  <input id="organization" type="text" name="Company" placeholder="Eg. Microsoft" />
                </div>


              </div>
              <div class="input-row field">
                <div class="input-group">
                  <label for="message">Message</label>
                  <textarea name="Message" id="alert-message" placeholder="Leave us a message...."></textarea>
                </div>
              </div>
              <div class="input-row field">
                <div class="input-group input-checkbox">
                  <input type="checkbox" name="Agree To Terms" value="yes" id="privacy_policy_accept" />
                  <label for="privacy_policy_accept">You agree to our
                    <a href="../trust-center/terms.php" target="_blank">terms and conditions.</a></label>
                </div>
              </div>

              <div class="input-row field is-grouped">
                <div class="input-group control">
                  <button id="submit-button" type="submit" class="theme-btn">Submit</button>
                </div>
              </div>

     

            </form>

            <div id="alert-message" style="
        display: none;
        margin: 20px;
        font-weight: bold;
        color: linear-gradient(93deg, #f87708 4.1%, #fb4a55 59.93%, #e620af 98.17%);
        padding: 8px;
        background-color: beige;
        border-radius: 4px;
        border-color: aquamarine;
      "></div>



          </div>
        </div>

        <div class="contact-experience">
          <ul>

            <li>
              <h1>Client <span>Portal</span></h1>
              <p><a href="mailto:support@toolfe.com">support@toolfe.com</a></p>
            </li>
            <li>
              <h1>15 <span>Mins</span></h1>
              <p>Response Time</p>
            </li>

            <li>
              <h1>15 <span>Min Free</span></h1>
              <p>Consultation</p>
            </li>

            <li>
              <h1>15 <span>Hour Task Delivery</span></h1>
              <p><a href="https://www.hourspark.com">www.hourspark.com</a></p>
            </li>

          </ul>
        </div>
        <div class="contact-infos">
          <div class="contact-infos-inner">
            <div class="contact-info mb-0 border-0">
              <img src="../assets/imgs/contact_us/location.svg" alt="Map" />
              <h3>Contact Info</h3>
            </div>
            <div class="contact-office-info contact-info mb-0 border-0">
              <!-- <img src="../assets/imgs/contact_us/location.svg" alt="Map" /> -->
              <h5 class="contact-text text-uppercase">INDIA</h5>
              <p>
                12, HP Complex , Habibullah Road, T-Nagar, Chennai-600017, India. <br>+91 8217 460 923 </p><br>
              <h5 class="contact-text text-uppercase">United States</h5>
              <p>270 E 1st Ave, Vancouver, BC V5T 1A6, Canada, USA. <br>
                +1 232 212 233</p>
            </div>

            <ul class="contact-social-links">
              <li>
                <a href="mailto:support@toolfe.com">
                  <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-mail"></i>
                  Email
                </a>
              <li>
                <a href="https://in.linkedin.com/company/toolfe">
                  <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-linkedin"></i>
                  linkedin
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Faq -->
  <section class="faq-area faq-style-2-area">
    <div class="custom-container">
      <div class="faq-inner">

        <h5 class="section-subtitle">FAQ SECTION</h5>
        <h1 class="section-title">Frequently asked questions</h1>

        <div class="faq-items-box">
          <div class="faq-col">
            <div id="accordion">
              <div class="faq-box">
                <h5 class="card-header" id="headingOne">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div> Uncover the Extensive Services Toolfe Provides You?
                  </button>
                </h5>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Toolfe specializes in AI/ML, RPA, Automation, and Digital Services. We provide customized solutions
                    to enhance efficiency, scalability, and innovation for businesses across various industries with our
                    expert team.
                  </div>
                </div>
              </div>
              <div class="faq-box">
                <h5 class="card-header" id="headingTwo">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div>How can I get in touch with Toolfe for a consultation?
                  </button>
                </h5>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">

                    <p>You can contact us through our website’s contact form, email us at support@toolfe.com , or call
                      us at +91 8217 460 923

                      . Our team will respond promptly to schedule a consultation.
                  </div>
                </div>
              </div>
              <div class="faq-box">
                <h5 class="card-header" id="headingThree">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div> What are the primary industries Toolfe focuses on?
                  </button>
                </h5>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Toolfe serves a wide range of industries including Healthcare, Real Estate, Energy & Utilities,
                    Media & Entertainment, and more. Our expertise allows us to tailor solutions to meet the unique
                    challenges of each sector.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-col">
            <div id="accordion2">
              <div class="faq-box">
                <h5 class="card-header" id="headingFour">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                    aria-controls="collapseFour">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div>How does Toolfe ensure the quality of its services?
                  </button>
                </h5>

                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion2">
                  <div class="card-body">
                    We adhere to industry best practices and employ a rigorous quality assurance process. Our team of
                    experts continuously monitors project progress and outcomes to ensure we deliver top-quality
                    solutions that meet your expectations. </div>
                </div>
              </div>
              <div class="faq-box">
                <h5 class="card-header" id="headingFive">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div> What is the typical timeline for a project with Toolfe?
                  </button>
                </h5>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                  <div class="card-body">
                    The timeline for a project varies based on its complexity and scope. We work closely with our
                    clients to establish realistic timelines and ensure timely delivery of all projects. During the
                    initial consultation, we provide an estimated timeline specific to your project. </div>
                </div>
              </div>
              <div class="faq-box">
                <h5 class="card-header" id="headingSix">
                  <button data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                    aria-controls="collapseSix">
                    <div class="icon">
                      <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-chat-bubble-check"></i>
                    </div>How can Toolfe's IT solutions benefit my business?
                  </button>
                </h5>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                  <div class="card-body">
                    Toolfe supercharges your business
                    by automating repetitive tasks, freeing your team for strategic work. We unlock valuable insights
                    from data with AI, empowering data-driven decisions that boost efficiency and profits.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <!-- About -->
  <section class="about-service3-area">
    <div class="custom-container">
      <div class="custom-row align-items-center">
        <div class="img-box">
          <img src="../assets/imgs/contact_us/contact-us_1.jpg" alt="About" />
        </div>

        <div class="content-box">
          <h1>Why Reach Out to Us?</h1>
          <p>Reach out to us for expert support, customized solutions, and innovative technology. </p>
          <p>Our dedicated team is ready to assist with your specific needs, providing transparency and cutting-edge
            services to help your business thrive. Let's work together to achieve your goals!</p>
          <ul>
            <li>
              <i class="las la-check"></i>Expertise
            </li>
            <li>
              <i class="las la-check"></i> Automation
            </li>
            <li>
              <i class="las la-check"></i> innovation
            </li>
            <li>
              <i class="las la-check"></i> Optimization
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-area cta-area2 cta-area2-white">
    <div class="custom-container">
      <div class="cta-body text-center d-flex align-items-center justify-content-between">
        <img src="../assets/imgs/bg-shape-cta.svg" alt="Shape" class="animation-slide-left bg-shape" />
        <div class="left">
          <div class="our-expert-team-box">
            <div class="our-expert-team-box-inner d-flex align-items-center">

            </div>
          </div>
          <h2>Ready to Transform Your Business?</h2>
          <p>
            Discover how our advanced technology solutions can drive your
            success. Contact us today to learn more.
          </p>
        </div>
        <a href="https://outlook.office365.com/owa/calendar/RevolutionizeYourBusinesswithToolfe@toolfe.com/bookings/"
          class="theme-btn">Book an appointment now</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../includes/foot.php';  ?>

</main>
<?php 
include '../includes/footer.php'
?>

<script>
  document.getElementById("form").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission
    document.getElementById("alert-message").textContent = "Submitting..";
    document.getElementById("alert-message").style.display = "block";
    document.getElementById("submit-button").disabled = true;

    // Collect the form data
    var formData = new FormData(this);
    var keyValuePairs = [];
    for (var pair of formData.entries()) {
      keyValuePairs.push(pair[0] + "=" + pair[1]);
    }

    var formDataString = keyValuePairs.join("&");

    // Send a POST request to your Google Apps Script
    fetch(
        "https://script.google.com/macros/s/AKfycbxSvAqujrM4cuYL4H8jWauAgU8Yl4Ogl6ZN-aTJBEi6Bf0t9m3iJslnjlokVFwTlOUA/exec", {
          redirect: "follow",
          method: "POST",
          body: formDataString,
          headers: {
            "Content-Type": "text/plain;charset=utf-8",
          },
        }
      )
      .then(function (response) {
        // Check if the request was successful
        if (response) {
          return response; // Assuming your script returns JSON response
        } else {
          throw new Error("Failed to submit the form.");
        }
      })
      .then(function (data) {
        // Display a success message
        document.getElementById("alert-message").textContent =
          "Your request has been submitted successfully!";
        document.getElementById("alert-message").style.display = "block";
        document.getElementById("alert-message").style.background = "white";
        document.getElementById("alert-message").style.color = "#198754";
        document.getElementById("submit-button").disabled = false;
        document.getElementById("form").reset();

        setTimeout(function () {
          document.getElementById("alert-message").textContent = "";
          // document.getElementById("alert-message").style.display = "none";
        }, 2600);
      })
      .catch(function (error) {
        // Handle errors, you can display an error message here
        console.error(error);
        document.getElementById("alert-message").textContent =
          "An error occurred while submitting the form.";
        document.getElementById("alert-message").style.display = "block";
      });
  });
</script>
