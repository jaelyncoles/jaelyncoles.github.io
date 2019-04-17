<template>
	<div>
		<b-carousel
			id="carousel-1"
			v-model="slide"
			:interval="4000"
			
		
			background="white"
			img-width="1024"
			img-height="1480"
			
			@sliding-start="onSlideStart"
			@sliding-end="onSlideEnd"
		>
			<!-- Slides with image only -->
			<b-carousel-slide img-src="/img/white.png"></b-carousel-slide>
			<b-carousel-slide img-src="/img/IMG_226975F1E663-1.jpg" ></b-carousel-slide>
			<b-carousel-slide img-src="/img/white.png"></b-carousel-slide>
		</b-carousel>
	</div>
</template>

<script>
	export default {
		name: "aboutComponent",
		data() {
			return {
				slide: 0,
				sliding: null
			};
		},
		methods: {
			onSlideStart(slide) {
				this.sliding = true;
			},
			onSlideEnd(slide) {
				this.sliding = false;
			}
		}
	};
</script>