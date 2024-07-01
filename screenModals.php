<template>

    <v-dialog style="border-radius: 0px !important;" v-model="productLearnModal" fullscreen hide-overlay>
        <div justify="center" class="w3-white" style="position: relative; top: 0px !important" :style="{'background-color': activeProduct == '2' ? '#ffffff !important' : 'white'}">
            <div class="container position-sticky z-index-sticky top-0">
                <div class="row">
                    <div class="col-12" :style="{'max-width': activeProduct == '2' ? '98% !important' : '100%'}">
                        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute my-3 start-0 end-0 mx-2">
                            <div class="container-fluid px-1">


                                <p color="black" class="text-cap text-bold mb-0" :style="{'font-size': isLargeScreen ? '1.5rem' : '.9rem'}">
                                    <template v-if="activeProduct == '1'">
                                        <span class="fg-dark">Healthcare Solutions</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Consultancy </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '2'">
                                        <span class="fg-dark">Multi-Disciplinary Board</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Consultancy </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '3'">
                                        <span class="fg-dark">Clinical Case Management</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Consultancy </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '4'">
                                        <span class="fg-dark">Wellness Programs</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Wellness </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '5'">
                                        <span class="fg-dark">Home Care</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Services </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '6'">
                                        <span class="fg-dark">Schools Programs</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Wellness </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '7'">
                                        <span class="fg-dark">Grants Applications</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Wellness </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                    <template v-if="activeProduct == '8'">
                                        <span class="fg-dark">Pharmaceutical Medical</span>
                                        <span class="fg-darkGray">&#149</span> <span class="fg-dark">Wellness </span>
                                        <v-chip @click="nextProduct()" class="ml-6 my-2" :class="{'my-2': isLargeScreen,}">
                                            Next
                                        </v-chip>
                                    </template>
                                </p>

                                <v-spacer></v-spacer>

                                <v-btn color="grey light" text fab @click="[
                        productLearnModal = false
                        ]" class="button bg-white border bd-darkGrey small cycle pos-relative pos-top-right mb-1 outline">
                                    <v-icon small color="black">mdi-close</v-icon>
                                </v-btn>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <v-card class="shadeless" style="position: relative; top: -30px !important" :style="{'background-color': activeProduct == '2' ? '#ffffff' : 'transparent'}">
                <template v-if="activeProduct == '1'">
                    <?php include_once('products/healthcare.php'); ?>
                </template>
                <template v-if="activeProduct == '2'">
                    <?php include_once('products/mdb.php'); ?>
                </template>
                <template v-if="activeProduct == '3'">
                    <?php include_once('products/ccm.php'); ?>
                </template>
                <template v-if="activeProduct == '4'">
                    <?php include_once('products/nutrition.php'); ?>
                </template>
                <template v-if="activeProduct == '5'">
                    <?php include_once('products/home_care.php'); ?>
                </template>
                <template v-if="activeProduct == '6'">
                    <?php include_once('products/sp.php'); ?>
                </template>
                <template v-if="activeProduct == '7'">
                    <?php include_once('products/grants.php'); ?>
                </template>
                <template v-if="activeProduct == '8'">
                    <?php include_once('products/pm.php'); ?>
                </template>
            </v-card>
        </div>
    </v-dialog>
    </div>
</template>



