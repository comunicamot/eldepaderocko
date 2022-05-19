<template>
  <Layout>
    <SliderCover
      title="SOMOS MÁS DE 25 000 ROCKOFRIENDS EN PERÚ Y LATINOAMÉRICA"
    >
      <template #swiper>
        <SwiperCover :images="['/image/nosotros.webp']"></SwiperCover>
      </template>
    </SliderCover>
    <div class="space-page"></div>
    <div class="container mx-auto">
      <div
        class="
          flex-col
          md:flex-row md:justify-center md:items-start
          content-center
          md:space-x-3
          space-y-2
        "
      >
        <div class="flex flex-col md:flex-row flex-wrap gap-5">
          <!-- <img src="/image/web/nosotros/nosotros.png " class="img-us" />

          <br /><br /><br /> -->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="main-timeline" style="text-align: center">
                  <div class="timeline">
                    <a href="" class="timeline-content">
                      <div class="content">
                        <h3 class="title__" style="font-weight:900;font-size:60px;margin: 50px 0 250px 0;">Nuestra historia</h3>
                      </div>
                    </a>
                  </div>

                  <div class="timeline">
                    <a href="" class="timeline-content" style="margin-bottom: 110px;">
                      <div class="content">
                        <div class="timeline-icon" style="right: 60%">
                          <img
                            src="/image/web/nosotros/imagen_1.png"
                            alt=""
                            class="trajectory_icon"
                            style="display: unset !important"
                          />
                        </div>
                        <p
                          class="description movil_description"
                          style="
                            margin-left: 25%;
                            margin-right: 10%;
                            text-align: justify;
                            margin-bottom: 90px;
                            margin-top: 90px;
                          "
                        >
                          El proyecto inició sus operaciones en 2020, para
                          resolver la necesidad de encontrar lugares pet
                          friendly donde las personas puedan vacacionar junto a
                          sus engreídos de 4 patas sin tener que dejarlos en
                          casa. Es así como inicia con el alquiler de
                          habitaciones pet friendly, pero la pandemia forzó a
                          cambiar el modelo de negocio al alquiler de "depas"
                          pet friendly.
                        </p>
                      </div>

                      <div class="content">
                        <div
                          class="timeline-icon timeline-icon_ringht"
                          style="left: 66%"
                        >
                          <img
                            src="/image/web/nosotros/imagen_2.png"
                            alt=""
                            class="trajectory_icon"
                            style="display: unset !important"
                          />
                        </div>
                        <p
                          class="description movil_description"
                          style="
                            margin-left: 25%;
                            margin-right: 10%;
                            text-align: justify;
                            margin-bottom: 90px;
                            margin-top: 90px;
                          "
                        >
                          El Depa de Rocko nace a finales del 2019, cuando Angel
                          buscaba un nombre para su proyecto pet friendly y en
                          ese momento se le acerca Roky, su engreído de 10 años,
                          se sube al sofá y lo mira. Ahí entendió que el
                          verdadero dueño del depa todo el tiempo había sido
                          Roky, el amo y señor del lugar, o como su nombre
                          artístico lo dice:¡Rocko!
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="timeline">
                    <a href="" class="timeline-content" style="margin-bottom: 110px;">
                      <div class="content">
                        <div class="timeline-icon" style="right: 60%">
                          <img
                            src="/image/web/nosotros/imagen_3.png"
                            alt=""
                            class="trajectory_icon"
                            style="display: unset !important"
                          />
                        </div>
                        <p
                          class="description movil_description"
                          style="
                            margin-left: 25%;
                            margin-right: 10%;
                            text-align: justify;
                            margin-bottom: 90px;
                            margin-top: 90px;
                          "
                        >
                          Este 2022 se crea el primer portal inmobiliario pet
                          friendly en el Perú y Latinoamérica:
                          www.eldepaderocko.com
                        </p>
                      </div>

                      <div class="content">
                        <div
                          class="timeline-icon timeline-icon_ringht"
                          style="left: 66%"
                        >
                          <img
                            src="/image/web/nosotros/imagen_4.png"
                            alt=""
                            style="display: unset !important"
                          />
                        </div>
                        <p
                          class="description movil_description"
                          style="
                            margin-left: 25%;
                            margin-right: 10%;
                            text-align: justify;
                            margin-bottom: 90px;
                            margin-top: 90px;
                          "
                        >
                          Luego, en el año 2021, se fundó la primera empresa
                          inmobiliario 100% pet friendly en el Perú. La cual
                          cuenta con 3 “Depas” en Punta Hermosa, al sur de Lima,
                          y están empezando una etapa de expansión por todo el
                          país.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center mt-8" style="margin-top: 45px">
          <!-- <ButtonDiv
            text="Regístrate Ahora"
            styles="c-red-s w-1/2 md:w-1/4"
          ></ButtonDiv> -->

          <p style="text-align: center">
            La comunidad ha crecido a más 25000 “RockoFriends”. Contamos con
            RockoFriends de Perú, Brasil, Chile, Argentina, Colombia, Venezuela,
            Bolivia, Costa Rica, EE.UU, España, Suiza e Indonesia.
            ¡Bienvenidos@s RockoFriends!
          </p>
        </div>
      </div>
    </div>
    <div class="space-page"></div>
    <div class="w-full trajectory text-white">
      <p class="trajectory_title" style="margin-bottom: 45px">
        ¡Bienvenido RockoFriend!
      </p>
      <!-- <p class="trajectory_desc py-5">
        Pellentesque eu convallis leo, quis dapibus nisl. Mauris et ultricies
        libero. <br />
        Duis malesuada ligula sed neque vestibulum convallis.
      </p> -->

      <div class="flex text-white w-3/4 justify-between py-5">
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_one.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">25k+</span></div>
          <div class="movil_trayectoria_icons">RockoFriends</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_three.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">3 </span></div>
          <div class="movil_trayectoria_icons">Depas</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img src="/image/icon_two.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">10 </span></div>
          <div class="movil_trayectoria_icons">RockoPoints</div>
        </div>
        <div class="flex flex-col items-center justify-center">
          <div>
            <img
              src="/image/web/nosotros/icon_four.png"
              alt=""
              class="trajectory_icon"
            />
          </div>
          <div><span class="trajectory_number">10 </span></div>
          <div class="movil_trayectoria_icons">Beneficios</div>
        </div>
      </div>

      <div class="container">
        <div class="row movil_trayectoria">
          <div class="col" style="margin-right: 45px">
            <strong style="color: #f4c1e1">Visión:</strong> Ser el portal
            inmobiliario favorito para pet lovers.
          </div>
          <div class="col">
            <strong style="color: #f4c1e1">Misión:</strong> Que todos los
            lugares posibles en el mundo sean pet friendly.
          </div>
        </div>
      </div>
    </div>
    <div class="space-page"></div>
    <div
      class="flex flex-col justify-center items-center space-y-3 md:space-y-7"
    >
      <p class="text-black">
        <span class="trajectory_number">+25</span>
        <span class="trajectory_title ml-3">mil RockoFriends</span>
      </p>
      <div class="line_us"></div>
      <p class="canals_p">A través de todos nuestros canales</p>
      <div class="mx-10 md:mx-0">
        <div class="flex md:flex-1">
          <a
            href="https://www.instagram.com/eldepaderocko"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              src="/image/web/redes/instagram.png"
              alt=""
              srcset=""
              rel="noopener noreferrer"
              style="margin-right: 4px"
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
              rel="noopener noreferrer"
              style="margin-right: 4px"
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
              rel="noopener noreferrer"
              style="margin-right: 4px"
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
              rel="noopener noreferrer"
              style="margin-right: 4px"
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
              rel="noopener noreferrer"
              style="margin-right: 4px"
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
      <p class="us_email">@eldepaderocko</p>
    </div>
    <div class="space-page"></div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCover";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../components/ButtonDiv.vue";

