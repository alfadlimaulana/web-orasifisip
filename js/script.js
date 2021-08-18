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

function navbarcollapse() {
  var button = document.querySelector(".navbar-toggler");
  var nav = document.querySelector("nav .container-fluid");

  button.addEventListener("click", function () {
    nav.classList.toggle("collapse-bg");
  });
}

function muteVideo() {
  // Volume for teaser's video
  const volume = document.getElementById("volume");
  const teaserVideo = jQuery("#video-teaser");
  let isMuted = true;
  jQuery(function () {
    teaserVideo.YTPlayer();
    jQuery("#P1").YTPlayer();
  });

  volume.addEventListener("click", () => {
    if (isMuted) {
      teaserVideo.YTPUnmute();
      isMuted = false;
      volume.classList.remove("fa-volume-mute");
      volume.classList.add("fa-volume-up");
    } else {
      teaserVideo.YTPMute();
      isMuted = true;
      volume.classList.remove("fa-volume-up");
      volume.classList.add("fa-volume-mute");
    }
  });
}
