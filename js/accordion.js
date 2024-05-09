const accordions = [...document.querySelectorAll(".expand")];

for (let accordion of accordions) {
  const button = accordion.querySelector("button");
  button.addEventListener("click", function () {
    this.parentElement.classList.toggle("open");
    let panel = this.parentElement.querySelector(".expandContent");
    console.log(panel);
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
