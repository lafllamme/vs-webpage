<template>
  <div>
    <div class="perspective-wrapper">
      <div class="z-wrapper">
        <div class="book"></div>
        <div class="spine"></div>
        <div class="backface"></div>
      </div>
    </div>
    <!-- <div class="perspective-wrapper">
      <h3>3D CSS perspective transformation</h3>
      <p>
        This is a first crack at this type of 3D CSS transform. The challenge is
        to take an image and transform it one way for the cover and -270 degrees
        for the spine.
      </p>
      <p>
        <a href="http://nos.twnsnd.co/" target="_blank"
          >Image taken from New Old Stock</a
        >
      </p>
    </div> -->
  </div>
</template>

<script>
export default {};

</script>

<style scoped>
.perspective-wrapper {
  position: relative;
  height: 700px;
  width: 500px;
  line-height: 1.4;
  margin: 4em auto;
  perspective: 1500px;
}

.z-wrapper {
  perspective: 1500px;
  height: 700px;
}

.book,
.spine,
.backface {
  position: absolute;
  width: 500px;
  height: 700px;
  top: 0;
  left: 0;
  border: 1px solid #444;
  opacity: 0.9;
}

.book {
  z-index: 2;
  background-image: url(https://i.imgur.com/BuWY6UJ.jpg);
  background-size: 700px;
  background-position: 560px;
}

.backface {
  z-index: 0;
  box-shadow: -10px 20px 120px rgba(0, 0, 0, 0.9);
  background-color: black;
}

.spine {
  position: absolute;
  z-index: 1;
  width: 60px;
  background-image: url(https://i.imgur.com/BuWY6UJ.jpg),
    repeating-linear-gradient(to bottom, #777, #777);
  background-size: 700px;
  background-position: 560px;
  background-blend-mode: multiply;
}

.book,
.spine,
.backface {
  transform-origin: left;
}

.book {
  animation: book-animation 2s infinite alternate;
}

@keyframes book-animation {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(45deg);
  }
}
.backface {
  animation: backface-animation 2s infinite alternate;
}

@keyframes backface-animation {
  0% {
    transform: rotateY(0deg) translateZ(-60px);
  }
  100% {
    transform: rotateY(45deg) translateZ(-60px);
  }
}
.spine {
  animation: spine-animation 2s infinite alternate;
}

@keyframes spine-animation {
  0% {
    transform: rotateY(-270deg);
  }
  100% {
    transform: rotateY(-225deg);
  }
}
.z-wrapper {
  animation: z-animation 2s infinite alternate;
}

@keyframes z-animation {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(-7deg);
  }
}
</style>