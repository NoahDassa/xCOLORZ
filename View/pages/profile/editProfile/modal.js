



  function editProfile () { document.getElementById("editModal").style.display = "block" }


  function updateAboutMe () {

    var aboutMe = document.getElementById('aboutMe').value
    var username1 = document.getElementById('username').innerHTML
    var unRegex = /.+/
  
    $.post("../zController/updateAbout.php",
    {username1:username1,
    aboutMe:aboutMe},
    function (data) {
      if(unRegex.test(data)) {
        document.getElementById('about').innerHTML = data
        document.getElementById('edit_about').value =  data
      } else {
        document.getElementById('about').innerHTML = "This user likes to maintain an aura of mystery..."
        document.getElementById('edit_about').value =  document.getElementById('about').innerHTML
      } 
  
    editModal.style.display = "none"
   
    })
  }