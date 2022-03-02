const form = document.querySelector(".registerForm");
const inputs = document.querySelectorAll(".input");

form.addEventListener("submit", (e) => {
  inputs.forEach((input) => {
    if (input.value === "" || input.value === "Select...") {
      input.classList.add("error");
      // e.preventDefault();
    }
  });
});
