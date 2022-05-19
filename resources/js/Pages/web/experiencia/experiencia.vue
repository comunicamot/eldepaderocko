<template>
  <Layout>
    <SliderCover>
      <template #swiper>
        <SwiperCover
          :images="['/image/web/nosotros/inicio_3.jpg']"
        ></SwiperCover>
      </template>
    </SliderCover>

    <div class="container mx-auto">
      <div class="card_expe">
        <div class="card__container">
          <div class="card__front">
            <div class="card__front--bg">
              <div class="front--bg--s1"></div>
            </div>

            <div class="card__brand">
              <span class="card__brand--logo font-logo">
                <!-- <span class="logo-letter logo-d">d</span>
                    <span class="logo-letter logo-mid">&</span>
                    <span class="logo-letter logo-p">p</span> -->
              </span>
              <div
                class="flex justify-end"
                style="border: 1px solid white; border-radius: 45px"
              >
                <img src="/image/logo.png" alt="" />
              </div>
              <span class="card__brand--name font-normal"> ROCKOCARD </span>
            </div>

            <div class="card__chip">
              <!-- <div class="card__chip--shape"></div>
              <div class="card__chip--shape"></div>
              <div class="card__chip--shape"></div> -->

              <img
                src="https://namisangabrielvalley.org/wp-content/uploads/sites/190/2020/08/QR-Code-NAMI-SGV-Mandarin.png"
                alt=""
                style="width: 50px"
              />
            </div>

            <div class="card__extra">
              <div class="card__extra--contactless">
                <i class="fas fa-wifi"></i>
              </div>
            </div>

            <div class="card__number font-number">Tarjeta N° 0000042028</div>

            <div class="card__payment">
              <i class="fab fa-cc-visa"></i>
            </div>

            <div class="card__user">
              <span class="card__user--name font-number">MAZLUM YILDIRIM</span>
              <div class="card__user--valid">
                <div class="card__user--valid-txt font-normal">VALİD THRU</div>
                <div class="card__user--valid-date font-number">17 / 24</div>
              </div>
            </div>
          </div>

          <div class="card__back">
            <div class="card__plast"></div>
            <div class="card__contact">
              <p class="card__contact--txt">Customer Service: 0855 0055 0055</p>
              <p class="card__contact--txt">www.samplecard.com.xx</p>
            </div>
            <div class="card__strip"></div>
            <div class="card__company">
              <div class="card__company--address">
                7741 Hayvenhurst Ave, Van Nuys, CA 91406 Los Angeles /
                Californiya - USA
              </div>
              <div class="card__company--msg">
                A credit card is different from a charge card, which requires
                the balance to be repaid in full each month.
              </div>
            </div>
            <div class="card__cvc">
              <div class="card__cvc--strip">
                <div class="strip-shape"></div>
                <div class="strip-shape"></div>
                <div class="strip-shape"></div>
                <div class="strip-shape"></div>
                <div class="strip-shape"></div>
              </div>

              <!-- <span class="card__cvc--num"><span class="card__cvc--txt">535</span> CVC </span> -->
            </div>
            <p class="card__cvc--warning">
              NOT VALİD WİTHOUT AUTHORİZED SİGNATURE
            </p>
            <div class="card__stamp"></div>
            <div class="card_expe--hr"></div>
            <div class="card__back--bottom">
              <p class="company-dec">d&p sample company</p>
              <p class="card_expe--business">SampleCard</p>
            </div>
            <div class="card__back--shape"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-8" style="margin-bottom: 45px">
      <ButtonDiv text="Imprimir" styles="c-red-s w-1/2 md:w-1/4"></ButtonDiv>
    </div>
  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCoverLogin";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../../components/ButtonDiv.vue";

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
  margin-left: 100px;
  margin-right: 100px;
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

/* https://codepen.io/yildirimzlm/pen/MPjrNd */



.font-number {
  font-family: "Orbitron", sans-serif;
}

.font-logo {
  font-family: "Lobster", cursive;
}