<div class="sendingFeedback w3-hide" style=" border-radius: 21px !important;">
    <v-dialog class="sendingFeedback" v-model="contactUsModal" max-width="560" style=" border-radius: 21px !important;">
        <v-card color="white" class="p-6 contactUsModal" style="border-radius: 21px !important;">
            <div class="w3-row">
                <p class="w3-col text-left s6 w3-container fg-black text-bold" :style="{'font-size': isLargeScreen ? '1.5rem' : '1rem'}">
                    <v-chip class="pulse" v-if="contactView == 2" @click="contactView = 1">
                        Find Us
                    </v-chip>
                    <v-chip class="pulse" v-if="contactView == 1" @click="contactView = 2">
                        Email Us Directly
                    </v-chip>
                </p>
                <div class="w3-col s6 w3-container text-right">
                    <v-btn color="grey light" text fab @click="[
                    contactUsModal = false
                        ]" class="button bg-white border bd-darkGrey small cycle outline">
                        <v-icon small color="black">mdi-close</v-icon>
                    </v-btn>
                </div>
            </div>

            <template v-if="contactView == 1">


                <v-card flat tile class="black--text text-center">

                    <v-card-text class="black--text pt-0">
                        <v-icon small color="black">mdi-phone</v-icon>
                        <a href="tel:+255787193329" class="text-bold text-navanga">+255 787 193 329</a>
                        or
                        <a href="tel:+255789733400" class="text-bold text-navanga">+255 789 733 400</a>
                    </v-card-text>

                    <v-card-text>
                        <v-btn v-for="icon in smIcons" :key="icon" class="mx-4" icon>
                            <a :href="getSocialMediaLink(icon)" target="_blank">
                            <v-icon :size="icon === 'mdi-instagram' ? '28px' : '24px'" :color="icon === 'mdi-instagram' ? 'pink' : 'grey'">{{ icon }}</v-icon>
                            </a>
                        </v-btn>
                    </v-card-text>


                    <v-divider></v-divider>

                    <v-card-text class="black--text">
                        {{ new Date().getFullYear() }} — <strong>NAVANGA Healthcare Solutions</strong>
                    </v-card-text>
                </v-card>


            </template>
            <template v-else>
                <div class="w3-row">
                    <div class="w3-half w3-container">
                        <v-text-field class="neoTextField" ref="firstName" label="Your First Name" v-model="firstName" @keyup="" placeholder="Your First Name:" solo required>
                        </v-text-field>
                    </div>
                    <div class="w3-half w3-container">
                        <v-text-field class="neoTextField" ref="lastName" label="Your Last Name" v-model="lastName" @keyup="" placeholder="Your Last Name:" solo required>
                        </v-text-field>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-rest w3-container">
                        <v-text-field class="neoTextField" ref="phoneNumber" label="Your Phone Number" v-model="phoneNumber" @keyup="" placeholder="Your Phone no:" solo required>
                        </v-text-field>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-rest w3-container">
                        <v-text-field class="neoTextField" type="email" label="Your Email" v-model="email" @keyup="" placeholder="Your Email:" solo required>
                        </v-text-field>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-rest w3-container">

                        <v-textarea rows="2" class="" label="Please, write your comment here" v-model="enquiry" solo name="input-7-4" label="Your enquiry here..." value=""></v-textarea>

                    </div>
                </div>

                <div class="w3-row">
                    <div class="w3-col s6 w3-container">
                        <v-btn @click="[contactUsModal = false]" rounded color="red" dark>
                            Discard
                        </v-btn>
                    </div>
                    <div class="w3-col s6 w3-container text-right">
                        <v-btn @click="[loadAsync(), mailMe(), mailDevs()]" rounded color="primary" dark>
                            Send
                        </v-btn>
                    </div>
                </div>
            </template>

        </v-card>

    </v-dialog>
</div>
<div class="sendingFeedback w3-hide">
    <v-dialog class="sendingFeedback" v-model="sendingFeedbackModal" max-width="360" style="height: 40px; border-radius: 21px !important;">
        <v-card color="black" style="height: 40px; border-radius: 21px !important;">
            <v-btn v-if="asyncMsg == 1" color="blue darken-1" class="p-3 pos-fixed pos-center" text rounded @click="[]">
                Sending y<?php $call = new Call();
                            $call->letterOPL(); ?>ur enquiry
                <span class="fg-darkGray ml-3 mr-3">&#149</span>
                <span class="text-cap shimmer">Please Wait!</span>
            </v-btn>
            <v-btn v-if="asyncMsg == 2" color="blue darken-1" class="p-3 pos-fixed pos-center" text rounded @click="[]">
                Alm<?php $call = new Call();
                    $call->letterOPL(); ?>st d<?php $call = new Call();
                                                $call->letterOPL(); ?>ne
                <span class="fg-darkGray ml-3 mr-3">&#149</span>
                <span class="text-cap shimmer">Please Wait!</span>
            </v-btn>
        </v-card>

    </v-dialog>
</div>
<div class="loginFeedbackModal w3-hide">
    <v-dialog class="loginFeedback" v-model="loginFeedbackModal" max-width="360" style="height: 40px; border-radius: 21px !important;">
        <v-card color="black" style="height: 40px; border-radius: 21px !important;">
            <v-btn color="blue darken-1" class="p-3 pos-fixed pos-center" text rounded @click="[]">
                Signing y<?php $call = new Call();
                            $call->letterOPL(); ?>u In
                <span class="fg-darkGray ml-3 mr-3">&#149</span>
                <span class="text-cap shimmer">Please Wait!</span>
            </v-btn>
        </v-card>

    </v-dialog>
