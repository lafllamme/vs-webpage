<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verschlüsseltes System</title>

	<!-- Fonts -->

	<!-- Styles -->
	<style>
		* {
			box-sizing: border-box;
		}

		@font-face {
			font-family: "mainFont";
			src: url("/fonts/mainFont.woff2") format("woff2");
		}


		body {
			font-family: "mainFont", sans-serif;
			height: 100vh;
			width: 100vw;
			background: url('https://j.gifs.com/5y8xPR.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			margin: 0;
			display: flex;
			transition: background 0.5s;
		}

		.scene {
			width: 650px;
			height: 70px;
			/*   margin: 80px; */
			perspective: 400px;
			margin: auto;
			position: relative;
			transition: opacity 0.5s;
			z-index: 2;
		}

		.scene.end {
			opacity: 0;
			transition-delay: 0.25s;
			transition: opacity 0.5s;
			z-index: 0;
		}

		.welcome {
			opacity: 0;
			width: 100%;
			position: absolute;
			height: 100%;
			display: flex;
			transition-delay: 0.25s;
			transition: opacity 0.5s;
		}

		.welcome .content {
			margin: auto;
			font-size: 2rem;
			color: #ffffff;
		}

		.welcome.show {
			opacity: 1;
		}

		.cube {
			width: 100%;
			height: 100%;
			position: relative;
			transform-style: preserve-3d;
			transform: translateZ(-100px);
		}

		.steps {
			position: absolute;
			top: 140%;
			display: flex;
			width: 100%;
			justify-content: center;
		}

		.steps .dot {
			width: 15px;
			height: 15px;
			background: rgba(0, 0, 0, 0.75);
			border-radius: 100%;
			margin: 0 10px;
			transition: 0.25s;
		}

		.steps .dot.done {
			background: rgba(255, 255, 255, 0.75);
		}

		.cube__face {
			position: absolute;
			width: 100%;
			height: 100%;
			font-size: 40px;
			font-weight: bold;
			transition: transform 0.5s;
			opacity: 0;
			background: #ffffff;
			border-radius: 5px;
		}

		.cube__face--front {
			transform: rotateY(0deg) translateZ(35px);
			opacity: 1;
			box-shadow: 15px 15px 50px rgba(0, 0, 0, 0.5);
		}

		.cube__face--top {
			transform: rotateX(90deg) translateZ(35px);
			opacity: 1;
		}

		.cube__face--top .container {
			opacity: 0;
			transition: opacity 0.5s;
		}

		.cube__face--bottom {
			transform: rotateX(-90deg) translateZ(35px);
		}

		.hidden {
			display: none;
		}

		input:not([type="radio"]),
		select {
			display: block;
			margin: 0;
			/*     padding: 0 0 0.15em; */
			/*     padding-left: 50px; */
			width: 100%;
			border: none;
			background-color: transparent;
			color: #202020;
			text-overflow: ellipsis;
			font-weight: normal;
			font-size: 1.5rem;
			height: 100%;
			/* 	padding-right:185px; */
		}

		input:focus,
		select:focus {
			outline: none;
		}

		input::placeholder {
			color: #a0a0a0;
		}

		.cube__face .container {
			height: 100%;
			width: 100%;
			position: relative;
			padding-right: 185px;
			padding-left: 50px;
		}

		div.btn.show {
			opacity: 1 !important;
		}

		div.btn.show span {
			display: block !important;
		}

		div.btn {
			position: absolute;
			right: 10px;
			top: 0;
			height: 100%;
			display: flex;
			transition: opacity 0.25s ease;
			opacity: 0;
		}

		div.btn span {
			color: #e90052;
			font-size: 1.25rem;
			padding: 10px 25px;
			border: 3px solid #e90052;
			border-radius: 40px;
			display: inline-block;
			margin: auto;
			cursor: pointer;
			transition: all 0.25s;
			display: none;
		}

		div.btn span:hover {
			color: #ffffff !important;
			background: #e90052;
		}

		input.label::placeholder {
			color: #202020 !important;
		}

		#step__1 .container,
		#step__6 .container {
			display: flex;
			padding-right: 10px;
		}

		.radio {
			display: flex;
			align-items: center;
		}

		.item {
			width: 46px;
			height: 46px;
			margin: 2px;
			cursor: pointer;
			transition: transform 0.25s;
			border-radius: 4px;
		}

		.item:hover {
			transform: scale(1.2);
		}

		body.blue,
		.item.blue {
			background: url('https://www.gifcen.com/wp-content/uploads/2021/03/optical-illusions-gif-1.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		body.yellow,
		.item.yellow {
			background: url('https://i.pinimg.com/originals/c0/7a/8e/c07a8ea4e3c86f91a4cde1d1ecdc6428.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		body.purple,
		.item.purple {
			background: url('https://media1.giphy.com/avatars/ectorasgoofy/WrESNu3WCt1D.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		body.green,
		.item.green {
			background: url('https://i.pinimg.com/originals/b7/da/d3/b7dad3b9d1a9970f01a68f5d6e9051f5.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		body.violet,
		.item.violet {
			background: url('https://i.pinimg.com/originals/43/56/74/4356746a4fb0b09c4b06dd3ca19d9fe0.gif');
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		div.btn.blue span {
			color: #04f5ff;
			border-color: #04f5ff;
		}

		div.btn.blue span:hover {
			background: #04f5ff;
		}

		div.btn.yellow span {
			color: #ebff00;
			border-color: #ebff00;
		}

		div.btn.yellow span:hover {
			background: #ebff00;
		}

		div.btn.purple span {
			color: #e90052;
			border-color: #e90052;
		}

		div.btn.purple span:hover {
			background: #e90052;
		}

		div.btn.green span {
			color: #00ff85;
			border-color: #00ff85;
		}

		div.btn.green span:hover {
			background: #00ff85;
		}

		div.btn.violet span {
			color: #38003c;
			border-color: #38003c;
		}

		div.btn.violet span:hover {
			background: #38003c;
		}

		.right {
			display: flex;
			align-items: center;
		}

		.right label {
			font-size: 1.5rem;
			font-weight: normal;
		}

		.checkbox {
			padding: 4px;
			border: 3px solid #e90052;
			display: inline-block;
			width: 64px;
			border-radius: 40px;
			margin: auto 8px;
		}

		.checkbox .circle {
			height: 25px;
			width: 25px;
			border-radius: 100%;
			background: #e90052;
			display: block;
			transform: translateX(0px);
			transition: transform 0.25s ease, background 0.25s ease;
		}

		.checkbox.checked {
			background: #e90052;
		}

		.checkbox.checked .circle {
			transform: translateX(25px);
			background: white !important;
		}

		.checkbox.blue {
			border-color: #04f5ff;
		}

		.checkbox.blue .circle {
			background: #04f5ff;
		}

		.checkbox.checked.blue {
			background: #04f5ff;
		}

		.checkbox.yellow {
			border-color: #ebff00;
		}

		.checkbox.yellow .circle {
			background: #ebff00;
		}

		.checkbox.checked.yellow {
			background: #ebff00;
		}

		.checkbox.purple {
			border-color: #e90052;
		}

		.checkbox.purple .circle {
			background: #e90052;
		}

		.checkbox.checked.purple {
			background: #e90052;
		}

		.checkbox.green {
			border-color: #00ff85;
		}

		.checkbox.green .circle {
			background: #00ff85;
		}

		.checkbox.checked.green {
			background: #00ff85;
		}

		.checkbox.violet {
			border-color: #38003c;
		}

		.checkbox.violet .circle {
			background: #38003c;
		}

		.checkbox.checked.violet {
			background: #38003c;
		}



		*,
		*::before,
		*::after {
			box-sizing: border-box;
		}

		:root {
			--color-primary: #111111;
			--color-secondary: #333333;
			--color-tertiary: #555555;
			--color-quaternary: #777777;
			--color-quinary: #999999;
			/*
  --color-primary: #5192ED;
  --color-secondary: #69A1F0;
  --color-tertiary: #7EAEF2;
  --color-quaternary: #90BAF5;
  --color-quinary: #A2C4F5;
  */
		}

		.content {
			display: flex;
			align-content: center;
			justify-content: center;
		}

		.text_shadows {
			text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			font-family: "mainFont", sans-serif;
			font-weight: 400;
			text-transform: uppercase;
			font-size: calc(1rem + 2vw);
			text-align: center;
			margin: 0;
			color: var(--color-primary);
			-webkit-animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
			animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
			letter-spacing: 0.4rem;
		}

		@-webkit-keyframes shadows {
			0% {
				text-shadow: none;
			}

			10% {
				text-shadow: 3px 3px 0 var(--color-secondary);
			}

			20% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
			}

			30% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
			}

			40% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			50% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			60% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			70% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
			}

			80% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
			}

			90% {
				text-shadow: 3px 3px 0 var(--color-secondary);
			}

			100% {
				text-shadow: none;
			}
		}

		@keyframes shadows {
			0% {
				text-shadow: none;
			}

			10% {
				text-shadow: 3px 3px 0 var(--color-secondary);
			}

			20% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
			}

			30% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
			}

			40% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			50% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			60% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
			}

			70% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
			}

			80% {
				text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
			}

			90% {
				text-shadow: 3px 3px 0 var(--color-secondary);
			}

			100% {
				text-shadow: none;
			}
		}

		@-webkit-keyframes move {
			0% {
				transform: translate(0px, 0px);
			}

			40% {
				transform: translate(-12px, -12px);
			}

			50% {
				transform: translate(-12px, -12px);
			}

			60% {
				transform: translate(-12px, -12px);
			}

			100% {
				transform: translate(0px, 0px);
			}
		}

		@keyframes move {
			0% {
				transform: translate(0px, 0px);
			}

			40% {
				transform: translate(-12px, -12px);
			}

			50% {
				transform: translate(-12px, -12px);
			}

			60% {
				transform: translate(-12px, -12px);
			}

			100% {
				transform: translate(0px, 0px);
			}
		}

		.sub_div_three {
			position: fixed;
			left: 0%;
			bottom: -200%;
			width: 100%;
		}
	</style>
</head>

<body>
	<div class="scene">
		@if(Session::has('success'))
		<center>
			<div class="content">
				<h2 class="text_shadows">{{ Session::get('success') }}</h2>
			</div>

			@php
			Session::forget('success');
			@endphp
		</center>
		@endif
		<div class="cube">
			<form action="{{ route('sendtickets') }}" method="POST" id="form">
				{{ csrf_field() }}
				<div class="card-body">

					<nav class="steps">
						<div class="dot step_1 done"></div>
						<div class="dot step_2"></div>
						<div class="dot step_3"></div>
						<div class="dot step_4"></div>
						<div class="dot step_5"></div>
						<div class="dot step_6"></div>
					</nav>
					<div class="cube__face  cube__face--front" id="step__1">
						<div class="container">
							<input style="font-family: 'mainFont';" type="text" class="label" placeholder="Color ?" disabled>
							<div class="radio" name="color">
								<div class="item blue" data-color="blue"></div>
								<div class="item yellow" data-color="yellow"></div>
								<div class="item purple" data-color="purple"></div>
								<div class="item green" data-color="green"></div>
								<div class="item violet" data-color="violet"></div>
							</div>
							<div class="btn" style="display:none">
								<span data-step="1">Continue</span>
							</div>
						</div>
					</div>
					<div class="cube__face cube__face--bottom" id="step__2">
						<div class="container">
							<input style="font-family: 'mainFont';" type="text" name="fullname" placeholder="Full Name ?">
							<div class="btn">
								<span data-step="2">Continue</span>
							</div>
						</div>
					</div>
					<div class="cube__face" id="step__3">
						<div class="container">
							<input style="font-family: 'mainFont';" type="email" name="email" placeholder="E-Mail ?">
							<div class="btn">
								<span data-step="3">Continue</span>
							</div>
						</div>
					</div>
					<div class="cube__face" id="step__4">
						<div class="container">
							<input style="font-family: 'mainFont';" type="password" name="password" placeholder="Code ?">
							<div class="btn">
								<span data-step="4">Continue</span>
							</div>
						</div>
					</div>
					<div class="cube__face" id="step__5">
						<div class="container">
							<select style="font-family: 'mainFont'" name="tickets" id="fav_color">
								<option disabled selected>Tickets ?</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<div class="btn">
								<span data-step="5">Continue</span>
							</div>
						</div>
					</div>
					<div class="cube__face" id="step__6">
						<div class="container">
							<input style="font-family: 'mainFont';" type="text" name="fullname" class="label" placeholder="Are you amazing ?" disabled>
							<div class="right">
								<label for="">No</label>
								<div class="checkbox">
									<div class="circle"></div>
								</div>
								<label for="">Yes</label>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>

	<div id="app">
		<custom-button class="sub_div_three" title="Back" href="{{url('/')}}"></custom-button>
	</div>
</body>

</html>
<script>
	const btn = document.querySelectorAll(".btn span");

	for (let i = 0; i < btn.length; i++) {
		btn[i].addEventListener("click", function() {
			document
				.querySelector(
					"nav .dot.step_" + (parseInt(this.getAttribute("data-step")) + 1) + ""
				)
				.classList.add("done");
			turn(parseInt(this.getAttribute("data-step")));
		});
	}

	function turn(step) {
		if (!!document.querySelector("#step__" + (step - 1))) {
			document.querySelector("#step__" + (step - 1)).classList.add("hidden");
		}

		document.querySelector("#step__" + step).classList.add("cube__face--top");
		document.querySelector("#step__" + step).classList.remove("cube__face--front");

		step += 1;
		if (!!document.querySelector("#step__" + step)) {
			document.querySelector("#step__" + step).classList.add("cube__face--front");
			if (!!document.querySelector("#step__" + step + " input")) {
				document.querySelector("#step__" + step + " input").focus();
			}
			document
				.querySelector("#step__" + step)
				.classList.remove("cube__face--bottom");
		}

		step += 1;
		if (!!document.querySelector("#step__" + step)) {
			document.querySelector("#step__" + step).classList.add("cube__face--bottom");
		}
	}

	const colors = document.querySelectorAll(".radio .item");
	const btns = document.querySelectorAll(".btn");

	for (var i = 0; i < colors.length; i++) {
		colors[i].addEventListener("click", function() {
			this.closest(".container")
				.querySelector(".btn span")
				.click();
			document.body.classList.add(this.getAttribute("data-color"));
			for (var j = 0; j < btns.length; j++) {
				btns[j].classList.add(this.getAttribute("data-color"));
			}
			document
				.querySelector(".checkbox")
				.classList.add(this.getAttribute("data-color"));
		});
	}

	document.querySelector(".checkbox").addEventListener("click", function() {
		this.classList.toggle("checked");
		document.querySelector(".scene").classList.add("end");

		// document.querySelector(".welcome").classList.add("show");
		const form = document.getElementById("form");
		form.submit()
	});

	const inputs = document.querySelectorAll(".cube__face input");
	for (let i = 0; i < inputs.length; i++) {
		inputs[i].addEventListener("keyup", function(e) {
			if (this.getAttribute("type") == "text") {
				if (this.value.length > 1) {
					this.closest(".container")
						.querySelector(".btn")
						.classList.add("show");
					if (e.keyCode == 13) {
						this.closest(".container")
							.querySelector(".btn span")
							.click();
					}
				} else {
					this.closest(".container")
						.querySelector(".btn")
						.classList.remove("show");
				}
			}
			if (this.getAttribute("type") == "email") {
				if (this.value.length > 2 && this.value.includes("@")) {
					this.closest(".container")
						.querySelector(".btn")
						.classList.add("show");
					if (e.keyCode == 13) {
						this.closest(".container")
							.querySelector(".btn span")
							.click();
					}
				} else {
					this.closest(".container")
						.querySelector(".btn")
						.classList.remove("show");
				}
			}
			if (this.getAttribute("type") == "password") {
				if (this.value.length > 3 && this.value == 'system') {
					console.log(this.value);
					this.closest(".container")
						.querySelector(".btn")
						.classList.add("show");
					if (e.keyCode == 13) {
						this.closest(".container")
							.querySelector(".btn span")
							.click();
					}
				} else {
					this.closest(".container")
						.querySelector(".btn")
						.classList.remove("show");
				}
			}
		});
	}

	document.querySelector("select").addEventListener("change", function() {
		this.closest(".container")
			.querySelector(".btn")
			.classList.add("show");
	});
</script>

<script src=" {{ mix('/js/app.js') }}">
</script>