<template>
  <div>
    <a class="button" :href="href">{{ title }}</a>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    href: String,
  },
};
</script>

<style lang="scss" scoped>
@font-face {
			font-family: "mainFont";
			src: url("/fonts/mainFont.woff2") format("woff2");
		}
%test {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button {
  display: inline-block;
  padding: 20px 40px;
  color: white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
  font-family: "mainFont", sans-serif;
  text-decoration: none;
  font-size: 3vw;
  transition: all 0.5s;
  background-color: #494b4d;

  &::before {
    @extend %test;
    bottom: -15px;
    height: 15px;
    width: 100%;
    left: 8px;
    transform: skewX(45deg);
    background-color: darken(#494b4d, 20%);
  }

  &::after {
    @extend %test;
    right: -15px;
    height: 100%;
    width: 15px;
    bottom: -8px;
    transform: skewY(45deg);
    background-color: darken(#494b4d, 30%);
  }

  &:active {
    margin-left: 10px;
    margin-top: 10px;
    &::before {
      bottom: -5px;
      height: 5px;
      left: 3px;
    }

    &::after {
      right: -5px;
      width: 5px;
      bottom: -3px;
    }
  }
}
</style>