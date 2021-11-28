// const wLogInBtn = document.querySelector("#login-btn");
// const wSignUpBtn = document.querySelector("#signup-btn");
// const emailInputLoginPage = document.querySelector("#login-email-input");
// const passInputLoginPage = document.querySelector("#login-pass-input");
// const btnLoginPage = document.querySelector("#loginpage-btn");
// const dataSignUpPage = document.querySelector("#date");
// // const emailInputSignUpPage = document.querySelector("#signUp-email-input");
// // const emailErrorSignUpPage = document.querySelector("#emailHelp");
// // const passInputSignUpPage = document.querySelector("#signUP-pass-input");
// // const passErrorSignUpPage = document.querySelector("#passHelp");

// // const mobileInputSignUpPage = document.querySelector("#signUp-mobile-input");
// // const mobileErrorSignUpPage = document.querySelector("#mobilehelp");
// // const btnSignUpPage = document.querySelector("#signUppage-btn");


/*welcome page btns*/
// if (wLogInBtn) {
//     wLogInBtn.onclick = function() {
//         window.location = "login-page.php";
//     }
// }
// if (wSignUpBtn) {
//     wSignUpBtn.onclick = function() {
//         window.location = "signUp.php";
//     }
// }
/*welcome page btns end*/

// /*login page*/

// //////////////sign Up ///////////////
// const signUp_Btn = document.getElementById("signUppage-btn");
// const form1 = document.querySelector("#form1")
//     // sign_Btn.addEventListener("click",sginFunction);
// let welcomeQuiz = document.querySelector(".welcomeQuiz");
// //username

// const input_username = document.getElementById("input_username");
// const username_help = document.getElementById("username_help");
// const username_format = /^[a-zA-Z0-9_$\.]{4,16}$/;
// //email

// const input_email = document.getElementById("signUp-email-input");
// const email_help = document.getElementById("emailHelp");
// const email_format = /^[A-ZA-z0-9._-]+@(hotmail|gmail|yahoo|outlook).com$/;

// //password
// const input_pass = document.getElementById("signUP-pass-input");
// const pass_help = document.getElementById("passHelp");
// const format_pass = /.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/;
// //passwor2
// const pass2InputSignUpPage = document.querySelector("#signUP-pass2-input");
// const pass2ErrorSignUpPage = document.querySelector("#pass2Help");
// //mobile
// const mobileInputSignUpPage = document.querySelector("#signUp-mobile-input");
// const mobileErrorSignUpPage = document.querySelector("#mobilehelp");
// const format_mobile = /^[0-9]{14}$/;

// if (pass2InputSignUpPage) {
//     pass2InputSignUpPage.onkeyup = function() {
//         //pass2
//         if (pass2InputSignUpPage.value === "") {
//             pass2ErrorSignUpPage.innerHTML = "password confirmation is empty";
//             pass2ErrorSignUpPage.style.color = "red";
//             form1.action = "#";
//         } else {
//             if (pass2InputSignUpPage.value === input_pass.value) {
//                 pass2ErrorSignUpPage.innerHTML = "";
//                 pass2ErrorSignUpPage.style.color = "green";
//                 form1.action = "#";
//             } else {
//                 pass2ErrorSignUpPage.innerHTML = "password confirmation not equal to origin";
//                 pass2ErrorSignUpPage.style.color = "red";
//                 form1.action = "#";
//             }
//         }
//     };

//     //email
//     input_email.onkeyup = function() {
//         if (input_email.value === "") {
//             email_help.innerHTML = "email is empty";
//             email_help.style.color = "red";
//             form1.action = "#form";
//         } else {
//             if (input_email.value.match(email_format)) {
//                 email_help.innerHTML = "";
//                 email_help.style.color = "green";
//                 form1.action = "welcome.php";
//             } else {
//                 email_help.innerHTML = "email not valid";
//                 email_help.style.color = "red";
//                 form1.action = "#form";
//                 form1.action = "welcome.php";
//             }
//         }
//     };

//     //pass
//     input_pass.onkeyup = function() {
//         if (input_pass.value === "") {
//             pass_help.innerHTML = "Password is empty ";
//             pass_help.style.color = "red";
//         } else {
//             if (input_pass.value.match(format_pass)) {
//                 pass_help.innerHTML = "";
//                 pass_help.style.color = "green";
//                 form1.action = "#";
//             } else {
//                 pass_help.innerHTML = "Password Not Valid";

//                 pass_help.style.color = "red";
//                 form1.action = "#";
//             }
//         }
//         // e.preventDefault()
//     };

//     // mobile
//     mobileInputSignUpPage.onkeyup = function() {
//         console.log(mobileInputSignUpPage.value)
//         if (mobileInputSignUpPage.value === "") {
//             mobileErrorSignUpPage.innerHTML = "mobile should be not empty";
//             mobileErrorSignUpPage.style.color = "red";
//             form1.action = "#";
//         } else {
//             if (mobileInputSignUpPage.value.match(format_mobile)) {
//                 mobileErrorSignUpPage.innerHTML = "";
//                 mobileErrorSignUpPage.style.color = "green";
//                 form1.action = "#";
//             } else {
//                 mobileErrorSignUpPage.innerHTML = "mobile number not valid";
//                 mobileErrorSignUpPage.style.color = "red";
//                 form1.action = "#";
//             }
//         }
//     }
// }
// // localStorage.clear();
// if (mobileInputSignUpPage) {
//     signUp_Btn.onclick = () => {
//         if (localStorage.getItem("email") === input_email.vlaue) {
//             alert("you already have an acount go to login")
//         } else {
//             localStorage.setItem("email", input_email.value);
//             localStorage.setItem("pass", input_pass.value)
//             localStorage.setItem("date", dataSignUpPage.value)
//             localStorage.setItem("mobile", mobileInputSignUpPage.value)
//             form1.action = "login-page.php";
//         }

//     }
// }

// /*login page end*/