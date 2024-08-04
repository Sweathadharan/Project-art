 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
		 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="loginprocess.php">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" name="uname" id="uname" placeholder="Username or email" required>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="upwd" id="upwd" required>
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.php">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  