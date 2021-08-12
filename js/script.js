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
  const day1 = new Date("2021-08-05T16:21:00");
  const day2 = new Date("2021-08-06T16:28:00");
  const day3 = new Date("2021-08-07T17:40:00");
  const end = new Date("2021-08-08T17:40:00");

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
  const day1 = new Date("2021-08-09T08:21:00");
  const day2 = new Date("2021-08-09T16:28:00");
  const day3 = new Date("2021-08-10T17:40:00");
  const end = new Date("2021-08-11T17:40:00");

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
