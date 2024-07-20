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


<!-- jQuery Frameworks ============================================= -->
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/Draggable.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/client-marquee.js"></script>
    <script src="../assets/js/theme-custom.js"></script>
    <script src="../assets/js/form1.js"></script>
    <script src="../assets/js/subscribe-form.js"></script>

</body>


</html>