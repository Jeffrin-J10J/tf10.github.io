<script>
        var $ball = document.querySelector("#ball");
        var dragFlg = false;
        var prevTime = 0;
        var prevPos = { x: 0, y: 0 };
        var prevVelocity = { x: 0, y: 0 };
        var myVelocity = { x: 0, y: 0 };
        var position = { x: 0, y: 0 };
        var timer;

        $ball.addEventListener("mousedown", dragStart);
        window.addEventListener("mouseup", dragOut);
        window.addEventListener("mousemove", mousemove);

        function dragStart(e) {
            var mouse = { x: e.pageX, y: e.pageY };
            dragFlg = true;
            prevTime = Date.now();
            prevPos = { x: e.pageX, y: e.pageY };
        }

        function dragOut(e) {
            if (dragFlg) {
                dragFlg = false;

                // Check position and adjust
                if (position.x < 150) {
                    position.x = 5;
                } else {
                    position.x = 250;
                    window.location.href = '../contact/index.php';
                    position.x = 5;
                }

                $ball.style.left = position.x + "px";
            }
        }

        function mousemove(e) {
            var mouse = { x: e.pageX, y: e.pageY };

            if (dragFlg) {
                var now = Date.now();
                var deltaTime = now - prevTime;
                var eventPos = { x: e.pageX, y: e.pageY };
                var deltaPos = { x: eventPos.x - prevPos.x, y: 0 }; // Only update x position
                deltaTime = deltaTime || 0;
                var velocity = { x: deltaPos.x / deltaTime, y: 0 }; // Only update x velocity
                var deltaVelocity = { x: velocity.x - prevVelocity.x, y: 0 };
                myVelocity.x += deltaVelocity.x;
                position.x += deltaPos.x;

                // Boundary check
                if (position.x < 0) position.x = 0;
                if (position.x > 250) position.x = 250;

                $ball.style.left = position.x + "px";

                prevTime = now;
                prevPos = eventPos;
                prevVelocity = velocity;
            }
        }
</script>


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