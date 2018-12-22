<header>
   <div class="container">
      <div class="navbar _flex _just-btwn">
         <div class="wrapper-logo col-3 _flex _align-center">
            <a href="#">
               <img src="<?= base_url() ?>assets/img/site/logo.png">
            </a>
         </div>

         <div class="wrapper-menu col-7 _just-end _align-center _flex">
            <ul>
               <li><span>Search</span></li>
               <li><a href="#">Latest Trade</a></li>
               <li>
                  <div id="login" class="_pointer">
                     <span>Login</span>
                     <div class="form-login">
                        <form>
                           <input type="text" name="username">
                           <input type="password" name="password">
                           <div class="wrapper-login-button">
                              <button type="submit">
                                 Login
                              </button>
                              <button type="button">
                                 Reset
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </li>
               <li class="profile _d-none"> Ilham
                  <ul class="dropdown">
                     <li><a href="#">My Profile</a></li>
                     <li><a href="#">My Trade</a></li>
                     <li><a href="#">Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
</header>