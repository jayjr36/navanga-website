<template>
    <div class="row ml-3">
        <div class="col-12 col-md-6 col-lg-3" v-for="(user, index) in notMeUsers()" :key="index">
            <div class="card card-user border mb-5 shadow-xs border-radius-lg">
                <a href="#">
                    <div class="height-350">
                        <img class="w-100 h-100 p-4 rounded-top" :src="user.profileUrl" alt="user-image" />
                    </div>
                </a>
                <div class="card-body text-undefined text-center">
                    <a href="#">
                        <h6 class="font-weight-bold">{{ user.title }} {{ user.firstName }} {{ user.lastName }}</h6>
                    </a>
                    <div>
                    <button @click="" type="button" class="btn btn-rounded mt-4 shadow" style="background-color: #0050fe; color: #ffffff">Connect</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>