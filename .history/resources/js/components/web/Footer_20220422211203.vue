<template>
  <div
    class="
      w-full
      h-auto
      md:h-52
      c-red-s
      flex flex-col
      md:flex-row
      flex-wrap
      items-start
      content-around
      md:content-center
    "
  >
    <div class="w-full md:w-1/4">
      <img src="/image/logof.webp" alt="" srcset="" />
    </div>
    <div class="w-full md:w-1/4 my-3 md:my-0">
      <div>
        <p class="f_p">Términos y condiciones</p>
        <p class="f_p">
          <Link href="/nosotros">
            <a>Nosotros</a>
          </Link>
        </p>
        <p class="f_p">
          <Link href="/contacto">
            <a>Contacto</a>
          </Link>
        </p>

        <p class="f_p">
          <Link href="/libro-de-reclamaciones">
            <a>Libro de reclamaciones</a>
          </Link>
        </p>
      </div>
    </div>
    <div class="w-full md:w-1/4 my-3 md:my-0">
      <p class="f_p">Correo electrónico:</p>
      <p class="f_p">contacto@eldepaderocko.com</p>
      <p class="f_p">Métodos de pago:</p>
      <p>
        <img src="/image/pay.webp" alt="" srcset="" />
      </p>
    </div>
    <div class="w-full md:w-1/4 my-3 md:my-0 flex md:justify-center">
      <div class="">
        <p class="f_p">Teléfono:</p>
        <p class="f_p_cell">+51 928 576 714</p>
        <p class=""><img src="/image/reds.png" alt="" srcset="" /></p>

        <div class="flex md:flex-1">
          <a
            href="https://www.instagram.com/eldepaderocko"
            target="_blank"
            rel="noopener noreferrer" style="margin-right: 4px;"
          >
            <img
              src="/image/web/redes/instagram.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
            />
          </a>
          <a
            href="https://www.tiktok.com/@eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              src="/image/web/redes/tiktok.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://web.facebook.com/eldepaderocko/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
               src="/image/web/redes/facebook.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://pe.linkedin.com/company/eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
             src="/image/web/redes/linkedin.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://open.spotify.com/user/7y4usr4t89a7559b3jxs45khr?si=zrzqsWbMRGWMjGCK2pabpA&utm_source=copy-link"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              src="/image/web/redes/rss.png"
              alt=""
              srcset=""
             rel="noopener noreferrer" style="margin-right: 4px;"
          /></a>
          <a
            href="https://twitter.com/Eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
             src="/image/web/redes/twitter.png"
              alt=""
              srcset=""
              class="cursor-pointer"
          /></a>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full h-20 bg-black flex justify-center items-center px-5">
    <div class="w-4/5">
      <span class="copyr">
        Copyright 2022 - www.eldepaderocko.com - Todos los derechos reservados.
      </span>
    </div>
    <div class="flex w-1/5 justify-end">
      <img src="/image/logo.png" alt="" />
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: { Link },
};
</script>

<style>
.copyr {
  /* font-family: Raleway; */
  font-size: 24px;
  font-style: normal;
  font-weight: 400;
  line-height: 28px;
  letter-spacing: 0em;
  color: white;
}

.f_p {
  /* font-family: Raleway; */
  font-size: 22px;
  font-style: normal;
  font-weight: 600;
  line-height: 26px;
  letter-spacing: 0em;
  color: #000000;
  padding: 5px;
}
.f_p_cell {
  /* font-family: 'Raleway'; */
  font-style: normal;
  font-weight: 800;
  font-size: 30px;
  line-height: 35px;

  color: #000000;
}

@media only screen and (max-width: 600px) {
  .copyr {
    font-size: 12px;
  }
  .f_p {
    font-size: 16px;
  }
}
</style>