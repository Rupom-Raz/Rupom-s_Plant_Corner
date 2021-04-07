function loginValidation() {
  let email_regex = /^[0-9A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
  let pass_regex = /^((?=.*[a-z])(?=.*[A-Z])(?=.*[@#$!])).{6,10}$/;

  let email = document.getElementById("email").value;

  let password = document.getElementById("password").value;

  if (email_regex.test(email)) {
    document.getElementById("email_mess").innerHTML = " ";
  } else {
    document.getElementById("email_mess").innerHTML =
      "Please provide a valid email";
    return false;
  }

  if (pass_regex.test(password)) {
    document.getElementById("pass_mess").innerHTML = " ";
  } else {
    document.getElementById("pass_mess").innerHTML = "Password is not valid";
    return false;
  }
}
