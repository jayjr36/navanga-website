<?php

$svgSnippet = letter_O_animation();

?>
<vs-sidebar v-if="loggedIn" class="pt-6" :open="isLargeScreen" style="height: 98% !important; top: 3% !important; z-index: 1;" v-model="activeSidebarItem" :vs-theme="theme">
  <template #logo>
    <!-- ...img logo -->
  </template>
  <div @click="">
    <vs-sidebar-item id="overview">
      <template #icon>
        <i class="bi bi-people"></i>
      </template>

      <vs-button ref="networkButton" :primary="page_index == 0" transparent icon>
        <span :class="{ 'fg-white': page_index != 0 }">Network</span>
      </vs-button>
    </vs-sidebar-item>
  </div>

  <div @click="">
    <vs-sidebar-item id="chat">
      <template #icon>
        <i class="bi bi-chat-quote-fill"></i>
      </template>
      <vs-button :primary="page_index == 4" transparent icon>
        <span :class="{ 'fg-white': page_index != 4 }">Chats</span>
      </vs-button>
    </vs-sidebar-item>
  </div>

  <template #footer>
    <vs-row justify="space-between">
      <vs-avatar @click="page_index = 3">
        <img :src="profileUrl" alt="">
      </vs-avatar>

      <vs-avatar badge-color="danger" badge-position="top-right">

        <?php echo $svgSnippet ?>

        <template #badge>
          28
        </template>
      </vs-avatar>
    </vs-row>
  </template>
</vs-sidebar>

<vs-sidebar v-if="loggedIn" class="w3-hide-large pt-3" :open.sync="activeSidebar" style="height: 90% !important; top: 11% !important; z-index: 2;" v-model="activeSidebar">
  <template #logo>
    <!-- ...img logo -->
  </template>

  <vs-sidebar-item @click="page_index = 0" id="overview">
    <template #icon>
      <i class="bi bi-people"></i>
    </template>

    <vs-button ref="networkButton" @click="page_index = 0" :primary="page_index == 0" transparent icon>
      <span :class="{ 'fg-white': page_index != 0 }">Network</span>
    </vs-button>
  </vs-sidebar-item>

  <vs-sidebar-item id="chat">
    <template #icon>
      <i class="bi bi-chat-quote-fill"></i>
    </template>
    <vs-button @click="" :primary="page_index == 4" transparent icon>
      <span :class="{ 'fg-white': page_index != 4 }">Chats</span>
    </vs-button>
  </vs-sidebar-item>


  <template #footer>
    <vs-row justify="space-between">
      <vs-avatar @click="page_index = 3">
        <img :src="profileUrl" alt="">
      </vs-avatar>

      <vs-avatar badge-color="danger" badge-position="top-right">

        <?php echo $svgSnippet ?>
        <template #badge>
          28
        </template>
      </vs-avatar>
    </vs-row>
  </template>
</vs-sidebar>