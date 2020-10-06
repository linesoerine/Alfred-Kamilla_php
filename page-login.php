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
		<form method="post" action="frokostordning.php" onsubmit="return validation();">
			<div class="input_wrap">

      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg>

				<label for="input_text">Email or Username</label>
				<div class="input_field">
					<input type="text" class="input" id="input_text">
				</div>
			</div>
			<div class="input_wrap">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
  </svg>
				<label for="input_password">Password</label>
				<div class="input_field">
					<input type="password" class="input" id="input_password">
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