</div>

<div class="logoutFeedbackModal w3-hide">
    <v-dialog class="logoutFeedback" v-model="logoutFeedbackModal" max-width="360" style="height: 40px; border-radius: 21px !important;">
        <v-card color="black" style="height: 40px; border-radius: 21px !important;">
            <v-btn color="blue darken-1" class="p-3 pos-fixed pos-center" text rounded @click="[]">
                Logging y<?php $call = new Call();
                            $call->letterOPL(); ?>u Out
                <span class="fg-darkGray ml-3 mr-3">&#149</span>
                <span class="text-cap shimmer">Please Wait!</span>
            </v-btn>
        </v-card>

    </v-dialog>
</div>


<div id="regModal" class="w3-modal" style="z-index: 9 !important;">
    <template v-if="!loginScreen">
        <div class="w3-modal-content p-4" style="border-radius: 20px;">
            <div class="w3-container">

                <span style="z-index: 9 !important;" onclick="document.getElementById('regModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>


                <div class="text-h6 pt-6 pb-6">
                    Registration Form:
                    <span v-if="!loginScreen" class="ml-6 text-small">Existing User? Please
                        <span @click="loginScreen = true" class="text-navanga text-bold">Login </span> here...</span>
                    <span v-else class="ml-6 text-small">New User? Please
                        <span @click="loginScreen = false" class="text-navanga text-bold">Register </span> here...</span>
                </div>


                <template v-if="!otpSent">
                    <v-row>
                        <v-col cols="6" sm="6" md="6">
                            <v-text-field class="neoTextField" ref="firstName" label="Your First Name" v-model="firstName" @keyup="" placeholder="Your First Name:" solo required>
                            </v-text-field>

                        </v-col>
                        <v-col cols="6" sm="6" md="6">
                            <v-text-field class="neoTextField" ref="lastName" label="Your Last Name" v-model="lastName" @keyup="" placeholder="Your Last Name:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" type="email" label="Your Email" v-model="email" @keyup="" placeholder="Your Email:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" type="password" label="Your Password" v-model="password" @keyup="" placeholder="Your Email:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <!-- <div class="pt-6 pb-6">
                        Mobile No:
                    </div>
                    <v-row>
                        <v-col cols="12" sm="6" md="6" class="otpPre">
                            <v-otp-input class="text-bold disabled" v-model="countryCode" length="4" plain>
                            </v-otp-input>
                        </v-col>
                        <v-col cols="12" sm="6" md="6" class="otp">
                            <v-otp-input ref="phoneNo" v-model="phoneNumber" length="9" type="number" plain>
                            </v-otp-input>
                        </v-col>
                    </v-row> -->

                </template>
                <!-- <template v-else>
                    
                    <div class="pb-6">
                        Enter CODE from the sms sent to you:
                    </div>
                    <v-row>
                        
                        <v-col cols="12" class="otp m-0">
                        
                            <v-otp-input ref="otpCode" v-model="otpCode" length="6" type="number" plain>
                            </v-otp-input>
                        </v-col>
                    </v-row>
                    
                </template> -->
                <template v-if="!otpSent">
                    <!-- <div class="w3-row">
                    <div class="w3-col s6 w3-green w3-center">
                        <p>s6</p>
                    </div>
                    <div class="w3-col s6 w3-dark-grey w3-center">
                        <p>s6</p>
                    </div>
                </div> -->
                    <div class="text-center">

                        <v-row>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn onclick="document.getElementById('regModal').style.display='none'" @click="[]" rounded color="red" dark>
                                    Discard
                                </v-btn>
                            </v-col>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn @click="[regWithEmail()]" rounded color="primary" dark>
                                    Register
                                </v-btn>
                            </v-col>
                        </v-row>
                    </div>
                </template>

            </div>
        </div>
    </template>
    <template v-else>
        <div class="w3-modal-content p-4" style="border-radius: 20px; width: 400px">
            <div class="w3-container">

                <span style="z-index: 9 !important;" onclick="document.getElementById('regModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>


                <div class="text-h6 pt-6 pb-6">
                    Login form:
                    <span v-if="!loginScreen" class="ml-6 text-small">Existing User? Please
                        <span @click="loginScreen = true" class="text-navanga text-bold">Login </span> here...</span>
                    <span v-else class="ml-6 text-small">New User? Please
                        <span @click="loginScreen = false" class="text-navanga text-bold">Register </span> here...</span>
                </div>


                <template v-if="!otpSent">

                    <v-row>
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" type="email" label="Your Email" v-model="email" @keyup="" placeholder="Your Email:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" type="password" label="Your Password" v-model="password" @keyup="" placeholder="Your Email:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>

                </template>

                <template v-if="!otpSent">
                    <!-- <div class="w3-row">
                    <div class="w3-col s6 w3-green w3-center">
                        <p>s6</p>
                    </div>
                    <div class="w3-col s6 w3-dark-grey w3-center">
                        <p>s6</p>
                    </div>
                </div> -->
                    <div class="text-center">

                        <v-row>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn onclick="document.getElementById('regModal').style.display='none'" @click="[]" rounded color="red" dark>
                                    Discard
                                </v-btn>
                            </v-col>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn @click="[loginWithEmail()]" rounded color="primary" dark>
                                    Login
                                </v-btn>
                            </v-col>
                        </v-row>
                    </div>
                </template>
                <template v-if="otpSent">
                    <div class="text-center">

                        <v-row>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn @click="[logIn()]" rounded color="blue" dark>
                                    Resend
                                </v-btn>
                            </v-col>
                            <v-col cols="6" sm="6" md="6">
                                <v-btn @click="[confirm()]" rounded color="green" dark>
                                    Confirm
                                </v-btn>
                            </v-col>
                        </v-row>
                    </div>
                </template>

            </div>
        </div>
    </template>
