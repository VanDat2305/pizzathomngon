<div class="uk-section uk-flex uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                        <?php echo $MESSAGE ?>

                        <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                            <li><a href="#">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                        </ul>
                        <ul class="uk-switcher uk-margin">

                            <!-- Form đăng nhập -->
                            <li>
                                <h3 class="uk-card-title uk-text-center">Vui lòng đăng nhập!</h3>
                                <form method="POST" id="form_login">
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                            <?php if (isset($_SESSION['user'])) {
                                                $username =  isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : '';
                                                $password = isset($_SESSION['user']['password']) ? $_SESSION['user']['password'] : '';
                                            } else {
                                                $username = get_cookie("username");
                                                $password = get_cookie("password");
                                            } ?>
                                            <input class="uk-input uk-form-large" type="text" name="username" placeholder="Tên tài khoản" value="<?= $username ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-large" type="password" name="password" placeholder="Mật khẩu" value="<?= $password ?>">
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
                                        <div class="uk-align-left">
                                            <label>Nhớ mật khẩu <input class="uk-checkbox" type="checkbox" name="remember"></label>
                                        </div>

                                        <div class="uk-align-right">
                                            <a href="#forgot_password" uk-toggle>Quên mật khẩu?</a>

                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" name="btn_login">Đăng nhập</button>
                                    </div>
                                </form>
                            </li>



                            <!-- Form đăng ký -->
                            <li>
                                <h3 class="uk-card-title uk-text-center">Đăng ký và nhận ưu đãi</h3>
                                <form method="POST" id="form_signup">
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-large" type="text" placeholder="Họ và tên" name="fullname">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                            <input class="uk-input uk-form-large" type="text" placeholder="Địa chỉ email" name="email">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-large" type="text" placeholder="Tên tài khoản" name="username">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-large" type="password" placeholder="Tạo mật khẩu" name="password">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-large" type="password" placeholder="Xác nhận mật khẩu" name="password2">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" name="btn_signup">Đăng ký</button>
                                    </div>
                                </form>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal quen mat khau -->
<div id="forgot_password" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <h3 class="uk-card-title uk-text-center">Bạn đã quên mật khẩu ư?</h3>
        <p class="uk-text-center uk-width-medium@s uk-margin-auto">Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn.</p>
        <form>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input uk-form-large" type="text" placeholder="Địa chỉ Email" name="email">
                </div>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" name="btn_forgot">Gửi Email</button>
            </div>
        </form>

    </div>
</div>