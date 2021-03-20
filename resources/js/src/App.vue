<template>
    <div class="container mx-auto">
      <div class="flex justify-center p-2">
      <div class="md:w-5/6 xl:w-2/6 sm:w-5/6 border h-full">
        <Blog
          class="border bg-white w-100 shadow-lg rounded-lg"
          src="https://image.freepik.com/free-photo/romaine-lettuce-vegetable-hydroponic-system-farm-plants-water-without-soil-agriculture-health-food_73523-675.jpg"
          title="Hydroponics"
          content="A plant growing in a hydroponic system can grow around 30% faster than a plant grown in traditional soil. This happens because the plant does not need to expend energy in search of nutrients within the soil continuously. Instead, the nutrients are carried right to the plant, and that energy goes to growth."
        />
      </div>
      </div>
    </div>
</template>

<script>
    import Blog from './components/Blog';
    export default {
      components: {
        Blog
      }
    }
</script>
