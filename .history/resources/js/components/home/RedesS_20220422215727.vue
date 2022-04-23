<template>
  <div class="m-10">
    <TitlePage text="Redes sociales"></TitlePage>

    <div class="flex flex-col md:flex-row gap-14">
      <template v-for="(item,index) in 3" :key="index">
        <div class="w-full md:w-4/12">
        <main>
  <h1>Lazy Instagram Embed <b>Gonna&nbsp;Be&nbsp;Lazy</b></h1>

  <p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing</p>

  <p>Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</p>

  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla.</p>

  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla.</p>

  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

  <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

  <hr/>
  
  <iframe allowtransparency="true" frameborder="0" height="710" scrolling="no" data-src="//instagram.com/p/BCudaCREZvf/embed/" width="612" class="lazyload"></iframe>

  <hr/>
  
  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

  <hr/>
  
  <iframe allowtransparency="true" frameborder="0" height="710" scrolling="no" data-src="//instagram.com/p/zkOqETkZjI/embed/" width="612" class="lazyload"></iframe>

  <hr/>
  
  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

 
  <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

</main>
      </template>
    </div>
    <div class="flex justify-center my-8">
      <ButtonDiv text="Ver más" styles="c-red-s w-1/2 md:w-1/4"></ButtonDiv>
    </div>
  </div>
</template>

<script>
import TitlePage from "../TitlePage.vue";
import CardImage from "../CardImage.vue";
import ButtonDiv from "../ButtonDiv.vue";
export default {
  components: {
    TitlePage,
    CardImage,
    ButtonDiv,
  },
  data(){
      return {
          data:[1,1,1]
      }
  }
};
</script>

<style>

/* Demo Styles */
html {
  box-sizing: border-box;
  font:1.2em/1.5 'Lato', sans-serif;
  width: 100%;
  height: 100%;
  padding: 2em;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  text-align: left;
  background-color: #1D1F20;
  color: #777;
}



a,
a:visited {
  color: white;
}

main {
  max-width: 1100px;
  margin: auto;
  background-color: #111;
  padding:3em;
}

hr {
  margin: 2em 0;
  border-color: #333;
}

/* Instagram Embed */
iframe[data-src*="instagram.com"], iframe[src*="instagram.com"] {
  display: block;
  margin: 3em auto;
  box-shadow: 0 0 3px #ccc;
}

</style>