export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
  },
};
</script>


<style>
.movil_trayectoria {
  display: flex;
  margin-bottom: 45px;
  margin-top: 45px;
  font-size: 23px;
  /* margin-left: 100px;
  margin-right: 100px; */
  margin-left: 45px;
}

@media only screen and (max-width: 600px) {
  .movil_trayectoria {
    display: flex;
    margin: 35px 20px;
    font-size: 23px;
  }
  .movil_trayectoria_icons {
    font-size: 10px;
  }
}

/* :::::::::::::::::::::::: timeline ::::::::::::::::::::::: */

.main-timeline {
  padding: 20px 0;
  position: relative;
}
.main-timeline:before,
.main-timeline:after {
  content: "";
  height: 40px;
  width: 40px;
  background-color: #000000;
  border-radius: 50%;
  border: 5px solid #F4C1E1;
  transform: translateX(-50%);
  position: absolute;
  left: 50%;
  top: -15px;
  z-index: 2;
}
.main-timeline:after {
  top: auto;
  bottom: 15px;
}
.main-timeline .timeline {
  padding: 15px 100px;
  margin-top: -30px;
  position: relative;
  z-index: 1;
}

.main-timeline .timeline:before,
.main-timeline .timeline:after {
  content: "";
  border-radius: 300px 0 0 300px;
  border-right: none;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.main-timeline .timeline:after {
  height: calc(100% - 25px);
  width: calc(50% - 12px);
  left: 12px;
  top: 15px;
  border: 5px solid black;
  border-right: none;
}

.main-timeline .timeline-content {
  display: inline-block;
}

.main-timeline .timeline-content:hover {
  text-decoration: none;
}

.main-timeline .timeline-year {
  color: #65c7d0;
  font-size: 50px;
  font-weight: 600;
  display: inline-block;
  transform: translateY(-50%);
  position: absolute;
  top: 50%;
  left: 10%;
}
.main-timeline .timeline:nth-child(even) .timeline-year {
  left: auto;
  right: 10%;
}
.main-timeline .content {
  color: #909090;
  width: 50%;
  /* padding: 20px; */
  display: inline-block;
  /* float: right; */
}

.main-timeline .title__ {
  /* color: #65c7d0; */
  font-size: 40px;
  font-weight: 600;
  /* text-transform: uppercase; */
  margin: 50px 0 200px 0;
  width: 200%;
}

.main-timeline .description {
  font-size: 16px;
  margin: 0;
}
.timeline-icon {
  position: absolute;
  /* left: 35%; */
  transform: translateY(-50%);
  top: 8%;
  font-size: 80px;
  padding-bottom: 70px;
  text-align: center;
}
.main-timeline .timeline:nth-child(even):before {
  left: auto;
  right: 0;
  border-radius: 0 100px 100px 0;
  /* border: 20px solid #d41010; */
  border-left: none;
}

.main-timeline .timeline:nth-child(even):after {
  left: auto;
  right: 12px;
  /* linea 2 */
  border: 5px solid black;
  border-left: none;
  border-radius: 0 300px 300px 0;
}

.main-timeline .timeline:nth-child(even) .content {
  float: left;
}

.main-timeline .timeline:nth-child(even) .timeline-icon {
  left: auto;
  /* right: 32%; */
}

.main-timeline .timeline:nth-child(5n + 2):before {
  border-color: #ea3c14;
}

.main-timeline .timeline:nth-child(5n + 2):after {
  border-color: black;
}

.main-timeline .timeline:nth-child(5n + 1) .timeline-icon,
.main-timeline .timeline:nth-child(5n + 1) .title__,
.main-timeline .timeline:nth-child(5n + 1) .timeline-year {
  color: #000000;
}
.main-timeline .timeline:nth-child(5n + 1) .timeline-icon:hover {
  color: #65c7d0;
}
.main-timeline .timeline:nth-child(5n + 2) .timeline-icon,
.main-timeline .timeline:nth-child(5n + 2) .title__,
.main-timeline .timeline:nth-child(5n + 2) .timeline-year {
  color: #ea3c14;
}
.main-timeline .timeline:nth-child(5n + 2) .timeline-icon:hover {
  color: #ef5720;
}
.main-timeline .timeline:nth-child(5n + 3) .timeline-icon,
.main-timeline .timeline:nth-child(5n + 3) .title__,
.main-timeline .timeline:nth-child(5n + 3) .timeline-year {
  color: #ff9800;
}
.main-timeline .timeline:nth-child(5n + 3) .timeline-icon:hover {
  color: #fcb855;
}
.main-timeline .timeline:nth-child(5n + 4) .timeline-icon,
.main-timeline .timeline:nth-child(5n + 4) .title__,
.main-timeline .timeline:nth-child(5n + 4) .timeline-year {
  color: #03a9f4;
}
.main-timeline .timeline:nth-child(5n + 4) .timeline-icon:hover {
  color: #6ab6f2;
}
.main-timeline .timeline:nth-child(5n + 5) .timeline-icon,
.main-timeline .timeline:nth-child(5n + 5) .title__,
.main-timeline .timeline:nth-child(5n + 5) .timeline-year {
  color: #8acb3f;
}
.main-timeline .timeline:nth-child(5n + 5) .timeline-icon:hover {
  color: #bbe986;
}

.main-timeline .timeline:nth-child(5n + 3):before {
  border-color: #ff9800;
}

.main-timeline .timeline:nth-child(5n + 3):after {
  border-color: black;
}
.main-timeline .timeline:nth-child(5n + 4):before {
  border-color: #6ab6f2;
}

.main-timeline .timeline:nth-child(5n + 4):after {
  border-color: #03a9f4;
}

.main-timeline .timeline:nth-child(5n + 5):before {
  border-color: #8acb3f;
}

.main-timeline .timeline:nth-child(5n + 5):after {
  border-color: #bbe986;
}

@media only screen and (max-width: 480px) {
  .main-timeline .timeline:nth-child(even) .timeline-icon {
    left: auto;
    right: 16%;
  }

  /* :::::::::::::::::::: Movil :::::::::::::::::: */
  .main-timeline .content {
    color: #909090;
    width: unset !important;
    display: inline-block;
  }

  .main-timeline .timeline {
    padding: unset !important;
    margin-top: -30px;
    position: relative;
    z-index: 1;
  }

  .main-timeline .title__ {
    font-size: 40px;
    font-weight: 600;
    margin: 50px 0 50px 0;
    width: unset !important;
  }

  .movil_description {
    margin: 30px 20% 90px 20% !important;
    text-align: justify;
  }

  .timeline-icon {
    position: unset !important;
    transform: unset !important;
    top: unset !important;
    font-size: unset !important;
    padding-bottom: unset !important;
    text-align: unset !important;
    padding-top: 62px;
  }

  .timeline-icon_ringht {
    position: unset !important;
    transform: unset !important;
    top: unset !important;
    font-size: unset !important;
    padding-bottom: unset !important;
    text-align: unset !important;
    padding-top: unset !important;
  }

  .trajectory_icon {
    width: unset !important;
  }
}
</style>