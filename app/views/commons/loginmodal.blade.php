<div id="loginModal" class="reveal-modal medium" data-reveal>
    <h2>Login</h2>
    {{ Form::open(array(
        'url'    => 'user/login',
        'role'   => 'form',
        'method' => 'POST',
        'data-abide' => 'data-abide'
    )) }}
        <div class="row">
             <div class="medium-6 medium-offset-3 columns">   
                <div class="medium-12 columns">
                    <label>Email <small>required</small>
                        <input type="email" required name="login_email" id="login_email" placeholder="..." />
                    </label>
                    <small class="error">Please enter a valid email address.</small>
                </div>
                <div class="medium-12 columns">
                    <label>Password <small>required</small>
                        <input type="password" required name="login_password" id="login_password" placeholder="..." />
                    </label>
                    <small class="error">Password is required.</small>
                </div>      
                <div class="row">
                    <input type="submit" name="login-btn" value="Login" class="button small-4 small-offset-4" />
                </div>
            </div>
        </div>
  {{ Form::close() }}
    <a class="close-reveal-modal">&#215;</a>
</div>