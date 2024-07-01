<div id="regModal" class="w3-modal">
  <div class="w3-modal-content w3-white card card-body blur mt-5 w3-animate-zoom">
    <header class="w3-container p-3">
      <button onclick="document.getElementById('regModal').style.display='none'" @click="regModal = false" class="vs-dialog__close w3-display-topright blur" style="top: -6px; right: -6px">
        <i class="vs-icon-close vs-icon-hover-x"></i>
      </button>
      <h3 class="text-center pb-4 mb-2">Welcome to NAVANGA</h3>
      <p class="text-center pb-4 mb-2">Kindly fill the below form and register to begin your exciting journey in
        <span class="text-bold">Innovative Healthcare Excellence</span>
      </p>
      <div class="w3-row-padding w3-text-black">
        <div class="w3-col m4">
          <vs-input class="mb-3" v-model="firstName" placeholder="First Name">
            <template #icon>
              <i class="bi bi-person"></i>
            </template>
          </vs-input>
        </div>
        <div class="w3-col m4">
          <vs-input class="mb-3" v-model="lastName" placeholder="Last Name">
            <template #icon>
              <i class="bi bi-person"></i>
            </template>
          </vs-input>
        </div>
        <div class="w3-col m4">
          <vs-input class="mb-3" type="email" v-model="email" placeholder="Email">
            <template v-if="inputValidation('email')" #message-success>
              Email Valid
            </template>
            <template v-if="!inputValidation('email') && email !== ''" #message-danger>
              Email Invalid
            </template>
            <template #icon>
              <i class="bi bi-envelope-at"></i>
            </template>
          </vs-input>
        </div>

      </div>
      <div class="w3-row-padding w3-text-black">

        <div class="w3-col m6">
          <vs-input type="password" v-model="password" placeholder="Password">

            <template v-if="inputValidation('password') === 'Very Weak' || inputValidation('password') === 'Password must be at least 6 characters long'" #message-danger>
              <h6 class="mt-1 vs-input__message--danger" v-if="inputValidation('password') === 'Very Weak'">
                {{ inputValidation('password') }}
              </h6>
              <h6 v-else class="mt-1">
                {{ inputValidation('password') }}
              </h6>
            </template>
            <template v-if="inputValidation('password') === 'Weak'" #message-warning>
              {{ inputValidation('password') }}
            </template>
            <template v-if="inputValidation('password') === 'Good'" #message-primary>
              {{ inputValidation('password') }}
            </template>
            <template v-if="inputValidation('password') === 'Strong'" #message-success>
              {{ inputValidation('password') }}
            </template>

            <template #icon>
              <i class="bi bi-key-fill"></i>
            </template>
          </vs-input>
        </div>

        <div class="w3-col m6">
          <vs-input type="password" v-model="repeatPassword" placeholder="Password Match">
            <template v-if="!passwordMatch && repeatPassword.length" #message-danger>
              Password do not match
            </template>
            <template v-if="passwordMatch && repeatPassword.length" #message-success>
              Good to go
            </template>
            <template #icon>
              <i class="bi bi-key-fill"></i>
            </template>
          </vs-input>
        </div>

      </div>

      <div class="w3-row-padding w3-text-black mt-4">


        <div class="w3-col m6 w3-hide-small w3-hide-medium">
          <vs-input class="mb-3" v-model="phoneNumber" placeholder="eg; 0743005751">
            <template #icon>
              <i class="bi bi-telephone"></i>
            </template>
          </vs-input>

          <!-- <div class="w3-row-padding phone_fields">
                      <div class="w3-third" style="position: absolute !important;left: 35% !important;">
                        <div class="dropdown">
                          <button class="btn blur dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span v-html="selectedCountryCode.flag" class="px-1"></span>{{selectedCountryCode.code}}
                          </button>
                          <ul class="dropdown-menu px-2 py-3 scrollable-dropdown" aria-labelledby="dropdownMenuButton">
                            <li v-for="(codeOption, idx) in countryCodes" :key="idx">
                              <a @click="selectedCountryCode = codeOption" class="dropdown-item border-radius-md" href="javascript:;">
                                <span v-html="codeOption.flag" class="px-1"></span>{{ codeOption.text }}
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="w3-third">
                        <input class="w3-input phone-input card blur" v-model="phone" type="text" placeholder=" eg; 743005751" style="position: relative; bottom: 1px; left: 65%;">
                      </div>
                    </div> -->
        </div>
        <div class="w3-col m6 w3-hide-large mt-3">
          <vs-input class="mb-3" v-model="phoneNumber" placeholder="eg; 0743005751">
            <template #icon>
              <i class="bi bi-telephone"></i>
            </template>
          </vs-input>

          <!-- <div class="w3-row-padding phone_fields">
                      <div class="w3-third" style="position: absolute !important;left: 32.5% !important;">
                        <div class="dropdown">
                          <button class="btn blur dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span v-html="selectedCountryCode.flag" class="px-1"></span>{{selectedCountryCode.code}}
                          </button>
                          <ul class="dropdown-menu px-2 py-3 scrollable-dropdown" aria-labelledby="dropdownMenuButton">
                            <li v-for="(codeOption, idx) in countryCodes" :key="idx">
                              <a @click="selectedCountryCode = codeOption" class="dropdown-item border-radius-md" href="javascript:;">
                                <span v-html="codeOption.flag" class="px-1"></span>{{ codeOption.text }}
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="w3-third">
                        <input class="w3-input phone-input card blur" v-model="phoneNumber" type="text" placeholder=" eg; 743005751" style="position: relative; bottom: 1px; left: 65%;">
                      </div>
                    </div> -->
        </div>
      </div>
    </header>
    <footer class="w3-container ml-4">
      <div class="d-flex align-items-center mt-2 mb-2">
        <vs-checkbox class="pl-9" style="padding-left: 18px !important;" dark v-model="acceptTerms" vs-theme="dark"></vs-checkbox>
        <span class="mr-3 ml-6" style="margin-top: 1px; padding-left: 12px; padding-right: 6px">Accept <span @click="[termsModal = true, openToTrackScroll()]" class="text-navanga c-pointer">Terms &
            Conditions</span></span>
      </div>
      <div class="buttons w3-cell-row">
        <span class="w3-container w3-cell">
          <button onclick="document.getElementById('regModal').style.display='none'" @click="regModal = false" type="button" class="btn btn-rounded btn-outline-danger mt-4 ms-2">Discard</button>
        </span>
        <span class="w3-container text-center w3-cell" style="position: absolute; right: 30px">
          <button @click="regWithEmail()" type="button" class="btn btn-rounded mt-4" style="background-color: #0050fe; color: #ffffff" :class="{ 'w3-disabled': !acceptTerms }" :disabled="!acceptTerms">Register</button>
        </span>
      </div>
    </footer>
  </div>
</div>