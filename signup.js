function validatePassword() {
  let password = document.getElementById("password").value;

  if (password.length < 6) {
    alert("Password must be at least 6 characters long");
    return false;
  }

  if (!/\d/.test(password)) {
    alert("Password must contain at least one number");
    return false;
  }

  return true;
}
