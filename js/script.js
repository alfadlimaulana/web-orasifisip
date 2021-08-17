function hideNav() {
  const hidden = document.getElementsByClassName("hide-link");
  for (let index = 0; index < hidden.length; index++) {
    hidden[index].classList.add("hidden");
  }
}

function showNav() {
  const hidden = document.getElementsByClassName("hide-link");
  for (let index = 0; index < hidden.length; index++) {
    hidden[index].classList.remove("hidden");
  }
}

function btntglabsen() {
  const now = new Date();
  const day1 = new Date("2021-08-26T00:00:01");
  const day2 = new Date("2021-08-27T00:00:01");
  const day3 = new Date("2021-08-28T00:00:01");
  const end = new Date("2021-08-29T00:00:01");

  if (now.getTime() >= day1.getTime() && now.getTime() <= day2.getTime()) {
    var absenbtn = document.querySelector(".btn-1");
    absenbtn.removeAttribute("disabled");
  } else if (now.getTime() >= day2.getTime() && now.getTime() <= day3.getTime()) {
    var absenbtn = document.querySelector(".btn-2");
    absenbtn.removeAttribute("disabled");
  } else if (now.getTime() >= day3.getTime() && now.getTime() <= end.getTime()) {
    var absenbtn = document.querySelector(".btn-3");
    absenbtn.removeAttribute("disabled");
  }
}

function btntgltugas() {
  const now = new Date();
  const day1 = new Date("2021-08-26T00:00:01");
  const day2 = new Date("2021-08-27T00:00:01");
  const day3 = new Date("2021-08-28T00:00:01");
  const end = new Date("2021-08-29T00:00:01");

  if (now.getTime() >= day1.getTime() && now.getTime() <= day2.getTime()) {
    var absenbtn = document.querySelector(".btn-1");
    absenbtn.removeAttribute("disabled");
  } else if (now.getTime() >= day2.getTime() && now.getTime() <= day3.getTime()) {
    var absenbtn = document.querySelector(".btn-2");
    absenbtn.removeAttribute("disabled");
  } else if (now.getTime() >= day3.getTime() && now.getTime() <= end.getTime()) {
    var absenbtn = document.querySelector(".btn-3");
    absenbtn.removeAttribute("disabled");
  }
}
