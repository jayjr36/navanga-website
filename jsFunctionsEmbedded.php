<?php
class Call
{

    function isLoggedIn()
    {

        return (isset($_SESSION['userId'])
        ) ? (true) : (false);
    }
    function dnaAnimationB()
    {
?>

        <div id="all">
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
            <div class="element"></div>
        </div>

    <?php
    }
    function dnaAnimation()
    {
    ?>
        <content>
            <div class="blueprint">
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <div class="bar">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </content>
    <?php
    }
    function letterOPL()
    {
    ?>

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

    <?php
    }
    function appBar()
    {
    ?>
        <template>
            <div>
                <v-app-bar class="neoNav" color="white" v-if="loggedIn" fixed>
                    <v-app-bar-nav-icon @click.stop="drawer=!drawer"></v-app-bar-nav-icon>
                    <v-toolbar-title color="black">
                        <v-btn class="p-3 pos-fixed" style="z-index: -999999999999999999999999999999999999999999999 !important" color="pink darken-1" text rounded>
                            <?php $call = new Call();
                            $call->letterOPL(); ?>
                        </v-btn>
                        <img alt="Avatar" class="c-pointer" :src="`img/aidor.png`" style="height: 30px; width: 70px;">
                    </v-toolbar-title>
                    <v-spacer></v-spacer>
                    <template v-for="(data, i) in loggedInUser">
                        <v-btn icon color="black">


                            <v-avatar size="36px" class="ribbed-black">
                                <img @error="isBroken" :class="hide" alt="Avatar" :src="`uploads/`+data.profileUrl">
                            </v-avatar>

                        </v-btn>

                        <v-toolbar-title class="small">
                            {{user.name}}
                        </v-toolbar-title>

                    </template>
                    <v-menu :rounded="true" offset-y transition="slide-y-transition" bottom>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn icon v-bind="attrs" v-on="on" color="black">
                                <v-icon>mdi-dots-vertical</v-icon>
                            </v-btn>
                        </template>

                        <v-list>
                            <v-list-item>
                                <v-list-item-title class="c-pointer w3-center" color="black" @click=" profileEdit = true ">
                                    Edit Profile
                                </v-list-item-title>
                            </v-list-item>
                            <v-list-item v-if="loadedUltimatePositions.length">
                                <v-list-item-title class="c-pointer" color="black" @click="switchRole = true ">
                                    <v-chip>Switch Role</v-chip>
                                </v-list-item-title>
                            </v-list-item>
                            <v-list-item v-if="user.position == 'System Administrator'">
                                <v-list-item-title class="c-pointer" color="crimson" @click="loadAsync()">
                                    <v-chip>Update</v-chip>
                                </v-list-item-title>
                            </v-list-item>
                            <!-- <v-list-item @click="logout($event)">
                        <v-list-item-title class="c-pointer w3-center" color="black">Log out</v-list-item-title>
                    </v-list-item> -->
                            <v-list-item>
                                <v-list-item-title class="c-pointer w3-center" color="black" @click="logoutFeedbackModal = true, logout($event)">
                                    Log out
                                </v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                </v-app-bar>
            </div>
        </template>
    <?php
    }
    function externalJSSources()
    {
    ?>
        <script src="js/vue.js"></script>
        <script src="js/vuetify.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/metro.min.js"></script>
        <script src="js/socket.io.min.js"></script>
        <script src="js/index.umd.js"></script>
        <!-- Include the js-cookie library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>

    <?php
    }
    function htmlHeadTag()
    {
    ?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Navanga Healthcare Solutions provides innovative healthcare solutions across Tanzania, Africa and around the World. Mission: Providing optimal, tailored, and innovative healthcare solutions. Vision: Reliable healthcare solutions for all.">

            <!-- Open Graph Meta Tags -->
            <meta property="og:title" content="Navanga Healthcare Solutions">
            <meta property="og:description" content="Navanga Healthcare Solutions provides innovative healthcare solutions to companies, organizations, individuals, and stakeholders across Tanzania, Africa and around the World. We offer reliable healthcare solutions on nutrition, wellness programs, trainings, clinical case management, home care services, and more.">
            <meta property="og:image" content="https://navangahealthcare.co.tz/img/logo.ico">
            <meta property="og:url" content="https://navangahealthcare.co.tz/"> <!-- Update with the actual URL -->
            <meta property="og:type" content="website">

            <!-- Twitter Card Meta Tags -->
            <meta name="twitter:title" content="Navanga Healthcare Solutions">
            <meta name="twitter:description" content="Navanga Healthcare Solutions provides innovative healthcare solutions to companies, organizations, individuals, and stakeholders across Tanzania, Africa and around the World. We offer reliable healthcare solutions on nutrition, wellness programs, trainings, clinical case management, home care services, and more.">
            <meta name="twitter:image" content="https://navangahealthcare.co.tz/img/logo.ico">
            <meta name="twitter:card" content="summary_large_image">

            <!-- Other meta tags, link tags, etc. -->

            <title>Navanga Healthcare Solutions</title>
            <link href="css/material-kit.min.css" rel="stylesheet">
            <link href="css/font.css" rel="stylesheet">
            <link href="https://fonts.cdnfonts.com/css/gowun-batang" rel="stylesheet">
            <link href="css/animate.min.css" rel="stylesheet">
            <link href="css/w3.css" rel="stylesheet">
            <link href="css/materialdesignicons.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/metroX.css">
            <link href="css/vuetify.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
            
            <link rel="icon" href="img/logo.ico" type="image/x-icon">

            <!-- <script type="text/javascript" src="https://www.rixtech.co.tz/resources/aidorClient.js"></script> -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        </head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5FY19WE9JT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-5FY19WE9JT');
        </script>
    <?php
    }
    function setTodaysDate()
    {
    ?>
        const month = ["January", "February", "March", "April", "May", "June", "July", "August",
        "September", "October", "November", "December"
        ];

        const d = new Date();

        let name = month[d.getMonth()];

        this.todaysDate.month = name;
        this.todaysDate.year = d.getFullYear();

        month.forEach((value, index) => {
        if (value == this.todaysDate.month) {
        this.dateIncrementor = index;
        }
        });
    <?php
    }

