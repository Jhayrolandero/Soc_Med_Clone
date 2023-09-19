<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
  var register_form = $("#register");
  var login_form = $("#login");

  /*
      Handle the registration form
  */
  register_form.submit(function () {
    event.preventDefault();

    // Get values in the register form

    var form_data = {
      fname: $("#firstname").val(),
      lname: $("#lastname").val(),
      email: $("#remail").val(),
      password: $("#rpassword").val(),
    };
    
    $(this)[0].reset();

    // convert into json
    var json_string = JSON.stringify(form_data);

    // ajax request to the server
    $.ajax({
      url: "request.php", // The URL to send the request to
      type: "POST", // POST 
      dataType: "json", // The expected data type of the response
      data: { register: json_string },
      success: function (response) {
        alert(response);

      },
      error: function (xhr, status, error) {
        // Function to handle errors
        console.error(xhr, status, error);
      },
    });
  });

  /*
    Handle the login form
  */

  login_form.submit(function(){
    event.preventDefault();
    var form_data = {
      email: $("#lemail").val(),
      password: $("#lpassword").val(),
    }

    $(this)[0].reset();

    // convert into json
    var json_string = JSON.stringify(form_data);

    // ajax request to the server
    $.ajax({
      url: "request.php", // The URL to send the request to
      type: "POST", // POST 
      dataType: "json", // The expected data type of the response
      data: { login: json_string },
      success: function (response) {
        alert(response);

      },
      error: function (xhr, status, error) {
        // Function to handle errors
        console.error(xhr, status, error);
      },
    });

  });
});
</script>