.card_expe {
  width: 100%;
  height: 100vh;
  position: relative;
  background-color: #ffffff;
  /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' %3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(28,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23deab00'/%3E%3Cstop offset='1' stop-color='%23000000'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cpattern id='b' width='11' height='11' patternUnits='userSpaceOnUse'%3E%3Ccircle fill='%23ffffff' cx='5.5' cy='5.5' r='5.5'/%3E%3C/pattern%3E%3Crect width='100%25' height='100%25' fill='url(%23a)'/%3E%3Crect width='100%25' height='100%25' fill='url(%23b)' fill-opacity='0.15'/%3E%3C/svg%3E"); */
  background-attachment: fixed;
  background-size: cover;
}
.card__container {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 370px;
  height: 240px;
}
.card__extra {
  position: absolute;
  top: 36%;
  right: 20px;
  font-size: 26px;
  transform: rotate(90deg);
  color: #101010;
}
.card__front {
  width: 370px;
  height: 240px;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 38px 4px rgba(0, 0, 0, 0.2);
  position: absolute;
  z-index: 22;
  animation-name: cardFront;
  animation-duration: 1s;
  animation-delay: 1s;
  animation-fill-mode: forwards;
}
.card__back {
  width: 370px;
  height: 240px;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 38px 4px rgba(0, 0, 0, 0.2);
  position: absolute;
  background-color: #9dbbf0;
  background-image: -webkit-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: -moz-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: -o-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  z-index: 11;
  animation-name: cardBack;
  animation-duration: 1s;
  animation-delay: 1s;
  animation-fill-mode: forwards;
}
.card__back--bottom {
  display: flex;
  justify-content: space-between;
  width: 88%;
  margin: 7px auto;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  font-size: 10px;
  color: #ffa44b;
}
.card__back--shape {
  position: absolute;
  background: #101010;
  width: 160px;
  height: 500px;
  transform: rotate(84deg);
  left: 55px;
  border-radius: 27%;
  border: 4px solid #eab500;
  box-shadow: 0 0 1px 5px #101010;
  top: 13px;
  z-index: -1;
}
.card__contact {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid black;
}
.card__contact--txt {
  font-size: 9px;
  font-weight: 700;
  padding: 7px 20px;
  color: #ffffff;
  text-shadow: 0 1px 4px rgba(0, 0, 0, 0.6);
}
.card__strip {
  width: 100%;
  height: 45px;
  background: #131313;
  margin: 4px 0;
}
.card__company--address {
  font-size: 8px;
  margin-top: 15px;
  margin-left: 20px;
}
.card__company--msg {
  font-size: 8px;
  margin-top: 2px;
  margin-left: 20px;
}
.card__cvc {
  display: flex;
  align-items: center;
  margin-top: 10px;
  margin-left: 20px;
}
.card__cvc--strip {
  width: 200px;
  background: #d3d3d3;
  height: 45px;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.card__cvc--txt {
  background: wheat;
  margin-left: 6px;
  padding: 2px 6px;
  font-style: italic;
  font-weight: 700;
  color: #000000;
  font-size: 16px;
}
.card__cvc--num {
  font-size: 16px;
  font-weight: 600;
  color: black;
}
.card__cvc--warning {
  font-size: 5px;
  margin-left: 25px;
  margin-top: 2px;
  font-style: italic;
}
.card__brand {
  display: flex;
  width: 80%;
  justify-content: space-between;
  align-items: center;
  margin-left: 50%;
  position: absolute;
  transform: translate(-50%);
}
.card__brand--name {
  font-size: 20px;
  font-weight: 700;
  color: black;
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
}
.card__brand--logo {
  font-size: 21px;
}
.card__number {
  position: relative;
  top: 62%;
  padding-left: 30px;
  font-size: 18px;
  font-weight: 700;
  color: #9dbbf0;
  text-shadow: 0px 0px 2px #4a2d00;
  letter-spacing: 1px;
}
.card__user {
  position: relative;
  top: 70%;
  display: flex;
  left: 30px;
  color: #ffffff;
}
.card__user--name {
  font-size: 16px;
  letter-spacing: 1.4px;
  font-weight: 700;
  text-shadow: 0 0 3px #060606;
}
.card__user--valid {
  display: flex;
  align-items: center;
  flex-direction: column;
  margin-left: 20px;
}
.card__user--valid-txt {
  display: inline-flex;
  font-size: 10px;
  margin-bottom: 5px;
  text-shadow: 0 0 3px #060606;
}
.card__user--valid-date {
  font-size: 12px;
  font-weight: 700;
  text-shadow: 0 0 3px #060606;
}
.card__payment {
  position: absolute;
  color: #9dbbf0;
  bottom: 20px;
  right: 27px;
  font-size: 2.5em;
}
.card__front--bg {
  position: absolute;
  background-color: #9dbbf0;
  background-image: -webkit-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: -moz-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: -o-linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  background-image: linear-gradient(135deg, #9dbbf0 25%, #f4c1e1 100%);
  width: 100%;
  height: 100%;
  z-index: 0;
}
.card__chip {
  position: absolute;
  top: 86px;
  left: 45px;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: #101010;
}
.card__chip--shape {
  width: 43px;
  height: 9px;
  background: #efb35b;
  border-radius: 1px;
  margin-bottom: 1px;
}
.card__chip--shape:last-child {
  margin-bottom: 0;
  border-radius: 1px 1px 3px 3px;
}
.card__chip--shape:first-child {
  border-radius: 3px 3px 1px 1px;
}
.card__chip--shape:first-child:after {
  content: "";
  position: absolute;
  background: #efb35b;
  border: 1px solid #101010;
  width: 12px;
  height: 23px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 5px;
}
.card__chip:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 8px solid transparent;
  border-right: 12px solid #fab25e40;
  border-bottom: 8px solid transparent;
  left: -20px;
  top: 7px;
}
.card__stamp {
  width: 54px;
  height: 35px;
  background: radial-gradient(#ffffff, #a9a9a9);
  position: absolute;
  right: 15px;
  bottom: 80px;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 0 13px 0px rgba(0, 0, 0, 0.2);
}
.card__stamp:after {
  content: "d&p";
  position: absolute;
  opacity: 0.1;
  color: #4c320c;
  font-weight: 900;
  font-size: 18px;
  text-shadow: 0 1px 1px #4e4d4d;
  border: 1px solid #8e8b8b;
  width: 70%;
  height: 70%;
  text-align: center;
  border-radius: 30px;
}
.card__plast {
  position: absolute;
  left: 0;
  width: 15px;
  height: 100%;
}
.card__plast:after {
  content: "www.samplecard-plast.com.xx";
  position: absolute;
  transform: rotate(270deg) translateY(-50%);
  text-align: center;
  width: 15px;
  white-space: nowrap;
  bottom: 30%;
  font-size: 6px;
}
.card_expe .logo {
  display: flex;
  position: relative;
  bottom: 2px;
}
.card_expe .logo--shape {
  position: relative;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  opacity: 0.6;
}
.card_expe .logo-red {
  background: #ff0000;
  left: 5px;
}
.card_expe .logo-yellow {
  background: #ffff00;
  right: 5px;
}
.card_expe .logo-name {
  position: relative;
  left: 0;
  top: -3px;
  font-size: 12px;
  color: white;
  opacity: 0.2;
}
.card_expe .logo-mid {
  font-size: 40px;
}
.card_expe .logo-d {
  left: 3px;
}
.card_expe .logo-p {
  right: 7px;
}
.card_expe .logo-letter {
  position: relative;
  text-shadow: 0 0 5px #000000b8;
}
.card_expe .front--bg--s1 {
  position: relative;
  background: #101010;
  width: 260px;
  height: 510px;
  transform: rotate(105deg);
  bottom: 21px;
  left: 75px;
  border-radius: 30%;
  border: 4px solid #eab500;
  box-shadow: 0 0 1px 5px #101010;
}
.card_expe .front--bg--s2 {
  position: absolute;
  top: -20px;
  display: flex;
  transform: rotate(-1deg);
  z-index: -1;
}
.card_expe .strip-shape {
  background: #dcaa7b80;
  width: 80px;
  height: 60px;
  transform: rotate(130deg) translateX(-50%);
  position: relative;
  left: -11px;
  top: 35%;
  border: 1px solid #ffffffa8;
}

@keyframes cardFront {
  from {
    left: 0;
    top: 0;
  }
  to {
    left: -52%;
    top: -12%;
  }
}
@keyframes cardBack {
  from {
    left: 0;
    top: 0;
  }
  to {
    left: 52%;
    top: 12%;
  }
}
@media all and (max-width: 768px) {
  @keyframes cardFront {
    from {
      left: 0;
      top: 0;
    }
    to {
      left: 0%;
      top: -54%;
    }
  }
  @keyframes cardBack {
    from {
      left: 0;
      top: 0;
    }
    to {
      left: 0%;
      top: 54%;
    }
  }
}
@media all and (max-width: 420px) {
  .card__container {
    transform: translate(-50%, -50%) scale(0.8);
  }
}
</style>