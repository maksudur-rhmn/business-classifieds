<template>
	<div class="card business-card mb-2">
		<div class="card-thumb">
			<img :src="business.image" class='img-fluid'>
		</div>
		<h3 class="h5 card-title mt-1"><router-link :to="{ name: 'business', params: { businessid: business.businessid }}">{{ business.title }}</router-link></h3>
		<div class="card-body">
			<div class="ratings">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
			<p class='subtitle'>Cities -
				<template v-for="(city, index) in business.cities" v-key="index">
					{{ city.name }}<template v-if="index < business.cities.length - 1">, </template>
				</template>

			</p>
			<div class="card-text">
				<p>Phone: {{ business.contacts.join(', ') }}</p>
				<p>Address: {{ business.address }}</p>
				<p>Hours: Open ⋅ Closes 7PM</p>
				<br>
			</div>
		</div>
        <div class="card-footer text-center">
			<bookmark-button :post="business" />
			<div class=''><a href='#!'><span class='icons icon-share'></span></a></div>
			<div class=''><router-link class='' :to="{ name: 'business', params: { businessid: business.businessid }}">View</router-link></div>
        </div>
	</div>
</template>

<script>
import BookmarkButton from './BookmarkButton.vue';
export default {
	name: 'business-card',
	props: [
		'business'
	],
	components: {
		BookmarkButton
	}
}
</script>