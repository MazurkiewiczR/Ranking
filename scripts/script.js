document.addEventListener("DOMContentLoaded", function () {
  const hamburgerMenu = document.querySelector(".hamburger");
  const mobileMenu = document.querySelector(".mobile-menu");

  hamburgerMenu.addEventListener("click", function () {
    hamburgerMenu.classList.toggle("active");
    mobileMenu.classList.toggle("active");

    document.body.classList.toggle("no-scroll");
  });
});

var slider = new KeenSlider(
  "#my-keen-slider",
  {
    mode: "snap",
    loop: "true",
    breakpoints: {
      "(max-width: 768px)": {
        slides: { perView: 1, spacing: 10 },
      },
    },

    slides: () => [
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
      {
        size: 0.8,
        spacing: 1,
        origin: 0.1,
      },
    ],
  },

  [
    (slider) => {
      let timeout;
      let mouseOver = false;
      function clearNextTimeout() {
        clearTimeout(timeout);
      }
      function nextTimeout() {
        clearTimeout(timeout);
        if (mouseOver) return;
        timeout = setTimeout(() => {
          slider.next();
        }, 2000);
      }
      slider.on("created", () => {
        slider.container.addEventListener("mouseover", () => {
          mouseOver = true;
          clearNextTimeout();
        });
        slider.container.addEventListener("mouseout", () => {
          mouseOver = false;
          nextTimeout();
        });
        nextTimeout();
      });
      slider.on("dragStarted", clearNextTimeout);
      slider.on("animationEnded", nextTimeout);
      slider.on("updated", nextTimeout);
    },
  ]
);
