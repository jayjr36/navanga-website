<?php
include 'scriptTagGenerator.php'; // Include the class file

$scriptTagGenerator = new ScriptTagGenerator(); // Create an instance
$headGenerator = new HeadGenerator(); // Create an instance
// To use the function and include the SVG snippet in your HTML:
$svgSnippet = letter_O_animation();

?>
<!DOCTYPE html>
<html lang="en">
<?php echo $headGenerator->generateHead(); // Generate the <head> section 
?>

<?php include_once "custom.css.php" ?>

<body>
  <div id="app">
    <div class="row px-4">
      <section class="section-team">
        <div class="container">
          <!-- Start Header Section -->
          <!-- Start Intro -->
          <div class="row">
            <div class="col-md-12">
              <div class="intro-text">
                <div class="text-center">
                  <img height="44" width="150" src="https://navangahealthcare.co.tz/img/logo.png" class="navanga-logo pos-absolute pos-top-center c-pointer" style="height: 60px !important; width: 233px !important; top: 20px !important;">
                  <p class="pt-4" style="font-size: 1.2rem;font-family: 'Gowun Batang', sans-serif !important;">
                    <span class="text-bold">People & Talents Policy That Promotes Equal Opportunities.</span>
                  </p>

                </div>

                <p class="py-3" style="font-size: 1.2rem;font-family: 'Gowun Batang', sans-serif !important; text-align: justify !important;text-justify: inter-character !important;">
                  It is the policy of Navanga that no one shall be denied services, to work with Navanga, registration,
                  employment, selection and appointments because of race, religion, colour, political affiliation or opinion,
                  marital status, creed, ancestry, sexual orientation, gender identity and expression, genetic information,
                  national origin, age, sex, or handicap (except where age, sex or handicap is a genuine condition of the
                  specific need of the position or tasks). All opportunities are subjected to screening, interviews, and vetting,
                  where selections are based on the best practice and performance as scored through the standard checklists and
                  internal tools within the company. Formal complaints of not adhering to the Navanga equal opportunity policies
                  may be filed to the management office through <span class="text-navanga">admin@navangahealthcare.co.tz</span>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <span id="nav-icon" class="w3-display-middle w3-hide" style="padding-bottom: 28px !important;">
    <img src="https://navangahealthcare.co.tz/img/logo.ico" height="20" alt="Logo">
  </span>

  <!-- Use the generateScriptTags method to insert the script tags -->
  <?php echo $scriptTagGenerator->generateScriptTags(); ?>

  <script type="module">
    // Output the generated JavaScript code
    <?php echo generateFirebaseJavaScript(); ?>

    new Vue({
      el: '#app',
      data() {
        return {
          contactView: 1,
          selectedFileName: '',
          avatarImages: [],
          title: null,
          bio: null,
          titles: null,
          time: null,
          start: null,
          end: null,
          currentScreen: '',
          availableDay: [],
          availableTimeStart: '',
          availableTimeEnd: '',
          menuStartDate: false,
          showPassword: false,
          uploadingFeedbackModal: false,
          menuEndDate: false,
          availableDays: ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          selectedCountryCode: {
            code: "+255",
            text: "Tanzania (+255)",
            flag: '<span class="fi fi-tz fis w3-round-medium"></span>',
          },
          productLearnModal: false,
          scrolledToBottom: false,
          enquiring: false,
          registrationModal: false,
          isAdmin: false,
          loading: false,
          dialog: false,
          loggedIn: false,
          loginScreen: false,
          acceptTerms: false,
          viewTerms: false,
          cvPreviewModal: false,
          otpSent: false,
          sendingFeedbackModal: false,
          welcomeMsgModal: false,
          asyncMsg: 1,
          username: 'Anonymous',
          usernameTemp: '',
          cvUpload: '',
          homeAddress: '',
          homeCity: '',
          profileUrl: '',
          zipCode: '',
          homeDistrict: '',
          firstName: '',
          lastName: '',
          phoneNumber: '',
          enquiry: '',
          emailTemp: '',
          email: '',
          errorMSG: '',
          password: '',
          repeatPassword: '',
          otpCode: "",
          cvURL: "",
          selectedFile: null,
          theme: 'light',
          option: null,
          termsModal: false,
          loginModal: false,
          regModal: false,
          activeSidebar: false,
          activeSidebarItem: 'overview',
          loginFeedbackModal: false,
          logoutFeedbackModal: false,
          unauthorizedModal: false,
          active: false,
          isLargeScreen: false,
          page_index: 0,
          percent: 0,
          openActiveUser: false,
          phone: '',
          currentText: 'hfghf',
          uid: 'Anonymous',
          remember: true,
          allUsers: [],
          loadedImages: false,
          countryCodes: [{
              code: "+255",
              text: "Tanzania (+255)",
              flag: '<span class="fi fi-tz fis w3-round-medium"></span>',
            },
            {
              code: "+1",
              text: "United States (+1)",
              flag: '<span class="fi fi-us fis w3-round-medium"></span>',
            },
            {
              code: "+1",
              text: "Canada (+1)",
              flag: '<span class="fi fi-ca fis w3-round-medium"></span>',
            },
            {
              code: "+52",
              text: "Mexico (+52)",
              flag: '<span class="fi fi-mx fis w3-round-medium"></span>',
            },
            {
              code: "+213",
              text: "Algeria (+213)",
              flag: '<span class="fi fi-dz fis w3-round-medium"></span>',
            },
            {
              code: "+244",
              text: "Angola (+244)",
              flag: '<span class="fi fi-ao fis w3-round-medium"></span>',
            },
            {
              code: "+267",
              text: "Botswana (+267)",
              flag: '<span class="fi fi-bw fis w3-round-medium"></span>',
            },
            {
              code: "+229",
              text: "Benin (+229)",
              flag: '<span class="fi fi-bj fis w3-round-medium"></span>',
            },
            {
              code: "+226",
              text: "Burkina Faso (+226)",
              flag: '<span class="fi fi-bf fis w3-round-medium"></span>',
            },
            {
              code: "+238",
              text: "Cape Verde (+238)",
              flag: '<span class="fi fi-cv fis w3-round-medium"></span>',
            },
            {
              code: "+220",
              text: "Gambia (+220)",
              flag: '<span class="fi fi-gm fis w3-round-medium"></span>',
            },
            {
              code: "+233",
              text: "Ghana (+233)",
              flag: '<span class="fi fi-gh fis w3-round-medium"></span>',
            },
            {
              code: "+224",
              text: "Guinea (+224)",
              flag: '<span class="fi fi-gn fis w3-round-medium"></span>',
            },
            {
              code: "+245",
              text: "Guinea-Bissau (+245)",
              flag: '<span class="fi fi-gw fis w3-round-medium"></span>',
            },
            {
              code: "+225",
              text: "Ivory Coast (+225)",
              flag: '<span class="fi fi-ci fis w3-round-medium"></span>'
            },
            {
              code: "+231",
              text: "Liberia (+231)",
              flag: '<span class="fi fi-lr fis w3-round-medium"></span>'
            },
            {
              code: "+223",
              text: "Mali (+223)",
              flag: '<span class="fi fi-ml fis w3-round-medium"></span>'
            },
            {
              code: "+222",
              text: "Mauritania (+222)",
              flag: '<span class="fi fi-mr fis w3-round-medium"></span>'
            },
            {
              code: "+227",
              text: "Niger (+227)",
              flag: '<span class="fi fi-ne fis w3-round-medium"></span>'
            },
            {
              code: "+234",
              text: "Nigeria (+234)",
              flag: '<span class="fi fi-ng fis w3-round-medium"></span>'
            },
            {
              code: "+221",
              text: "Senegal (+221)",
              flag: '<span class="fi fi-sn fis w3-round-medium"></span>'
            },
            {
              code: "+232",
              text: "Sierra Leone (+232)",
              flag: '<span class="fi fi-sl fis w3-round-medium"></span>'
            },
            {
              code: "+228",
              text: "Togo (+228)",
              flag: '<span class="fi fi-tg fis w3-round-medium"></span>'
            },
            {
              code: "+255",
              text: "Tanzania (+255)",
              flag: '<span class="fi fi-tz fis w3-round-medium"></span>',
            },
            {
              code: "+257",
              text: "Burundi (+257)",
              flag: '<span class="fi fi-bi fis w3-round-medium"></span>',
            },
            {
              code: "+254",
              text: "Kenya (+254)",
              flag: '<span class="fi fi-ke fis w3-round-medium"></span>',
            },
            {
              code: "+265",
              text: "Malawi (+265)",
              flag: '<span class="fi fi-mw fis w3-round-medium"></span>',
            },
            {
              code: "+258",
              text: "Mozambique (+258)",
              flag: '<span class="fi fi-mz fis w3-round-medium"></span>',
            },
            {
              code: "+250",
              text: "Rwanda (+250)",
              flag: '<span class="fi fi-rw fis w3-round-medium"></span>',
            },
            {
              code: "+256",
              text: "Uganda (+256)",
              flag: '<span class="fi fi-ug fis w3-round-medium"></span>',
            },
            {
              code: "+237",
              text: "Cameroon (+237)",
              flag: '<span class="fi fi-cm fis w3-round-medium"></span>',
            },
            {
              code: "+238",
              text: "Cape Verde (+238)",
              flag: '<span class="fi fi-cv fis w3-round-medium"></span>',
            },
            {
              code: "+236",
              text: "Central African Republic (+236)",
              flag: '<span class="fi fi-cf fis w3-round-medium"></span>',
            },
            {
              code: "+235",
              text: "Chad (+235)",
              flag: '<span class="fi fi-td fis w3-round-medium"></span>',
            },
            {
              code: "+269",
              text: "Comoros (+269)",
              flag: '<span class="fi fi-km fis w3-round-medium"></span>',
            },
            {
              code: "+242",
              text: "Congo - Brazzaville (Republic of the) (+242)",
              flag: '<span class="fi fi-cg fis w3-round-medium"></span>',
            },
            {
              code: "+243",
              text: "Congo - Kinshasa (Democratic Republic of the) (+243)",
              flag: '<span class="fi fi-cd fis w3-round-medium"></span>',
            },
            {
              code: "+225",
              text: "Côte d'Ivoire (Ivory Coast) (+225)",
              flag: '<span class="fi fi-ci fis w3-round-medium"></span>',
            },
            {
              code: "+253",
              text: "Djibouti (+253)",
              flag: '<span class="fi fi-dj fis w3-round-medium"></span>',
            },
            {
              code: "+20",
              text: "Egypt (+20)",
              flag: '<span class="fi fi-eg fis w3-round-medium"></span>',
            },
            {
              code: "+240",
              text: "Equatorial Guinea (+240)",
              flag: '<span class="fi fi-gq fis w3-round-medium"></span>',
            },
            {
              code: "+291",
              text: "Eritrea (+291)",
              flag: '<span class="fi fi-er fis w3-round-medium"></span>',
            },
            {
              code: "+251",
              text: "Ethiopia (+251)",
              flag: '<span class="fi fi-et fis w3-round-medium"></span>',
            },
            {
              code: "+241",
              text: "Gabon (+241)",
              flag: '<span class="fi fi-ga fis w3-round-medium"></span>',
            },
            {
              code: "+220",
              text: "Gambia (+220)",
              flag: '<span class="fi fi-gm fis w3-round-medium"></span>',
            }, {
              code: "+376",
              text: "Andorra (+376)",
              flag: '<span class="fi fi-ad fis w3-round-medium"></span>',
            }, {
              code: "+244",
              text: "Angola (+244)",
              flag: '<span class="fi fi-ao fis w3-round-medium"></span>',
            }, {
              code: "+1264",
              text: "Anguilla (+1264)",
              flag: '<span class="fi fi-ai fis w3-round-medium"></span>',
            }, {
              code: "+1268",
              text: "Antigua & Barbuda (+1268)",
              flag: '<span class="fi fi-ag fis w3-round-medium"></span>',
            }, {
              code: "+54",
              text: "Argentina (+54)",
              flag: '<span class="fi fi-ar fis w3-round-medium"></span>',
            }, {
              code: "+374",
              text: "Armenia (+374)",
              flag: '<span class="fi fi-am fis w3-round-medium"></span>',
            }, {
              code: "+297",
              text: "Aruba (+297)",
              flag: '<span class="fi fi-aw fis w3-round-medium"></span>',
            },

            {
              code: "+260",
              text: "Zambia (+260)",
              flag: '<span class="fi fi-zm fis w3-round-medium"></span>',
            }, {
              code: "+263",
              text: "Zimbabwe (+263)",
              flag: '<span class="fi fi-zw fis w3-round-medium"></span>',
            },
          ],
          changeCounts: 0
        };
      },
      watch: {

        regModal(now, then) {
          console.log("log me...")
          this.changeCounts++;
          if (now && this.changeCounts > 1) {
            $('body').addClass('no-scroll');
            $('html').addClass('no-scroll');
          } else {
            $('body').removeClass('no-scroll');
            $('html').removeClass('no-scroll');
          }

        }

      },
      computed: {

      },
      methods: {
        sendMessage() {},
        openFileInput() {
          this.$refs.fileInput.click();
        },
        uploadXFile(event) {
          const file = event.target.files[0];
          const storage = getStorage();

          this.uploadingFeedbackModal = true;
          // Create a storage reference
          // Create a storage reference from our storage service
          var name = document.getElementById('cv_upload');
          var xfile = name.files.item(0).name;
          console.log('Selected file: ' + name.files.item(0).name);
          console.log('Selected file: ' + name.files.item(0).size);
          console.log('Selected file: ' + name.files.item(0).type);

          name = name.files.item(0).name;

          const lastDot = name.lastIndexOf('.');

          const fileName = name.substring(0, lastDot);
          const ext = name.substring(lastDot + 1);

          const storageRef = ref(storage, `uploaded_cvs/` + this.email + `_cv.` + ext);

          // Upload the file
          const uploadTask = uploadBytesResumable(storageRef, file);

          // Register three observers:
          // 1. 'state_changed' observer, called any time the state changes
          // 2. Error observer, called on failure
          // 3. Completion observer, called on successful completion
          uploadTask.on('state_changed',
            (snapshot) => {
              this.updating('#ffffff', 'Updating Your CV...');
              // Observe state change events such as progress, pause, and resume
              // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
              const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              console.log('Upload is ' + progress + '% done');
              switch (snapshot.state) {
                case 'paused':
                  console.log('Upload is paused');
                  break;
                case 'running':
                  console.log('Upload is running');
                  break;
              }
            },
            (error) => {
              // Handle unsuccessful uploads
            },
            () => {
              // Handle successful uploads on complete
              // For instance, get the download URL: https://firebasestorage.googleapis.com/...
              getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                console.log('File available at', downloadURL);
                this.cvURL = downloadURL;
                this.uploadingFeedbackModal = false;
              });
            }
          );
        },
        mailMe() {
          //this.sendingFeedbackModal = true;
          this.sendingEmail();
          $.post("../server/realtime.php", {
            mailMe: true,
            to: "developer@navangahealthcare.co.tz",
            from: this.email,
            name: this.firstName + " " + this.lastName,
            subject: "Customers Enquiries",
            msg: this.enquiry + "<br><br>Phone number: " + " " + this.phoneNumber + "<br>Product of Interest: Registration Portal",

          }).then(
            (response) => {
              //console.log(response);

              let tempEmail = this.email;



              // this.runToast(5000, JSON.parse(response).msg, " glassmorph text-h3 fg-dark ");


              /*  */
              $.post("../server/realtime.php", {
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

          $.post("../server/realtime.php", {
            mailDevs: true,
            to: "developer@navangahealthcare.co.tz",
            from: this.email,
            name: this.firstName + " " + this.lastName,
            subject: "Potential Customer Reaching Out",
            msg: this.enquiry + "<br><br>Phone number: " + " " + this.phoneNumber + "<br>Product of Interest: Registration Portal",

          }).then(
            (response) => {
              console.log(response);

              this.asyncMsg = 2;



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
        getConversation() {
          // Elements

        },
        imageLoaded() {
          this.loadedImages = true;
          // Add any other logic you want to perform when the image is fully displayed.
        },
        logUserVisit(pageName) {
          analytics.logEvent('page_visit', {
            page: pageName
          });
        },
        async updateProfile() {
          //await signInWithEmailAndPassword(auth, this.email, this.password);
          const auth = getAuth();
          const usersRef = collection(db, "users");
          const userDoc = doc(usersRef, auth.currentUser.uid);

          setDoc(userDoc, {
            email: this.email,
            username: this.lastName,
            firstName: this.firstName,
            lastName: this.lastName,
            phone: this.phoneNumber,
            countryCode: this.selectedCountryCode,
            address: this.homeAddress,
            zipCode: this.zipCode,
            city: this.homeCity,
            district: this.homeDistrict,
            bio: this.bio,
            title: this.title,
            availableDay: this.availableDay,
            availableTimeStart: this.availableTimeStart,
            availableTimeEnd: this.availableTimeEnd,
            uploadedCV: this.cvURL,
          }, {
            merge: true
          }).then(() => {
            this.updating('#ffffff', 'Updating Your Profile...');
            //window.location.reload();

          });


        },
        timeAgoFormat(dateString) {
          const date = new Date(dateString);
          const now = new Date();

          const seconds = Math.floor((now - date) / 1000);

          let interval = Math.floor(seconds / 31536000);
          if (interval >= 1) {
            return interval + " year" + (interval === 1 ? "" : "s") + " ago";
          }

          interval = Math.floor(seconds / 2592000);
          if (interval >= 1) {
            return interval + " month" + (interval === 1 ? "" : "s") + " ago";
          }

          interval = Math.floor(seconds / 86400);
          if (interval >= 1) {
            return interval + " day" + (interval === 1 ? "" : "s") + " ago";
          }

          interval = Math.floor(seconds / 3600);
          if (interval >= 1) {
            return interval + " hour" + (interval === 1 ? "" : "s") + " ago";
          }

          interval = Math.floor(seconds / 60);
          if (interval >= 1) {
            return interval + " minute" + (interval === 1 ? "" : "s") + " ago";
          }

          return dateString != '' ? Math.floor(seconds) + " second" + (seconds === 1 ? "" : "s") + " ago" : 'Registration Date not Found';
        },
        handleFileSelect() {
          // this function will be called when the file input below is changed
          var file = document.getElementById("fileInput").files[0]; // get a reference to the selected file

          var reader = new FileReader(); // create a file reader
          // set an onload function to show the image in cropper once it has been loaded
          reader.onload = function(event) {
            var data = event.target.result; // the "data url" of the image
            cropper.showImage(data); // hand this to cropper, it will be displayed
          };

          // this loads the file as a data url calling the function above once done
          reader.readAsDataURL(file);
        },
        async regWithEmail() {

          // The ActionCodeSettings object that configures the email link.
          const auth = getAuth();

          if (this.repeatPassword == this.password) {
            this.errorMSG = ``;
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
              const usersRef = collection(db, "users");
              setDoc(doc(usersRef, auth.currentUser.uid), {
                email: this.email,
                username: this.lastName,
                firstName: this.firstName,
                lastName: this.lastName,
                phone: this.phoneNumber,
                countryCode: this.selectedCountryCode,
                address: this.homeAddress,
                zipCode: this.zipCode,
                city: this.homeCity,
                district: this.homeDistrict,
                bio: this.bio,
                title: this.titles,
                availableDay: this.availableDay,
                availableTimeStart: this.availableTimeStart,
                availableTimeEnd: this.availableTimeEnd,
              }, {
                merge: true
              }).then(() => {
                window.location.reload();
              });

            }).catch((error) => {
              // An error occurred
              // ...
            });
          } else {
            this.errorMSG = `Could not match your passwords! :(`;

            setTimeout(() => {
              // Run after 100 milliseconds
              this.errorMSG = ``;
            }, 3000);
          }
        },
        async loginWithEmail() {
          this.loginFeedbackModal = true;
          const auth = getAuth();
          await signInWithEmailAndPassword(auth, this.email, this.password)
            .then(async (userCredential) => {
              // Signed in

              //this.initIt();
              await new Promise(resolve => setTimeout(resolve, 5000));

              this.loginFeedbackModal = false;
              window.location.reload();
              const user = userCredential.user;
              // Check if email is verified
              if (user.emailVerified) {
                // Access your app
                // ...
              } else {
                // Show message - "Please verify your email address"
                // ...
              }
            })
            .catch((error) => {
              const errorCode = error.code;
              const errorMessage = error.message;
              this.loginFeedbackModal = false;
              // ..
            });
        },
        async logout() {
          this.$nextTick(() => {
            this.logoutFeedbackModal = true;
          });


          auth.signOut().then(async () => {
            // Sign-out successful.
            //window.location.reload();
            this.initIt();
            await new Promise(resolve => setTimeout(resolve, 5000));
            this.logoutFeedbackModal = false;
            window.location.reload();
          }).catch((error) => {
            // An error happened.
          });
        },
        selectedUser() {

          let uxer = {};

          this.allUsers.forEach((user) => {

            if (user.uid == this.selectedUID) {

              uxer = user;

            }

          });

          return uxer;

        },
        notMeUsers() {

          let uxers = [];

          this.allUsers.forEach((user) => {

            if (user.email != this.email) {

              uxers.push(user);

            }

          });

          return uxers;

        },
        getWeekNumber(date) {
          const onejan = new Date(date.getFullYear(), 0, 1);
          return Math.ceil(((date - onejan) / 86400000 + onejan.getDay() + 1) / 7);
        },

        isDateToday(dateString) {
          const date = new Date(dateString);
          const today = new Date();

          const isToday =
            date.getDate() === today.getDate() &&
            date.getMonth() === today.getMonth() &&
            date.getFullYear() === today.getFullYear();

          return isToday;
        },
        usersScope() {
          const today = new Date();
          const thisMonth = today.getMonth();
          const thisYear = today.getFullYear();
          const thisWeek = this.getWeekNumber(today);

          let usersToday = [];
          let usersThisWeek = [];
          let usersThisMonth = [];
          let usersThisYear = [];

          this.allUsers.forEach(user => {
            const registrationDate = new Date(user.registrationDate);
            const registrationWeek = this.getWeekNumber(registrationDate);

            this.isDateToday(user.registrationDate) ? usersToday.push(user) :
              registrationWeek === thisWeek ? usersThisWeek.push(user) :
              registrationDate.getMonth() === thisMonth && registrationDate.getFullYear() === thisYear ? usersThisMonth.push(user) :
              usersThisYear.push(user);
          });

          return usersToday.length ? {
              type: 'Today',
              data: usersToday
            } :
            usersThisWeek.length ? {
              type: 'This Week',
              data: usersThisWeek
            } :
            usersThisMonth.length ? {
              type: 'This Month',
              data: usersThisMonth
            } : {
              type: 'This Year',
              data: usersThisYear
            };
        },
        /* DATA INITIALIZATION */
        async initIt() {
          if (localStorage.getItem('profileUrl')) {
            this.profileUrl = localStorage.getItem('profileUrl');
          }


          // make this function more readable
          onAuthStateChanged(auth, async (user) => {
            if (user) {
              const userDocRef = doc(db, "users", user.uid);
              await setDoc(userDocRef, {
                isOnline: true
              }, {
                merge: true
              });

              const myselfMeI = onSnapshot(doc(db, "users", user.uid), (doc) => {
                if (doc.exists()) {
                  let data = doc.data();
                  this.firstName = data['firstName'];
                  this.profileUrl = data['profileUrl'] || '';
                  this.lastName = data['lastName'];
                  this.email = data['email'];
                  this.phoneNumber = data['phone'];
                  //this.selectedCountryCode = data['countryCode'];
                  this.title = data['title'];
                  this.homeAddress = data['address'];
                  this.zipCode = data['zipCode'];
                  this.homeCity = data['city'];
                  this.homeDistrict = data['district'];
                  this.bio = data['bio'];
                  this.cvURL = data['uploadedCV'] || '';

                  if (typeof data['availableDay'] === 'string') {
                    // it's a string
                    this.availableDay.push(data['availableDay']);
                  } else {
                    // it's something else
                    this.availableDay = data['availableDay'];
                  }

                  this.availableTimeStart = data['availableTimeStart'];
                  this.availableTimeEnd = data['availableTimeEnd'];
                  this.selectedCountryCode = data['countryCode'] != undefined ? data['countryCode'] : this.selectedCountryCode;



                  if (data['updating']) {
                    this.uploading();
                  }
                }
              });



              // Listen for changes in the "users" collection
              const unsub = onSnapshot(collection(db, "users"), (querySnapshot) => {
                this.usersScope();
                // After processing all documents, you can update the "allUsers" array with the latest data
                this.allUsers = querySnapshot.docs.map((doc) => {
                  const creationDate = doc.createTime;
                  console.log(creationDate);
                  const data = {
                    uid: doc.id,
                    firstName: doc.data().firstName,
                    lastName: doc.data().lastName,
                    title: doc.data().title,
                    cv: doc.data().uploadedCV,
                    profileUrl: doc.data().profileUrl != null ? doc.data().profileUrl : 'https://img.freepik.com/free-icon/user_318-725053.jpg?t=st=1692346228~exp=1692346828~hmac=7ba63506e5f47dfb0e7079afef28c44c4cf1a8d17b43c44c1532c07b946fe257',
                    registrationDate: doc.data().registrationDate != null ? doc.data().registrationDate : '',
                    bio: doc.data().bio,
                    availableDays: doc.data().availableDay,
                    availableTimeStart: doc.data().availableTimeStart,
                    availableTimeEnd: doc.data().availableTimeEnd,
                    phone: doc.data().phone,
                    email: doc.data().email,
                    countryCode: doc.data().countryCode,
                  };
                  return data;
                });
              });

              const deviceNames = ['Mozilla Firefox', 'Apple Safari', 'Google Chrome', 'Unknown Browser'];

              const visits = onSnapshot(collection(db, "page_visits"), (querySnapshot) => {
                // Create a function to get a random device name from the deviceNames array
                const getRandomDeviceName = () => {
                  const randomIndex = Math.floor(Math.random() * deviceNames.length);
                  return deviceNames[randomIndex];
                };

                // After processing all documents, you can update the "avatarImages" array with the latest data
                this.avatarImages = querySnapshot.docs.map((doc) => {
                  const deviceName = getRandomDeviceName();
                  let avatar = '';
                  if (deviceName === 'Mozilla Firefox') {
                    avatar = 'https://www.pngmart.com/files/15/Cool-Firefox-Purple-PNG.png';
                  } else if (deviceName === 'Apple Safari') {
                    avatar = 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Safari_browser_logo.svg/2057px-Safari_browser_logo.svg.png';
                  } else if (deviceName === 'Google Chrome') {
                    avatar = 'https://upload.wikimedia.org/wikipedia/commons/8/87/Google_Chrome_icon_%282011%29.png';
                  } else if (deviceName === 'Unknown Browser') {
                    avatar = 'https://w7.pngwing.com/pngs/123/870/png-transparent-web-browser-android-application-software-firefox-icon-blue-earth-infographic-blue-globe.png';
                  }

                  const data = {
                    deviceName: deviceName, // Save the random device name in the "avatarImages" array
                    avatar: avatar,
                  };
                  return data;
                });
              });

              // Don't forget to unsubscribe the onSnapshot listener when it's no longer needed
              // For example, you can unsubscribe in a lifecycle hook like beforeUnmount or beforeDestroy
              // beforeUnmount(() => {
              //   unsub();
              // });

            } else {
              // User is signed out, set the user's online status to false
              if (this.loggedIn) {
                const userDocRef = doc(db, "users", this.uid);
                await setDoc(userDocRef, {
                  isOnline: false
                }, {
                  merge: true
                });
              }

              // ... (existing code)
            }
          });
        },
        handleMediaQuery(mediaQuery) {
          this.isLargeScreen = mediaQuery.matches;
          this.activeSidebar = mediaQuery.matches;
        },
        openNotification(position = null) {
          const noti = this.$vs.notification({
            position,
            title: 'Documentation Vuesax 4.0+',
            text: `These documents refer to the latest version of vuesax (4.0+),
          to see the documents of the previous versions you can do it here 👉 Vuesax3.x`
          })
        },
        uploading() {
          const loading = this.$vs.loading({
            background: "#000090",
            text: 'Updating Your Profile...'
          })
          setTimeout(() => {
            const auth = getAuth();
            const usersRef = collection(db, "users");
            const userDoc = doc(usersRef, auth.currentUser.uid);

            setDoc(userDoc, {
              updating: false,
            }, {
              merge: true
            }).then(() => {
              loading.close();

            });

          }, 5000)
        },
        updating($color, $msg) {
          const loading = this.$vs.loading({
            background: $color,
            text: $msg === null ? 'Updating Your Profile...' : $msg
          })

          $('#nav-icon').removeClass('w3-hide');
          setTimeout(() => {
            const auth = getAuth();
            const usersRef = collection(db, "users");
            const userDoc = doc(usersRef, auth.currentUser.uid);

            setDoc(userDoc, {
              updating: false,
            }, {
              merge: true
            }).then(() => {
              $('#nav-icon').addClass('w3-hide');
              loading.close();

            });

          }, 5000)
        },
        sendingEmail() {
          const loading = this.$vs.loading({
            opacity: 0.5,
            background: "#ffffff",
            text: 'Sending...'
          });

          setTimeout(() => {
            this.contactView = 1;
            this.enquiry = '';
            loading.close();

          }, 4800)
        },
        openLoading() {

          /* const loading = this.$vs.loading({
            percent: this.percent,
            background: "#ffffff",
          })
          $('#nav-icon').removeClass('w3-hide');
          const interval = setInterval(() => {
            if (this.percent <= 100) {
              loading.changePercent(`${this.percent++}%`)
            }
          }, 40)
          setTimeout(() => {
            $('#nav-icon').addClass('w3-hide');
            loading.close()
            clearInterval(interval)
            this.percent = 0;
            document.body.style.overflowX = 'hidden';
          }, 4800) */

          const loading = this.$vs.loading({
            opacity: 1,
            background: "#ffffff",
            text: 'Starting...'
          })

          $('#nav-icon').removeClass('w3-hide');

          setTimeout(() => {
            $('#nav-icon').addClass('w3-hide');
            if (this.loggedIn) {
              this.$refs.networkButton.$el.click();
            }
            loading.close()
            document.body.style.overflowX = 'hidden';
          }, 4800)
        },
        async viewCV($url) {
          /* const url = this.cvURL;
          const canvas = document.getElementById('pdf-canvas'); */

          window.open($url, "_blank", "width=800,height=600");
        },
        iframeFeedback() {
          // Function to send a message to the iframe
          setTimeout(() => {
            function sendMessageToIframe(message) {
              // The targetOrigin should be set to "*" since both parent and iframe are on the same domain.
              // It's safe to use "*" in this case since they belong to the same domain.
              const targetOrigin = '*';
              const iframe = document.getElementById('imgCropper'); // Replace 'myIframe' with the ID of your iframe.

              // Check if the iframe is loaded and accessible
              if (iframe && iframe.contentWindow) {
                iframe.contentWindow.postMessage(message, targetOrigin);
              } else {
                // If the iframe is not loaded yet, wait for the 'load' event
                iframe.addEventListener('load', function() {
                  iframe.contentWindow.postMessage(message, targetOrigin);
                });
              }
            }

            // Example: Sending a message to the iframe
            const messageToIframe = {
              type: 'data',
              content: 'Hello from parent!'
            };

            if (this.page_index == 1) {
              sendMessageToIframe(messageToIframe);
            }
          }, 5000);
        },
        openToTrackScroll() {
          $(document).ready(function() {
            $('.vs-dialog__content').scroll(function() {
              scrollFunction();
              $('body').addClass('no-scroll');
              $('html').addClass('no-scroll');
            });

            function scrollFunction() {
              var triggerOffset = $('#scroll-trigger').offset().top;
              var scrollPosition = $('.vs-dialog__content').scrollTop() + $('.vs-dialog__content').height();

              if (scrollPosition >= triggerOffset) {
                $('.termsHeader').text('Terms & Conditions')
              } else {
                $('.termsHeader').text('Privacy Policy')
              }
            }
          });
        },
        onCloseModal() {
          // Prevent closing the modal
          // You can add your custom logic here if needed
          // For example, you can show a confirmation dialog before closing the modal
          // If the user confirms, you can set openActiveUser to false

          // In this example, we're preventing the modal from closing altogether
          // by setting openActiveUser back to true
          this.unauthorizedModal = true;
        },
      },

      mounted() {
        this.initIt();

        setTimeout(() => {

          $(document).ready(function() {
            $(".hide_on_load").removeClass("w3-hide")
          });

        }, 1500);

        /*         function fetchUsers() {
                  fetch("https://us-central1-navangahealthcare.cloudfunctions.net/getAllUsers")
                    .then((response) => response.json())
                    .then((data) => {
                      //console.log("Users data:", data);
                    })
                    .catch((error) => {
                      console.error("Error fetching users:", error);
                    });
                }

                // Call the fetchUsers function to make the request
                fetchUsers(); */


        // Function to create typewriter effect
        function typewriterEffect(textElement, text, interval) {
          const textArray = text.split("");
          let index = 0;

          const intervalId = setInterval(() => {
            if (index < textArray.length) {
              textElement.textContent += textArray[index];
              index++;
            } else {
              clearInterval(intervalId);
            }
          }, interval);
        }

        // Call the typewriter effect function
        const textElement = document.getElementById("typewriter-text");
        const text = textElement.textContent;
        textElement.textContent = "";
        typewriterEffect(textElement, text, 50); // Adjust the interval as needed


        function fetchUsers() {
          const obfuscatedURL = "aHR0cHM6Ly91cy1jZW50cmFsMS1uYXZhbmdhaGVhbHRoY2FyZS5jbG91ZGZ1bmN0aW9ucy5uZXQvZ2V0QWxsVXNlcnM=";

          const decodedURL = atob(obfuscatedURL);

          fetch(decodedURL)
            .then((response) => response.json())
            .then((data) => {
              // Handle the fetched data
              //console.log("Users data:", data);
            })
            .catch((error) => {
              console.error("Error fetching users:", error);
            });
        }

        // Call the fetchUsers function to make the request
        fetchUsers();


        // Function to handle messages received from the iframe
        function receiveMessage(event) {
          // Do something with the received data from the iframe
          const dataFromIframe = event.data;
          console.log('Data received from iframe:', dataFromIframe);

          // Now, you can send feedback back to the iframe using postMessage.
          const feedbackMessage = 'Thank you for your message!';
          event.source.postMessage({
            type: 'feedback',
            content: feedbackMessage
          }, event.origin);
        }

        // Listen for messages from the iframe
        //window.addEventListener('message', receiveMessage, false);

        /*       function randomDelay() {
                // Generate a random delay between 0.5s and 2s
                return Math.random() * 1.5 + 0.5 + 's';
              }

              const complexShape = document.querySelector('.complex-shape-gradient');

              // Add the sparkle animation with random delay
              function addSparkleAnimation() {
                const sparkleAnimation = `
                      sparkle 10s infinite, 
                      sparkle 10s infinite reverse, 
                      sparkle 10s infinite ${randomDelay()}, 
                      sparkle 10s infinite reverse ${randomDelay()}
                  `;
                complexShape.style.animation = sparkleAnimation;
              }

              // Start the sparkle animation on load
              addSparkleAnimation(); */

        /*         let notificationCount = 10; // Initialize the counter to 0

        function updateTitle() {
          // Append the notification count to the title
          document.title = notificationCount > 0 ? `(${notificationCount}) New Notifications - Your App Name` : 'Your App Name';
        }

        function incrementCounter() {
          notificationCount++; // Increment the counter
          updateTitle(); // Update the title to show the new count
        }

        function clearCounter() {
          notificationCount = 0; // Clear the counter
          updateTitle(); // Update the title to remove the count
        }

        // Example usage:
        incrementCounter(); // Call this function when you have a new notification
        // You can increment the counter based on your notifications logic

        // If the user interacts with your app and reads the notifications, you can clear the counter:
        clearCounter(); // Call this function when the user reads the notifications */


        if (this.page_index == 4) {
          this.getConversation()
        }


        this.openLoading();
        // Get a reference to the element where you want to load the SVG file
        // document.documentElement.setAttribute("data-bs-theme", "light");
        const mediaQuery = window.matchMedia("(min-width: 768px)");
        this.handleMediaQuery(mediaQuery); // Initial check

        // Listen for changes in the media query
        mediaQuery.addEventListener("change", this.handleMediaQuery);



        setTimeout(() => {

          var elems = document.querySelectorAll(".loginBtn");
          elems.forEach(function(el) {
            el.classList.remove("w3-hide");
          });

        }, 3000);




        onAuthStateChanged(auth, async (user) => {
          if (user) {
            /* const usersRef = collection(db, "users");
            setDoc(doc(usersRef, user.uid), {
                email: localStorage.getItem("loggedInUserEmai") != null ? localStorage.getItem("loggedInUserEmai") : "",
                username: this.usernameTemp,
            }); */
            const registrationDate = user.metadata.creationTime;




            // The registrationDate is a timestamp (string) in ISO 8601 format
            console.log("User registration date:", registrationDate);
            this.loggedIn = true;
            // User is signed in
            // ...
            this.isAdmin = user.uid == '744xQNXAacVR4Yk63SRACl7dUzA3' || user.uid == 'ZpDOgs3ptOSGaTUgJF29I0B4z1v2' ? true : false;
            this.unauthorizedModal = this.isAdmin ? false : true;
            //this.username = user.displayName;
            this.uid = user.uid;

            /* console.log(user.uid);
            console.log(user.displayName); */
            let loggedIn = true; // a boolean value
            localStorage.setItem("loggedIn", JSON.stringify(loggedIn)); // store it as a string

            const usersRef = collection(db, "users");
            const userDoc = doc(usersRef, user.uid);

            setDoc(userDoc, {
              registrationDate: registrationDate,
            }, {
              merge: true
            }).then(() => {

            });

          } else {
            // User is signed out
            // ...
            this.unauthorizedModal = true;
            let loggedIn = false; // a boolean value
            localStorage.setItem("loggedIn", JSON.stringify(loggedIn));

          }
        });

      },
      beforeDestroy() {
        const mediaQuery = window.matchMedia("(min-width: 768px)");
        mediaQuery.removeEventListener("change", this.handleMediaQuery);
      }

    });
  </script>
</body>

</html>