<?php get_header(login); ?>

<div class="contest-container">

<div class="infotext-container">

  <h1>Din lokale frokostordning</h1>
  <p>
    Alfred & Kamilla din lokale frokostordning med fokus på
    madspild og gode råvare. Hver dag fra kl. 11.30-13.00 er
    er frokost buffet, hvor der også tages hensyn til forskellige
    spisevaner og allergier. <br><br>
    Desuden er også mulighed for at hente
    forsyninger i form af kage, mælk, smør mm. eller skulle det
    blive en lang aften på kontoret kan der også hentes
    sandwich eller wraps <br><br>
    Alfred og Kamilla er placeret på havnen i lækre store lokaler, med højt til loftet og en hyggelig og rustik atmosfære.
  </p>

</div> <!-- END INFOTEXT-CONTAINER -->






<div class="form">
		<div class="title">
			Login
		</div>
		<form method="post" action=".html" onsubmit="return validation();">
			<div class="input_wrap">
				<div class="input_field">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" color="#4aad52" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>

					<input type="text" class="input" id="input_text" placeholder="Email">
        
        </div> <!-- END INPUT_FIELD -->

      </div> <!-- END INPUT_WRAP -->
      
			<div class="input_wrap">
				<div class="input_field">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" color="#4aad52" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
          <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
        </svg>

        <input type="password" class="input" id="eyeIcon" id="input_password" placeholder="Password">
       
        <button id=“eyeop” onclick=“PassWordeye()“>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
          <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg>
        </button>

        <button id=“eyecls” onclick=“PassWordeye()” style=“display: none;“>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
          <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
          <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
        </svg>
      </button>
  
			 </div>
        
			</div>
			<div class="input_wrap">
				<span class="error_msg">Incorrect username or password. Please try again</span>
				<input type="submit" id="login_btn" class="btn disabled" value="Login" disabled="true">
			</div>
		</form>
	</div>

</div> <!-- END CONTEST-CONTAINER -->




<?php get_footer(); ?>






