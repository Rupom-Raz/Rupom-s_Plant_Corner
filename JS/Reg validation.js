function regValidation() {
  let pass_regex = /^((?=.*[a-z])(?=.*[A-Z])(?=.*[@#$!])).{6,10}$/;
  let fname_regex = /^[A-Za-z. ]{3,20}$/;
  let lname_regex = /^[A-Za-z. ]{3,20}$/;
  let email_regex = /^[0-9A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
  let phone_regex = /(\+88)?-?01[1-9]\d{8}/;
  let fname = document.getElementById("fname").value;
  let lname = document.getElementById("lname").value;
  let email = document.getElementById("email").value;
  let phone = document.getElementById("phone").value;
  let password = document.getElementById("password").value;
  let confirm_password = document.getElementById("confirm_password").value;

  if (fname_regex.test(fname)) {
    document.getElementById("fname_mess").innerHTML = " ";
  } else {
    document.getElementById("fname_mess").innerHTML =
      "Please provide valid name";
    return false;
  }

  if (lname_regex.test(lname)) {
    document.getElementById("lname_mess").innerHTML = " ";
  } else {
    document.getElementById("lname_mess").innerHTML =
      "Please provide valid name";
    return false;
  }

  if (email_regex.test(email)) {
    document.getElementById("email_mess").innerHTML = " ";
  } else {
    document.getElementById("email_mess").innerHTML =
      "Please provide valid email";
    return false;
  }

  if (phone_regex.test(phone)) {
    document.getElementById("phone_mess").innerHTML = " ";
  } else {
    document.getElementById("phone_mess").innerHTML =
      "Please provide valid phone number";
    return false;
  }

  if (pass_regex.test(password)) {
    document.getElementById("pass_mess").innerHTML = " ";
  } else {
    document.getElementById("pass_mess").innerHTML =
      "Please provide valid password";
    return false;
  }

  if (password.match(confirm_password)) {
    document.getElementById("con_pass_mess").innerHTML = " ";
  } else {
    document.getElementById("con_pass_mess").innerHTML = "Password not matched";
    return false;
  }
}
