<?php // File: footer.php ?>

<div id="signInModal" class="modal-overlay">
    <div class="modal-content">
        <button class="close-modal" aria-label="Close modal">&times;</button>
        <div class="modal-tabs">
            <button id="loginTab" class="tab-btn">LOGIN</button>
            <button id="signupTab" class="tab-btn active-tab">SIGN-UP</button>
        </div>

        <form id="signupForm" class="modal-form" action="#" method="post"> <?php // Update action later ?>
            <h2>WELCOME!</h2>
            <p class="subheading">Create your account</p>
            <div class="input-wrapper"> <i class="fas fa-user"></i> <input type="text" name="signup_username" placeholder="Username" required> </div>
            <div class="input-wrapper"> <i class="fas fa-envelope"></i> <input type="email" name="signup_email" placeholder="Email" required> </div>
            <div class="input-wrapper"> <i class="fas fa-lock"></i> <input type="password" name="signup_password" placeholder="Password" required> <span class="toggle-password"><i class="fas fa-eye"></i></span> </div>
            <div class="input-wrapper"> <i class="fas fa-lock"></i> <input type="password" name="signup_repeat_password" placeholder="Repeat Password" required> <span class="toggle-password"><i class="fas fa-eye"></i></span> </div>
            <div class="form-buttons"> <button type="button" class="secondary-btn login-switch-btn">Login</button> <button type="submit" class="primary-btn">Sign Up</button> </div>
        </form>

        <form id="loginForm" class="modal-form hidden-form" action="#" method="post"> <?php // Update action later ?>
            <h2>WELCOME BACK!</h2>
            <p class="subheading">Sign in to your account</p>
            <div class="input-wrapper"> <i class="fas fa-user"></i> <input type="text" name="login_identifier" placeholder="Username or Email" required> </div>
            <div class="input-wrapper"> <i class="fas fa-lock"></i> <input type="password" name="login_password" placeholder="Password" required> <span class="toggle-password"><i class="fas fa-eye"></i></span> </div>
            <div class="form-options"> <a href="#" class="forgot-password">Forgot Password?</a> </div>
            <div class="form-buttons"> <button type="button" class="secondary-btn signup-switch-btn">Sign Up</button> <button type="submit" class="primary-btn">Login</button> </div>
        </form>
    </div>
</div>
<script src="modal.js"></script>