window.onload = function() {
  
  function validateEmail(email) {
    let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
  
  function validate() {
    let $result = $("#result");
    let email = $("#email").val();
    $result.text("");
    
    if (validateEmail(email)) {
      $result.text("Your email: " + email + " is valid :)");
      $result.css("color", "green");
    } else {
      $result.text("Your email: " + email + " is not valid :(");
      $result.css("color", "red");
    }
    return false;
  }

  $("#validate").on("click", validate);


function validatePass(pass) {
    let re2 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    return re2.test(pass);
}

  function validate2() {
    let $result = $("#result2");
    let pass = $("#pass").val();
    $result.text("");

    if (validatePass(pass)) {
      $result.text("Your password is valid :)");
      $result.css("color", "blue");
    } else {
      $result.text("Your password is not valid :(");
      $result.css("color", "red");
    }
    return false;
  }

  $("#validate").on("click", validate2);


  /*function validate3() {
    let $result = $("#result3");
    let pass2 = $("#pass2").val();
    $result.text("");

    if (validatePass(pass2)) {
      $result.text(pass + " is the same ass your password :)");
      $result.css("color", "blue");
    } else {
      $result.text(pass + " is not valid :(");
      $result.css("color", "red");
    }
    return false;
  }
  
  $("#validate").on("click", validate3); */

  function validateNombreArea(n_area) {
    let re3 = /^[a-z]$/;
    return re3.test(n_area);
  }

  function validate3() {
    let $result = $("#result3");
      let n_area = $("#name_textarea").val();
      $result.text("");

      if (validateArea(n_area)) {
        $result.text("Your name of text area caracters are valid :)");
        $result.css("color", "orange");
      } else {
        $result.text("Your name of text area caracters are not valid :(");
        $result.css("color", "red");
      }
      return false;
  }

  $("#validate").on("click", validate3);


  function validateArea(area) {
    let re4 = /^[A-Za-z]{1,165}$/;
    return re4.test(area);
  }

  function validate4() {
    let $result = $("#result4");
      let area = $("#textarea").val();
      $result.text("");

      if (validateArea(area)) {
        $result.text("Your text area caracters are valid :)");
        $result.css("color", "blue");
      } else {
        $result.text("Your text area caracters are not valid :(");
        $result.css("color", "red");
      }
      return false;
  }

  $("#validate").on("click", validate4);
}