<template>
  <div class="card">
    <h4>Cards for {{ set_name }}</h4>
    <ul class="list-group-flush list-group">
      <li class="list-group-item">
        <button class="btn-primary btn">
          <p>{{ setCards.name }}</p>
        </button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["set_name"],
  data() {
    return {
      setName: set_name,
      setCards: null,
    };
  },

  mounted() {
    axios.get("https://api.pokemontcg.io/v1/sets/" + set_name).then((resp) => {
      this.setCards = resp.data.name;
    });
  },
};
</script>

<style>
</style>