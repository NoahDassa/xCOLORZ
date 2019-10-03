


// open/close modal functionality

var modal = document.getElementById("signUp_modal")
  
function openModal () { modal.style.display = "block"; return}

function closeModal () { modal.style.display = "none"; return}

window.onclick = function(event) {
  if (event.target == modal ) {
    modal.style.display = "none";
  }
}


//NEW USER VALIDATION//NEW USER VALIDATION//NEW USER VALIDATION//NEW USER VALIDATION//
//NEW USER VALIDATION//NEW USER VALIDATION//NEW USER VALIDATION//NEW USER VALIDATION//


//when fields values are entered correctly, change to true
var userValidated = false
var pass1Validated = false
var pass2Validated = false
// get input fields
var user = document.getElementById("user")
var pass1 = document.getElementById("pass1")
var pass2 = document.getElementById("pass2")
// get error fields
var ue1 = document.getElementById("ue1")
var ue2 = document.getElementById("ue2")
var p1e1 = document.getElementById("p1e1")
var p1e2 = document.getElementById("p1e2")
var p2e = document.getElementById("p2e")

// begin event for desktop or phone...
user.addEventListener('focus', activateUser)
user.addEventListener('touchstart', activateUser)

// make error response effective immediately upon leaving the field...
function activateUser () {
  user.addEventListener('blur', validateUser )
  user.addEventListener('mouseout', validateUser)
  return
}

// check to see that the field is entered correctly, and username does not already exist
function validateUser () {
 
  ue1.innerHTML = ""
  ue2.innerHTML = ""
  ue1.style.color = 'crimson'
  ue2.style.color = 'crimson'
  ue1.style.fontStyle = 'italic'
  ue2.style.fontStyle = 'italic'

  if (user.value == "")  ue1.innerHTML = "No username entered"
  
  else if (user.value.length < 5) ue1.innerHTML =  "Usernames must be at least 5 characters"
  
  else if (/[^a-zA-Z0-9_-]/.test(user.value)) ue1.innerHTML = "Only a-z, A-Z, 0-9, - and _ allowed in usernames"
  
  else{
    // This is the relative path from index.php
    $.post("../../../Controller/AJAX/unique_User.php",
    {userValue:user.value}, 
    function(result){
      ue2.innerHTML = result;
    })
  }

  if (user.value != "" && ue2.innerHTML == "")  userValidated = true 

    return
}


//PASS1 VALIDATION//PASS1 VALIDATION//PASS1 VALIDATION//PASS1 VALIDATION////PASS1 VALIDATION//PASS1 VALIDATION/
//PASS1 VALIDATION//PASS1 VALIDATION//PASS1 VALIDATION//PASS1 VALIDATION////PASS1 VALIDATION//PASS1 VALIDATION/


pass1.addEventListener('focus', activatePass1)
pass1.addEventListener('touchstart', activatePass1)

function activatePass1 () {
  pass1.addEventListener('blur', validatePass1 )
  pass1.addEventListener('mouseout', validatePass1)

  return
}

function validatePass1 () {
  
  p1e1.innerHTML = ""
  p1e2.innerHTML = ""
  p1e1.style.color = 'crimson'
  p1e2.style.color = 'crimson'
  p1e1.style.fontStyle = 'italic'
  p1e2.style.fontStyle = 'italic'
  
  if (pass1.value == "")  p1e1.innerHTML = "No password entered"
  
  else if (pass1.value.length < 6) p1e1.innerHTML =  "Passwords must be at least 6 characters"
  
  else if (!/[a-z]/.test(pass1.value) || ! /[A-Z]/.test(pass1.value) || !/[0-9]/.test(pass1.value))
    p1e2.innerHTML = "Passwords require one each of a-z, A-Z and 0-9" 

  if (pass1.value != "" && p1e1.innerHTML == "" && p1e2.innerHTML == "") pass1Validated = true;

  return
}

  
//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//
//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//PASS2 VALIDATION//



pass2.addEventListener('focus', activatePass2)
pass2.addEventListener('touchstart', activatePass2)

function activatePass2 () {
  pass2.addEventListener('blur', validatePass2 )
  pass2.addEventListener('mouseout', validatePass2)

  return
}

function validatePass2 () {
  p2e.innerHTML = ""
  p2e.style.color = 'crimson'
  p2e.style.fontStyle = 'italic'

  if (pass2.value != pass1.value)  p2e.innerHTML = "Passwords must match"

  if (pass2.value != "" && p2e.innerHTML == "")  pass2Validated = true;
  
  return
}


// SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION 
// SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION // SIGN UP FORM SUBMISSION 


function signUp_User () {
 
  if(userValidated && pass1Validated && pass2Validated) {
    
    modal.style.display = "none"
    //this is the relative path from index.php 
    $.post("../../../Controller/AJAX/add_User.php",
    {username:user.value,password:pass1.value}, 
    function(result){
      alert()
      return
    })
 
    display_loginForm ()
 
    document.getElementById("login_message").innerHTML = "Thank you for signing up. Please log in."
    document.getElementById("login_message").style.color = "aqua"
  } 
 }
 

