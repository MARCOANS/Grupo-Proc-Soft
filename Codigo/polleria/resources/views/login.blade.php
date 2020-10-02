@extends('layouts.site',['class'=>'woocommerce-account'])

@section('header')
@component('components.header-site')
@endcomponent
@endsection

@section('content')
   <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" ><a href="index.html">Inicio</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Mi cuenta</nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div id="post-10" class="post-10 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <div class="customer-login-form">
                                 <span class="or-text">or</span>
                                 <div class="u-columns col2-set" id="customer_login">
                                    <div class="u-column1 col-1">
                                       <h2>Login</h2>
                                       <form  class="login">
                                       
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="username">Usuario <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="" />
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="password">Contraseña <span class="required">*</span></label>
                                             <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
                                          </p>
                                          <p class="form-row">
                                             <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="02aaeb6b10" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="login" value="Login" />
                                             <label for="rememberme" class="inline">
                                             <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Recordarme
                                             </label>
                                          </p>
                                          <p class="woocommerce-LostPassword lost_password">
                                             <a href="#">Olvidaste tu contraseña?</a>
                                          </p>
                                       </form>
                                    </div>
                                    <div class="u-column2 col-2">
                                       <h2>Registrarse</h2>
                                       <form  class="register">
                                         
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_email">Email <span class="required">*</span></label>
                                             <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="" />
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_password">Contraseña <span class="required">*</span></label>
                                             <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
                                          </p>
                                          <!-- Spam Trap -->
                                          <div style="left: -999em; position: absolute;">
                                             <label for="trap">Anti-spam</label>
                                             <input type="text" name="email_2" id="trap" tabindex="-1" />
                                          </div>
                                          <p class="woocomerce-FormRow form-row">
                                             <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="1fe13dcb6d" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="register" value="Registrarse" />
                                          </p>
                                         
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.customer-login-form -->
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
@endsection

@section('footer')
@component('components.footer-site')
@endcomponent
@endsection
