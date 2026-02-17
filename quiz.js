function calculateScore() {
  let score = 0;

  // Question 1
  if (document.querySelector('input[name="q1"]:checked')?.value === "stack") {
    score++;
  }

  // Question 2
  if (document.querySelector('input[name="q2"]:checked')?.value === "php") {
    score++;
  }

  // Question 3
  if (document.querySelector('input[name="q3"]:checked')?.value === "select") {
    score++;
  }

  // Question 4
  if (document.querySelector('input[name="q4"]:checked')?.value === "multitasking") {
    score++;
  }

  document.getElementById("score").value = score;
  return true;
}