    function randomizeID()
    {
    ?>
        $.post("server/realtime.php", {
        getUsedPatientIDs: true,

        }).then(
        (response) => {
        //console.log(JSON.parse(response));
        this.usedPatientIDs = JSON.parse(response);
        //console.table(JSON.parse(response));

        },
        (xhr) => {
        console.log(xhr.status, xhr.statusText);
        }
        );


        /* var min, max, r, n, p;

        min = 001;
        max = 100;
        */
        r = 200;
        // how many usedPatientIDs you want to extract

        function generate(n) {
        var add = 1,
        max = 12 -
        add;
        // 12 is the min safe number Math.random() can generate without it starting to pad the end with zeros.

        if (n > max) {
        return generate(max) + generate(n - max);
        }

        max = Math.pow(10, n + add);
        var min = max / 10; // Math.pow(10, n) basically
        var number = Math.floor(Math.random() * (max - min + 1)) + min;

        return ("" + number).substring(add);



        }
        for (let i = 0; i < r; i++) { do { cX=generate(6); p=this.usedPatientIDs.includes(cX); Lz=String(cX)[0]=='0' ; if (Lz) { console.log(cX + " has a leading ZERO" ); } if (!p && !Lz) { this.usedPatientIDs.push(cX); this.patientUUID=cX; //console.log(this.usedPatientIDs.join(" - ") + " with this " + cX);
    } else {
        console.log(cX + " is a duplicate"); } } while (p); } <?php
                                                            }
                                                            function stillActive()
                                                            {

                                                                $servername = "localhost";
                                                                $username = "root";
                                                                $password = "";
                                                                $dbname = "aidornewdb";



                                                                // Create connection
                                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                                // Check connection
                                                                if ($conn->connect_error) {
                                                                    die("Connection failed: " . $conn->connect_error);
                                                                }
                                                                $stamp = time();
                                                                $uid = '0';

                                                                if (isset($_SESSION['userId'])) {
                                                                    $uid = $_SESSION['userId'];
                                                                }

                                                                $sql = "UPDATE staff SET lastLoggedIn = $stamp, Status = 'On', availableToday = 1 WHERE staffId = $uid";


                                                                if ($conn->query($sql) === true) {

                                                                    //echo "console.log('".$uid." is LoggedIn');";

                                                                } else {
                                                                    //echo "Error updating record: " . $conn->error;
                                                                }


                                                                $conn->close();
                                                            }
                                                            function createDepartment()
                                                            {
                                                                echo '
$.post("server/realtime.php", {
newDep: true,
departmentName: this.departmentName,
departmentAbout: this.departmentAbout,
isMain: this.isMain,
selectedDepartmentID: this.selectedDepartmentID,
colOne: "departments",
}).then(
(response) =>  {
    this.selectedDepartment = "";
    this.departmentName = "";
    this.runToast(5000, JSON.parse(response).res," aquaMarine ");
    this.loading = false;
    this.newDep = false;
    console.table(JSON.parse(response));

},
function(xhr) {
console.log(xhr.status, xhr.statusText);
}
);
';
                                                            }
                                                            function addPosition()
                                                            {
                                                                echo '
$.post("server/register.php", {
newPos: true,
posName: this.posName,
colOne: "positions",
consultationFee: this.companyFee,
insurerPrices: JSON.stringify(this.insurancePrices),
}).then(
(response) => {
console.log(response);
console.table(JSON.parse(response));
this.snackText = JSON.parse(response);
},
(xhr) => {
console.log(xhr.status, xhr.statusText);
}
);
';
                                                            }

