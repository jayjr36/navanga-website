<style type="text/css">

/*  Multi-Disciplinary Board  */

.hidden {
  display: none;
}

.landingpage {
  margin: 0 auto;
  padding: 0 80px;
  position: relative;
  max-width: 1100px;
  overflow-y: auto;
  overflow-x: hidden;
  color: #000000 !important;
}
.landingpage::before {
  content: "";
  position: absolute;
  width: 123px;
  height: 123px;
  left: 60%;
  top: 138px;
  filter: blur(90px);
  background-color: #FB37FF;
}
.landingpage::after {
  content: "";
  position: absolute;
  width: 123px;
  height: 123px;
  left: 80%;
  top: 550px;
  background-color: #18B2DE;
  filter: blur(80px);
}
.landingpage .navbar_ {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
  width: 100%;
}
.landingpage .box_ {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 80px;
}
.landingpage .auction {
  margin-top: 100px;
}
.landingpage .discover {
  display: flex;
  flex-direction: column;
}
.landingpage ._footer {
  margin: 50px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.landingpage ._footer2 {
  display: flex;
  justify-content: space-between;
  padding-bottom: 30px;
  border-top: 1px solid #F2F2F2;
}

.navbar .hamburgerlogowrap {
  display: flex;
  align-items: center;
}
.navbar .hamburger {
  display: none;
  color: #D7D7D7;
  background-color: #1F1D2B;
  border: none;
  margin-right: 10px;
}
.navbar .createbtn {
  cursor: pointer;
  background-color: transparent;
  border: none;
  width: 126px;
  height: 45px;
  color: #BCBCBC;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
}
.navbar .createbtn.selectedbtn {
  border: 1px solid #D7D7D7;
  border-radius: 10px;
}
.navbar .navlogo {
  height: 100%;
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
}
.navbar .navlink {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #BCBCBC;
}
.navbar .navlink.selectedlink {
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  border-bottom: 1.5px solid #9B51E0;
}
.navbar .navlink:not(:last-child) {
  margin-right: 32px;
}

.box_ .infobox_ {
  animation-name: leftslide;
  animation-duration: 0.8s;
  max-height: 500px;
  max-width: 55%;
  overflow: hidden;
}
.box_ .infobox_-boldtext {
  margin: 0;
  font-family: Poppins;
  color: #FFFFFF;
  font-size: 65px;
  font-weight: 600;
  line-height: 60px;
  letter-spacing: -2px;
  text-align: left;
}
.box_ .infobox_-slimtext {
  margin: 24px 0;
  font-family: Poppins;
  color: #FFFFFF;
  font-size: 16px;
  font-weight: 400;
  line-height: 18px;
  letter-spacing: 0.5px;
  text-align: left;
}
.box_ .infobox_-btnwrapper {
  display: flex;
}
.box_ .infobox_-explorebtn {
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #1F1D2B;
  padding: 8px 38px;
  border-radius: 16px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.box_ .infobox_-createbtn {
  cursor: pointer;
  margin-left: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  padding: 8px 38px;
  border: 1px solid #D7D7D7;
  border-radius: 16px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.box_ .infobox_ .selected_ {
  border: none;
  background: linear-gradient(103.91deg, #9B51E0 21.01%, rgba(48, 129, 237, 0.8) 100%);
}
.box_ .display {
  animation-name: rightslide;
  animation-duration: 0.8s;
  padding: 14px;
  border: 1px solid;
  background: linear-gradient(169.44deg, rgba(58, 129, 191, 0.08) 1.85%, rgba(65, 48, 90, 0.08) 98.72%);
  border-radius: 35px;
  max-height: 450px;
  max-width: 50%;
  overflow: hidden;
}
.box_ .display-nft {
  object-fit: cover;
  flex-shrink: 0;
  width: 300px;
  height: 300px;
  border-radius: 20px;
}
.box_ .display .infowrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 10px;
}
.box_ .display .info {
  display: flex;
  align-items: center;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 600;
  font-size: 12px;
}
.box_ .display .info p {
  margin: 0;
}
.box_ .display .info-img {
  object-fit: cover;
  flex-shrink: 0;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 10px;
}
.box_ .display .info2 {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  font-family: "Poppins";
  color: #FFFFFF;
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
}
.box_ .display .info2 p {
  margin: 0;
}
.box_ .display .info2 .iconwrapper {
  display: flex;
  align-items: center;
}
.box_ .display .info2 .iconwrapper svg {
  margin-right: 5px;
}

.auction .title {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 50px;
}
.auction .title .titlebold {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 48px;
  line-height: 72px;
}
.auction .title .titleslim {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  color: #D7D7D7;
  font-weight: 600;
  font-size: 18px;
  line-height: 36px;
  letter-spacing: -1px;
}
.auction .nft {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-row-gap: 20px;
  grid-column-gap: 20px;
  justify-content: space-between;
}

.started {
  margin-top: 100px;
  display: flex;
  flex-direction: column;
}
.started-boldtext {
  margin: 0;
  align-self: center;
  font-family: "Poppins";
  font-style: normal;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 40px;
  line-height: 72px;
}
.started-slimtext {
  margin: 0;
  align-self: center;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 36px;
  letter-spacing: 0.5px;
  color: #E2E2E2;
}
.started-_items {
  padding: 60px 80px;
  position: relative;
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-column-gap: 20px;
  grid-row-gap: 20px;
  justify-content: space-between;
}
.started-_items:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100px;
  top: 80px;
  filter: blur(80px);
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
}
.started-_items ._itemwrapper p {
  width: 100px;
  margin: 0;
  margin-top: 10px;
  text-align: center;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  color: #FFFFFF;
}
.started-_items-_item {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
  border-radius: 18px;
  background-color: red;
  background: rgba(255, 255, 255, 0.095);
  box-shadow: inset 2.01px -2.01px 20px rgba(214, 214, 214, 0.17), inset -3.01333px 3.01333px 3.01333px rgba(255, 255, 255, 0.39);
  backdrop-filter: blur(74.4293px);
}

.discover-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.discover-title p {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 36px;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.discover-_items {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-row-gap: 20px;
  grid-column-gap: 20px;
  justify-content: space-between;
}
.discover-loadbtn {
  cursor: pointer;
  margin-top: 20px;
  align-self: center;
  width: 161px;
  height: 40px;
  border: 1px solid #D7D7D7;
  border-radius: 10px;
  background-color: transparent;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  letter-spacing: 1.5px;
  color: #BCBCBC;
}

._footer-main {
  max-width: 40%;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 30px;
  line-height: 40px;
  color: #FFFFFF;
}
._footer-navigate {
  display: flex;
}
._footer-navigate .nav {
  margin-left: 60px;
}
._footer-navigate .nav h5 {
  margin: 0;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 30px;
  color: #FFFFFF;
}
._footer-navigate .nav p {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 18px;
  letter-spacing: 0.03em;
  color: #D7D7D7;
}

._footer2 p {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 36px;
  color: #828282;
}

._item {
  display: flex;
  flex-direction: column;
  justify-self: center;
}
._item-img {
  object-fit: cover;
  flex-shrink: 0;
  width: 200px;
  height: 220px;
  border-radius: 10px;
  transition: 0.3s;
  cursor: pointer;
}
._item-img:hover {
  transform: scale(1.05);
}
._item-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid white;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
  line-height: 24px;
  color: #FFFFFF;
}
._item-date {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 24px;
  color: #BCBCBC;
}

.filters {
  display: flex;
  align-items: center;
}
.filters .filter {
  display: flex;
  align-items: center;
  margin-right: 30px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #FFFFFF;
}
.filters .filter svg {
  margin-right: 5px;
  margin-left: 5px;
}
.filters .filterbtn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 30px;
  background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  border: none;
  border-radius: 10px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  color: #FFFFFF;
}
.filters .filterbtn svg {
  margin-right: 5px;
}

@media screen and (max-width: 1500px) {
  .landingpage {
    max-width: 1200px;
  }
}
@media screen and (max-width: 1040px) {
  .box_ {
    flex-direction: column;
  }
  .box_ .infobox_ {
    max-height: 450px;
    max-width: none;
    margin-bottom: 50px;
  }
  .box_ .display {
    display: none;
    max-height: none;
    max-width: none;
  }

  .auction .nft {
    grid-template-columns: auto auto;
    justify-content: space-around;
  }

  .discover-_items {
    grid-template-columns: auto auto auto;
    justify-content: space-around;
  }

  ._footer {
    flex-direction: column;
  }
  ._footer-main {
    max-width: 80%;
    margin-bottom: 50px;
    text-align: center;
  }
  ._footer-navigate .nav:first-child {
    margin: 0;
  }
}
@media screen and (max-width: 925px) {
  .navlinkwrap {
    display: none;
  }

  .buttonwrap {
    display: none;
  }

  .hamburger {
    display: flex !important;
    align-items: center;
  }

  .started-slimtext {
    text-align: center;
  }
}
@media screen and (max-width: 825px) {
  .started-_items {
    display: grid;
    grid-template-columns: auto auto;
    justify-content: space-evenly;
    padding: 50px 0;
  }
  .started-_items:before {
    height: 200px;
    top: 90px;
    filter: blur(120px);
  }

  .discover-_items {
    grid-template-columns: auto auto;
    justify-content: space-around;
  }
}
@media screen and (max-width: 700px) {
  .box_ {
    flex-direction: column;
  }
  .box_ .infobox_ {
    max-height: none;
    max-width: none;
    margin-bottom: 50px;
  }
  .box_ .display {
    display: block;
    max-height: none;
    max-width: none;
  }

  .discover-title {
    justify-content: center;
  }
  .discover-title .filters {
    display: none;
  }

  .auction .title {
    justify-content: center;
  }
  .auction .title .titleslim {
    display: none;
  }
}
@media screen and (max-width: 600px) {
  .landingpage {
    padding: 0 20px;
  }

  .box_ .infobox_-boldtext {
    font-size: 45px;
    line-height: 50px;
  }
  .box_ .infobox_-slimtext {
    font-size: 12px;
    line-height: 16px;
  }

  .discover-_items {
    grid-template-columns: auto;
    justify-content: space-around;
  }

  .auction .nft {
    grid-template-columns: auto;
    justify-content: space-around;
  }

  ._footer-main {
    font-size: 20px;
    line-height: 30px;
    max-width: 100%;
    margin-bottom: 50px;
    text-align: center;
  }

  ._footer-navigate {
    justify-content: space-between;
    width: 100%;
  }
  ._footer-navigate .nav {
    margin-left: 20px;
  }
  ._footer-navigate .nav h5 {
    font-size: 15px;
    line-height: 30px;
  }
  ._footer-navigate .nav p {
    font-size: 10px;
    line-height: 18px;
  }
}
@media screen and (max-width: 480px) {
  .landingpage .box_ .infobox_-boldtext {
    font-size: 32px;
    line-height: 1.4em;
    text-align: center;
  }
  .landingpage .box_ .infobox_-slimtext {
    text-align: center;
  }
  .landingpage .box_ .infobox_-btnwrapper {
    justify-content: center;
  }
}
@keyframes leftslide {
  from {
    transform: translateX(-700px);
  }
  to {
    transform: translateX(0px);
  }
}
@keyframes rightslide {
  from {
    transform: translateX(550px);
  }
  to {
    transform: translateX(0px);
  }
}

/*  Multi-Disciplinary Board  */
/* otpimus */
/* otpimus */
/* otpimus */
:root {
  --d: 700ms;
  --e: cubic-bezier(0.19, 1, 0.22, 1);
  --font-sans: "Rubik", sans-serif;
  --font-serif: "optimus-cardo", serif;
}

* {
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  display: grid;
  place-items: center;
}

.optimus-page-content {
  display: grid;
  grid-gap: 2rem;
  padding: 2rem;
  max-width: 1024px;
  margin: 0 auto;
  font-family: var(--font-sans);
}

@media (min-width: 600px) {
  .optimus-page-content {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 800px) {
  .optimus-page-content {
    grid-template-columns: repeat(4, 1fr);
  }
}

.optimus-card {
  position: relative;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
  padding: 1rem;
  border-radius: 20px;
  width: 100%;
  text-align: center;
  color: whitesmoke;
  background-color: whitesmoke;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
}

.card-overlay {
  background: rgba(0, 0, 0, 0.5) !important;
  position: absolute !important; left: 0; bottom: 0;
  width: 100%; height: 100%;
}

@media (min-width: 600px) {
  .optimus-card {
    height: 350px;
  }
}

.optimus-card:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 110%;
  background-size: cover;
  background-position: 0 0;
  object-fit: cover; /* Add this property */
}

.optimus-card:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 200%;
  pointer-events: none;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.32) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.54) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.79) 100%);
  transform: translateY(-50%);
}

