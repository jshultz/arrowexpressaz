<div class="row">
    <div class="small-10 small-centered">
        <div id="" class="row">
            <div id="" class="small-12 medium-9 columns">
                <p>
                <h1>Login</h1>
                </p>
                <?php
                $login = array(
                    'name' => 'login',
                    'id' => 'login',
                    'value' => set_value('login'),
                    'maxlength' => 80,
                    'size' => 30,
                );
                if ($login_by_username AND $login_by_email) {
                    $login_label = 'Email or login';
                } else if ($login_by_username) {
                    $login_label = 'Login';
                } else {
                    $login_label = 'Email';
                }
                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'size' => 30,
                );
                $remember = array(
                    'name' => 'remember',
                    'id' => 'remember',
                    'value' => 1,
                    'checked' => set_value('remember'),
                    'style' => 'margin:0;padding:0',
                );
                $captcha = array(
                    'name' => 'captcha',
                    'id' => 'captcha',
                    'maxlength' => 8,
                );
                ?>
                <p><?php echo form_open($this->uri->uri_string()); ?>
                    <table>
                        <tr>
                            <td><?php echo form_label($login_label, $login['id']); ?></td>
                            <td><?php echo form_input($login); ?></td>
                            <td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo form_label('Password', $password['id']); ?></td>
                            <td><?php echo form_password($password); ?></td>
                            <td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></td>
                        </tr>

                        <?php if ($show_captcha) {
                        if ($use_recaptcha) { ?>
                            <tr>
                                <td colspan="2">
                                    <div id="recaptcha_image"></div>
                                </td>
                                <td>
                                    <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                                    <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get
                                            an audio CAPTCHA</a></div>
                                    <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get
                                            an image CAPTCHA</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="recaptcha_only_if_image">Enter the words above</div>
                                    <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                                </td>
                                <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field"/></td>
                                <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                                <?php echo $recaptcha_html; ?>
                            </tr>
                        <?php } else { ?>
                        <tr>
                            <td colspan="3">
                <p>Enter the code exactly as it appears (CaSe SeNsItIvE):</p>
            <?php echo $captcha_html; ?>
                </td>
                </tr>
                <tr>
                    <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
                    <td><?php echo form_input($captcha); ?></td>
                    <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
                </tr>
                <tr><p>Code is CaSe SeNsItIvE.</p></tr>
            <?php }
            } ?>

                <tr>
                    <td colspan="3">
                        <?php echo form_checkbox($remember); ?>
                        <?php echo form_label('Remember me', $remember['id']); ?>


                    </td>
                </tr>
                <tr>
                    <td>Need your password reset? <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?></td>
                </tr>
                <tr>
                    <td>Are you
                        new? <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></td>
                </tr>
                </table>
                <?php echo form_submit('submit', 'Let me in'); ?>
                <?php echo form_close(); ?></p>
            </div>
        </div>
    </div>
</div>
