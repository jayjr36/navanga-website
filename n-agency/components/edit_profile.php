<div class="w3-row">
  <div class="w3-third w3-container mb-3">
    <iframe class="card" style="height: 420px" id="imgCropper" src="components/crop/index.html"></iframe>
  </div>
  <div class="w3-rest w3-container">

    <div class="w3-row-padding w3-text-black">

      <div class="w3-col m4">
        <span>Title:</span>
        <template>
          <div class="center d-flex align-items-center mt-3 mb-3">
            <vs-radio v-model="title" label="Mr." val="Mr.">
              Mr.
            </vs-radio>
            <vs-radio v-model="title" label="Dr." val="Dr.">
              Dr.
            </vs-radio>
            <vs-radio v-model="title" label="Ms." val="Ms.">
              Ms.
            </vs-radio>
            <vs-radio v-model="title" label="Prof." val="Prof.">
              Prof.
            </vs-radio>
          </div>
        </template>
      </div>
      <div class="w3-col m6">
      <span class="pl-2">CV:</span>
        <template>
        <div>
          <input id="cv_upload" type="file" ref="fileInput" style="display: none" @change="uploadXFile" />
          <vs-button @click="openFileInput" 
        flat>
            <div v-if="cvURL === ''">
            <i class="bi bi-cloud-arrow-up"></i> Select Your Cv
            </div>
            <div v-else>
            <i class="bi bi-cloud-check"></i> {{ email+`_cv.pdf` }}
            </div>
          </vs-button>
        </div>
      </template>
      </div>
    </div>
    <div class="w3-row-padding w3-text-black">
      <div class="w3-col m4">
        First Name:
        <vs-input class="pt-2" type="text" v-model="firstName" placeholder="First Name">
          <template #icon>
            <i class="bi bi-person"></i>
          </template>
        </vs-input>
      </div>
      <div class="w3-col m4">
        <span>Last Name:</span>
        <vs-input class="pt-2" type="text" v-model="lastName" placeholder="Last Name">
          <template #icon>
            <i class="bi bi-person"></i>
          </template>
        </vs-input>
      </div>
      <div class="w3-col m4">
        Email:
        <vs-input class="pt-2" type="email" v-model="email" placeholder="Email" disabled>
          <template #icon>
            <i class="bi bi-envelope-at"></i>
          </template>
        </vs-input>
      </div>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col m12 pt-3">
        <span class="w3-text-black">Bio</span>
        <div class="form-group pt-2">
          <textarea v-model="bio" class="form-control border" id="exampleFormControlTextarea1" rows="3" style="padding: 16px 26px;"></textarea>
        </div>
      </div>
    </div>

    <div class="w3-display-bottomright">
      <button @click="updateProfile()" type="button" class="btn btn-rounded mr-4" style="background-color: #0050fe; color: #ffffff;margin-right: 26px !important;">
        Update
      </button>
    </div>


  </div>
</div>