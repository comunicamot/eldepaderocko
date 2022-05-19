<template>
  <div class="flex flex-col md:flex-row justify-center md:m-15">
    <div class="w-full trajectory__ text-white">
      <p class="trajectory_title__">¡Bienvenido RockoFriend!</p>
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
          <img src="/image/web/nosotros/icon_four.png" alt="" class="trajectory_icon" />
          </div>
          <div><span class="trajectory_number">10 </span></div>
          <div class="movil_trayectoria_icons">Beneficios</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.hello {
  /* font-family: "Raleway"; */
  font-style: normal;
  font-weight: 700;
  font-size: 50px;
  line-height: 59px;

  color: #ffffff;
}
.desc {
  /* font-family: "Raleway"; */
  font-style: normal;
  font-weight: 400;
  font-size: 22px;
  line-height: 26px;

  color: #ffffff;
}

.trajectory__ {
    width: 100%;
    background: #000;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.trajectory_title__ {
    font-family: "Raleway Thin";
    font-size: 50px;
    font-style: normal;
    font-weight: 700;
    line-height: 140px;
    letter-spacing: 0em;
    text-align: center;
}

@media only screen and (max-width: 600px) {
.trajectory_title__ {
    font-family: "Raleway Thin";
    font-size: 50px;
    font-style: normal;
    font-weight: 700;
    line-height: unset;
    letter-spacing: 0em;
    text-align: center;
}
  .movil_trayectoria_icons {
    font-size: 10px;
  }
}
</style>