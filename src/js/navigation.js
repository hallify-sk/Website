document.querySelector("#isNavOpen").addEventListener("change", (e) => {
    if (e.target.checked) {
        document.querySelector("header .links").setAttribute("aria-hidden", "false");
        document.querySelector("header").classList.add("open");
        document.body.style.overflow = "hidden";
    }
    else {
        document.querySelector("header .links").setAttribute("aria-hidden", "true");
        document.querySelector("header").classList.remove("open");
        document.body.style.overflow = "auto";
    }
});

[...document.querySelectorAll("header .links a")].forEach((link) => {
    link.addEventListener("click", (e) => {
        document.querySelector("#isNavOpen").checked = false;
        document.body.style.overflow = "auto";
    });
});
document.querySelector(".shadow").addEventListener("click", (e) => {
    document.querySelector("#isNavOpen").checked = false;
    document.body.style.overflow = "auto";
});

window.onresize = () => {
    if (window.innerWidth > 768) {
        document.querySelector("#isNavOpen").checked = false;
        document.body.style.overflow = "auto";
    }
}

document.querySelector("#backToTop").addEventListener("click", (e) => {
    window.scrollTo(0, 0);
});

window.onscroll = () => {
    if (window.scrollY > 0) {
        document.querySelector("#backToTop").setAttribute("aria-hidden", "false");
        document.querySelector("#backToTop").classList.add("show");
    }
    else {
        document.querySelector("#backToTop").setAttribute("aria-hidden", "true");
        document.querySelector("#backToTop").classList.remove("show");
    }
}