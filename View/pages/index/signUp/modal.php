
  
  <!-- The Modal -->
  <!-- The Modal -->
  <div class="modal" id="signUp_modal">
      <!-- Modal content -->
    <div class="modal_content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="modalContainer">
        <div></div>
        <div class="modalTitle">Sign Up</div>
        <div></div>
        <div></div>



        <div>
          <div class="input">
            <input type="text" id="user" placeholder="Username">
          </div>
          <div class="error">
            <p id="ue1">Username must be at least 5 characters</p>
            <p id="ue2">Only letters, numbers, - and _ in Usernames</p>
          </div>
          <div class="input">
            <input type="password" id="pass1" placeholder="Password">
          </div>
          <div class="error">
            <p id="p1e1">Password must be at least 6 characters</p>
            <p id="p1e2">Passwords require 1 each of a-z, A-Z and 0-9</p> 
          </div>
          <div class="input">
            <input type="password" id="pass2" placeholder="Confirm Password">
          </div>
          <div class="error">
            <p id="p2e"></p>
          </div>
          <div class= "center">
            <button id="signUp_User" onclick="signUp_User()"> Submit </button>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </div>

 