</div>
<div class="registrationModal">
    <v-dialog class="registrationModal w3-hide" v-model="registrationModal" max-width="800" style="height: 400px; border-radius: 21px !important;">
        <v-card color="white" style="height: 400px; border-radius: 21px !important;">
            <v-toolbar color="white" class="neoNav">
                <v-toolbar-title color="black">
                    <!-- <v-btn color="pink darken-1" text rounded>
                            Aid<?php $call = new Call();
                                $call->letterOPL(); ?>r<span class="fg-black superscript">+</span><span
                                class="fg-gray">,</span>
                        </v-btn> -->
                    Registration Form
                </v-toolbar-title>
                <v-spacer></v-spacer>

                <v-btn color="grey light" text fab @click="registrationModal = false" class="button bg-white border bd-darkGrey small cycle pos-relative pos-top-right mb-1 outline">
                    <v-icon small color="black">mdi-close</v-icon>
                </v-btn>
            </v-toolbar>

            <v-container class='ghostWhite mt-6 pt-1 pl-3 pr-1 pb-1' style="border-radius: 0px;">
                <v-row style="height: 60px !important">
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field class="neoTextField" ref="firstName" label="Your First Name" v-model="firstName" @keyup="" placeholder="Your First Name:" solo required>
                        </v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field class="neoTextField" ref="lastName" label="Your Last Name" v-model="lastName" @keyup="" placeholder="Your Last Name:" solo required>
                        </v-text-field>
                    </v-col>
                </v-row>
                <p class="pl-2 pb-0 fg-dark" style="position: relative !important; bottom: -20px !important">Phone Number:</p>
                <v-row>
                    <v-col cols="2" class="otpPre">
                        <v-otp-input class="text-bold disabled" v-model="countryCode" length="4" plain>
                        </v-otp-input>
                    </v-col>
                    <v-col cols="8" class="otp">
                        <v-otp-input ref="phoneNo" v-model="phoneNumber" length="9" type="number" plain>
                        </v-otp-input>
                    </v-col>
                </v-row>

                <v-row style="height: 80px !important">
                    <v-col cols="12" sm="12" md="12">
                        <v-text-field class="neoTextField" type="email" label="Your Email" v-model="email" @keyup="" placeholder="Your Email:" solo required>
                        </v-text-field>
                    </v-col>
                </v-row>

                <template>
                    <div class="text-center">

                        <v-row style="height: 60px !important">
                            <v-col cols="12" sm="6" md="6">
                                <v-btn @click="[enquiring = false, confirm()]" rounded color="red" dark>
                                    Discard
                                </v-btn>
                            </v-col>
                            <v-col cols="12" sm="6" md="6">
                                <v-btn @click="[loadAsync(), mailMe(), mailDevs()]" rounded color="primary" dark>
                                    Send
                                </v-btn>
                            </v-col>
                        </v-row>
                    </div>
                </template>
            </v-container>
        </v-card>
        </v-card>

    </v-dialog>
</div>