.optimus:nth-child(1) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/free-photo/financial-analyst-with-physical-injury-wearing-medical-neck-collar-office-job-using-cervical-foam-treat-vertebrae-accident-recovering-from-painful-spine-injury-tripod-shot_482257-42460.jpg?w=826&t=st=1692643342~exp=1692643942~hmac=ca06628ee131fe618be7d8ad66a79727044dbfb4d4d48be7177f6669cd8f41c3);
}
.optimus:nth-child(2) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/free-photo/hands-working-with-office-items_1921-177.jpg?w=740&t=st=1692642780~exp=1692643380~hmac=ae6af8a68adc13bd245e93f61b5df4dc57f73fc6f27cfc527a28a43e73a96b34);
}
.optimus:nth-child(3) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/free-photo/doctor-writing-patient-daily-report-exmaination_53876-14934.jpg?w=740&t=st=1692642892~exp=1692643492~hmac=9d9fab6709cb702a2b6fb6b90f52962f10bd080e80945fe4ed846c4cf159413d);
}
.optimus:nth-child(4) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
    background-image: url(https://img.freepik.com/premium-photo/basket-full-vegetables_1112-316.jpg?w=740&t=st=1691530215~exp=1691530815~hmac=477116640c4e10ebb6ee341d3516357a45db4f2228d77f6f12799c58b47c0f03);
}
.optimus:nth-child(5) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/premium-photo/senior-man-volunteer-nurse-support-caregiver-help-with-elderly-medical-nursing-home-smile-happy-trust-community-employee-working-healthcare-charity-house-interior-living-room_590464-85939.jpg?w=740);
}
.optimus:nth-child(6) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/free-photo/front-view-medical-control-covid19-concept_23-2148777441.jpg?w=740&t=st=1692470440~exp=1692471040~hmac=ee13b19dc67482395a1b25a845317b86df04148a81ff1664bc8153c89d4d0843);
}
.optimus:nth-child(7) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
  background-image: url(https://img.freepik.com/free-vector/money-saving-concept_52683-8913.jpg?w=740&t=st=1692643000~exp=1692643600~hmac=5a656f4d5b9841934a6e358f2602a8fa41bd7a02ab4442b67c8da7330a5af140);
}
.optimus:nth-child(8) .optimus-card:before {
    background-size: cover !important; /* Add this property */
  background-position: center !important; /* Add this property */
    background-image: url(https://img.freepik.com/free-vector/medical-design-poster-with-original-medicinal-capsule-consisting-green-blue-parts-leaves-as-life-symbol-illustration_1284-53606.jpg?w=740&t=st=1692467129~exp=1692467729~hmac=28d62cf8ea3dd7dbe002a986216056a14297b4893cc73dd7f3b27d8031438375);
}


.optimus-card .optimus-content {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  padding: 1rem;
  z-index: 1;
}

.optimus-card .optimus-content > * + * {
  margin-top: 1rem;
}

.optimus-title {
  font-size: 1.8rem;
  font-weight: bold;
  line-height: 1.2;
}

.optimus-copy {
  font-family: var(--font-serif);
  font-size: 1.125rem;
  font-style: italic;
  line-height: 1.35;
}

.optimus-btn {
  cursor: pointer;
  margin-top: 1.5rem;
  padding: 0.75rem 1.5rem;
  font-size: 0.65rem;
  font-weight: bold;
  letter-spacing: 0.025rem;
  text-transform: uppercase;
  color: white;
  background-color: black;
  border: none;
}

.optimus-btn:hover {
  background-color: #0d0d0d;
}

.optimus-btn:focus {
  outline: 1px dashed yellow;
  outline-offset: 3px;
}

/* otpimus */
/* otpimus */
/* otpimus */
    /* Fonts */
    body,
    article,
    a,
    div,
    span,
    button, .optimus-title, .card-overlay,
    p {
        font-family: 'Gowun Batang', sans-serif !important;
    }

    .otpPreCon input {
        color: white !important;
    }

    .justified {
        text-align: justify !important;
        text-justify: inter-character !important;
    }

    .v-dialog,
    .v-dialog--active,
    .v-dialog--fullscreen {
        border-radius: 0px !important;
    }

    #mouse-scroll {
        /* position: fixed; */
        position: absolute;
        /*             height: 35px;
            width: 20px;
            border-radius: 10px;
            border: 2px solid var(--white); */
        bottom: 10%;
        left: 50%;

        margin: auto;
        left: 85%;
        top: 480px;
        -webkit-transform: translateX(-50%);

    }

    #mouse-scroll span {
        display: block;
        width: 10px;
        height: 10px;
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        transform: rotate(45deg);
        border-right: 2px solid #0450fb;
        border-bottom: 2px solid #0450fb;
        margin: 0 0 3px 5px;
    }

    #mouse-scroll .mouse {
        height: 26px;
        width: 19px;
        border-radius: 10px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
        border: 2px solid #0450fb;
        top: 0px;
    }

    #mouse-scroll .down-arrow-1 {
        margin-top: 6px;
    }

    #mouse-scroll .down-arrow-1,
    #mouse-scroll .down-arrow-2,
    #mouse-scroll .down-arrow-3 {
        animation: mouse-scroll 1s infinite;
        -webkit-animation: mouse-scroll 1s infinite;
        -moz-animation: mouse-scroll 1s infinite:
    }

    #mouse-croll .down-arrow-1 {
        animation-delay: .1s;
        -webkit-animation-delay: .1s;
        -moz-animation-delay: .1s;
        animation-direction: alternate;
        -webkit-animation-direction: alternate;
    }

    #mouse-scroll .down-arrow-2 {
        animation-delay: .2s;
        -webkit-animation-delay: .2s;
        -moz-animation-delay: .2s;
        animation-direction: alternate;
        -webkit-animation-direction: alternate;
    }

    #mouse-scroll .down-arrow-3 {
        animation-delay: .3s;
        -webkit-animation-delay: .3s;
        -moz-animation-dekay: .3s;
        animation-direction: alternate;
        -webkit-animation-direction: alternate;
    }

    #mouse-scroll .mouse-in {
        height: 5px;
        width: 2px;
        display: block;
        margin: 5px auto;
        background: #0450fb;
        position: relative;
    }

    #mouse-scroll .mouse-in {
        -webkit-animation: animated-mouse 1.2s ease infinite;
        /* -moz-animation: mouse-animated 1.2s ease infinite; */
    }

    @-webkit-keyframes animated-mouse {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(6px);
            -ms-transform: translateY(6px);
            transform: translateY(6px);
        }
    }

    @-webkit-keyframes mouse-scroll {
        0% {
            opacity: 1;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes mouse-scroll {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }


    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap");

    .s3-hover:hover {
        transition: all 0.5s ease-out;
        -webkit-animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
        animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
    }

    .mdi-chevron-down::before,
    .mdi-chevron-up::before {
        font-weight: bold !important;
        font-size: 28px !important;
        color: black !important;
    }

    html {
        overflow-y: hidden !important;

    }

    .glassmorph-effect {
        background: rgba(255, 255, 255, 0.3) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37) !important;
        backdrop-filter: blur(4px) !important;
        -webkit-backdrop-filter: blur(4px) !important;
        ;
        border-radius: 10px !important;
        ;
        border: 1px solid rgba(255, 255, 255, 0.18) !important;
    }

    .glassmorph {
        padding: 4rem;
        background: rgba(255, 255, 255, 0.3) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37) !important;
        backdrop-filter: blur(4px) !important;
        -webkit-backdrop-filter: blur(4px) !important;
        ;
        border-radius: 10px !important;
        ;
        border: 1px solid rgba(255, 255, 255, 0.18) !important;
    }

    .bg-navanga {
        background-color: #0450fb !important;
    }

    .text-white {
        color: white !important;
    }

    .text-black {
        color: black !important;
    }

    .mdi-close::before {
        font-weight: bold !important;
        font-size: 18px !important;
        color: crimson !important;
    }

    .text-shadow {
        text-shadow: 1px 1px 2px #000000 !important
    }

    .glass {
        /* From https://css.glass */

        text-shadow: 2px 2px rgba(0, 0, 0, 0.01);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

/* nutrition */
figure {
  --c: 50px !important;
  --p: 30px !important;
  --d: 10px !important;
  background: red;
  display: inline-block !important;
  padding: var(--p) !important;
  background:
    radial-gradient(farthest-side at 0 0, #000, #0000) 0 0 / var(--c) var(--c),
    radial-gradient(farthest-side at 100% 100%, #000, #0000) 100% 100% / var(--c) var(--c),
    linear-gradient(#fff 0 0) 50% 50% / calc(100% - var(--p)) calc(100% - var(--p)),
    linear-gradient(#0000, #000 25% 75%, #0000) 50% 50% / calc(100% - var(--p)) calc(100% - var(--d)),
    linear-gradient(90deg, #0000, #000 25% 75%, #0000) 50% 50% / calc(100% - var(--d)) calc(100% - var(--p)),
    radial-gradient(farthest-side at 0 100%, rgba(0, 0, 0, 0.09), #0000) calc(100% - var(--d) * 0.5) calc(var(--d) * 0.5) / var(--d) var(--d),
    radial-gradient(farthest-side at 100% 0, rgba(0, 0, 0, 0.09), #0000) calc(var(--d) * 0.5) calc(100% - var(--d) * 0.5) / var(--d) var(--d);
  background-repeat: no-repeat;
  clip-path: polygon(0 var(--c), var(--c) 0, 100% 0, 100% calc(100% - var(--c)), calc(100% - var(--c)) 100%, 0 100%) !important;
}

figure:nth-of-type(1) img {
  width: 300px;
}

figure:nth-of-type(2) img {
  width: 300px !important;
  height: 200px !important;
}

figure:nth-of-type(3) img {
  width: 300px;
  aspect-ratio: 1;
}

.nutrition {
  background:
    repeating-linear-gradient(30deg, #fff2 0 10%, #fff0 0 24%) ,
    repeating-linear-gradient(-23deg, #fff2 0 4%, #fff0 0 14%) white !important;
}

img {
  object-fit: cover;
}
/* nutrition ends */


    .text-navanga {
        color: #0450fb !important;
        cursor: pointer !important;
        font-weight: bolder !important;
        transition: all ease-in-out !important;
    }

    /* Original styles with transition */
    .text-navanga-hover {
        color: #ffffff !important;
        cursor: pointer !important;
        padding: 8px 12px !important;
        border-radius: 20px !important;
        background-color: transparent;
        transition: all 0.8s cubic-bezier(0.25, 0.1, 0.25, 1) !important;
        /* Apply cubic-bezier here */
    }

    .text-navanga-hover:hover {
        color: #0450fb !important;
        cursor: pointer !important;
        padding: 8px 12px !important;
        border-radius: 20px !important;
        background-color: #000000 !important;
        transition: all 0.8s cubic-bezier(0.25, 0.1, 0.25, 1) !important;
        /* Apply cubic-bezier here */
    }


    /*  .text-navanga:hover {
        color: #000011 !important;
    } */

    .shadeless {

        box-shadow: none !important;


    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .headerImg {
        background-image: url("img/beautiful woman.png");
        /* The image used */

        /* Used if the image is unavailable */
        /* You must set a specified height */
        background-position: top;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: 100% 110%;
        /* Resize the background image to cover the entire container */
    }

    .loginPageBg {
        background-image: url("img/nvnbg.png");
        /* The image used */
        background-color: #cccccc;
        /* Used if the image is unavailable */
        /* You must set a specified height */
        background-position: top;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: 100% 50%;
        /* Resize the background image to cover the entire container */
    }

    .pulse {
        box-shadow: 0 0 0 rgba(44, 44, 44, 0.4);
        animation: pulse 1s infinite;
    }

    .blueLin {
        background: linear-gradient(90deg, #0072ff 0%, #00d4ff 100%);
        color: white !important;
    }

    .qExcess .v-input__slot {
        border: 2px solid red !important;
        border-radius: 4px !important;
        background-color: rgba(255, 230, 230, 0.4) !important;
        color: white !important;
    }

    .serviceHeader>.v-data-table-header>tr>th {
        padding-top: 16px !important;
    }

    .serviceHeaderMin .v-data-table-header th {
        padding-top: 16px !important;
    }

    .v-dialog {
        /* border-radius: 21px !important; */
    }
.rounded-md {
    border-radius: 16px !important;
}
    .patientsHeader .v-data-table-header th,
    .medsHeader .v-data-table-header th {
        padding-top: 16px !important;
    }

    .patientsHeader .v-data-table-header th:nth-child(3) span,
    .patientsHeader .v-data-table-header th:nth-child(4) span {
        padding: 8px !important;
    }

    .patientsHeader .v-data-table-header th:last-child,
    .medsHeader .v-data-table-header th:last-child {
        background: #000 linear-gradient(-45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent) !important;
        background-size: 20px 20px !important;
        color: #ffffff !important;
    }

    .patientsHeader .v-data-table .v-data-table__wrapper table tbody tr td,
    .serviceHeader .v-data-table .v-data-table__wrapper table tbody tr td,
    .medsHeader .v-data-table .v-data-table__wrapper table tbody tr td,
    .serviceHeaderMin .v-data-table__wrapper table tbody tr td {
        padding-top: 12px !important;
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
        }

        70% {
            -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
            box-shadow: 0 0 0 0 rgba(44, 44, 44, 0.4);
        }

        70% {
            -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

    .s3-transition {
        transition: all 0.5s ease-out;
    }

    @-webkit-keyframes s3-rotate {
        from {
            -webkit-transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(359deg);
        }
    }

    @-webkit-keyframes s3-opacity {
        0% {
            opacity: 1;
        }

        25% {
            opacity: 0.4;
        }

        50% {
            opacity: 0.6;
        }

        75% {
            opacity: 0.9;
        }

        100% {
            opacity: 0.1;
        }
    }

    @keyframes s3-opacity {
        0% {
            opacity: 1;
        }

        25% {
            opacity: 0.4;
        }

        50% {
            opacity: 0.6;
        }

        75% {
            opacity: 0.9;
        }

        100% {
            opacity: 0.5;
        }
    }

    html,
    body {
        width: 100%;
        height: 100%;
    }

    #input-43 {
        border-radius: 4px !important;
        background-color: rgba(255, 250, 250, 1) !important;
        color: white !important;
        padding: 16px !important;
        color: #000 !important;
    }

    .v-text-field--single-line .v-input__slot {
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, .7),
            inset -2px -2px 4px rgba(255, 255, 255, .5),
            inset 2px 2px 2px rgba(255, 255, 255, .075),
            inset 2px 2px 4px rgba(0, 0, 0, .15) !important;
        border-radius: 12px !important;
    }

    .neoButton {
        box-shadow: -2px -2px 6px rgba(255, 255, 255, .6),
            -2px -2px 4px rgba(255, 255, 255, .4),
            2px 2px 2px rgba(255, 255, 255, .05),
            2px 2px 4px rgba(0, 0, 0, .1);
        border-radius: 8px;
    }

    .neoButton:active {
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, .7),
            inset -2px -2px 4px rgba(255, 255, 255, .5),
            inset 2px 2px 2px rgba(255, 255, 255, .075),
            inset 2px 2px 4px rgba(0, 0, 0, .15);
    }

    .circle-ripple {
        background-color: rgba(255, 255, 255, 0.8);
        width: 1em;
        height: 1em;
        border-radius: 100px;
        -webkit-animation: ripple 1.7s linear infinite;
        animation: ripple 1.7s linear infinite;
    }

    @-webkit-keyframes ripple {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3), 0 0 0 1em rgba(255, 255, 255, 0.3), 0 0 0 3em rgba(255, 255, 255, 0.3), 0 0 0 5em rgba(255, 255, 255, 0.3);
        }

        100% {
            box-shadow: 0 0 0 1em rgba(255, 255, 255, 0.3), 0 0 0 3em rgba(255, 255, 255, 0.3), 0 0 0 5em rgba(255, 255, 255, 0.3), 0 0 0 8em rgba(255, 255, 255, 0);
        }
    }

    @keyframes ripple {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.3), 0 0 0 1em rgba(255, 255, 255, 0.3), 0 0 0 3em rgba(255, 255, 255, 0.3), 0 0 0 5em rgba(255, 255, 255, 0.3);
        }

        100% {
            box-shadow: 0 0 0 1em rgba(255, 255, 255, 0.3), 0 0 0 3em rgba(255, 255, 255, 0.3), 0 0 0 5em rgba(255, 255, 255, 0.3), 0 0 0 8em rgba(255, 255, 255, 0);
        }
    }

    .shadowNone {
        box-shadow: -4px -2px 4px 0px transparent, 4px 2px 6px 0px transparent !important;
    }

    .s3-border-dot-red {
        border: dotted 5px #ce352c !important;
    }

    .s3-border-dot-blue {
        border: dotted 5px #3ecbff !important;
    }

    .s3-border-double-red {
        border: double 5px #ce352c !important;
    }

    .s3-border-double-blue {
        border: double 5px #3ecbff !important;
    }

    .create-with-confidence {
        background: rgb(236, 0, 89) !important;
        background: linear-gradient(90deg, rgba(236, 0, 89, 1) 0%, rgba(107, 0, 96, 1) 100%) !important;
        color: #fff !important;
        /* box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA !important; */
    }

    .metroPicker {
        border-radius: 10px !important;
        padding: 5px !important;
        height: 47px !important;
    }



    .shimmerBTN:hover:after {
        opacity: 1;
        top: 0;
        left: 0;
        transform: translateX(0);
        transition-property: transform, opacity;
        transition-duration: 0.7s, 0.15s;
        transition-timing-function: ease;
    }

    .shimmer {
        color: grey;
        /* display: inline-block; */
        -webkit-mask: linear-gradient(-60deg, #000 10%, #0005, #000 70%) right/300% 100%;
        background-repeat: no-repeat;
        animation: shimmer 6.5s ease-in-out infinite;
        /* font-size: 50px; */

    }

    .shimmerNext {
        color: grey;
        /* display: inline-block; */
        -webkit-mask: linear-gradient(-60deg, #000 10%, #0005, #000 70%) right/300% 100%;
        background-repeat: no-repeat;
        animation: shimmer 10.5s ease-in-out infinite;
        /* font-size: 50px; */

    }

    @keyframes shimmer {
        100% {
            -webkit-mask-position: left
        }

        50% {
            -webkit-mask-position: left
        }

        10% {
            -webkit-mask-position: left
        }
    }

    @keyframes shimmerNext {
        100% {
            -webkit-mask-position: left
        }

        50% {
            -webkit-mask-position: left
        }

        10% {
            -webkit-mask-position: left
        }
    }

    .transP,
    #app {
        background: transparent !important;
    }

    .bodyGrad,
    .v-menu__content {
        background: linear-gradient(-45deg, #fff, #f2f2f2, #fff, #f2f2f2);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA !important;
        border-radius: 15px !important;

    }

    .bodyGradLight {
        background: linear-gradient(-45deg, rgba(255, 255, 255, 0.2), rgba(242, 242, 242, 0.2), rgba(255, 255, 255, 0.2), rgba(242, 242, 242, 0.2));
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        box-shadow: -4px -2px 4px 0px rgba(255, 255, 255, 0.5), 4px 2px 6px 0px rgba(223, 228, 234, 0.3) !important;
        border-radius: 15px !important;

    }

    @media screen and (max-width: 600px) {
        .hide-sm {
            display: none;
        }
    }

    .bodyGradDark,
    .footer_ {
        background: linear-gradient(-45deg, rgba(0, 0, 255, 0.5), rgba(3, 3, 3, 0.5), rgba(0, 0, 0, 0.5), rgba(3, 3, 3, 0.5));
        background-size: 400% 400%;
        height: 200% !important;
        animation: gradient 15s ease infinite;
        box-shadow: -4px -2px 4px 0px rgba(0, 0, 0, 0.5), 4px 2px 6px 0px rgba(4, 4, 4, 0.5) !important;

    }

    .otp .v-input__slot {
        box-shadow: inset 3px 3px 7px rgba(136, 165, 191, 0.48), inset -3px -3px 7px #FFFFFF !important;
        border-radius: 8px !important;
    }

    .otpPre .v-input__slot {
        background: transparent !important;
    }

    .v-input__slot::before {
        display: none !important;
    }

    .pl {
        display: block;
        width: 6.25em;
        height: 6.25em;
    }

    .pl__ring,
    .pl__ball {
        animation: ring 2s ease-out infinite;
    }

    .pl__ball {
        animation-name: ball;
    }

    /* Dark theme  */
    @media (prefers-color-scheme: dark) {
        :root {
            --bg: hsl(var(--hue), 10%, 10%);
            --fg: hsl(var(--hue), 10%, 90%);
        }
    }

    /* Animation */
    @keyframes ring {
        from {
            stroke-dasharray: 0 257 0 0 1 0 0 258;
        }

        25% {
            stroke-dasharray: 0 0 0 0 257 0 258 0;
        }

        50%,
        to {
            stroke-dasharray: 0 0 0 0 0 515 0 0;
        }
    }

    @keyframes ball {

        from,
        50% {
            animation-timing-function: ease-in;
            stroke-dashoffset: 1;
        }

        64% {
            animation-timing-function: ease-in;
            stroke-dashoffset: -109;
        }

        78% {
            animation-timing-function: ease-in;
            stroke-dashoffset: -145;
        }

        92% {
            animation-timing-function: ease-in;
            stroke-dashoffset: -157;
        }

        57%,
        71%,
        85%,
        99%,
        to {
            animation-timing-function: ease-out;
            stroke-dashoffset: -163;
        }
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .redPlay {
        background: #D31027 !important;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #EA384D, #D31027) !important;
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #EA384D, #D31027) !important;
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .dayTripper {
        background: #f857a6 !important;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ff5858, #f857a6) !important;
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ff5858, #f857a6) !important;
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .parkLife {
        background: #ADD100 !important;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #7B920A, #ADD100) !important;
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #7B920A, #ADD100) !important;
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .aquaMarine {
        background: #1A2980 !important;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #26D0CE, #1A2980) !important;
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #26D0CE, #1A2980) !important;
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .s3-dotted {
        width: 50px;
        height: 50px;
        margin: auto;
        border-radius: 100px;

        transition: all 0.5s ease-out;
        -webkit-animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
        animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;


    }

    .s3-dotted:hover {
        transition: all 0.5s ease-out;
        -webkit-animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
        animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
    }

    .s3-dotted:hover {
        border: dotted 5px white;
    }

    .neoNav {
        box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA !important;
    }

    .s3-dashed {
        width: 50px;
        height: 50px;
        margin: auto;
        border-radius: 100px;

        transition: all 0.6s ease-out;
        -webkit-animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
        animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
    }

    .s3-dashed:hover {
        transition: all 0.5s ease-out;
        -webkit-animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
        animation: s3-rotate 5s infinite linear, s3-opacity 5s infinite;
    }

    .s3-dashed:hover {
        border: dashed 5px white;
    }

    .continue-application {
        --color: #fff;
        --background: #404660;
        --background-hover: #3A4059;
        --background-left: #2B3044;
        --folder: #F3E9CB;
        --folder-inner: #BEB393;
        --paper: #FFFFFF;
        --paper-lines: #BBC1E1;
        --paper-behind: #E1E6F9;
        --pencil-cap: #fff;
        --pencil-top: #275EFE;
        --pencil-middle: #fff;
        --pencil-bottom: #5C86FF;
        --shadow: rgba(13, 15, 25, .2);
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 500;
        line-height: 19px;
        -webkit-appearance: none;
        -webkit-tap-highlight-color: transparent;
        padding: 17px 29px 17px 69px;
        transition: background 0.3s;
        color: var(--color);
        background: var(--bg, var(--background));
    }

    .continue-application>div {
        top: 0;
        left: 0;
        bottom: 0;
        width: 53px;
        position: absolute;
        overflow: hidden;
        border-radius: 5px 0 0 5px;
        background: var(--background-left);
    }

    .continue-application>div .folder {
        width: 23px;
        height: 27px;
        position: absolute;
        left: 15px;
        top: 13px;
    }

    .continue-application>div .folder .top {
        left: 0;
        top: 0;
        z-index: 2;
        position: absolute;
        transform: translateX(var(--fx, 0));
        transition: transform 0.4s ease var(--fd, 0.3s);
    }

    .continue-application>div .folder .top svg {
        width: 24px;
        height: 27px;
        display: block;
        fill: var(--folder);
        transform-origin: 0 50%;
        transition: transform 0.3s ease var(--fds, 0.45s);
        transform: perspective(120px) rotateY(var(--fr, 0deg));
    }

    .continue-application>div .folder:before,
    .continue-application>div .folder:after,
    .continue-application>div .folder .paper {
        content: "";
        position: absolute;
        left: var(--l, 0);
        top: var(--t, 0);
        width: var(--w, 100%);
        height: var(--h, 100%);
        border-radius: 1px;
        background: var(--b, var(--folder-inner));
    }

    .continue-application>div .folder:before {
        box-shadow: 0 1.5px 3px var(--shadow), 0 2.5px 5px var(--shadow), 0 3.5px 7px var(--shadow);
        transform: translateX(var(--fx, 0));
        transition: transform 0.4s ease var(--fd, 0.3s);
    }

    .continue-application>div .folder:after,
    .continue-application>div .folder .paper {
        --l: 1px;
        --t: 1px;
        --w: 21px;
        --h: 25px;
        --b: var(--paper-behind);
    }

    .continue-application>div .folder:after {
        transform: translate(var(--pbx, 0), var(--pby, 0));
        transition: transform 0.4s ease var(--pbd, 0s);
    }

    .continue-application>div .folder .paper {
        z-index: 1;
        --b: var(--paper);
    }

    .continue-application>div .folder .paper:before,
    .continue-application>div .folder .paper:after {
        content: "";
        width: var(--wp, 14px);
        height: 2px;
        border-radius: 1px;
        transform: scaleY(0.5);
        left: 3px;
        top: var(--tp, 3px);
        position: absolute;
        background: var(--paper-lines);
        box-shadow: 0 12px 0 0 var(--paper-lines), 0 24px 0 0 var(--paper-lines);
    }

    .continue-application>div .folder .paper:after {
        --tp: 6px;
        --wp: 10px;
    }

    .continue-application>div .pencil {
        height: 2px;
        width: 3px;
        border-radius: 1px 1px 0 0;
        top: 8px;
        left: 105%;
        position: absolute;
        z-index: 3;
        transform-origin: 50% 19px;
        background: var(--pencil-cap);
        transform: translateX(var(--pex, 0)) rotate(35deg);
        transition: transform 0.4s ease var(--pbd, 0s);
    }

    .continue-application>div .pencil:before,
    .continue-application>div .pencil:after {
        content: "";
        position: absolute;
        display: block;
        background: var(--b, linear-gradient(var(--pencil-top) 55%, var(--pencil-middle) 55.1%, var(--pencil-middle) 60%, var(--pencil-bottom) 60.1%));
        width: var(--w, 5px);
        height: var(--h, 20px);
        border-radius: var(--br, 2px 2px 0 0);
        top: var(--t, 2px);
        left: var(--l, -1px);
    }

    .continue-application>div .pencil:before {
        -webkit-clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
        clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
    }

    .continue-application>div .pencil:after {
        --b: none;
        --w: 3px;
        --h: 6px;
        --br: 0 2px 1px 0;
        --t: 3px;
        --l: 3px;
        border-top: 1px solid var(--pencil-top);
        border-right: 1px solid var(--pencil-top);
    }

    .continue-application:before,
    .continue-application:after {
        content: "";
        position: absolute;
        width: 10px;
        height: 2px;
        border-radius: 1px;
        background: var(--color);
        transform-origin: 9px 1px;
        transform: translateX(var(--cx, 0)) scale(0.5) rotate(var(--r, -45deg));
        top: 26px;
        right: 16px;
        transition: transform 0.3s;
    }

    .continue-application:after {
        --r: 45deg;
    }

    .continue-application:hover {
        --cx: 2px;
        --bg: var(--background-hover);
        --fx: -40px;
        --fr: -60deg;
        --fd: .15s;
        --fds: 0s;
        --pbx: 3px;
        --pby: -3px;
        --pbd: .15s;
        --pex: -24px;
    }

    .mutedB {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .mutedW {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    .box-container {
        margin: 0px auto;
        padding: 0px;
        max-width: 70%;
        display: grid;
        grid-template-columns: auto auto auto;
        grid-auto-flow: row dense;
        list-style: none;
        position: relative;
    }

    .box-container::before,
    .box-container::after {
        content: "";
        width: 2px;
        height: 100%;
        background-color: #fff;
        position: absolute;
        right: calc(100% + 9px);
        top: 0;
        display: block;
    }

    .box-container::after {
        left: calc(100% + 9px);
        right: auto;
    }

    .box-container li {
        position: relative;
    }

    .box-container li>div {
        padding: 15px;
        display: flex;
        display: -webkit-flex;
        align-items: center;
        height: 100%;
    }

    .softB {
        background-color: rgba(250, 250, 250, 0.1) !important;
    }

    .box-container li>div>div {
        padding: 20px;
        border: 1px solid rgba(100, 100, 100, 0.1) !important;
        ;
        position: relative;
        display: flex;
        display: -webkit-flex;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }

    .box-container li>div>div,
    .box-container li>div>div>div {
        border-radius: 8px;
        -webkit-border-radius: 8px;
    }

    .box-container li>div::before {
        content: "";
        width: 4px;
        height: 50%;
        position: absolute;
        top: 0px;
        left: calc(100% + 9px);
        display: block;
        z-index: 1;
    }

    .box-container li:nth-child(6n + 3)>div::before,
    .box-container li:nth-child(6n + 4)>div::before,
    .box-container li:nth-child(6n + 6)>div::before,
    .box-container li:nth-child(6n + 1)>div::before {
        background-color: rgba(100, 100, 100, 0.1) !important;
    }

    .box-container li:nth-child(6n + 4)>div::before {
        top: 50%;
    }

    .box-container li:nth-child(6n + 6)>div::before,
    .box-container li:nth-child(6n + 1)>div::before {
        left: auto;
        right: calc(100% + 9px);
    }

    .box-container li:nth-child(6n + 1)>div::before {
        top: 50%;
    }

    .box-container li:nth-child(6n + 1):first-child>div::before,
    .box-container li:nth-child(6n + 6):last-child>div::before,
    .box-container li:nth-child(6n + 3):last-child>div::before {
        top: 0px;
        height: 100%;
    }

    .box-container li>div>div>div {
        padding: 20px;
        background: rgb(25, 168, 248);
        background: linear-gradient(45deg,
                rgba(25, 168, 248, 1) 0%,
                rgba(0, 0, 70, 1) 100%);
        text-align: center;
        font-size: 16px;
        line-height: 22px;
        color: #fff;
        font-weight: 600;
    }

    .box-container li>div>div>div:not(:last-child) {
        margin-bottom: 10px;
    }

    .box-container li::before,
    .box-container li:nth-child(6n + 7)::after,
    .box-container li:nth-child(6n + 6)::after {
        content: "⇐";
        font-family: "FontAwesome";
        position: absolute;
        left: calc(100% - 7px);
        top: 50%;
        transform: translateY(-50%) rotate(180deg);
        display: block;
        color: black !important;
    }

    .box-container li:nth-child(6n + 4) {
        grid-column-start: 3;
        grid-column-end: 3;
    }

    .box-container li:nth-child(6n + 5) {
        grid-column-start: 2;
        grid-column-end: 2;
    }

    .box-container li:nth-child(6n + 6) {
        grid-column-start: 1;
        grid-column-end: 1;
    }

    .box-container li:nth-child(6n + 4)::before,
    .box-container li:nth-child(6n + 6)::after {
        transform: translateY(-50%) rotate(0deg);
    }

    .box-container li:nth-child(6n + 5)::before {
        transform: translateY(-50%) rotate(0deg);
    }

    .box-container li:nth-child(6n + 6)::before {
        transform: translateY(-50%) rotate(0deg);
    }

    .box-container li:nth-child(6n + 7)::after,
    .box-container li:nth-child(6n + 6)::after {
        right: calc(100% - 7px);
        left: auto;
    }

    .box-container li:nth-child(6n + 6):last-child:after,
    .box-container li:nth-child(1):last-child:before,
    .box-container li:nth-child(2):last-child:before,
    .box-container li:nth-child(3):last-child:before,
    .box-container li:nth-child(6n + 9):last-child:before,
    .box-container li:nth-child(6n + 7):last-child:before,
    .box-container li:nth-child(6n + 2):last-child:before {
        content: none;
    }

    .box-container li.before-none:before,
    .box-container li.before-none:after {
        content: "";
        width: 20px;
        height: 20px;
        background-color: black;
    }

    .box-container li.before-none:after {
        position: absolute;
        top: 50%;
        right: calc(100% - 9px);
        transform: translateY(-50%);
        display: block;
    }

    /* media query start */
    @media (min-width: 992px) and (max-width: 1199px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .container {
            width: 720px;
        }

        .box-container {
            max-width: 100%;
        }

        .box-container li:nth-child(6n + 6)>div::before,
        .box-container li:nth-child(6n + 1)>div::before {
            left: auto;
            right: calc(100% + 8px);
        }

        .box-container li>div::before {
            left: calc(100% + 8px);
        }
    }

    @media (max-width: 767px) {
        .container {
            width: 100%;
        }

        .box-container {
            max-width: 90%;
            display: block;
        }

        .box-container li>div {
            height: auto;
        }

        .box-container::before,
        .box-container::after {
            content: none;
        }

        .box-container li::before,
        .box-container li:nth-child(6n + 7)::after,
        .box-container li:nth-child(6n + 4)::before,
        .box-container li:nth-child(6n + 6)::after,
        .box-container li:nth-child(6n + 5)::before,
        .box-container li:nth-child(6n + 6)::before {
            left: 50%;
            transform: translateX(-50%) rotate(-90deg);
            -webkit-transform: translateX(-50%) rotate(-90deg);
            top: auto;
            bottom: -10px;
        }

        .box-container li:nth-child(6n + 6)::after,
        .box-container li:nth-child(6n + 7)::after,
        .box-container li:nth-child(6n + 6):last-child:before {
            content: none;
        }
    }

    .blob {
        background: black;
        border-radius: 50%;
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
        margin: 10px;
        height: 10px;
        width: 10px;
        transform: scale(1);
        animation: pulse-black 2s infinite;
    }

    @keyframes pulse-black {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }
    }

    .blob.white {
        background: white;
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 1);
        animation: pulse-white 2s infinite;
    }

    @keyframes pulse-white {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    .blob.red {
        background: rgba(255, 82, 82, 1);
        box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
        animation: pulse-red 2s infinite;
    }

    @keyframes pulse-red {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 82, 82, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
        }
    }

    .blob.orange {
        background: rgba(255, 121, 63, 1);
        box-shadow: 0 0 0 0 rgba(255, 121, 63, 1);
        animation: pulse-orange 2s infinite;
    }

    @keyframes pulse-orange {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 121, 63, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 121, 63, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 121, 63, 0);
        }
    }

    .blob.yellow {
        background: rgba(255, 177, 66, 1);
        box-shadow: 0 0 0 0 rgba(255, 177, 66, 1);
        animation: pulse-yellow 2s infinite;
    }

    @keyframes pulse-yellow {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 177, 66, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 177, 66, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 177, 66, 0);
        }
    }

    .blob.blue {
        background: rgba(52, 172, 224, 1);
        box-shadow: 0 0 0 0 rgba(52, 172, 224, 1);
        animation: pulse-blue 2s infinite;
    }

    @keyframes pulse-blue {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(52, 172, 224, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(52, 172, 224, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(52, 172, 224, 0);
        }
    }

    .blob.green {
        background: rgba(51, 217, 178, 1);
        box-shadow: 0 0 0 0 rgba(51, 217, 178, 1);
        animation: pulse-green 2s infinite;
    }

    @keyframes pulse-green {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(51, 217, 178, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0);
        }
    }

    .blob.purple {
        background: rgba(142, 68, 173, 1);
        box-shadow: 0 0 0 0 rgba(142, 68, 173, 1);
        animation: pulse-purple 2s infinite;
    }

    @keyframes pulse-purple {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(142, 68, 173, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(142, 68, 173, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(142, 68, 173, 0);
        }
    }


    /* DNA Animation */

    .blueprint {
        min-width: 470px;
        height: 100px;
        position: relative;
    }

    .blueprint * {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .blueprint .dot1 {
        content: '';
        position: absolute;
        width: 100%;
        top: -25%;
        left: 0;
        height: 150%;
        z-index: 3;
        background: linear-gradient(to right, #fff, transparent 25%, transparent 75%, #fff);
        -webkit-transform: translateZ(100px);
        transform: translateZ(100px);
    }

    .blueprint .bar {
        width: 2px;
        height: 100%;
        position: absolute;
        background: #fff;
        background-size: 10px 20px;
        top: 0;
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        -webkit-animation: grow 8s linear infinite;
        animation: grow 8s linear infinite;
        will-change: transform;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .blueprint .bar:nth-of-type(1) .dot1,
    .blueprint .bar:nth-of-type(1) .dot2 {
        width: calc(10px + 1px);
        height: calc(10px + 1px);
    }

    .blueprint .bar:nth-of-type(2) .dot1,
    .blueprint .bar:nth-of-type(2) .dot2 {
        width: calc(10px + 2px);
        height: calc(10px + 2px);
    }

    .blueprint .bar:nth-of-type(3) .dot1,
    .blueprint .bar:nth-of-type(3) .dot2 {
        width: calc(10px + 3px);
        height: calc(10px + 3px);
    }

    .blueprint .bar:nth-of-type(4) .dot1,
    .blueprint .bar:nth-of-type(4) .dot2 {
        width: calc(10px + 4px);
        height: calc(10px + 4px);
    }

    .blueprint .bar:nth-of-type(5) .dot1,
    .blueprint .bar:nth-of-type(5) .dot2 {
        width: calc(10px + 5px);
        height: calc(10px + 5px);
    }

    .blueprint .bar:nth-of-type(6) .dot1,
    .blueprint .bar:nth-of-type(6) .dot2 {
        width: calc(10px + 6px);
        height: calc(10px + 6px);
    }

    .blueprint .bar:nth-of-type(7) .dot1,
    .blueprint .bar:nth-of-type(7) .dot2 {
        width: calc(10px + 7px);
        height: calc(10px + 7px);
    }

    .blueprint .bar:nth-of-type(8) .dot1,
    .blueprint .bar:nth-of-type(8) .dot2 {
        width: calc(10px + 8px);
        height: calc(10px + 8px);
    }

    .blueprint .bar:nth-of-type(9) .dot1,
    .blueprint .bar:nth-of-type(9) .dot2 {
        width: calc(10px + 9px);
        height: calc(10px + 9px);
    }

    .blueprint .bar:nth-of-type(10) .dot1,
    .blueprint .bar:nth-of-type(10) .dot2 {
        width: calc(10px + 10px);
        height: calc(10px + 10px);
    }

    .blueprint .bar:nth-of-type(11) .dot1,
    .blueprint .bar:nth-of-type(11) .dot2 {
        width: calc(30px - 11px);
        height: calc(30px - 11px);
    }

    .blueprint .bar:nth-of-type(12) .dot1,
    .blueprint .bar:nth-of-type(12) .dot2 {
        width: calc(30px - 12px);
        height: calc(30px - 12px);
    }

    .blueprint .bar:nth-of-type(13) .dot1,
    .blueprint .bar:nth-of-type(13) .dot2 {
        width: calc(30px - 13px);
        height: calc(30px - 13px);
    }

    .blueprint .bar:nth-of-type(14) .dot1,
    .blueprint .bar:nth-of-type(14) .dot2 {
        width: calc(30px - 14px);
        height: calc(30px - 14px);
    }

    .blueprint .bar:nth-of-type(15) .dot1,
    .blueprint .bar:nth-of-type(15) .dot2 {
        width: calc(30px - 15px);
        height: calc(30px - 15px);
    }

    .blueprint .bar:nth-of-type(16) .dot1,
    .blueprint .bar:nth-of-type(16) .dot2 {
        width: calc(30px - 16px);
        height: calc(30px - 16px);
    }

    .blueprint .bar:nth-of-type(17) .dot1,
    .blueprint .bar:nth-of-type(17) .dot2 {
        width: calc(30px - 17px);
        height: calc(30px - 17px);
    }

    .blueprint .bar:nth-of-type(18) .dot1,
    .blueprint .bar:nth-of-type(18) .dot2 {
        width: calc(30px - 18px);
        height: calc(30px - 18px);
    }

    .blueprint .bar:nth-of-type(19) .dot1,
    .blueprint .bar:nth-of-type(19) .dot2 {
        width: calc(30px - 19px);
        height: calc(30px - 19px);
    }

    .blueprint .bar:nth-of-type(20) .dot1,
    .blueprint .bar:nth-of-type(20) .dot2 {
        width: calc(30px - 20px);
        height: calc(30px - 20px);
    }

    .blueprint .bar:nth-of-type(1) {
        left: calc(-15px);
        -webkit-animation-delay: -.4s;
        animation-delay: -.4s;
    }

    .blueprint .bar:nth-of-type(1) .dot1,
    .blueprint .bar:nth-of-type(1) .dot2,
    .blueprint .bar:nth-of-type(1):after,
    .blueprint .bar:nth-of-type(1):before {
        -webkit-animation-delay: -.4s;
        animation-delay: -.4s;
    }

    .blueprint .bar:nth-of-type(2) {
        left: calc(10px);
        -webkit-animation-delay: -.8s;
        animation-delay: -.8s;
    }

    .blueprint .bar:nth-of-type(2) .dot1,
    .blueprint .bar:nth-of-type(2) .dot2,
    .blueprint .bar:nth-of-type(2):after,
    .blueprint .bar:nth-of-type(2):before {
        -webkit-animation-delay: -.8s;
        animation-delay: -.8s;
    }

    .blueprint .bar:nth-of-type(3) {
        left: calc(35px);
        -webkit-animation-delay: -1.2s;
        animation-delay: -1.2s;
    }

    .blueprint .bar:nth-of-type(3) .dot1,
    .blueprint .bar:nth-of-type(3) .dot2,
    .blueprint .bar:nth-of-type(3):after,
    .blueprint .bar:nth-of-type(3):before {
        -webkit-animation-delay: -1.2s;
        animation-delay: -1.2s;
    }

    .blueprint .bar:nth-of-type(4) {
        left: calc(60px);
        -webkit-animation-delay: -1.6s;
        animation-delay: -1.6s;
    }

    .blueprint .bar:nth-of-type(4) .dot1,
    .blueprint .bar:nth-of-type(4) .dot2,
    .blueprint .bar:nth-of-type(4):after,
    .blueprint .bar:nth-of-type(4):before {
        -webkit-animation-delay: -1.6s;
        animation-delay: -1.6s;
    }

    .blueprint .bar:nth-of-type(5) {
        left: calc(85px);
        -webkit-animation-delay: -2s;
        animation-delay: -2s;
    }

    .blueprint .bar:nth-of-type(5) .dot1,
    .blueprint .bar:nth-of-type(5) .dot2,
    .blueprint .bar:nth-of-type(5):after,
    .blueprint .bar:nth-of-type(5):before {
        -webkit-animation-delay: -2s;
        animation-delay: -2s;
    }

    .blueprint .bar:nth-of-type(6) {
        left: calc(110px);
        -webkit-animation-delay: -2.4s;
        animation-delay: -2.4s;
    }

    .blueprint .bar:nth-of-type(6) .dot1,
    .blueprint .bar:nth-of-type(6) .dot2,
    .blueprint .bar:nth-of-type(6):after,
    .blueprint .bar:nth-of-type(6):before {
        -webkit-animation-delay: -2.4s;
        animation-delay: -2.4s;
    }

    .blueprint .bar:nth-of-type(7) {
        left: calc(135px);
        -webkit-animation-delay: -2.8s;
        animation-delay: -2.8s;
    }

    .blueprint .bar:nth-of-type(7) .dot1,
    .blueprint .bar:nth-of-type(7) .dot2,
    .blueprint .bar:nth-of-type(7):after,
    .blueprint .bar:nth-of-type(7):before {
        -webkit-animation-delay: -2.8s;
        animation-delay: -2.8s;
    }

    .blueprint .bar:nth-of-type(8) {
        left: calc(160px);
        -webkit-animation-delay: -3.2s;
        animation-delay: -3.2s;
    }

    .blueprint .bar:nth-of-type(8) .dot1,
    .blueprint .bar:nth-of-type(8) .dot2,
    .blueprint .bar:nth-of-type(8):after,
    .blueprint .bar:nth-of-type(8):before {
        -webkit-animation-delay: -3.2s;
        animation-delay: -3.2s;
    }

    .blueprint .bar:nth-of-type(9) {
        left: calc(185px);
        -webkit-animation-delay: -3.6s;
        animation-delay: -3.6s;
    }

    .blueprint .bar:nth-of-type(9) .dot1,
    .blueprint .bar:nth-of-type(9) .dot2,
    .blueprint .bar:nth-of-type(9):after,
    .blueprint .bar:nth-of-type(9):before {
        -webkit-animation-delay: -3.6s;
        animation-delay: -3.6s;
    }

    .blueprint .bar:nth-of-type(10) {
        left: calc(210px);
        -webkit-animation-delay: -4s;
        animation-delay: -4s;
    }

    .blueprint .bar:nth-of-type(10) .dot1,
    .blueprint .bar:nth-of-type(10) .dot2,
    .blueprint .bar:nth-of-type(10):after,
    .blueprint .bar:nth-of-type(10):before {
        -webkit-animation-delay: -4s;
        animation-delay: -4s;
    }

    .blueprint .bar:nth-of-type(11) {
        left: calc(235px);
        -webkit-animation-delay: -4.4s;
        animation-delay: -4.4s;
    }

    .blueprint .bar:nth-of-type(11) .dot1,
    .blueprint .bar:nth-of-type(11) .dot2,
    .blueprint .bar:nth-of-type(11):after,
    .blueprint .bar:nth-of-type(11):before {
        -webkit-animation-delay: -4.4s;
        animation-delay: -4.4s;
    }

    .blueprint .bar:nth-of-type(12) {
        left: calc(260px);
        -webkit-animation-delay: -4.8s;
        animation-delay: -4.8s;
    }

    .blueprint .bar:nth-of-type(12) .dot1,
    .blueprint .bar:nth-of-type(12) .dot2,
    .blueprint .bar:nth-of-type(12):after,
    .blueprint .bar:nth-of-type(12):before {
        -webkit-animation-delay: -4.8s;
        animation-delay: -4.8s;
    }

    .blueprint .bar:nth-of-type(13) {
        left: calc(285px);
        -webkit-animation-delay: -5.2s;
        animation-delay: -5.2s;
    }

    .blueprint .bar:nth-of-type(13) .dot1,
    .blueprint .bar:nth-of-type(13) .dot2,
    .blueprint .bar:nth-of-type(13):after,
    .blueprint .bar:nth-of-type(13):before {
        -webkit-animation-delay: -5.2s;
        animation-delay: -5.2s;
    }

    .blueprint .bar:nth-of-type(14) {
        left: calc(310px);
        -webkit-animation-delay: -5.6s;
        animation-delay: -5.6s;
    }

    .blueprint .bar:nth-of-type(14) .dot1,
    .blueprint .bar:nth-of-type(14) .dot2,
    .blueprint .bar:nth-of-type(14):after,
    .blueprint .bar:nth-of-type(14):before {
        -webkit-animation-delay: -5.6s;
        animation-delay: -5.6s;
    }

    .blueprint .bar:nth-of-type(15) {
        left: calc(335px);
        -webkit-animation-delay: -6s;
        animation-delay: -6s;
    }

    .blueprint .bar:nth-of-type(15) .dot1,
    .blueprint .bar:nth-of-type(15) .dot2,
    .blueprint .bar:nth-of-type(15):after,
    .blueprint .bar:nth-of-type(15):before {
        -webkit-animation-delay: -6s;
        animation-delay: -6s;
    }

    .blueprint .bar:nth-of-type(16) {
        left: calc(360px);
        -webkit-animation-delay: -6.4s;
        animation-delay: -6.4s;
    }

    .blueprint .bar:nth-of-type(16) .dot1,
    .blueprint .bar:nth-of-type(16) .dot2,
    .blueprint .bar:nth-of-type(16):after,
    .blueprint .bar:nth-of-type(16):before {
        -webkit-animation-delay: -6.4s;
        animation-delay: -6.4s;
    }

    .blueprint .bar:nth-of-type(17) {
        left: calc(385px);
        -webkit-animation-delay: -6.8s;
        animation-delay: -6.8s;
    }

    .blueprint .bar:nth-of-type(17) .dot1,
    .blueprint .bar:nth-of-type(17) .dot2,
    .blueprint .bar:nth-of-type(17):after,
    .blueprint .bar:nth-of-type(17):before {
        -webkit-animation-delay: -6.8s;
        animation-delay: -6.8s;
    }

    .blueprint .bar:nth-of-type(18) {
        left: calc(410px);
        -webkit-animation-delay: -7.2s;
        animation-delay: -7.2s;
    }

    .blueprint .bar:nth-of-type(18) .dot1,
    .blueprint .bar:nth-of-type(18) .dot2,
    .blueprint .bar:nth-of-type(18):after,
    .blueprint .bar:nth-of-type(18):before {
        -webkit-animation-delay: -7.2s;
        animation-delay: -7.2s;
    }

    .blueprint .bar:nth-of-type(19) {
        left: calc(435px);
        -webkit-animation-delay: -7.6s;
        animation-delay: -7.6s;
    }

    .blueprint .bar:nth-of-type(19) .dot1,
    .blueprint .bar:nth-of-type(19) .dot2,
    .blueprint .bar:nth-of-type(19):after,
    .blueprint .bar:nth-of-type(19):before {
        -webkit-animation-delay: -7.6s;
        animation-delay: -7.6s;
    }

    .blueprint .bar:nth-of-type(20) {
        left: calc(460px);
        -webkit-animation-delay: -8s;
        animation-delay: -8s;
    }

    .blueprint .bar:nth-of-type(20) .dot1,
    .blueprint .bar:nth-of-type(20) .dot2,
    .blueprint .bar:nth-of-type(20):after,
    .blueprint .bar:nth-of-type(20):before {
        -webkit-animation-delay: -8s;
        animation-delay: -8s;
    }

    .blueprint .bar .dot1,
    .blueprint .bar .dot2 {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: #1A2980;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #26D0CE, #1A2980);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #26D0CE, #1A2980);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        border-radius: 100%;
        left: 50%;
        top: -30px;
        -webkit-animation: shrink 8s linear infinite;
        animation: shrink 8s linear infinite;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateX(-50%) rotateX(0);
        transform: translateX(-50%) rotateX(0);
    }

    .blueprint .bar .dot2 {
        top: auto;
        bottom: -30px;
        background: rgb(236, 0, 89);
        background: linear-gradient(90deg, rgba(236, 0, 89, 1) 0%, rgba(107, 0, 96, 1) 100%);
    }

    .blueprint .bar:after,
    .blueprint .bar:before {
        content: '';
        box-shadow: 0 0 0 2px #fff;
        position: absolute;
        width: 2px;
        height: 2px;
        background: red;
        border-radius: 0;
        left: 50%;
        bottom: 0;
        -webkit-animation: shrink2 8s linear infinite;
        animation: shrink2 8s linear infinite;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateX(-50%) rotateX(0) translateZ(2px);
        transform: translateX(-50%) rotateX(0) translateZ(2px);
    }

    .blueprint .bar:after {
        bottom: auto;
        top: 0;
    }

    .text-bold {
        font-weight: bolder;
    }


    /*! Keyframes */
    @-webkit-keyframes grow {
        to {
            -webkit-transform: rotateX(360deg);
            transform: rotateX(360deg);
        }
    }

    @keyframes grow {
        to {
            -webkit-transform: rotateX(360deg);
            transform: rotateX(360deg);
        }
    }

    @-webkit-keyframes shrink {
        100% {
            -webkit-transform: translateX(-50%) rotateX(-360deg);
            transform: translateX(-50%) rotateX(-360deg);
        }
    }

    @keyframes shrink {
        100% {
            -webkit-transform: translateX(-50%) rotateX(-360deg);
            transform: translateX(-50%) rotateX(-360deg);
        }
    }

    @-webkit-keyframes shrink2 {
        100% {
            -webkit-transform: translateX(-50%) rotateX(-360deg) translateZ(2px);
            transform: translateX(-50%) rotateX(-360deg) translateZ(2px);
        }
    }


    .carousel {
        position: relative;
        width: 100%;
        max-width: 500px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .carousel__item {
        display: flex;
        align-items: center;
        position: absolute;
        width: 100%;
        padding: 0 12px;
        opacity: 0;
        /* filter: drop-shadow(0 2px 2px #555); */
        will-change: transform, opacity;
        -webkit-animation: carousel-animate-vertical 27s linear infinite;
        animation: carousel-animate-vertical 27s linear infinite;
    }

    .carousel__item:nth-child(1) {
        -webkit-animation-delay: calc(3s * -1);
        animation-delay: calc(3s * -1);
    }

    .carousel__item:nth-child(2) {
        -webkit-animation-delay: calc(3s * 0);
        animation-delay: calc(3s * 0);
    }

    .carousel__item:nth-child(3) {
        -webkit-animation-delay: calc(3s * 1);
        animation-delay: calc(3s * 1);
    }

    .carousel__item:nth-child(4) {
        -webkit-animation-delay: calc(3s * 2);
        animation-delay: calc(3s * 2);
    }

    .carousel__item:nth-child(5) {
        -webkit-animation-delay: calc(3s * 3);
        animation-delay: calc(3s * 3);
    }

    .carousel__item:nth-child(6) {
        -webkit-animation-delay: calc(3s * 4);
        animation-delay: calc(3s * 4);
    }

    .carousel__item:nth-child(7) {
        -webkit-animation-delay: calc(3s * 5);
        animation-delay: calc(3s * 5);
    }

    .carousel__item:nth-child(8) {
        -webkit-animation-delay: calc(3s * 6);
        animation-delay: calc(3s * 6);
    }

    .carousel__item:last-child {
        -webkit-animation-delay: calc(-3s * 2);
        animation-delay: calc(-3s * 2);
    }

    .carousel__item-head {
        border-radius: 50%;
        background-color: #d7f7fc;
        width: 90px;
        height: 90px;
        padding: 14px;
        position: relative;
        margin-right: -45px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
    }

    .carousel__item-body {
        width: 100%;
        background-color: transparent;
        border-radius: 8px;
        padding: 16px 20px 16px 70px;
    }

    .title {
        text-transform: uppercase;
        font-size: 20px;
        margin-top: 10px;
    }

    @-webkit-keyframes carousel-animate-vertical {
        0% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }

        3%,
        11.1111111111% {
            transform: translateY(100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        14.1111111111%,
        22.2222222222% {
            transform: translateY(0) scale(1);
            opacity: 1;
            visibility: visible;
        }

        25.2222222222%,
        33.3333333333% {
            transform: translateY(-100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        36.3333333333% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: visible;
        }

        100% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }
    }

    @keyframes carousel-animate-vertical {
        0% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }

        3%,
        11.1111111111% {
            transform: translateY(100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        14.1111111111%,
        22.2222222222% {
            transform: translateY(0) scale(1);
            opacity: 0.6;
            visibility: visible;
        }

        25.2222222222%,
        33.3333333333% {
            transform: translateY(-100%) scale(0.7);
            opacity: 0.4;
            visibility: visible;
        }

        36.3333333333% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: visible;
        }

        100% {
            transform: translateY(-100%) scale(0.5);
            opacity: 0;
            visibility: hidden;
        }
    }

    .paused {
        animation-play-state: paused !important;
    }

    .chat-bubble_2 {
        position: relative;
        background-color: #333;
        color: #fff;
        width: fit-content;
        padding: 20px;
        border-radius: 20px 20px 20px 20px;
    }

    .hittingThe_wall {
        box-shadow: 0 1px 0 #ccc,
            0 2px 0 #c9c9c9,
            0 3px 0 #bbb,
            0 4px 0 #b9b9b9,
            0 5px 0 #aaa,
            0 6px 1px rgba(0, 0, 0, .1),
            0 0 5px rgba(0, 0, 0, .1),
            0 1px 3px rgba(0, 0, 0, .3),
            0 3px 5px rgba(0, 0, 0, .2),
            0 5px 10px rgba(0, 0, 0, .25),
            0 10px 10px rgba(0, 0, 0, .2),
            0 20px 20px rgba(0, 0, 0, .15) !important;
    }

    .retroshadow {


        color: #fff;
        font-size: 1.2em;
        cursor: pointer;
        font-weight: bold;
        font-family: Helvetica;
        text-shadow:
            0 1px 0 #ccc,
            0 2px 0 #c9c9c9,
            0 3px 0 #bbb,
            0 4px 0 #b9b9b9,
            0 5px 0 #aaa,
            0 6px 1px rgba(0, 0, 0, .1),
            0 0 5px rgba(0, 0, 0, .1),
            0 1px 3px rgba(0, 0, 0, .3),
            0 3px 5px rgba(0, 0, 0, .2),
            0 5px 10px rgba(0, 0, 0, .25),
            0 10px 10px rgba(0, 0, 0, .2),
            0 20px 20px rgba(0, 0, 0, .15);
    }

    .chat-bubble_2:after {
        content: '';
        position: absolute;
        right: -12px;
        top: 50%;
        width: 13px;
        height: 13px;
        color: #fff;
        background-color: inherit;
        transform: translateY(-50%) translateX(-50%) rotate(45deg);
    }

    .chat-bubble {
        position: relative;
        background-color: #dddddd;
        padding: 20px;
        border-radius: 20px 20px 20px 20px;
    }

    .chat-bubble:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 13px;
        height: 13px;
        background-color: #dddddd;
        transform: translateY(-50%) translateX(-50%) rotate(45deg);
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        width: 100%;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 1.6rem;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }

    .neumorphism {
        background-color: #e0e5ec !important;
        box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA !important;
        transition: all 250ms ease-in-out !important;
    }

    .neumorphism:hover {

        box-shadow: inset 3px 3px 7px rgba(136, 165, 191, 0.48), inset -3px -3px 7px #FFFFFF !important;
        transition: all 250ms ease-in-out !important;
    }

    .wrapper {
        width: 90%;
        margin: 0 auto;
        max-width: 80rem;
    }

    .cols {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .col {
        width: calc(25% - 2rem);
        margin: 1rem;
        cursor: pointer;
    }

    .container {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        perspective: 1000px;
    }

    .front,
    .back {
        background-size: cover;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        background-position: center;
        -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        text-align: center;
        min-height: 280px;
        height: auto;
        border-radius: 10px;
        color: #fff;
        font-size: 1.5rem;
    }

    .back {
        background: #cedce7;
        background: -webkit-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
        background: -o-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
        background: linear-gradient(45deg, #cedce7 0%, #596a72 100%);
    }

    .front:after {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        content: '';
        display: block;
        opacity: .6;
        background-color: #000;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 10px;
    }

    .container:hover .front,
    .container:hover .back {
        -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    }

    .back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .inner {
        -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
        transform: translateY(-50%) translateZ(60px) scale(0.94);
        top: 50%;
        position: absolute;
        left: 0;
        width: 100%;
        padding: 2rem;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        outline: 1px solid transparent;
        -webkit-perspective: inherit;
        perspective: inherit;
        z-index: 2;
    }

    .container .back {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .container .front {
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .container:hover .back {
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .container:hover .front {
        -webkit-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .front .inner p {
        font-size: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }

    .front .inner p:after {
        content: '';
        width: 4rem;
        height: 2px;
        position: absolute;
        background: #C6D4DF;
        display: block;
        left: 0;
        right: 0;
        margin: 0 auto;
        bottom: -.75rem;
    }

    .front .inner span {
        color: rgba(255, 255, 255, 0.7);
        font-family: 'Montserrat';
        font-weight: 300;
    }

    @media screen and (max-width: 64rem) {
        .col {
            width: calc(33.333333% - 2rem);
        }
    }

    @media screen and (max-width: 48rem) {
        .col {
            width: calc(50% - 2rem);
        }
    }

    @media screen and (max-width: 32rem) {
        .col {
            width: 100%;
            margin: 0 0 2rem 0;
        }
    }


    #blob {
        position: relative;
    }

    #blob canvas {
        width: 1000px;
        margin-top: -7%;
    }

    @media (max-width: 1200px) {
        #blob canvas {
            margin-top: -10%;
            width: 800px;
        }
    }

    @media (max-width: 600px) {
        #blob canvas {
            width: 800px;
        }
    }

    .controls {
        background: #3F4656;
        display: flex;
        padding: 20px;
        border-radius: 10px;
        position: relative;
        z-index: 3;
        box-shadow: 0 4px 20px -1px rgba(18, 22, 33, 0.7);
    }

    @media (max-width: 1200px) {
        .controls {
            margin-top: -4%;
        }
    }

    @media (max-width: 600px) {
        .controls {
            flex-direction: column;
        }
    }

    .controls label {
        color: #CDD9ED;
        font-weight: 500;
        font-size: 14px;
        display: block;
        margin-bottom: 16px;
    }

    @media (max-width: 600px) {
        .controls label {
            margin-bottom: 12px;
        }
    }

    .controls [type=range] {
        width: 160px;
    }

    @media (max-width: 600px) {
        .controls [type=range] {
            width: 280px;
        }
    }

    .controls>div:not(:last-child) {
        margin-right: 20px;
    }

    @media (max-width: 600px) {
        .controls>div:not(:last-child) {
            margin: 0 0 24px 0;
        }
    }

    .rangeSlider {
        position: relative;
        background: none;
        border: 1px solid #fff;
        border-radius: 6px;
        cursor: pointer;
    }

    .rangeSlider.rangeSlider__horizontal {
        height: 10px;
        width: 160px;
    }

    .rangeSlider .rangeSlider__fill {
        border-radius: 7px;
        background: #fff;
        position: absolute;
    }

    .rangeSlider .rangeSlider__fill:before {
        content: "";
        left: -2px;
        top: -2px;
        bottom: -2px;
        right: -2px;
        border: 2px solid #3F4656;
        border-radius: 6px;
        position: absolute;
    }

    .rangeSlider .rangeSlider__fill__horizontal {
        height: 100%;
        top: 0;
        left: 0;
    }

    .rangeSlider .rangeSlider__handle {
        border: 2px solid #3F4656;
        cursor: grab;
        cursor: -webkit-grab;
        display: inline-block;
        width: 22px;
        height: 22px;
        position: absolute;
        background: white;
        border-radius: 50%;
    }

    .rangeSlider .rangeSlider__handle__horizontal {
        top: -7px;
    }

    html {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
    }

    * {
        box-sizing: inherit;
    }

    *:before,
    *:after {
        box-sizing: inherit;
    }

    body .dribbble {
        position: fixed;
        display: block;
        right: 20px;
        bottom: 20px;
    }

    body .dribbble img {
        display: block;
        height: 28px;
    }


    /* RESPONSIVE */
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .navanga-text-big {
            font-size: 2.5em;
            top: 22% !important;
            text-shadow: none !important;
            color: white !important;
        }

        .navanga-motto {
            top: 30% !important;
            text-shadow: none !important;

        }

        .navanga-logo {
            height: 32px !important;
            width: 150px !important;
            top: 9px !important;
        }

        #products {
            height: 2700px !important;
        }

        .upcoming_event {
            color: white !important;
        }

        #mouse-scroll {
            top: 280px;
        }


        .headerImg {
            /* You must set a specified height */
            background-position: top -20px left -50px;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }

        .navanga-nav {
            height: 50px !important;
        }

        .core_values {
            height: 120% !important;
            width: 120% !important;
        }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .navanga-text-big {
            font-size: 8em;
        }

        .navanga-motto {
            /*  */
        }

        .navanga-logo {
            height: 24px !important;
            width: 120px !important;
            top: 55px !important;
        }


    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .navanga-text-big {}

        .navanga-motto {}
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .navanga-text-big {}

        .navanga-motto {
            left: 49.3% !important;
        }

        .navanga-logo {
            height: 55px !important;
            width: 240px !important;
            top: 50px !important;
        }

        header {
            background-repeat: no-repeat;
            background-position-y: 50px !important;
        }

        header article p {
            font-size: 1.2em;
        }

        #products {
            height: 1000px !important;
        }

    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .navanga-text-big {
            left: 55% !important;
            font-size: 6em;
        }

        .navanga-motto {
            left: 55.3% !important;
        }
    }

    @media screen and (min-width: 1400px) {
        .container {
            width: 1370px;
        }
    }

    @media screen and (min-width: 1600px) {
        .container {
            width: 1570px;
        }
    }

    @media screen and (min-width: 1900px) {
        .navanga-text-big {
            left: 49% !important;
        }

        .navanga-motto {
            left: 49.3% !important;
        }
    }

    @media screen and (min-width: 1920px) {

        /* //For Projectors or Higher Resolution Screens (Full HD) */
        .container {
            width: 1890px;
        }
    }

    @media screen and (min-width: 3840px) {

        /* //For 4K Displays (Ultra HD) */
        .container {
            width: 3810px;
        }
    }

    .bubble,
    .bubble1,
    .bubble2,
    .bubble3,
    .bubble4 {

        width: 120px;
        border: 1px solid rgba(204, 204, 204, 0.3) !important;
        background: white;
        border-radius: 10px;
    }

    .bubble3::before,
    .bubble3::after {
        content: '\0020';
        display: block;
        position: absolute;
        top: -17px;
        left: 60px;
        z-index: 2;
        width: 0;
        height: 0;
        overflow: hidden;
        border: solid 15px transparent;
        border-top: 0;
        border-bottom-color: white;
    }

    .bubble3::before {
        top: -17px;
        z-index: 1;
        border-bottom-color: #ccc;
    }

    html {
        background: url(img/portrait-young-cheerful-african-boy_.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position-y: 10px !important;
    }

    @keyframes flickerAnimation {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-o-keyframes flickerAnimation {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes flickerAnimation {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes flickerAnimation {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .bodyGradDark {
        -webkit-animation: flickerAnimation 6s infinite;
        -moz-animation: flickerAnimation 6s infinite;
        -o-animation: flickerAnimation 6s infinite;
        animation: flickerAnimation 6s infinite;
    }



    *,
    html {
        scroll-behavior: smooth;
    }

    *,
    *:after,
    *:before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    :root {
        --white: #fff;
        --black: #101010;
        --dark: #191919;
        --gray: rgba(1, 1, 1, 0.6);
        --lite: rgba(255, 255, 255, 0.6);
        --primary: linear-gradient(145deg, white, white);
        --primary_dark: #0450fb;
        --secondary: #154b87;
        --default_font: 'Open Sans', sans-serif;
        --title_font: 'Poppins', sans-serif;
    }

    ::-webkit-scrollbar {
        height: 12px;
        width: 8px;
        background: var(--dark);
    }

    ::-webkit-scrollbar-thumb {
        background: gray;
        -webkit-box-shadow: 0px 1px 2px var(--dark);
    }

    ::-webkit-scrollbar-corner {
        background: var(--dark);
    }


    /***************************
            DEFAULT
****************************/
    body {
        margin: 0;
        overflow-x: hidden !important;
        font-family: var(--default_font);
        color: var(--white);
        background-color: var(--black);
    }

    a {
        text-decoration: none !important;
        min-width: fit-content;
        width: fit-content;
        width: -webkit-fit-content;
        width: -moz-fit-content;
    }

    a,
    button {
        transition: 0.5s;
    }

    em {
        font-style: normal;
        color: var(--primary_dark);
    }

    figure {
        padding: 0;
        margin: 0;
    }

    figure img {
        min-width: 100%;
        min-height: 100%;
        width: 100%;
        height: 100%;
    }

    a,
    p,
    .btn {
        font-size: 16px;
    }

    p {
        line-height: 1.9em;
        color: var(--lite);
    }

    a,
    button,
    input,
    textarea,
    select {
        outline: none !important;
    }

    fieldset {
        border: 0;
    }

    h1,
    h2,
    h3,
    h6,
    h6,
    h6 {
        margin: 0;
    }

    .title,
    .sub_title {
        font-family: var(--title_font);
    }

    .flex,
    .fixed_flex {
        display: flex;
    }

    .flex_content {
        width: 100%;
        position: relative;
    }

    .padding_1x {
        padding: 1rem;
    }

    .padding_2x {
        padding: 2rem;
    }

    .padding_3x {
        padding: 3rem;
    }

    .padding_4x {
        padding: 4rem;
    }

    .big {
        font-size: 5em;
    }

    .medium {
        font-size: 2em;
    }

    .small {
        font-size: 1.3em;
    }

    .btn {
        padding: 1rem;
        border-radius: 5px;
        text-align: center;
        font-weight: 500;
        text-transform: uppercase;
        position: relative;
        font-family: var(--title_font);
        font-weight: 400;
    }

    .btn_1 {
        display: block;
        background-color: 0;
        border: 0;
        text-transform: uppercase;
        color: var(--white);
    }

    .btn_1:before {
        content: '';
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.2);
        position: absolute;
        left: 0;
        top: 50%;
        width: 50px;
        height: 50px;
        transition: 0.5s;
        transform: translate(0%, -50%);
    }

    /*   .btn_1:after {
            content: "\f178";
            font-family: "FontAwesome";
            margin-left: 5px;
        } */


    .btn_1:hover:before {
        border-radius: 40px;
        width: 100%;
    }

    .divisions {
        position: relative;
    }

    @media (max-width:920px) {
        .flex {
            flex-wrap: wrap;
        }

        .padding_1x,
        .padding_2x,
        .padding_3x,
        .padding_4x {
            padding: 1rem;
        }

        .big {
            font-size: 1.8em;
        }

        .medium {
            font-size: 1.6em;
        }

        .small {
            font-size: 1.1em;
        }

        .btn {
            padding: 0.5rem 1rem;
        }

        a,
        p,
        .btn {
            font-size: 12px;
        }
    }





    /*NAV*/
    nav {
        display: flex;
        position: fixed;
        top: 0;
        width: 100%;
        align-items: center;
        justify-content: center;
        padding: 1rem 3rem;
        z-index: 9;
        white-space: nowrap;
        transition: 0.5s
    }

    nav a {
        padding: 0.8rem 0;
        color: var(--lite);
        margin: 0 1.5rem;
        /* text-transform: uppercase; */
        font-family: var(--title_font);
        font-weight: 400;
        position: relative;
        white-space: nowrap;
    }

    .logo {
        font-size: 1.6em;
    }

    nav .active {
        color: var(--primary_dark) !important;
        border-bottom: 2px solid var(--primary_dark);
    }

    nav .flex_content:nth-child(2) a:after {
        transition: 0.5s;
        content: "";
        position: absolute;
        left: 0;
        width: 0;
        top: 100%;
        height: 2px;
        background: var(--primary);
    }

    nav a:hover {
        color: var(--white);
    }

    /* nav .flex_content:nth-child(2) a:hover:after {
            width: 100%;
        } */

    nav .flex_content:last-child a {
        float: right;
    }

    /* nav .ham {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 2px solid var(--lite);
            width: 50px;
            height: 50px;
            color: var(--lite);
        }

        nav .ham:hover {
            border: 2px solid var(--white);
        } */

    menu {
        margin: 0;
    }

    menu {
        width: 400px;
        background-color: var(--dark);
        z-index: 999;
        position: fixed;
        right: -400px;
        overflow: hidden;
        height: 100%;
        transition: 0.5s;
        padding: 6rem 2rem;
    }

    .overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        transition: 0.5s;
        opacity: 0;
        z-index: -1;
        background-color: var(--gray);
    }

    .close {
        float: right;
        border: 2px solid var(--lite);
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        padding: 0.5rem;
        color: var(--lite);
        position: absolute;
        top: 5%;
        right: 5%;
    }

    .close:hover {
        color: var(--white);
        border: 2px solid var(--white);
    }

    menu li {
        padding: 0.8rem 0;
        list-style: none;
    }

    menu li a {
        color: var(--lite);
    }

    menu li i {
        color: var(--primary_dark);
    }

    menu li a:hover {
        color: var(--white);
    }

    @media (max-width:920px) {
        nav {
            padding: 1rem;
        }

        /*    nav .ham {
                width: 30px;
                height: 30px;
            } */

        nav .nav_content {
            width: 200px;
            background-color: var(--dark);
            z-index: 999 !important;
            position: fixed;
            top: 0;
            right: -200px;
            overflow: hidden;
            height: 100%;
            transition: 0.5s;
        }

        nav .nav_content a {
            display: block;
            padding: 0.4rem 0rem;
            margin: 1rem;
            font-size: 20px;
        }
    }






    /*ADDITIONAL*/
    /*Custom cursor*/
    .cursor {
        width: 40px;
        height: 40px;
        border: 1px solid var(--primary_dark);
        pointer-events: none;
        -webkit-transition: 0.15s;
        transition: 0.15s;
        position: absolute;
        border-radius: 50%;
        mix-blend-mode: difference;
        z-index: 9999;
        transition-duration: 200ms;
        transition-timing-function: ease-out;
    }

    .cursor::after {
        content: "";
        width: 8px;
        height: 8px;
        background-color: var(--primary_dark);
        left: 0;
        top: 0;
        pointer-events: none;
        -webkit-transition: 0.2s;
        transition: 0.2s;
        position: absolute;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        mix-blend-mode: difference;
        z-index: 9999;
        transition-duration: 200ms;
        transition-timing-function: ease-out;
    }


    /*HEADER*/
    header {
        /*  background: url("https://img.freepik.com/free-photo/portrait-excited-pretty-young-black-woman-sitting-desk_181624-35006.jpg?w=740&t=st=1683997589~exp=1683998189~hmac=618b4e36763d61d6d6232b1bfe5fa4a8c73047d5513d0c4a9aebb1cd8742a9d9");
            background-size: 100% 110%;
            align-items: center; */


        /* animation: mymove 5s infinite;
  animation-timing-function: cubic-bezier(0.1, 0.7, 1.0, 0.1); */
    }

    .Navanga-card {
        background: url("img/aidorCardK.png") !important;

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        /* animation: mymove 5s infinite;
  animation-timing-function: cubic-bezier(0.1, 0.7, 1.0, 0.1); */
    }

    header section {
        padding: 10rem 2rem;
    }

    header article .title {
        background: var(--primary);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        line-height: 1.3;
    }

    header article p {
        color: var(--lite);
        width: 60%;
    }

    @media (max-width:920px) {
        header section {
            padding: 6rem 0rem;
        }

        header article p {
            width: 100%;
        }
    }


    .w3-dropdown-hover:first-child {
        background-color: transparent !important;
    }

    /*DIVISION_1*/
    .division_1 {
        overflow: hidden;
    }

    .division_1:before,
    .division_1:after {
        content: "";
        background-color: #0450fb;
        position: absolute;
        z-index: -1;
        width: 500px;
        height: 400px;
        border-radius: 80%;
    }

    .division_1:before {
        left: -27%;
        top: -10%;
        transform: rotate(120deg);
    }

    .division_1:after {
        right: -25%;
        bottom: -10%;
        transform: rotate(-50deg);
    }

    .division_1 .flex:nth-child(1) {
        align-items: center;
    }

    .division_1 .cards {
        align-items: center;
        justify-content: space-between;
        z-index: 1;
    }

    .division_1 article {
        background-color: var(--dark);
        border-radius: 10px;
    }

    .division_1 .cards article {
        margin: 1%;
    }

    .division_1 .fixed_flex {
        align-items: center;
        justify-content: space-between;
    }

    .division_1 article img {
        background: var(--primary);
        padding: 0.3rem;
        border-radius: 10px;
    }

    .division_1 article .title {
        margin: 1rem 0;
    }

    .division_1 article .stroke {
        opacity: 0.3;
    }

    @media (max-width:920px) {
        .division_1 {
            padding: 0;
        }
    }



    /*Transparent text background*/
    .stroke {
        color: transparent;
        -webkit-text-stroke: 1.5px var(--primary_dark);
    }


    /*Custom cursor coloring*/
    .cursor--expand {
        animation: cursor-animate-3 550ms forwards;
        border: 10px solid rgb(var(--primary_dark));
    }

    .cursor--expand::after {
        border: 15px solid rgba(var(--primary_dark), .3);
    }


    /*Scroller*/
    .cs-down {
        position: absolute;
        height: 35px;
        width: 20px;
        border-radius: 10px;
        border: 2px solid var(--white);
        bottom: 10%;
        left: 50%;
        margin-left: -10px;
    }

    .cs-down:before {
        content: '';
        height: 5px;
        width: 5px;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background-color: var(--white);
        -webkit-animation: UpAndDown 3s infinite;
        animation: UpAndDown 3s infinite;
    }

    @-webkit-keyframes UpAndDown {

        0%,
        100% {
            top: 30%;
        }

        50% {
            top: 70%;
            opacity: 0.5;
            -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
        }
    }

    @keyframes UpAndDown {

        0%,
        100% {
            top: 30%;
        }

        50% {
            top: 70%;
            opacity: 0.5;
            -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
        }
    }
</style>