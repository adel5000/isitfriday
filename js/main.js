let da = new Date();
let frame = document.getElementById("frame");

if (da.getDay() === 5) {
  frame.style.visibility = "visible";
  frame.previousElementSibling.textContent = "Yes, it is 😎";
} else {
  frame.style.visibility = "hidden";
  frame.previousElementSibling.textContent = "No, it is Not 😭";
}
