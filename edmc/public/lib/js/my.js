function user_login() {
  const formData = $("#loginForm").serialize()
  
  $.ajax({
      type: "POST",
      url: "../../src/routes/routes.php",
      data: formData + "&type=login",
      success: function (data) {
         console.log(data);
          if (data === "Login successful") {
              window.location.href = "home.php"; 
          } else {
            alert("Invalid username/email or password");
          }
      },
      error: function (error) {
          console.error("Error:", error);
      }
  });
}

function user_register() {
    const formData = $("#registerForm").serializeArray();
    let isValid = true;

    formData.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            alert(`Please fill out the ${field.name} field.`);
            return false;
        }
    });

    if (!isValid) return;

    $.ajax({
        type: "POST",
        url: "../../src/routes/routes.php",
        data: $.param(formData) + "&type=register",
        success: function (data) {
            console.log("Response from routes.php:", data);
            if (data === "Registration successful") {
                alert("Registration successful! Redirecting to login page.");
                window.location.href = "login.php";
            } else {
                alert("Registration failed: " + data);
            }
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}

function user_Logout() {
    $.ajax({
        type: "POST",
        url: "../../src/routes/routes.php",
        data: { type: "logout" },
        success: function (data) {
            if (data === "Logout successful") {
                window.location.href = "login.php";
            } else {
                alert("Logout failed.");
            }
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
}

