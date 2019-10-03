


function display_loginForm () {
  // hide landing form
  document.getElementById("signUp_button").style.display = "none"
  document.getElementById("login_button").style.display = "none"
  // display login form 
  document.getElementById("login_username").style.display = "block"
  document.getElementById("login_password").style.display = "block"
  document.getElementById("login_User").style.display = "block"
  document.getElementById("signUp_or_logIn").style.gridTemplateRows = "0px 0px 60px"
}


function loginUser () { 

    let loggedIn = false
  
  $.post("../../../Controller/AJAX/verify_User.php",
  
  {username:document.getElementById("login_username").value,
  password:document.getElementById("login_password").value}, 
    
  function(result){ 
    
    loggedIn = result.includes('true')
  
    if(loggedIn) {
      document.getElementById("login_form").submit(); 
    }
    
  }) 

  return 
}


// the question is how to access these results 

















