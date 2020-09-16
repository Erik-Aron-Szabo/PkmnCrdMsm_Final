<template>
  <div class="card">
    <h4 class="card-header">Series-Index</h4>
    <!-- v-for="img in Images" :key="img" -->
    <ul id="setsUl" class="list-group list-group-flush" v-for="(set, i) in Sets" :key="set">
      <li class="list-group-item">
        <button class="btn btn-block">
          <a :href="'/'+SetCodes[i]">
            <strong>{{ set.name }}</strong>
            <br />
            <img :src="Images[i]" :alt="set.name" />
          </a>
        </button>
      </li>
    </ul>
  </div>
</template>

<script>
var counter = 0;
var imagesArr = [];
export default {
  data: function () {
    return {
      // Cards: null,
      Sets: [],
      Images: [],
      SetCodes: [],

    };
  },

  mounted() {
    // make page= ((1)) <--- variable
    // so when user clicks on "Next Page" it would increment
    // 1 -> 2
    axios.get("https://api.pokemontcg.io/v1/sets").then((resp) => {
      this.Sets = resp.data.sets;
      console.log(resp.data.sets);
      this.Sets.map((set) => this.Images.push(set.logoUrl));
      this.Sets.map((set) => this.SetCodes.push(set.code))
    });
  },

  methods: {
    setLogo(set) {
      counter++;
    },
  },
};
</script>

<style>
h4 {
  align-content: center;
  text-align: center;
  font-weight: 700;
  color: blue;
}

li {
  float: left;
}

img {
  align-content: center;
  max-width: 100%;
  max-height: 100%;
}
</style>
