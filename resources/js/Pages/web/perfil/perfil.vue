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
      <div class="container_profile">
        <div class="alert">
          <span class="closebtn">&times;</span>
          <strong>NOTA: </strong> Completa tus datos para obtener mas beneficios.!
         
        </div>
        <table style="border-collapse: unset !important;">
          <tr>
            <td>
              <section>
                <label for="fileToUpload">
                  <i class="fa fa-camera"></i>
                  <input
                    type="file"
                    id="fileToUpload"
                    style="visibility: hidden"
                    accept=".png,.jpg,jpeg,.PNG,.JPEG"
                    name="fileToUpload"
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                  />
                </label>
                <img
                  src="https://i.ibb.co/yNGW4gg/avatar.png"
                  id="blah"
                  alt="Avatar"
                />
              </section>
              <h1>Carlos Jimenes</h1>
              <h3>Cliente</h3>
            </td>
            <td>
              <ul>
                <li>
                  <b>Full name</b>
                  <input
                    type="text"
                    name="fname"
                    id="fname"
                    maxlength="100"
                    value="Bharadwaj"
                    required
                  />
                  <i
                    class="fa fa-edit"
                    id="edit1"
                    onclick="document.getElementById('fname').style.pointerEvents='auto';document.getElementById('fname').focus();this.style.display='none'; document.getElementById('check1').style.display='inline-block';"
                  ></i>
                  <i
                    class="fa fa-check"
                    style="display: none"
                    id="check1"
                    onclick="document.getElementById('edit1').style.display='inline-block';this.style.display='none';document.getElementById('fname').style.pointerEvents='none';"
                  ></i>
                </li>
                <li>
                  <b>Email</b>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    maxlength="150"
                    value="Bharadwajyl@gmail.com"
                    required
                  />
                </li>
                <li>
                  <b>Contact number</b>
                  <input
                    type="tel"
                    name="mobile"
                    id="mobile"
                    maxlength="10"
                    value="0123456789"
                    required
                  />
                  <i
                    class="fa fa-edit"
                    id="edit2"
                    onclick="document.getElementById('mobile').style.pointerEvents='auto';document.getElementById('mobile').focus();this.style.display='none'; document.getElementById('check2').style.display='inline-block';"
                  ></i>
                  <i
                    class="fa fa-check"
                    style="display: none"
                    id="check2"
                    onclick="document.getElementById('edit2').style.display='inline-block';document.getElementById('mobile').style.pointerEvents='none';this.style.display='none';"
                  ></i>
                </li>
                <li>
                  <b>Address</b>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    maxlength="250"
                    value="Street, Pincode, Province/State, Country"
                    required
                  />
                  <i
                    class="fa fa-edit"
                    id="edit3"
                    onclick="document.getElementById('address').style.pointerEvents='auto';document.getElementById('address').focus();this.style.display='none'; document.getElementById('check3').style.display='inline-block';"
                  ></i>
                  <i
                    class="fa fa-check"
                    style="display: none"
                    id="check3"
                    onclick="document.getElementById('edit3').style.display='inline-block';document.getElementById('address').style.pointerEvents='none';this.style.display='none';"
                  ></i>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class="section2">
              <h2 style="text-align: left">Completa tus datos</h2>
              <ul>
                <li>
                  <select>
                    <option value="0">Choose a category</option>
                    <option value="fruits">Fruits</option>
                    <option value="groceries">Groceries</option>
                    <option value="vegetables">Vegetables</option>
                  </select>
                </li>
                <li>
                  <label for="productimage">Upload Your Product Picture</label>
                  <input
                    type="file"
                    name="productimage"
                    id="productimage"
                    accept=".jpg,.JPG,.png,.PNG,.jpeg,.JPEG"
                    required
                  />
                </li>
                <li>
                  <label for="title">Product Title</label>
                  <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="eg:Farm Tomoto"
                    maxlength="30"
                    required=""
                  />
                </li>
                <li>
                  <label for="tags">Tags</label>
                  <input
                    type="text"
                    id="tags"
                    name="tags"
                    placeholder="eg:tomoto,brinjal,onions"
                    maxlength="50"
                    required=""
                  />
                </li>

                <li>
                  <label for="description">Description</label>
                  <textarea
                    id="description"
                    name="description"
                    placeholder="Tell something about your product"
                    maxlength="250"
                    required=""
                  ></textarea>
                </li>
              </ul>
              <button class="btn" style="width: 100px">SUBMIT</button>
            </td>
            <td class="inframe">
              <h2>Mascota</h2>
              <div class="card">
                <img src="https://www.mundoperros.es/wp-content/uploads/2018/01/cachorro-1.jpg" alt="NO PREVIEW" />
                <section class="card_content">
                  <h3>Lazy</h3>
                  <ul>
                    <li><b>Published Date: </b>12/05/2021</li>
                    <li>
                      <b>Quantity: </b
                      ><input
                        type="tel"
                        name="updatequantity"
                        id="updatequantity"
                        value="1500"
                        required
                      />
                      <i
                        class="fa fa-edit"
                        id="uedit1"
                        onclick="document.getElementById('updatequantity').style.pointerEvents='auto';document.getElementById('updatequantity').focus();this.style.display='none'; document.getElementById('ucheck1').style.display='inline-block';"
                      ></i>
                      <i
                        class="fa fa-check"
                        style="display: none"
                        id="ucheck1"
                        onclick="document.getElementById('uedit1').style.display='inline-block';document.getElementById('updatequantity').style.pointerEvents='none';this.style.display='none';"
                      ></i>
                    </li>
                    <li><b>Quantity In Supply: </b>300KG</li>
                    <li>
                      <b>Price: </b
                      ><input
                        type="tel"
                        name="updateprice"
                        id="updateprice"
                        value="40"
                        required
                      />
                      <i
                        class="fa fa-edit"
                        id="uedit2"
                        onclick="document.getElementById('updateprice').style.pointerEvents='auto';document.getElementById('updateprice').focus();this.style.display='none'; document.getElementById('ucheck2').style.display='inline-block';"
                      ></i>
                      <i
                        class="fa fa-check"
                        style="display: none"
                        id="ucheck2"
                        onclick="document.getElementById('uedit2').style.display='inline-block';document.getElementById('updateprice').style.pointerEvents='none';this.style.display='none';"
                      ></i>
                    </li>
                  </ul>
                  <button class="btn">UPDATE</button>
                  <button class="btn" style="background: #960c06">
                    DELETE
                  </button>
                </section>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="space-page"></div>
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