                                                            # This is another
                                                            function setTimePicker()
                                                            {
                                                                ?> $.post("server/deleteUpdate.php", { setTimetable: true, event: this.selectedEvent , time: e, authorID: this.user.id }).then( (response)=> {


            console.log(response);

            //const element = document.getElementById("demo");
            //element.remove();
            // ✅ Create element
            //const el = document.createElement('div');

            // ✅ Set ID attribute on element
            //el.setAttribute('id', 'demo');

            // ✅ Add text content to element
            //el.textContent = '';

            // ✅ Or set the innerHTML of the element
            // el.innerHTML = `<span>Hello world</span>`;

            // ✅ add element to DOM
            //const box = document.getElementById('eventHolder');
            //box.appendChild(el);

            })
            .catch( (error) => {
            console.log(error);
            });

            console.log(e);
            const month = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

            const d = new Date();
            let thisMonth = month[d.getUTCMonth()];
            let thisHour = d.getHours();
            let thisMinutes = d.getMinutes();
            let today = d.getDate();
            let thisYear = d.getFullYear();
            // Set the date we're counting down to
            var countDownDate = new Date(thisMonth + " "+today + ", "+ thisYear + " " + this.setTime +":25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = /* days + "d " + */ (hours != 0 ? hours + "h " : "")
            + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) { clearInterval(x); document.getElementById("demo").innerHTML="EXPIRED" ; } }, 1000); this.reload(); <?php
                                                                                                                                }
                                                                                                                                # Function Ends








                                                                                                                            }
                                                                                                                            /*  function getRandomInt(min, max) { // stackoverflow.com/a/24152886/5156280
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                function returnLetter() {
                    return String.fromCharCode(getRandomInt(97, 122))
                }

                function returnRandomString() {
                    var str = ''
                    for (var i = 0; i < 18; i++) {
                        str += returnLetter()
                    }
                    return str
                }

                $('#testIt').each(function() {
                    $(this).addClass('fg-pink').prop('Counter', 100000000000000000).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 10000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(returnRandomString());
                        }
                    });
                });
 */

                                                                                                                                    ?>