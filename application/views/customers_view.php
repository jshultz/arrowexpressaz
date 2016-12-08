<div class="row">
    <div class="small-10 small-centered">
        <div id="" class="row">
            <div id="" class="small-12 medium-9 columns">
                <p>
                <h1>Welcome Arrow Express Customers!</h1>
                </p>
                <p class="notice">With this system you will be able to add addresses and request a pickup. If you would like
                    additional features, please use our <a href="/site/contact">contact form</a> to request them!</p>
                <p>To update your account: <a href="/customers/account_info">click here</a></p>
                <p>To add addresses to your account: <a href="/customers/shipping_info">click here</a></p>
                <p>To request a NEXT DAY or later pickup: <a href="/customers/request_pickup">click here</a></p>
                <p><b>Please note, if you need to schedule a pickup for today please call our office at: 928-639-3533</b></p>

            </div>

            <div id="" class="small-12 medium-3 columns">
                <p>
                <h1>Get Started</h1></p>

                <?php if (!$this->tank_auth->is_logged_in()): ?>

                    <p>You're not logged in. Please <?php echo anchor('/auth/login', 'login'); ?></p>

                <?php else: ?>

                    <p>Hi, <strong><?php echo $username; ?></strong>! You are logged in
                        now. <?php echo anchor('/auth/logout/', 'Logout'); ?></p>

                <?php endif; ?>


            </div>
        </div>
    </div>
</div>

