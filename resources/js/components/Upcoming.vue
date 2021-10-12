<template>

        <div class="header-wrapper">
            <b class="orange-line line1"></b>
            <b class="orange-line line2"></b>
            <b class="orange-line line3"></b>
            <b class="orange-line line4"></b>
            <b class="orange-line line5"></b>
            <b class="orange-line line6"></b>
            <div class="image">
                <img src="https://i.imgur.com/nn2lcsh.png" />
            </div>
            <h1 class="title">GARTEN EDEN</h1>
            <p class="subtitle sub1">elegance</p>
            <p class="subtitle sub2">class</p>
            <p class="subtitle sub3">community</p>
            <p class="schedule sched1">14.10 • Stand-up</p>
            <p class="schedule sched2">21.10 • Make awesome stuff</p>
            <p class="schedule sched3">28.10 • Lunch</p>
            <p class="schedule sched4">31.10 • Halloween Party</p>


        </div>
</body>

</html>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono");

html,
body {
  max-width: 100%;
}

header {
  display: flex;
  margin: auto;
  min-height: 100vh;
}

p {
  font-family: "Share Tech Mono", monospace;
}

.header-wrapper {
  width: 90vw;
  display: grid;
  margin: auto;
  grid-column-gap: 10px;
  grid-template-columns: 20px 10px 10px 10px 10px 10px 10px auto 1fr;
  grid-template-rows: 0.5fr 1fr 5rem 0.5fr 2.5rem 2.5rem 2.5rem 0.5fr 1.5rem 1.5rem 1.5rem 1.5rem;
}

.title {
  font-family: "Arial Black";
  text-transform: uppercase;
  align-self: center;
  font-size: 3rem;
  grid-column: 1 / -1;
  grid-row: 3;
  line-height: 3rem;
}

.image {
  padding: 0.5rem;
  grid-column: 8 / 9;
  grid-row: span 2;
}

img {
  max-width: 100px;
  height: auto;
}

.orange-line {
  display: block;
  border-left: 10px solid grey;
}

.line1 {
  grid-column: 2;
  grid-row: 2 / -1;
}

.line2 {
  grid-column: 3;
  grid-row: 2 / -1;
}

.line3 {
  grid-column: 4;
  grid-row: 2 / -1;
}

.line4 {
  grid-column: 5;
  grid-row: 2 / -1;
}

.line5 {
  grid-column: 6;
  grid-row: 2 / -1;
}

.line6 {
  grid-column: 7;
  grid-row: 2 / -1;
}

.subtitle {
  grid-column: 1 / -1;
  justify-self: start;
  font-size: 2rem;
  align-self: center;
}

.sub1 {
  grid-row: 5;
}

.sub2 {
  grid-row: 6;
}

.sub3 {
  grid-row: 7;
}

.schedule {
  grid-column: 3 / 10;
  font-size: 1rem;
  justify-self: start;
  align-self: center;
}

.sched1 {
  grid-row: 9;
}

.sched2 {
  grid-row: 10;
}

.sched3 {
  grid-row: 11;
}

.sched4 {
  grid-row: 12;
}

@media screen and (min-width: 420px) {
  .schedule {
    grid-column: 8 / 10;
  }
}

@media screen and (min-width: 768px) {
  .title {
    font-size: 3.7rem;
    line-height: 4.5rem;
  }
  .header-wrapper {
    width: 75vw;
    grid-template-rows: 0.4fr 0.8fr 5rem 0.5fr 3rem 3rem 3rem 0.5fr 2rem 2rem 2rem 2rem auto;
    transform: rotate(-15deg);
  }

  .schedule {
    font-size: 1.5rem;
    grid-column: 8 / 10;
    justify-self: start;
  }
  .subtitle {
    font-size: 2.5rem;
    grid-column: 1 / 8;
    justify-self: end;
  }

  .image {
    padding: 0.5rem;
    grid-column: 8 / 9;
    grid-row: span 2;
    transform: rotate(15deg);
  }

  img {
    max-width: 150px;
  }
}
</style>