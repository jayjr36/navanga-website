<?php
session_start();
include_once("server/connect.php");
include_once("jsFunctionsEmbedded.php");

?>
<!DOCTYPE html>
<html lang="en">

<?php $call = new Call();
$call->htmlHeadTag(); ?>



<body style="background: transparent !important;">
    <!-- best viewed in fullscreen/debug mode -->
    <!--NAV-->
    <?php include_once('customStyle.php'); ?>
    <?php $call = new Call();
    $call->externalJSSources();

    ?>



    <div id="app" style="height: 100% !important;">
        <v-app>
            <nav class=" w3-white p-0 w-100 navanga-nav" style="height: 120px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);">

                <div class="w-100">
                    <div class="w3-bar bg-navanga put-right w3-hide-small" style="margin-top: -12px;">
                        <div class="place-right">
                            <a onclick="window.location.href = document.location.pathname + 'n-agency/'" href="#" class="w3-bar-item fg-white m-0 text-bold">Register</a>
                            <a href="#" class="w3-bar-item fg-white m-0 text-bold">Partners</a>
                            <a href="javascript:void(0)" class="w3-bar-item fg-white m-0 text-bold ham">Contacts</a>
                            <a href="#" class="w3-bar-item fg-white m-0 text-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Search
                            </a>

                        </div>
                    </div>
                    <!-- <div v-if="loggedIn" class="displayName pos-fixed w3-hide" style="right: 20px !important; top: 1%; z-index: 2 !important;">

                        <div class="w3-dropdown-click v-btn--rounded">
                            <button @click="clickMe()" class="w3-button w3-black v-btn--rounded">{{username}}</button>
                            <div id="Demo" class="w3-dropdown-content ml-2">
                                <v-btn @click="logout()" class="ma-2 pos-fixed pos-top-right text-cap w3-red v-btn--rounded" style="top: 50px!important; right: 20px!important;">
                                    Logout
                                </v-btn>
                            </div>
                        </div>
                    </div> -->

                    <div>
                        <section class="flex_content mt-4">
                            <strong class="logo" @click="scrollToMe('app')">
                                <img height="44" width="150" src="img/logo.png?=34653453" class="navanga-logo c-pointer pos-fixed pl-3 pos-top-left" style="" />
                            </strong>
                        </section>
                        <!-- Trigger/Open The Modal -->
                        <div class="pos-fixed pos-top-right w3-hide-large mt-3">
                            <span onclick="window.location.href = document.location.pathname + 'n-agency/'" class="w3-bar-item fg-white m-0 text-bold c-pointer p-3 fg-dark">Register</span>
                            <span class="w3-bar-item fg-white m-0 text-bold c-pointer p-3 fg-dark" id="myBtn">Contacts</span>
                        </div>


                        <!-- The Modal -->
                        <div id="myModal" class="modal bg-dark">

                            <!-- Modal content -->
                            <div class="modal-content fg-white pos-fixed bg-dark w-100 h-100 w3-animate-left" style="top: -70px">
                                <span class="close fg-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                    </svg>
                                </span>

                                <div class="w3-display-middle">

                                    <strong class="logo ml-6 mt-9"><img height="44" width="150" src="img/logo-w.png" class="navanga-logo c-pointer" style="height: 55px !important;
         width: 240px !important;" />
                                    </strong>
                                    <br><br>
                                    <!-- <h2>MAKE MORE, DO LESS</h2>
        <p>Ready to get started? Apply today and see if you're a good fit for our team!</p>
        <br><br><br> -->
                                    <h3 class="ml-9 fg-light">Contact Us:</h3>
                                    <br />
                                    <h6 class="ml-9 fg-light">Ruvu 18 Street, Mikocheni B</h6>
                                    <br />
                                    <h6 class="ml-9 fg-light">P.O Box. 77173</h6>
                                    <br />
                                    <h6 class="ml-9 fg-light">Dar es Salaam, Tanzania</h6>
                                    <ul class="w3-ul">
                                        <li class="mt-3" style="border-bottom: none;"><a href="emailto:">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-at pos-relative fg-white" viewBox="0 0 26 26" style="top: 12.3px;">
                                                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                                </svg>
                                                admin@navangahealthcare.co.tz
                                            </a></li>
                                        <li><a href="tel:"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telephone-fill pos-relative fg-white" viewBox="0 0 26 26" style="top: 12.3px;">
                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>+255 787 193 329</a> | <a href="tel:"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telephone-fill pos-relative fg-white" viewBox="0 0 26 26" style="top: 12.3px;">
                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>+255 789 733 400</a></li>


                                    </ul>


                                </div>

                            </div>

                        </div>
                        <section class="flex_content nav_content w3-hide-small" id="nav_content" style="left: 45% !important;">

                            <div class="put-right" style="top: 7px !important; z-index: 1 !important">
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-hover-none transP h6" @click="scrollToMe('app')">
                                        Home
                                    </button>
                                </div>
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-hover-none transP h6" @click="scrollToMe('about_us')">
                                        About Us
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-down pt-2 text-bold" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg> -->
                                    </button>
                                    <!-- <div class="w3-dropdown-content w3-bar-block text-center w3-border bubble3">
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Introduction</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Mission</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Vision</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Values</a>
                                    </div> -->
                                </div>
                                <div class="w3-dropdown-hover">
                                    <button class="w3-button w3-hover-none transP h6" @click="scrollToMe('why_us')">
                                        Why Us
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-down pt-2 text-bold" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg> -->
                                    </button>
                                    <!-- <div class="w3-dropdown-content w3-bar-block text-center w3-border bubble3">
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Introduction</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Mission</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Vision</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Values</a>
                                    </div> -->
                                </div>
                                <div class="w3-dropdown-hover p-0">
                                    <button class="w3-button w3-hover-none transP h6" @click="scrollToMe('scrollToProducts')">
                                        Our Products
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-down pt-2 text-bold" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg> -->
                                    </button>

                                    <!-- <div class="w3-dropdown-content w3-bar-block w3-border bubble3">
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12" @click="scrollToMe('scrollToProducts')">Products</a>
                                        <a href="#" class="w3-bar-item fg-dark text-bold text-center text-bold pl-12">Approaches</a>

                                        <a href="#" class="w3-bar-item fg-dark text-bold text-center text-bold pl-12">Projects</a>

                                        <a href="#" class="w3-bar-item fg-dark text-bold text-center text-bold pl-12">Why Us</a>

                                    </div> -->
                                </div>
                                <div class="w3-dropdown-hover p-0">
                                    <button class="w3-button w3-hover-none transP h6" @click="scrollToMe('presence')">
                                        Our Presence
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-down pt-2 text-bold" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg> -->
                                    </button>
                                    <!-- <div class="w3-dropdown-content w3-bar-block w3-border bubble3">
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Countries</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Regions</a>
                                        <a href="#" class="w3-bar-item fg-dark text-center text-bold pl-12">Districts</a>
                                    </div> -->
                                </div>
                                <div class="w3-dropdown-hover mr-12">
                                    <button class="w3-button w3-hover-none transP h6">
                                        News & Events
                                    </button>
                                    <!-- <div class="w3-dropdown-content w3-bar-block w3-border bubble3">
                                <a href="#" class="w3-bar-item fg-dark text-bold">Link 1</a>
                                <a href="#" class="w3-bar-item fg-dark text-bold">Link 2</a>
                                <a href="#" class="w3-bar-item fg-dark text-bold">Link 3</a>
                            </div> -->
                                </div>
                            </div>
                        </section>
                        <!-- <section class="flex_content">
                    <a href="javascript:void(0)" class="ham"><i class="fa fa-bars"></i></a>
                </section> -->
                    </div>

                </div>

            </nav>



            <!--MENU-->
            <menu id="menu" class="bg-black pt-12" style="top: 0px;">

                <span @click="enquiring = false" class="close fg-light" style="top: 10px !important; right: 10px !important">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </span>

                <strong class="logo ml-8"><img height="44" width="150" src="img/logo-w.png" class="navanga-logo c-pointer" style="" />
                </strong>
                <div v-if="!enquiring">
                    <br><br>
                    <h6 class="ml-9 fg-light">Ruvu 18 Street, Mikocheni B</h6>
                    <br />
                    <h6 class="ml-9 fg-light">P.O Box. 77173</h6>
                    <br />
                    <h6 class="ml-9 fg-light">Dar es Salaam, Tanzania</h6>
                    <ul class="fg-light">
                        <li><a href="emailto:">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-at pos-relative fg-white" viewBox="0 0 26 26" style="top: 12.3px;">
                                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                </svg>
                                admin@navangahealthcare.co.tz
                            </a></li>
                        <li>
                            <a href="tel:" style="font-size: 14px !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telephone-fill pos-relative fg-white" viewBox="0 0 26 26" style="top: 12.3px;">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>+255 787 193 329</a> | <a href="tel:" style="font-size: 14px !important;">+255 789 733 400</a>
                        </li>
                        <li></li>

                    </ul>
                    <template>
                        <div class="text-center">
                            <v-btn class="text-cap" @click="enquiring = true" rounded color="primary" dark>
                                Contact Us
                            </v-btn>
                        </div>
                    </template>
                </div>

                <div v-else>
                    <br><br>
                    <v-row class="mt-0 mb-0" style="height: 60px !important">
                        <v-col cols="12" sm="6" md="6">
                            <v-text-field class="neoTextField" ref="firstName" label="Your First Name" v-model="firstName" @keyup="" placeholder="Your First Name:" solo required>
                            </v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="6">
                            <v-text-field class="neoTextField" ref="lastName" label="Your Last Name" v-model="lastName" @keyup="" placeholder="Your Last Name:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row class="mt-0 mb-0" style="height: 60px !important">
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" ref="phoneNumber" label="Your Phone Number" v-model="phoneNumber" @keyup="" placeholder="Your Phone no:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row class="mt-0 mb-0" style="height: 80px !important">
                        <v-col cols="12" sm="12" md="12">
                            <v-text-field class="neoTextField" type="email" label="Your Email" v-model="email" @keyup="" placeholder="Your Email:" solo required>
                            </v-text-field>
                        </v-col>
                    </v-row>
                    <v-row class="mt-0 mb-0">
                        <v-col cols="12" sm="12" md="12" class="pt-0 pb-0">
                            <v-textarea rows="4" class="" label="Please, write your comment here" v-model="enquiry" solo name="input-7-4" label="Your enquiry here..." value=""></v-textarea>
                        </v-col>
                    </v-row>
                    <template>
                        <div class="text-center">

                            <v-row class="mt-0 mb-0" style="height: 60px !important">
                                <v-col cols="12" sm="6" md="6">
                                    <v-btn @click="[enquiring = false]" rounded color="red" dark>
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
                </div>
            </menu>


            <!--HEADER-->


            <div class="bodyGradDark" style="position: absolute; width: 100%; height: 3000px !important; left: 0"></div>
            <header class="flex mt-12">
                <section class="flex_content pb-0">
                    <article class="padding_1x">
                        <h1 class="big text-cap text-shadow text--lg--h6 font-weight-bold" style="color: white !important;">Reliable Solutions<br> For Healthcare
                            Challenges</h1>
                        <p class="fg-white" style="font-family: 'Gowun Batang', sans-serif !important;">
                            Navanga Healthcare Solutions Provides Innovative, Technological,
                            Healthcare Solutions to Companies, Organizations, Individuals, Groups and
                            Stakeholders across Tanzania, Africa and around the World...
                        </p>
                        <!-- <a href="#" class="btn btn_1">Apply Free for today</a> -->



                        <div id="mouse-scroll">
                            <div class="mouse">
                                <div class="mouse-in"></div>
                            </div>
                            <div>
                                <span class="down-arrow-1"></span>
                                <span class="down-arrow-2"></span>
                                <span class="down-arrow-3"></span>
                            </div>
                        </div>





                    </article>
                </section>

            </header>


            <div class="pl-0 p-6 p-3-md p-5-lg p-8-xl">
                <div id="about_us" class="transP pb-16 mb-12">
                </div>
                <div class="ml-8">
                    <!-- color="rgba(255,255,255,0.9)" -->
                    <div class="w3-container text-bold h3 p-6 fg-light ml-6 text-shadow">About Us</div>
                    <v-sheet border="md" class="pa-6 text-white rounded-xl text-black pb-2" style="background: linear-gradient(to right bottom,rgba(255, 255, 255, 0.9),rgba(255, 255, 255, 0.1));z-index: 3;backdrop-filter: blur(2rem);" max-width="100%">

                        <!-- Add a container for reCaptcha -->
                        <div class="w3-bottom" id="recaptcha-container"></div>
                        <p class="mb-8 text-h6 fg-dark justified" style="margin-top: -10px !important;font-family: 'Gowun Batang', sans-serif !important;">

                        Navanga Healthcare Solutions; provides innovative, technological, 
                        healthcare solutions to corporates, companies, organizations, individuals, 
                        and stakeholders across Tanzania, Africa and around the World. Our products include consultancy on healthcare,
                         multidisciplinary consultation board, clinical case management services, wellness and 
                         schools programs, home healthcare, grants applications, medical and pharmaceutical supplies.  

                        </p>


                        <p class="mb-8 text-h6 fg-dark justified" style="margin-top: -20px !important;font-family: 'Gowun Batang', sans-serif !important;">
                            <span class="">Navanga</span> has a wide range of expertise in providing consultations on healthcare including leadership,
                            ergonomics, human resources, skincare for optimized skin health, pharmaceuticals, residential
                            nursing care facilities, medical and health safety programs, laboratory, hospital care services,
                            psychological counselling programs, nutritional counselling, and support.
                        </p>


                        <p class="text-h5 fg-dark text-navanga mb-4" style="margin-top: -20px !important;font-family: 'Gowun Batang', sans-serif !important;">
                            Mission:
                            <span class="mb-8 text-h6 fg-dark justified" style="font-family: 'Gowun Batang', sans-serif !important;">
                                Providing the optimal, tailored, and innovative healthcare solutions
                            </span>
                        </p>
                        <p class="text-h5 fg-dark text-navanga mb-4" style="margin-top: -10px !important;font-family: 'Gowun Batang', sans-serif !important;">
                            Vision:
                            <span class="mb-8 text-h6 fg-dark justified" style="font-family: 'Gowun Batang', sans-serif !important;">
                                Reliable
                                healthcare
                                solutions for all
                            </span>
                        </p>

                        <p class="text-h5 fg-dark text-navanga mb-4" style="margin-top: -10px !important;font-family: 'Gowun Batang', sans-serif !important;">
                            Core Values:
                            <span class="mb-8 text-h6 fg-dark justified" style="font-family: 'Gowun Batang', sans-serif !important;">
                                Excellence, Innovation, Dignity, Integrity, Professionalism
                            </span>
                        </p>



                    </v-sheet>
                </div>

            </div>

            <div id="why_us" class="transP pb-6 mb-16">
            </div>


            <main class="transP">

                <div class="divisions division_1 padding_2x">
                    <div class="flex">
                        <section class="flex_content padding_2x">
                            <div class="w3-container text-bold h3 p-6 fg-light ml-6 text-shadow">Why Choose Us?</div>
                            <p class="mb-8 text-h6 fg-dark w3-round-large" style="padding: 32px !important; background: linear-gradient(to right bottom,rgba(255, 255, 255, 0.9),rgba(255, 255, 255, 0.1));z-index: 3;backdrop-filter: blur(2rem);font-family: 'Gowun Batang', sans-serif !important;">
                                <span class="fg-darkGray">&#149</span> We are providing solutions beyond services
                                <br>
                                <span class="fg-darkGray">&#149</span> Proactive interesting healthcare innovations
                                <br>
                                <span class="fg-darkGray">&#149</span> Co-creation approach for important daily life needs
                                <br>
                                <span class="fg-darkGray">&#149</span> Creative and innovative products
                                <br>
                                <span class="fg-darkGray">&#149</span> Experts underwent vetting before engagement
                                <br>
                                <span class="fg-darkGray">&#149</span> High quality processes through end to end checks
                                <br>
                                <span class="fg-darkGray">&#149</span>
                                <a href="javascript:void(0)" class="text-navanga text-h6 m-0 ham" style="font-family: 'Gowun Batang', sans-serif !important;">
                                    Contact us
                                </a>
                                for cost effective healthcare solutions
                            </p>

                            <!-- <a href="#" class="btn btn_1 text-bold">
                            Reach Out
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-right pt-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </a> -->
                        </section>
                        <section class="flex_content padding_1x">
                            <article class="padding_2x glassmorph">
                                <aside class="fixed_flex">

                                </aside>
                                <h3 class="small fg-dark p-2 pb-0" style="font-family: 'Gowun Batang', sans-serif !important;">
                                    Customized products; Solutions that ties with the customers specific challenges, need and situations.</h3>
                            </article>
                        </section>
                    </div>

                    <template>


                        <!-- <v-container class="pos-relative w3-hide" style="z-index: 1;">
                            <v-row dense>

                                <v-col v-for="(item, i) in items" :key="i" cols="12" sm="12" md="6" lg="6">

                                    <v-card :color="item.color" dark class="glassmorph-effect">
                                        <v-img class="white--text align-end" height="200px" :src="item.src">
                                            <v-card-title class="text-h6 justified" style="background-color: rgba(0, 0, 0, 0.8);font-family: 'Gowun Batang', sans-serif !important;" v-text="item.title"></v-card-title>
                                        </v-img>

