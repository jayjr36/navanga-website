<vs-navbar class="w3-padding w3-white shadow" fixed target-scroll="#padding-scroll-content" center-collapsed v-model="activeSidebarItem">
  <template #left>
    <vs-button v-if="loggedIn" :hidden="isLargeScreen" @click="activeSidebar = !activeSidebar" flat transparent icon style="position: relative; left: -20px">
      <i class="bi bi-list"></i>
    </vs-button>
    <img style="cursor: pointer !important" class="c-pointer w3-hide-small w3-hide-medium" @click="[page_index = 0, active = '']" src="https://navangahealthcare.co.tz/img/logo.png?=34653453" alt="" width="160">
    <img style="cursor: pointer !important;position: relative; left: -20px" class="c-pointer w3-hide-large" @click="[page_index = 0, active = '']" src="https://navangahealthcare.co.tz/img/logo.ico" height="40" alt="icon">
  </template>

  <template v-if="!loggedIn" class="hide_on_load w3-hide" #right>
    <vs-button class="hide_on_load w3-hide" flat vs-dark @click="loginModal = true">Login</vs-button>
    <vs-button class="hide_on_load w3-hide w3-hide-small" vs-dark onclick="document.getElementById('regModal').style.display='block'" @click="regModal = true">Get Started
    </vs-button>
  </template>
  <template v-else #right>
    <!-- Button trigger modal -->

    <!-- <vs-button :loading="loading" class="loginBtn" flat border data-bs-toggle="modal" data-bs-target="#exampleModalForm">
          Login
          <template #animate>
            <i class="bi bi-box-arrow-in-right text-bold" style="font-size: large;"></i>
          </template>
        </vs-button> -->
    <vs-navbar-group class="hide_on_load w3-hide-small">
      <a @click="page_index = 1" v-if="profileUrl != ''" class="avatar avatar-sm rounded-circle" style="position: absolute; right: 100%; bottom: 3%">
        <img alt="" :src="profileUrl">
      </a>

      <vs-avatar v-else style="position: absolute; top: 0px; left:-60%;">
        <template #text @click="page_index = 1">
          {{username}}
        </template>
      </vs-avatar>
      <span @click="page_index = 1">
        {{lastName}}<i class="bi bi-chevron-down pl-2"></i>
      </span>
      <template #items>
        <vs-navbar-item @click="[page_index = 2]" :active="active == 'editProfile'" id="editProfile">
          Edit Profile
        </vs-navbar-item>
        <vs-navbar-item @click="page_index = 3" :active="active == 'settings'" id="settings">
          Settings
        </vs-navbar-item>
        <vs-navbar-item>
          <vs-button danger border flat @click="logout()">
            Logout
            <template #animate>
              <i class="bi bi-box-arrow-right text-bold" style="font-size: large;"></i>
            </template>
          </vs-button>
        </vs-navbar-item>
      </template>
    </vs-navbar-group>
    <vs-navbar-group class="hide_on_load w3-hide-large w3-hide-medium" style="position: absolute; right: 1%; bottom: 6px !important">
      <a v-if="profileUrl != ''" class="avatar avatar-sm rounded-circle" style="position: absolute; right: 100%; bottom: 3%">
        <img alt="" :src="profileUrl">
      </a>

      <vs-avatar v-else style="position: absolute; right: 100%; bottom: -5px !important">
        <template #text @click="page_index = 3">
          {{username}}
        </template>
      </vs-avatar>
      <span style="position: relative; top: 4px" @click="page_index = 3">
        {{lastName}}<i class="bi bi-chevron-down pl-2"></i>
      </span>
      <template #items>
        <vs-navbar-item @click="[page_index = 2, iframeFeedback()]" :active="active == 'editProfile'" id="editProfile">
          Edit Profile
        </vs-navbar-item>
        <vs-navbar-item @click="page_index = 2" :active="active == 'settings'" id="settings">
          Settings
        </vs-navbar-item>
        <vs-navbar-item>
          <vs-button danger border flat @click="logout()">
            Logout
            <template #animate>
              <i class="bi bi-box-arrow-right text-bold" style="font-size: large;"></i>
            </template>
          </vs-button>
        </vs-navbar-item>
      </template>
    </vs-navbar-group>
  </template>
</vs-navbar>