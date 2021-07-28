function hideNav() {
  const hidden = document.getElementsByClassName("nav-hidden");
  for (let index = 0; index < hidden.length; index++) {
    hidden[index].classList.add("disabled");
  }
}

function showNav() {
  const hidden = document.getElementsByClassName("nav-hidden");
  for (let index = 0; index < hidden.length; index++) {
    hidden[index].classList.remove("disabled");
  }
}