</v-card>
                                </v-col>
                            </v-row>
                        </v-container> -->

                    </template>


                </div>
            </main>




            <div id="scrollToProducts" class="transP p-9 p-3-md p-5-lg p-8-xl">
            </div>
            <div class="transP">
                <template>
                    <?php include_once('screenModals.php'); ?>
                    <h3 class="w3-container text-bold h3 p-6 fg-light ml-6 text-shadow mt-12">Products</h3>
                    <div class="w3-row">

                        <div class="w3-quarter w3-container mb-3 optimus" v-for="(product, index) in products" :key="index">
                            <div class="optimus-card">
                                <div class="card-overlay">
                                    <h5 class="px-4 pt-4 text-shadow" style="position: relative; z-index: 1 !important;">
                                        {{ product.title }}
                                    </h5>
                                </div>
                                <div class="optimus-content c-pointer">


                                    <v-dialog v-model="dialog" width="auto">
                                        <template @click="dialog = true" v-slot:activator="{ props }">
                                            <ul class="w3-ul w3-hide-small" style="width:100%; position: relative;top: -40px; padding-left: 0 !important;">

                                                <div v-for="(check, i) in product.checkList" class="text-left">
                                                    <li><span class="text-small p-3">&#11044;</span>{{check}}</li>
                                                </div>
                                                <v-btn @click="[activeProduct = index+1,productLearnModal = true]" class="mt-4 w3-white rounded-xl text-bold" v-bind="props">
                                                    Learn more
                                                </v-btn>
                                            </ul>
                                            <ul class="w3-ul w3-hide-large" style="width:100%;">

                                                <div v-for="(check, i) in product.checkList" class="text-left">
                                                    <li><span class="text-small p-3">&#11044;</span>{{check}}</li>
                                                </div>
                                                <v-btn @click="[activeProduct = index+1,productLearnModal = true]" class="mt-4 w3-white rounded-xl text-bold" v-bind="props">
                                                    Learn more
                                                </v-btn>
                                            </ul>


                                        </template>
                                    </v-dialog>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <div id="news_events" class="transP p-6 p-3-md p-5-lg p-8-xl">
                </div>
            </div>

            <div hidden class="transP pl-0 p-6 p-3-md p-5-lg p-8-xl pr-0">


                <div class="transP">
                    <div class="divisions division_1 padding_2x">
                        <div class="flex">
                            <section class="flex_content padding_2x" style="z-index: 1">
                                <div class="w3-container text-bold h3 p-6 fg-light ml-6 text-shadow">Upcoming Event</div>
                                <a href="#" class="btn btn_1 text-bold h3 pb-6 pt-4 fg-light text-shadow">
                                    Register Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chevron-right pt-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </section>
                            <section class="flex_content padding_1x" style="z-index: 1">
                                <img class="w3-round-large" src="img/whd.png?=456456" alt="" height="100%" width="100%">
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="transP pl-0 p-6 p-3-md p-5-lg p-8-xl pr-0">

                <!-- <v-sheet hidden class="d-flex transP align-center justify-center flex-wrap text-center mx-auto" elevation="0" height="250" rounded max-width="800" width="100%">
                    <div>
                        <h2 class="text-h4 font-weight-black fg-light text-shadow">Our Partners</h2>

                        <div class="text-h5 font-weight-medium mb-2 fg-light">
                            Coming Soon!
                        </div>


                    </div>
                </v-sheet> -->

                <template>
                    <div id="presence" class="p-16" style="position: absolute;bottom: 468px;">
                    </div>
                    <v-card class="pos-relative" style="bottom: -62px !important; border-radius: 0px !important;">
                        <p class="text-h5 font-weight-medium pt-5 fg-dark text-center">Our Presence</p>
                        <v-card-text>
                            <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.6228471980583!2d39.245465914536585!3d-6.762584895095667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4dfc59c6c537%3A0x52c24bfacb790a72!2sNavanga%20HealthCare%20Solutions!5e0!3m2!1sen!2sus!4v1660764054642!5m2!1sen!2sus" allowfullscreen=""></iframe>
                        </v-card-text>
                    </v-card>
                </template>

            </div>
            <div class="transP pl-0 p-6 p-3-md p-5-lg p-8-xl pr-0 pb-0">


                <div class="w3-center fg-white p-6 p-3-md p-5-lg p-8-xl footer_" style="height: auto !important; width: 100%">
                    <!-- Footer -->
                    <footer id="footer" class="w3-center w3-padding-48 w3-large">
                        <div class="social-media ">
                            <a class="smLink m-6 fg-light" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                            <a class="smLink m-6 fg-light" href="https://api.whatsapp.com/send?phone=+255787193329">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                            </a>
                            <a class="smLink m-6 fg-light" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </a>
                            <a class="smLink m-6 fg-light" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </div>
                        <h6 class="text-center mt-6 pt-3">&#169;<span id="copyright"></span></h6>
                        <div class="text-center fg-white mt-6"><span class="text-navanga-hover" @click="goTo('./privacy')">Privacy Policy</span> | <span class="c-pointer text-navanga-hover" @click="goTo('terms_of_use')">Terms & Conditions</span> | <span class="text-navanga-hover" @click="goTo('p_n_t')">People and Talents</span></div>

                    </footer>
                </div>

            </div>


    </div>

    <img style="opacity: 0 !important;" src="https://navangahealthcare.co.tz/img/logo.ico" height="20" alt="Logo">

    <div>
        <!--MAIN-->





        <!--ADDITIONAL-->
        <!-- <div class="overlay"></div> -->
        <!-- <div class="cursor"></div> -->
        </v-app>
    </div>

    <!-- Javascript goes on here-->

    <script type="module">
        import {
            initializeApp
        } from 'https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js'

        // If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
        import {
            getAnalytics
        } from 'https://www.gstatic.com/firebasejs/9.22.2/firebase-analytics.js'

        // Add Firebase products that you want to use
        import {
            getAuth,
            RecaptchaVerifier,
            signInWithPhoneNumber,
            onAuthStateChanged,
            updateProfile,
            isSignInWithEmailLink,
            signInWithEmailLink,
            sendSignInLinkToEmail,
            createUserWithEmailAndPassword,
            signInWithEmailAndPassword,
            sendEmailVerification
        } from 'https://www.gstatic.com/firebasejs/9.22.2/firebase-auth.js'

        import {
            getFirestore,
            collection,
            doc,
            setDoc,
            getDoc,
            serverTimestamp
        } from 'https://www.gstatic.com/firebasejs/9.22.2/firebase-firestore.js';
        // ...

        // TODO: Replace the following with your app's Firebase project configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCAQPWrCy_jiUKCqzXLUdQhCdqwmi-mquM",
            authDomain: "navangahealthcare.firebaseapp.com",
            projectId: "navangahealthcare",
            storageBucket: "navangahealthcare.appspot.com",
            messagingSenderId: "1028594049756",
            appId: "1:1028594049756:web:42cbd23740f9e4fefb0a19",
            // measurementId: "G-5FY19WE9JT"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        // Initialize Cloud Firestore and get a reference to the service
        const db = getFirestore(app);
        // Get a list of cities from your database
        const auth = getAuth(app);
        // Generate a phone number auth provider


        /*  const recaptchaVerifier = new RecaptchaVerifier(
             "recaptcha-container", {
                 'size': 'invisible',
                 callback: function(response) {
                     submitPhoneNumberAuth();
                 }
             }, auth
         ); */




        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                contactView: 1,
                smIcons: [
                    'mdi-facebook',
                    'mdi-twitter',
                    'mdi-linkedin',
                    'mdi-instagram',
                ],
                activeProduct: '',
                productOfInterest: '',
                contactUsModal: false,
                isLargeScreen: false,
                products: [{
                        title: 'Healthcare Solutions',
                        description: 'Consultancy',
                        checkList: ['Public Health', 'Medical Care', 'HR Health'],
                        backgroundImage: 'url("https://img.freepik.com/free-photo/person-getting-injured_53876-24839.jpg?w=1060&t=st=1678994076~exp=1678994676~hmac=92c55fba4283ace0ddd2b788ff65564391eb6704c10d9914e7a0896aab634f11")',
                    },
                    {
                        title: 'Multi-Disciplinary Board',
                        description: 'Consultancy',
                        checkList: ['Health Opinions', 'Treatment Plans', 'Corporate Advise'],
                        backgroundImage: 'url("https://img.freepik.com/free-photo/wellness-lifestyle-refresh-flower_53876-127634.jpg?w=1380&t=st=1678993799~exp=1678994399~hmac=d013b9d3f071a59e4777135c4debf492916f6806de941ec8b08b80f36b6e90ad")',
                    },
                    {
                        title: 'Clinical Case Management',
                        description: 'Consultancy',
                        checkList: ['Informed Care', 'Onestop Horizon', 'Treatment Tracks'],
                        backgroundImage: 'url("https://img.freepik.com/free-photo/aerial-view-doctor-writing-patient-daily-report-checklist_53876-14932.jpg?w=1060&t=st=1678994536~exp=1678995136~hmac=c6f99f2a31d9ec7c0927f8439c7fe291406b90302756f9aa94900091ac528f8b")',
                    },
                    {
                        title: 'Wellness Programs',
                        description: 'Wellness',
                        checkList: ['Nutrition Services', 'Health Talks', 'Mental Health'],
                        backgroundImage: 'url("https://img.freepik.com/premium-photo/senior-man-volunteer-nurse-support-caregiver-help-with-elderly-medical-nursing-home-smile-happy-trust-community-employee-working-healthcare-charity-house-interior-living-room_590464-85939.jpg?w=740")',
                    },
                    {
                        title: 'Home Care',
                        description: 'Services',
                        checkList: ['Residential Nursing', 'Home Counseling', 'Palliative Support'],
                        backgroundImage: 'url("https://img.freepik.com/premium-photo/basket-full-vegetables_1112-316.jpg?w=740&t=st=1691530215~exp=1691530815~hmac=477116640c4e10ebb6ee341d3516357a45db4f2228d77f6f12799c58b47c0f03")',

                    },
                    {
                        title: 'Schools Programs',
                        description: 'Wellness',
                        checkList: ['Adolescent Health', 'Schools Wellness', 'Youth & Technology'],
                        backgroundImage: 'url("https://img.freepik.com/premium-photo/delivery-box-courier-man-car-with-checklist-ecommerce-orders-package-happy-smile-logistics-cargo-guy-driver-with-clipboard-parcel-online-shopping-transportation_590464-146701.jpg")',
                    },
                    {
                        title: 'Grants Applications',
                        description: 'Wellness',
                        checkList: ['Proposal Writing', 'Donnors Budgets', 'Strategic Plans'],
                        backgroundImage: 'url("https://img.freepik.com/premium-photo/man-suit-with-tie-looking-up_759095-22821.jpg?w=360")',
                    },
                    {
                        title: 'Pharmaceutical Medical',
                        description: 'Supplies',
                        checkList: ['Pharmacy Supplies', 'Medical Equipment', 'Drug Deliveries'],
                        backgroundImage: 'url("https://img.freepik.com/free-photo/wellness-lifestyle-refresh-flower_53876-127634.jpg?w=1380&t=st=1678993799~exp=1678994399~hmac=d013b9d3f071a59e4777135c4debf492916f6806de941ec8b08b80f36b6e90ad")',
                    },
                ],
                productLearnModal: false,
                scrolledToBottom: false,
                enquiring: false,
                registrationModal: false,
                dialog: false,
                loggedIn: false,
                loginScreen: false,
                otpSent: false,
                sendingFeedbackModal: false,
                logoutFeedbackModal: false,
                loginFeedbackModal: false,
                asyncMsg: 1,
                username: '',
                usernameTemp: '',
                firstName: '',
                lastName: '',
                phoneNumber: '',
                countryCode: '+255',
                enquiry: '',
                emailTemp: '',
                email: '',
                password: '',
                otpCode: "",
                items: [{
                        color: '#1F7087',
                        src: 'https://img.freepik.com/free-photo/beautiful-african-american-woman-looks-attentively-through-round-glasses_273609-45615.jpg?w=740&t=st=1685695262~exp=1685695862~hmac=c04a0fe29360de51985a11e11e4e067e3b3fc6e31823b0643d1ebea334440431',
                        title: 'Dignity, integrity, excellence, value and professionalism',
                        artist: '',
                    },
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/free-photo/risk-protection-eliminating-risk-top-view_185193-110239.jpg?w=740&t=st=1685191888~exp=1685192488~hmac=7ff3c18d99c6d06c723bd7ad2893963645c263744c585293a92b5bef7baba79f',
                        title: 'Proactive interesting innovations',
                        artist: '',
                    },
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/free-photo/tourism-content-luggage-bag-icon_53876-120342.jpg?w=740&t=st=1685191972~exp=1685192572~hmac=49e5da5977b36cde0dac9636b40d7ab12edcd7cf62eb29a5d4d20e44ab5e1bbd',
                        title: 'Important daily life needs',
                        artist: '',
                    },
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/premium-photo/close-up-hands-african-businessman-working-calculator-modern-office_360066-14595.jpg?w=740',
                        title: 'Cost effectiveness',
                        artist: '',
                    },
                    /* {
                        color: '#952175',
                        src: 'https://img.freepik.com/free-photo/beautiful-young-woman-enjoying-day-office_23-2148461463.jpg?t=st=1685706022~exp=1685706622~hmac=0dbae8b3d989c2f19c9e5b14330d2cb697c382b7840e50e0f799f0cbc99eacb2',
                        title: 'Customized Products; Solutions That Ties With The Customers Specific Challenges, Need and Situations',
                        artist: '',
                    }, */
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/premium-photo/creative-mind-3d-illustration-with-light-bulb-generative-ai_549702-684.jpg?w=740',
                        title: 'Creative and innovative products',
                        artist: '',
                    },
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/premium-photo/young-african-female-doctor-using-ultrasound-machine-clinic_161094-3679.jpg',
                        title: 'Experts underwent Navanga vetting system before engagements',
                        artist: '',
                    },
                    {
                        color: '#952175',
                        src: 'https://img.freepik.com/free-photo/credit-check-financial-accounting-request-form-concept_53876-133998.jpg?t=st=1685704864~exp=1685705464~hmac=ed370049128f1a576079f56ad028ec610284bf62b6402aad2d1c6b72ed2de8c8',
                        title: 'High quality process, end-to-end checks and balance ',
                        artist: '',
                    },

                ],
            },
            watch: {
                activeProduct($then, $now){
                    console.log($then);
                    if($then == 1){
                        this.productOfInterest = 'Healthcare Solutions';
                    } else if($then == 2){
                        this.productOfInterest = 'Multi-Disciplinary Board';
                    } else if($then == 3){
                        this.productOfInterest = 'Clinical Case Management';
                    } else if($then == 4){
                        this.productOfInterest = 'Wellness Programs';
                    } else if($then == 5){
                        this.productOfInterest = 'Home Care';
                    } else if($then == 6){
                        this.productOfInterest = 'Schools Programs';
                    } else if($then == 7){
                        this.productOfInterest = 'Grants Applications';
                    } else if($then == 8){
                        this.productOfInterest = 'Pharmaceutical Medical';
                    }
                }
            },
            methods: {
                getSocialMediaLink(icon) {
                    // Replace with actual URLs for each social media platform
                    const socialMediaLinks = {
                        'mdi-facebook': 'https://www.facebook.com/navangahealthcare',
                        'mdi-twitter': 'https://twitter.com/navanga',
                        'mdi-linkedin': 'https://www.linkedin.com/in/navangahealthcare',
                        'mdi-instagram': 'https://www.instagram.com/navangapharmacy'
                    };

                    return socialMediaLinks[icon];
                },
                applyStyle($childElement) {
                    setTimeout(function() {
                        var childElement = document.querySelector($childElement);

                        if (childElement) {
                            var parentElement = childElement.parentNode;
                            parentElement.style.setProperty("border-radius", "21px", "important");
                        }
                    }, 0);
                },
                handleMediaQuery(mediaQuery) {
                    this.isLargeScreen = mediaQuery.matches;
                    this.activeSidebar = mediaQuery.matches;
                },
                getBrowserName() {
                    const userAgent = navigator.userAgent;

                    if (userAgent.includes("Chrome")) {
                        return "Google Chrome";
                    } else if (userAgent.includes("Firefox")) {
                        return "Mozilla Firefox";
                    } else if (userAgent.includes("Edge")) {
                        return "Microsoft Edge";
                    } else if (userAgent.includes("Safari") && !userAgent.includes("Chrome")) {
                        return "Apple Safari";
                    } else if (userAgent.includes("Opera")) {
                        return "Opera";
                    } else {
                        return "Unknown Browser";
                    }
                },
                generateCustomIdentifier() {
                    // Generate a unique identifier using a random string and the current timestamp
                    return Math.random().toString(36).substr(2) + Date.now().toString(36);
                },
                async logPageVisit() {
                    var auth = getAuth();

                    // Check if the user is already registered by checking the local storage
                    const deviceId = Cookies.get('deviceId');
                    const deviceName = this.getBrowserName();

                    // Generate a new device ID if it doesn't exist or is invalid
                    const newDeviceId = deviceId || this.generateCustomIdentifier();

                    // Save the new device ID in local storage to mark the user as registered
                    Cookies.set('deviceId', newDeviceId);

                    onAuthStateChanged(auth, async (user) => {
                        if (!user) {
                            const eventsCollection = collection(db, 'page_visits');

                            // Generate a custom identifier for the visit (you can use any logic you prefer)
                            const visitId = newDeviceId;

                            // Check if the document with the generated ID already exists in the collection
                            const visitDocRef = doc(eventsCollection, visitId);
                            const docSnapshot = await getDoc(visitDocRef);

                            await setDoc(visitDocRef, {
                                timestamp: serverTimestamp(),
                                deviceID: newDeviceId,
                                deviceName: deviceName,
                                event: 'page_visit'
                            });
                        }
                    });
                },
                disableBrowserBackButton() {

                    history.pushState(null, document.title, location.href);

                    window.addEventListener('popstate', (event) => {

                        if (this.editPatientModal) {
                            reportForOrganization = false, patientAllGivenMedicines = [],
                                patientAllData = [],
                                addedParameterResults = [], labResultsMatch = []
                        };
                        history.pushState(null, document.title, location.href);
                    });

                },
                mailMe() {
                    //this.sendingFeedbackModal = true;

                    let extra = this.productLearnModal ? "<br>Product of Interest: " + this.productOfInterest : "";

                    $.post("server/realtime.php", {
                        mailMe: true,
                        to: "developer@navangahealthcare.co.tz",
                        from: this.email,
                        name: this.firstName + " " + this.lastName,
                        subject: "Customers Enquiries",
                        msg: this.enquiry + "<br><br>Phone number: " + " " + this.phoneNumber + extra,

                    }).then(
                        (response) => {
                            //console.log(response);

                            let tempEmail = this.email;



                            // this.runToast(5000, JSON.parse(response).msg, " glassmorph text-h3 fg-dark ");


                            /*  */
                            $.post("server/realtime.php", {
                                sendFeedBack: true,
                                from: "no-reply@navangahealthcare.co.tz",
                                to: tempEmail,
                                name: "Navanga Healthcare Solutions",
                                subject: "Customer Reach Feedback",
                                msg: "Thank you for reaching out to Navanga Healthcare Solutions, we will revert shortly.",

                            }).then(
                                (response) => {
                                    console.log(response);

                                    setTimeout(() => {
                                        // Run after 100 milliseconds
                                        this.email = '';
                                    }, 5000);
                                    //this.runToast(5000, JSON.parse(response).msg, " glassmorph text-h3 fg-dark ");


                                },
                                (xhr) => {
                                    console.log(xhr.status, xhr.statusText);
                                }
                            );
                            /*  */
                        },
                        (xhr) => {
                            console.log(xhr.status, xhr.statusText);
                        }
                    );
                },
                mailDevs() {

                    let extra = this.productLearnModal ? "<br>Product of Interest: " + this.productOfInterest : "";

                    $.post("server/realtime.php", {
                        mailDevs: true,
                        to: "developer@navangahealthcare.co.tz",
                        from: this.email,
                        name: this.firstName + " " + this.lastName,
                        subject: "Potential Customer Reaching Out",
                        msg: this.enquiry + "<br><br>Phone number: " + " " +  this.phoneNumber + extra,

                    }).then(
                        (response) => {
                            console.log(response);

                            this.asyncMsg = 2;

                            this.loadAsync();

                            /* this.firstName = '';
                            this.lastName = '';
                            this.phoneNumber = '';
                            this.enquiry = ''; */

                            let tempEmail = this.email;

                            //



                        },
                        (xhr) => {
                            console.log(xhr.status, xhr.statusText);
                        }
                    );
                },
                async confirm() {

                    this.$nextTick(() => {
                        this.loginFeedbackModal = true;
                    });

                    await new Promise(resolve => setTimeout(resolve, 5000));

                    this.loginFeedbackModal = false;

                    confirmationResult
                        .confirm(this.otpCode)
                        .then((result) => {
                            var user = result.user;
                            console.log(user);

                            const auth = getAuth();
                            console.log(auth.currentUser);
                            updateProfile(auth.currentUser, {
                                displayName: this.firstName + " " + this.lastName,
                                photoURL: "https://example.com/jane-q-user/profile.jpg"
                            }).then(() => {
                                // Profile updated!
                                // ...

                                window.location.reload();
                            }).catch((error) => {
                                // An error occurred
                                // ...
                            });

                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },
                async logout() {
                    this.$nextTick(() => {
                        this.logoutFeedbackModal = true;
                    });

                    await new Promise(resolve => setTimeout(resolve, 5000));

                    this.logoutFeedbackModal = false;
                    auth.signOut().then(() => {
                        // Sign-out successful.
                        window.location.reload();
                    }).catch((error) => {
                        // An error happened.
                    });
                },
                async logIn() {

                    this.otpSent = true;

                    let loggedInUserEmail = this.email; // a boolean value
                    localStorage.setItem("loggedInUserEmai", loggedInUserEmail);

                    var recaptchaElement = document.getElementById("recaptcha-container");
                    if (recaptchaElement && recaptchaElement.style.display !== "none") {
                        //console.log("reCAPTCHA element is visible");
                        var auth = getAuth();
                        //getAuth().settings.appVerificationDisabledForTesting = true;
                        var recaptchaVerifier = new RecaptchaVerifier("recaptcha-container", {
                            'size': 'invisible',
                            callback: function(response) {
                                // reCAPTCHA solved, allow signInWithPhoneNumber.
                                onSignInSubmit();
                            }
                        }, auth);
                        document.getElementById("sign-in-button");
                        /* var recaptchaVerifier = new RecaptchaVerifier('sign-in-button', {
                            'size': 'invisible',
                            'callback': (response) => {
                                // reCAPTCHA solved, allow signInWithPhoneNumber.
                                onSignInSubmit();
                            }
                        }, auth); */

                        var widgetId = await recaptchaVerifier.render();
                        var phoneNumber = this.countryCode + this.phoneNumber;
                        var appVerifier = recaptchaVerifier;
                        signInWithPhoneNumber(auth, phoneNumber, appVerifier)
                            .then((confirmationResult) => {
                                window.confirmationResult = confirmationResult;

                            })
                            .catch(function(error) {
                                console.log(error);
                                grecaptcha.reset(widgetId); // reset reCAPTCHA if error occurs
                            });
                    } else {
                        //console.log("reCAPTCHA element is not visible");
                    }



                },
                async updateProfile() {
                    onAuthStateChanged(auth, (user) => {
                        updateProfile(auth.currentUser, {
                            displayName: this.firstName + " " + this.lastName,
                            photoURL: "https://example.com/jane-q-user/profile.jpg"
                        }).then(() => {
                            // Profile updated!
                            // ...
                            window.location.reload();
                        }).catch((error) => {
                            // An error occurred
                            // ...
                        });
                    });

                },
                async createUser(user) {

                    const citiesRef = collection(db, "users");

                    await setDoc(doc(citiesRef, user.uid), {
                        email: this.email,
                        username: this.lastName,
                    });



                },
                async initIt() {

                    /* const citiesRef = collection(db, "users");

                    await setDoc(doc(citiesRef, "SF"), {
                        name: "San Francisco",
                        state: "CA",
                        country: "USA",
                        capital: false,
                        population: 860000,
                        regions: ["west_coast", "norcal"]
                    }); */



                },
                async nextProduct() {
                    if (this.activeProduct < 8) {
                        this.activeProduct++;
                    } else {
                        this.activeProduct = 1;
                    }
                },
                async loadAsync() {

                    this.$nextTick(() => {
                        this.sendingFeedbackModal = true;
                        this.firstName = '';
                        this.lastName = '';
                        this.phoneNumber = '';
                        this.enquiry = '';
                    });

                    await new Promise(resolve => setTimeout(resolve, 5000));

                    this.sendingFeedbackModal = false;
                    this.contactUsModal = false;

                },
                runToast($sec, $msg, $styleCls) {

                    runToast = () => {
                        var options = {
                            showTop: true,
                            timeout: 3000,
                            clsToast: "pos-bottom-right mr-6 mb-6 pl-6 pr-6 pb-3 pt-3 text-bold " +
                                $styleCls
                        }
                        Metro.toast.create($msg, null, null, null, options);
                    }

                    runToast();

                },
                clickMe(ID) {

                    var x = document.getElementById("Demo");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }

                },
                async loginWithEmail() {
                    await signInWithEmailAndPassword(auth, this.email, this.password);
                },
                async regWithEmail() {

                    // The ActionCodeSettings object that configures the email link.
                    const auth = getAuth();

                    await createUserWithEmailAndPassword(auth, this.email, this.password);

                    await sendEmailVerification(auth.currentUser);

                    this.$nextTick(() => {
                        this.loginFeedbackModal = true;
                    });

                    await new Promise(resolve => setTimeout(resolve, 5000));

                    this.loginFeedbackModal = false;

                    await updateProfile(auth.currentUser, {
                        displayName: this.firstName + " " + this.lastName,
                        photoURL: "https://example.com/jane-q-user/profile.jpg"
                    }).then(() => {
                        // Profile updated!
                        // ...
                        const citiesRef = collection(db, "users");
                        setDoc(doc(citiesRef, auth.currentUser.uid), {
                            email: this.email,
                            username: this.lastName,
                        }).then(() => {
                            window.location.reload();
                        });

                    }).catch((error) => {
                        // An error occurred
                        // ...
                    });




                },
                goRegister() {
                    window.location.href = `/n-agency`;
                },
                async goTo($to) {

                    if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
                        // Code to execute if running on localhost
                        console.log('Running on localhost');
                        window.location.href = 'http://localhost/acp/' + $to;
                    } else {
                        // Code to execute if not running on localhost
                        console.log('Not running on localhost');
                        window.location.href = 'https://navangahealthcare.co.tz/' + $to;
                    }

                },
                scrollToMe /* you IDIOT */(ID) {

                    //this.scrolledToMe = !this.scrolledToMe;

                    if (!this.scrolledToMe) {
                        $("#" + ID)[0].scrollIntoView({
                            behavior: 'smooth'
                        });
                    } else {
                        $("#scrollBackToMe")[0].scrollIntoView({
                            behavior: 'smooth'
                        });
                    }


                },
            },
            mounted() {

                const mediaQuery = window.matchMedia("(min-width: 768px)");
                this.handleMediaQuery(mediaQuery); // Initial check


                // Function to check if the current request is on localhost
                function isLocalhost() {
                    return window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1' || window.location.hostname === '::1';
                }

                function isHTTP() {
                    return window.location.protocol === 'http:';
                }

                if (!isLocalhost() && isHTTP()) {

                    var redirect_url = 'https://' + window.location.host + window.location.pathname + window.location.search + window.location.hash;
                    window.location.href = redirect_url;

                }





                //this.logIn();
                this.initIt();
                // Get the current year
                const currentYear = new Date().getFullYear();

                // Update the copyright text
                const copyrightText = `${currentYear} Navanga Healthcare Solutions. All rights reserved.`;

                // Display the updated copyright text in the div with the 'copyright' id
                document.getElementById('copyright').textContent = copyrightText;
                this.logPageVisit();

                onAuthStateChanged(auth, async (user) => {
                    if (user) {
                        /* const citiesRef = collection(db, "users");
                        setDoc(doc(citiesRef, user.uid), {
                            email: localStorage.getItem("loggedInUserEmai") != null ? localStorage.getItem("loggedInUserEmai") : "",
                            username: this.usernameTemp,
                        }); */
                        this.loggedIn = true;
                        // User is signed in
                        // ...
                        this.username = user.displayName;
                        /* console.log(user.uid);
                        console.log(user.displayName); */
                        let loggedIn = true; // a boolean value
                        localStorage.setItem("loggedIn", JSON.stringify(loggedIn)); // store it as a string

                    } else {
                        // User is signed out
                        // ...
                        let loggedIn = false; // a boolean value
                        localStorage.setItem("loggedIn", JSON.stringify(loggedIn));
                    }
                });




                setTimeout(() => {
                    $(document).ready(() => {
                        $('.sendingFeedback')
                            .removeClass('w3-hide');
                        $('.logoutFeedbackModal')
                            .removeClass('w3-hide');
                        $('.loginFeedbackModal')
                            .removeClass('w3-hide');
                        $('.displayName')
                            .removeClass('w3-hide');
                    });
                }, 1000);

                this.disableBrowserBackButton();
                console.log("am ready...");

                let i = 0;
                const images = [
                    'img/portrait-young-cheerful-african-boy_.jpg',
                    'img/african-american-mother-taking-care-loving-her-baby_.jpg',
                    'img/african-american-boy-getting-checkup-by-doctor_.jpg'
                ];
                const slideTime = 60000; // 3 seconds

                function changePicture() {
                    document.documentElement.style.backgroundImage = `url(${images[i]})`;

                    i = (i + 1) % images.length;

                    setTimeout(changePicture, slideTime);
                }

                window.onload = changePicture;
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                var element;


                //Detect onclick event
                if (window.matchMedia("(max-width: 920px)").matches === false) {
                    $(".ham").on("click", function() {
                        $("menu").css("right", "0px");
                        $(".overlay").css("opacity", "1");
                        $(".overlay").css("z-index", "99");
                    });

                    $(".close").on("click", function() {
                        $("menu").css("right", "-400px");
                        $(".overlay").css("opacity", "0");
                        $(".overlay").css("z-index", "-1");
                    });

                    $(".overlay").on("click", function() {
                        $("menu").css("right", "-400px");
                        $(".overlay").css("opacity", "0");
                        $(".overlay").css("z-index", "-1");
                    });
                } else {
                    $(".ham").on("click", function() {
                        $(".nav_content").css("right", "0px");
                        $(".overlay").css("opacity", "1");
                        $(".overlay").css("z-index", "1");
                    });

                    $(".close").on("click", function() {
                        $(".nav_content").css("right", "-200px");
                        $(".overlay").css("opacity", "0");
                        $(".overlay").css("z-index", "-1");
                    });

                    $(".overlay").on("click", function() {
                        $(".nav_content").css("right", "-200px");
                        $(".overlay").css("opacity", "0");
                        $(".overlay").css("z-index", "-1");
                    });
                }


                //Scroller Nav
                window.onscroll = function() {
                    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                        $("nav").css("background-color", "var(--black)");
                    } else {
                        $("nav").css("background-color", "transparent");
                    }
                }

                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    const slides = document.getElementsByClassName("mySlides");
                    const dots = document.getElementsByClassName("dot");

                    for (const slide of slides) {
                        slide.style.display = "none";
                    }

                    slideIndex = slideIndex >= slides.length ? 1 : slideIndex + 1;

                    for (const dot of dots) {
                        dot.className = dot.className.replace(" active", "");
                    }
                    if (slides[slideIndex - 1] != undefined) {
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                    }



                    setTimeout(showSlides, 5000); // Change image every 2 seconds
                }
            },
            created() {

            },
            onMount() {

            },
            beforeMount() {
                this.loggedIn = JSON.parse(localStorage.getItem("loggedIn")) != null ? JSON.parse(localStorage.getItem("loggedIn")) : false;

            },
        });
    </script>
</body>

</html>