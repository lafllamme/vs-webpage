<template>
  <nav class="nav">
    <a href="/tickets" class="nav-item" active-color="blue"
      >Tickets</a
    ><a href="/music" class="nav-item is-active" active-color="orange">Music</a>
    <a href="/soundcloud" class="nav-item" active-color="green">Soundcloud</a>
    <a href="https://www.instagram.com/verschluesseltes.system/" class="nav-item" active-color="rebeccapurple"
      >Social</a
    >
    <a href="#" onClick='alert("soon!")' class="nav-item" active-color="red">Calendar</a>
    <a href="#" onClick='alert("soon!")' class="nav-item" active-color="rebeccapurple"
      >Upcoming</a
    >
    <span class="nav-indicator"></span>
  </nav>
</template>

<script>
export default {};
const indicator = document.querySelector(".nav-indicator");
const items = document.querySelectorAll(".nav-item");

function handleIndicator(el) {
  items.forEach((item) => {
    item.classList.remove("is-active");
    item.removeAttribute("style");
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute("active-color");

  el.classList.add("is-active");
  el.style.color = el.getAttribute("active-color");
}

items.forEach((item, index) => {
  item.addEventListener("click", (e) => {
    handleIndicator(e.target);
  });
  item.classList.contains("is-active") && handleIndicator(item);
});
</script>

<style lang="scss" scoped>
@font-face {
			font-family: "mainFont";
			src: url("/fonts/mainFont.woff2") format("woff2");
		}
* {
  box-sizing: border-box;
}

body {
  text-align: center;
  display: flex;
  height: 100vh;
  width: 100%;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/debut_light.png");
}

.nav {
  display: inline-flex;
  position: relative;
  overflow: hidden;
  max-width: 100%;
  background-color: #fff;
  padding: 0 20px;
  border-radius: 40px;
  box-shadow: 0 10px 40px rgba(159, 162, 177, 0.8);
}

.nav-item {
  color: #83818c;
  padding: 20px;
  text-decoration: none;
  transition: 0.3s;
  margin: 0 6px;
  z-index: 1;
  font-family: "mainFont", sans-serif;
  font-weight: 500;
  position: relative;

  &:before {
    content: "";
    position: absolute;
    bottom: -6px;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: #dfe2ea;
    border-radius: 8px 8px 0 0;
    opacity: 0;
    transition: 0.3s;
  }
}

.nav-item:not(.is-active):hover:before {
  opacity: 1;
  bottom: 0;
}

.nav-item:not(.is-active):hover {
  color: #333;
}

.nav-indicator {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 4px;
  transition: 0.4s;
  height: 5px;
  z-index: 1;
  border-radius: 8px 8px 0 0;
}

@media (max-width: 580px) {
  .nav {
    overflow: auto;
  }
}
</style>