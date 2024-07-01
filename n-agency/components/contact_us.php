<div id="contModal" class="w3-modal">
    <div class="w3-modal-content w3-white card card-body blur mt-5 w3-animate-zoom">
        <header class="w3-container p-3">
            <button onclick="document.getElementById('contModal').style.display='none'" @click="contModal = false" class="vs-dialog__close w3-display-topright blur" style="top: -6px; right: -6px">
                <i class="vs-icon-close vs-icon-hover-x"></i>
            </button>
            <span v-if="contactView === 2" @click="contactView = 1" class="w3-tag c-pointer blur text-black mb-3 ml-4 px-3 py-2 pulse rounded-pill">
                <i class="bi bi-geo-alt"></i>
                Find Us
            </span>
            <span v-else @click="contactView = 2" class="w3-tag c-pointer blur text-black mb-3 ml-4 px-3 py-2 pulse rounded-pill">
                <i class="bi bi-envelope"></i>
                Email Us Directly
            </span>
            <div v-if="contactView === 2" class="w3-row-padding w3-text-black">
                <div class="w3-half">
                    <vs-input class="mb-3" v-model="firstName" placeholder="First Name">
                        <template #icon>
                            <i class="bi bi-person"></i>
                        </template>
                    </vs-input>
                </div>
                <div class="w3-half m4">
                    <vs-input class="mb-3" v-model="lastName" placeholder="Last Name">
                        <template #icon>
                            <i class="bi bi-person"></i>
                        </template>
                    </vs-input>
                </div>
                <!-- <div class="w3-col m4">
                    <vs-input class="mb-3" type="email" v-model="email" placeholder="Email">
                      <template #icon>
                        <i class="bi bi-envelope-at"></i>
                      </template>
                    </vs-input>
                  </div> -->

            </div>
            <div v-if="contactView === 2" class="w3-row-padding w3-text-black">

                <div class="w3-col m6">
                    <vs-input class="mb-3" type="email" v-model="email" placeholder="Email">
                        <template #icon>
                            <i class="bi bi-envelope-at"></i>
                        </template>
                    </vs-input>
                </div>

                <div class="w3-col m6 w3-hide-small">
                    <vs-input class="mb-3" v-model="phoneNumber" placeholder="eg; 0743005751">
                        <template #icon>
                            <i class="bi bi-telephone"></i>
                        </template>
                    </vs-input>
                </div>
                <div class="w3-col m6 p-sm-3 w3-hide-large">
                    <vs-input class="mb-3" v-model="phoneNumber" placeholder="eg; 0743005751">
                        <template #icon>
                            <i class="bi bi-telephone"></i>
                        </template>
                    </vs-input>
                </div>
            </div>
            <div v-if="contactView === 2" class="w3-row-padding w3-text-black">

                <div class="w3-rest m4 w3-hide-small w3-hide-medium">
                    <textarea v-model="enquiry" class="form-control w3-border p-3 mx-2" placeholder="Please, write your comment here"></textarea>
                </div>
                <div class="w3-rest m4 w3-hide-large mt-5">
                    <textarea v-model="enquiry" class="form-control w3-border p-3 mx-2" placeholder="Please, write your comment here"></textarea>
                </div>
            </div>
            <div class="text-center" v-if="contactView === 1">
                <div class="py-4">
                    <span class="p-3">
                        <i class="bi bi-telephone"></i>
                    </span>
                    <a href="tel:+255787193329" class="text-bold text-navanga">+255 787 193 329</a> or
                    <a href="tel:+255789733400" class="text-bold text-navanga">+255 789 733 400</a>
                </div>
                <div>
                    <button class="w3-button w3-hover-none text-navanga">
                        <i class="bi bi-facebook"></i>
                    </button>
                    <button class="w3-button w3-hover-none">
                        <i class="bi bi-twitter"></i>
                    </button>
                    <button class="w3-button w3-text-pink w3-hover-none">
                        <i class="bi bi-instagram"></i>
                    </button>
                    <button class="w3-button w3-hover-none">
                        <i class="bi bi-linkedin"></i>
                    </button>
                </div>
                <div class="mt-3">
                    {{ new Date().getFullYear() }} — <strong>NAVANGA Healthcare Solutions</strong>

                </div>
            </div>
        </header>
        <footer v-if="contactView === 2" class="w3-container ml-4 pt-3">

            <div class="buttons w3-cell-row">
                <span class="w3-container w3-cell">
                    <button onclick="document.getElementById('contModal').style.display='none'" @click="contModal = false" type="button" class="btn btn-rounded btn-outline-danger mt-4 ms-2">Discard</button>
                </span>
                <span class="w3-container text-center w3-cell" style="position: absolute; right: 30px">
                    <button @click="mailMe()" type="button" class="btn btn-rounded mt-4" style="background-color: #0050fe; color: #ffffff">Send</button>
                </span>
            </div>
        </footer>
    </div>
</div>