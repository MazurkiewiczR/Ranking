document.getElementById("show_more").addEventListener("click", function () {
  var hiddenRows = document.querySelectorAll(".hidden-row");
  hiddenRows.forEach(function (row) {
    row.classList.remove("hidden-row");
  });
  this.style.display = "none";
});

const hamburgerMenu = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");

document.addEventListener("DOMContentLoaded", function () {
  hamburgerMenu.addEventListener("click", function () {
    hamburgerMenu.classList.toggle("active");
    mobileMenu.classList.toggle("active");

    document.body.classList.toggle("no-scroll");
  });
});

const scrollTargets = {
  "#fun_fact_link_desktop": { target: "#fun_facts", duration: 10 },
  "#top_link_desktop": { target: "#top_rating", duration: 20 },
  "#ranks_link_desktop": { target: "#ranking", duration: 10 },
  "#fun_fact_link_mobile": { target: "#fun_facts", duration: 10 },
  "#top_link_mobile": { target: "#top_rating", duration: 20 },
  "#ranks_link_mobile": { target: "#ranking", duration: 10 },
};

for (const [selector, { target, duration }] of Object.entries(scrollTargets)) {
  document.querySelector(selector).addEventListener("click", function () {
    checkForClasses(),
      setTimeout(function () {
        scrollToSection(target, duration);
      }, 100);
  });
}

function checkForClasses() {
  if (
    hamburgerMenu.classList.contains("active") &&
    mobileMenu.classList.contains("active") &&
    document.body.classList.contains("no-scroll")
  ) {
    hamburgerMenu.classList.remove("active");
    mobileMenu.classList.remove("active");
    document.body.classList.remove("no-scroll");
  } else {
    return;
  }
}

function scrollToSection(sectionId, distance) {
  const section = document.querySelector(sectionId);
  if (section) {
    let sectionPosition =
      section.getBoundingClientRect().top + window.pageYOffset - distance;
    let space = sectionPosition - distance;
    window.scrollTo({
      top: space,
      behavior: "smooth",
    });
  }
}

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
        }, 6000);
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
