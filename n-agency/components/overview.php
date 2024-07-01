<div class="row">
    <div class="col-sm-4">

        <vs-card>
            <template #title>
                <h3>All Users (Overview)</h3>
                <div class="complex-shape-gradient shimmer" style="position: absolute; top: 40px"></div>
            </template>


            <template #text>
                <div class="spacer-h-1"></div>
                <ul v-for="(user, i) in allUsers" class="list-group">
                    <li @click="[selectedUID = user.uid,  openActiveUser =! openActiveUser ]" class="list-group-item mb-2 c-pointer">



                        <div class="w3-row">
                            <div class="w3-col s3 w3-center">
                                <vs-avatar v-if="user.profileUrl != ''">
                                    <img :src="user.profileUrl" alt="">
                                </vs-avatar>
                                <vs-avatar v-else>
                                    <template #text>
                                        {{user.firstName + ` `+ user.lastName}}
                                    </template>
                                </vs-avatar>
                            </div>
                            <div class="w3-col s9 w3-left pt-3">
                                {{user.firstName + ` `+ user.lastName}}
                                <span v-if="uid == user.uid">(You)</span>
                            </div>
                        </div>
                    </li>
                </ul>
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



        <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
        <vs-card>
            <template #title>
                <h3>Registered {{usersScope().type}}</h3>
                <div class="complex-shape-gradient shimmer" style="position: absolute; top: 40px">
                </div>
            </template>


            <template #text>
                <div class="spacer-h-1"></div>
                <ul v-for="(user, i) in usersScope().data" class="list-group">
                    <li @click="[selectedUID = user.uid,  openActiveUser =! openActiveUser ]" class="list-group-item mb-2 c-pointer">



                        <div class="w3-row">
                            <div class="w3-col s3 w3-center">
                                <vs-avatar v-if="user.profileUrl != ''">
                                    <img :src="user.profileUrl" alt="">
                                </vs-avatar>
                                <vs-avatar v-else>
                                    <template #text>
                                        {{user.firstName + ` `+ user.lastName}}
                                    </template>
                                </vs-avatar>
                            </div>
                            <div class="w3-col s9 w3-left pt-3">
                                {{user.firstName + ` `+ user.lastName}}
                                <span v-if="uid == user.uid">(You)</span>
                            </div>
                        </div>
                    </li>
                </ul>
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
    <template>
        <div class="center">
            <vs-dialog id="openActiveUser" scroll overflow-hidden full-screen vs-theme="dark" v-model=" openActiveUser ">
                <div class="row">
                    <div class="col-sm-4">

                        <vs-card :class="{'mt-6': selectedUser().profileUrl != '',}" class="no-box-shadow">
                            <template #title>
                                <h1 class="text-bold">{{selectedUser().title}} {{selectedUser().firstName}}</h1>
                                <h1 class="text-light">{{selectedUser().lastName}}</h1>
                                <vs-button :class="{'w3-hide': selectedUser().profileUrl != '',}" @click="viewCV(selectedUser().cv)" class="" square primary gradient>
                                    View CV <i class="bi bi-eye-fill ml-3"></i>
                                </vs-button>
                            </template>

                            <template #img>
                                <img :src="selectedUser().profileUrl" alt="">
                            </template>
                            <template #text>
                                <p class="ml-1">{{selectedUser().bio}}</p>
                            </template>

                            <template #interactions>
                                <vs-button @click="viewCV(selectedUser().cv)" class="" square primary gradient>
                                    View CV <i class="bi bi-eye-fill ml-3"></i>
                                </vs-button>
                            </template>
                        </vs-card>



                        <hr class="d-sm-none">
                    </div>
                    <div class="col-sm-8">
                        <vs-card class="no-box-shadow">
                            <template #title>
                                <h1 class="text-bold text-navanga">{{selectedUser().title}} {{selectedUser().firstName}} {{selectedUser().lastName}}</h1>
                                <h2 class="text-bold fg-white">Specialization here (field)</h2>
                                <p class="text-light fg-white mt-2">{{selectedUser().bio}}</p>


                            </template>


                            <template #text>
                                <div class="spacer-h-1"></div>

                                <span class="">
                                    {{ selectedUser().registrationDate !== '' ? 'Registered: ' + selectedUser().registrationDate + ' (' + timeAgoFormat(selectedUser().registrationDate) + ')' : '' }}
                                </span>

                                <div class="spacer-h-1"></div>
                                <p class="fg-white mt-2">
                                    <span class="text-bold">
                                        Available Days:
                                    </span>
                                    <span v-for="(day, i) in selectedUser().availableDays" :key="day" class="text-light fg-white mt-2">
                                        {{ i !== selectedUser().availableDays.length - 1 ? day + ',' : day }}
                                    </span>
                                </p>
                                <div class="spacer-h-1"></div>
                                <p class="mt-2">
                                    <span class="text-bold">
                                        Available Time:
                                    </span>
                                    <span class="text-light mt-2">
                                        {{selectedUser().availableTimeStart}} (Start) - 
                                        {{selectedUser().availableTimeEnd}} (End)
                                    </span>
                                </p>

                                <div class="spacer-h-1"></div>
                                <p class="mt-2">
                                    <span class="text-bold">
                                        Phone: <span class="text-light">{{selectedUser().phone}}</span>
                                    </span>
                                    
                                </p>
                                <div class="spacer-h-1"></div>
                                <p class="mt-2">
                                    <span class="text-bold">
                                        Email: <span class="text-light">{{selectedUser().email}}</span>
                                    </span>
                                    
                                </p>

                            </template>

                            
                        </vs-card>
                    </div>
                </div>
        </div>
        </vs-dialog>
</div>
</template>

</div>