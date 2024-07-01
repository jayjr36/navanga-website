<div class="w3-row">
    <div class="w3-half w3-container">
        <vs-card class="no-box-shadow bg-transparent">
            <template #title>
                <h2 class="text-bold" style="font-size: 2rem !important;">{{title}} {{firstName}} {{lastName}}</h2>
            </template>

            <template #img>
                <img :src="profileUrl" alt="">
            </template>
            <template #text>
                <i class="ml-1">"{{bio}}"</i>
            </template>


        </vs-card>
    </div>
    <div class="w3-half w3-container">
        <vs-card class="no-box-shadow bg-transparent">
            <template #title>
                <h1 class="text-bold text-navanga">{{title}} {{firstName}} {{lastName}}</h1>
                <h2 class="text-bold fg-black">Specialization here (field)</h2>
                <p class="fg-black mt-2">A bit of disc here</p>
            </template>


            <template #text>
                <div class="spacer-h-1"></div>

            </template>

            <template #interactions>
                <vs-button danger icon>
                    <i class='bx bx-heart'></i>
                </vs-button>
                <vs-button class="btn-chat" shadow primary>
                    <i class='bx bx-chat'></i>
                    <span class="span">
                        54
                    </span>
                </vs-button>
            </template>
        </vs-card>
    </div>
</div>
<div class="row">
    <template>
        <div class="center">
            <vs-dialog scroll overflow-hidden full-screen vs-theme="dark" v-model=" openActiveUser ">
                <template #header>
                    <h3>
                        <span class="text-bold">{{selectedUser().firstName + ` ` + selectedUser().lastName}}`s
                            profile</span>
                    </h3>

                    <vs-button @click="viewCV(selectedUser().cv)" class="ml-12" square primary gradient>
                        View CV <i class="bi bi-eye-fill ml-3"></i>
                    </vs-button>

                </template>
                <div class="con-content">

                    <span class="pl-4">
                        {{ selectedUser().registrationDate !== '' ? 'Registered : ' + selectedUser().registrationDate + ' (' + timeAgoFormat(selectedUser().registrationDate) + ')' : '' }}
                    </span>
                    <p>
                    <div class="w3-row-padding">
                        <div class="w3-col s4">
                            Title: {{selectedUser().title}}
                        </div>
                        <div class="w3-col s4">
                            First Name: {{selectedUser().firstName}}
                        </div>
                        <div class="w3-col s4">
                            Last Name: {{selectedUser().lastName}}
                        </div>
                    </div>

                    </p>

                    <p>
                    <div class="w3-row-padding">
                        <div class="w3-col s4">
                            Bio: {{selectedUser().bio}}
                        </div>
                    </div>
                    </p>
                </div>
            </vs-dialog>
        </div>
    </template>

</div>