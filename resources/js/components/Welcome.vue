<template>
  <div class="wrap">
    <br />
    <br />

    <br />

    <br />

    <span class="letter">V</span>
    <span class="letter">E</span>
    <span class="letter">R</span>
    <span class="letter">S</span>
    <span class="letter">C</span>
    <span class="letter">L</span>
    <span class="letter">U</span>
    <span class="letter">E</span>
    <span class="letter">S</span>
    <span class="letter">S</span>
    <span class="letter">E</span>
    <span class="letter">L</span>
    <span class="letter">T</span>
    <span class="letter">E</span>
    <span class="letter">S</span>
    <br />
    <span class="space"></span>
    <span class="letter">S</span>
    <span class="letter">Y</span>
    <span class="letter">S</span>
    <span class="letter">T</span>
    <span class="letter">E</span>
    <span class="letter">M</span>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
@font-face {
  font-family: "MyWebFont";
  src: url("/fonts/font.woff2") format("woff2");
}

@import url(https://fonts.googleapis.com/css?family=Titillium+Web:400,300,200,900,700,600);
* {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
}

body {
  overflow: hidden;
  background: linear-gradient(#111, black);
  min-height: 100%;
}

.wrap {
  max-width: 960px;
  margin: 1em auto;
  position: relative;
  transform-style: preserve-3d;
  perspective: 400px;
  text-align: center;
}

.letter,
.space {
  display: inline-block;
  font-size: 6vw;
  text-transform: uppercase;
  font-family: "MyWebFont", Fallback, sans-serif;
  font-weight: bold;
  position: relative;
  transform-style: preserve-3d;
  text-shadow: 2px 2px 5px black;
}
.space {
  width: 0.5em;
}

@for $i from 1 through 27 {
  $n: 1;
  $r: random(10);
  @if ($r > 5) {
    $n: -1;
  }
  $x: (random(1000) + 300) * $n + px;
  $y: (random(1000) + 300) * $n + px;
  $c: hsl(random(360), 100%, 50%);
  $d: 360 * $n + deg;
  @keyframes anim#{$i} {
    0% {
      transform: translate3d($x, $y, -1000px) rotate(0deg);
      opacity: 0;
    }
    100% {
      transform: translate3d(0, 0, 0) rotate($d);
      opacity: 0.8;
    }
  }
  .letter:nth-child(#{$i}) {
    animation: anim#{$i} 7s;
    animation-delay: -$i * 0.1s;
    color: #e2dbd9;
  }
}
</style>