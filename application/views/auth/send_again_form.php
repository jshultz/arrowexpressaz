<div class="row">
    <div class="small-10 small-centered">
        <div id="" class="row">
            <div id="" class="small-12 medium-9 columns">
                <p>
                <h1>Send Again</h1>
                </p>
                <?php
                $email = array(
                    'name' => 'email',
                    'id' => 'email',
                    'value' => set_value('email'),
                    'maxlength' => 80,
                    'size' => 30,
                );
                ?>
                <?php echo form_open($this->uri->uri_string()); ?>
                <table>
                    <tr>
                        <td><?php echo form_label('Email Address', $email['id']); ?></td>
                        <td><?php echo form_input($email); ?></td>
                        <td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></td>
                    </tr>
                </table>
                <?php echo form_submit('send', 'Send'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
