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

function btntoggle() {
  const now = new Date();
<<<<<<< HEAD
  const day1 = new Date("2021-08-10T16:21:00");
  const day2 = new Date("2021-08-11T16:28:00");
  const day3 = new Date("2021-08-12T17:40:00");
  const end = new Date("2021-08-13T17:40:00");
=======
  const day1 = new Date("2021-08-11T08:21:00");
  const day2 = new Date("2021-08-12T10:28:00");
  const day3 = new Date("2021-08-13T17:40:00");
  const end = new Date("2021-08-14T17:40:00");
>>>>>>> 45a2d530b0baaac7fefa23b692f5df7e81c19c44

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

  absenbtn.addEventListener("click", function () {
    const keterangan = document.querySelector("table tbody tr td:nth-child(3)");
    keterangan.innerHTML = "hadir";
  });
}
