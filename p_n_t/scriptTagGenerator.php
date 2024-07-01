<?php
class ScriptTagGenerator
{
  private $cdnUrls = array(
    'vue' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
    'vuesax' => 'https://cdn.jsdelivr.net/npm/vuesax@next',
    'jquery' => 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    'bootstrap' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',

    // Add more CDN URLs here
  );

  private $additionalScripts = array(
    'popper' => 'js/core/popper.min.js',
    'bootstrap' => 'js/core/bootstrap.min.js',
    'perfect-scrollbar' => 'js/plugins/perfect-scrollbar.min.js',
    'countup' => 'js/plugins/countup.min.js',
    'choices' => 'js/plugins/choices.min.js',
    'prism' => 'js/plugins/prism.min.js',
    'highlight' => 'js/plugins/highlight.min.js',
    'rellax' => 'js/plugins/rellax.min.js',
    'tilt' => 'js/plugins/tilt.min.js',
  );

  public function generateScriptTags()
  {
    $scriptTags = '';

    foreach ($this->cdnUrls as $name => $url) {
      $scriptTags .= '<script src="' . $url . '"></script>' . PHP_EOL;
    }

    foreach ($this->additionalScripts as $name => $path) {
      $scriptTags .= '<script src="' . $path . '"></script>' . PHP_EOL;
    }

    return $scriptTags;
  }
}

class HeadGenerator
{
  public function generateHead()
  {
    $head = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>People & Talents</title>
        <link href="https://fonts.cdnfonts.com/css/gowun-batang" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <!-- Import Vuesax CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuesax@next/dist/vuesax.css">
        <link rel="icon" href="https://navangahealthcare.co.tz/img/logo.ico" type="image/x-icon">
        <!-- Import Material Icons CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.cdnfonts.com/css/gowun-batang" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/vue@3.2.16/dist/vue.global.min.js"></script>
            <!-- Nucleo Icons -->
            <link href="css/nucleo-icons.css" rel="stylesheet" />
            <link href="css/nucleo-svg.css" rel="stylesheet" />
            <link href="css/custom.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <!-- Material Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
            <!-- CSS Files -->
            <link id="pagestyle" href="css/material-kit.css?v=3.0.4" rel="stylesheet" />
            <link href="https://fonts.cdnfonts.com/css/gowun-batang" rel="stylesheet">
        ';

    return $head;
  }
}

function generateFirebaseJavaScript()
{
  return '
      import {
        initializeApp
      } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js";
      import {
        getStorage,
        ref,
        uploadBytesResumable,
        getDownloadURL
      } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-storage.js";
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
      } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-auth.js";
      import {
        getFirestore,
        collection,
        doc,
        getDoc,
        getDocs,
        onSnapshot,
        setDoc
      } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-firestore.js";
  
      import {
        initializeAnalytics
      } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-analytics.js";
  
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
      const db = getFirestore(app);
      const auth = getAuth(app);
  
      // Initialize Firebase Analytics
      const analytics = initializeAnalytics(app);
  
      Vue.use(Vuesax, {
        colors: {
          primary: "#0050fe",
          success: "rgb(23, 201, 100)",
          danger: "rgb(242, 19, 93)",
          warning: "rgb(255, 255, 255)",
          dark: "rgb(36, 33, 69)"
        }
      });
    ';
}

function letter_O_animation()
{
    return '
        <svg style="width: 10px; height: 10px" class="pl" viewBox="0 0 200 200" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="pl-grad1" x1="1" y1="0.5" x2="0" y2="0.5">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
                <linearGradient id="pl-grad2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
            </defs>
            <circle class="pl__ring" cx="100" cy="100" r="82" fill="none" stroke="url(#pl-grad1)" stroke-width="36" stroke-dasharray="0 257 1 257" stroke-dashoffset="0.01" stroke-linecap="round" transform="rotate(-90,100,100)" />
            <line class="pl__ball" stroke="url(#pl-grad2)" x1="100" y1="18" x2="100.01" y2="182" stroke-width="36" stroke-dasharray="1 165" stroke-linecap="round" />
        </svg>
    ';
}