/* https://codepen.io/ZEESHAN13/pen/LYzRXxQ */
/* ::::::::::::::::::::: PROFILE :::::::::::::::::::::::::: */

.container_profile {
  width: 90%;
  margin: 10vh auto;
}

.container_profile table {
  width: 100%;
}

.container_profile table td {
  margin: 30px;
  border-radius: 20px;
  box-shadow: 0px 6px 16px -6px rgba(1, 1, 1, 0.5);
  padding: 30px;
  background-color: #7d7d7d;
  color: #fff;
  vertical-align: top;
}

.container_profile table td:nth-child(1) {
  text-align: Center;
}

.container_profile table td:nth-child(2) .fa {
  float: right;
}

.container_profile table td:nth-child(2) input {
  background: none;
  outline: none;
  border: 0;
  color: #fff;
  width: 60%;
  pointer-events: none;
}

.container_profile table td:nth-child(1) section {
  position: relative;
  width: 200px;
  /* height: 200px; */
  margin: 5vh auto;
}

.container_profile table td:nth-child(1) .fa {
  position: absolute;
  right: 25px;
  top: 25px;
  font-size: 2em;
}

.container_profile table td img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
    border: 1px solid;
}

.container_profile table td h3 {
  color: #fff;
  font-weight: normal;
}

.container_profile table .section2 {
  text-align: left;
}

.container_profile table .section2 label {
  display: block;
  margin: 10px 0;
  text-align: left;
}

.container_profile table .section2 select {
  background: #1e1e1e;
  width: 90%;
  padding: 20px;
  border: 0;
  outline: none;
  color: #fff;
}

.container_profile table .section2 input {
  background: #1e1e1e;
  width: 90%;
  padding: 20px;
  color: #fff;
  border: 0;
  outline: none;
}

.container_profile table .section2 .quantityselector {
  height: 80px;
  border-bottom: 0px;
}

.container_profile table .section2 .quantityselector section {
  display: inline-block !important;
  width: 45%;
  margin: 0 10px;
}

.container_profile table textarea {
  width: 90%;
  resize: none;
  outline: none;
  border: 0;
  background: #1e1e1e;
  color: #fff;
  padding: 20px;
}

.container_profile .inframe .card {
  width: 100%;
  height: 40vh;
  position: relative;
  overflow: hidden;
  display: block;
  margin: 10px 0;
}

.container_profile .inframe .card img {
  width: 100%;
  height: 40vh;
  border-radius: 0;
}

.card_content {
  height: 0;
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: rgba(1, 1, 1, 0.8);
  transition: 0.5s;
}

.card_content ul li {
  padding: 5px;
  font-size: 13px;
}

.card_content h3 {
  text-align: Center;
  color: #fff;
}

.inframe .card:hover > .card_content {
  height: 40vh;
}

.card_content .btn {
  font-size: 12px;
  width: 100px;
  display: inline-block;
  margin: 0 10px;
}

@media (max-width: 820px) {
  .container_profile {
    width: 100%;
  }
  .container_profile table td {
    display: block;
    width: 90%;
    margin: 20px;
  }
  .container_profile table .section2 .quantityselector section {
    width: 41%;
    margin: 0px 10px;
  }
  .container_profile table .section2 ul {
    position: relative;
    /* left: -40px; */
  }

}

.alert {
  padding: 20px;
  background-color: #6b8c48;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {
  background-color: #04aa6d;
}
.alert.info {
  background-color: #2196f3;
}
.alert.warning {
  background-color: #ff9800;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>