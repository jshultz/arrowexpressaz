<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$this->load->view('meta');
?>
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

            <!-- Close button -->
            <button class="close-button" aria-label="Close menu" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="vertical dropdown menu" data-dropdown-menu>
                <li><a href="/">Home</a></li>
                <li><a href="/site/works" title="How Our Service Works">How We Work</a></li>
                <li><a href="/customers" title="Customers">Customers</a>
                    <ul class="menu">
                        <li><a href="/customers/account_info">My Profile</a></li>
                        <li><a href="/customers/request_pickup">Request Pickup</a></li>
                        <li><a href="/customers/shipping_info">Shipping</a></li>
                    </ul>
                </li>
                <li><a href="/customers/request_pickup">Request Pickup</a></li>
                <li><a href="/site/quote" title="Request A Quote">Request A Quote</a></li>
                <li><a href="/site/contact" title="Contact Arrow Express">Contact</a></li>
            </ul>

        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <?php
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view($page);
            $this->load->view('footer');
            ?>
        </div>
    </div>
</div>

<!--<script src="/assets/js/foundation.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation.min.js" integrity="sha256-6Po73qUOfEfrvKtDy88HN0Xx6wjx3ZlngccJjsIVpIg=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.motion.js" integrity="sha256-CIBcgi5CPZHGZCoRyFF4+4O7hFjKgZKO2FBwodioxXA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.dropdownMenu.js" integrity="sha256-91XZSGqWYwAq0ALnvufWbiTgEILyyHIk1TpkRT1xP3U=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.keyboard.js" integrity="sha256-C+scV4GGrU9tdLyF0r4fpBSNpmR6xC6cGwKTug03BVs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.box.js" integrity="sha256-3cGzG/FTvvuBgsXkfUsDlRBufnGDHYiHjU6bX3jRIA8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.nest.js" integrity="sha256-ngOOWeoxD/0zIHLMAKF9NtmuWUuToNghiqsWoO81Ew8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.offcanvas.js" integrity="sha256-qc1pEQ/FVQZw8RDh39JrhfZOnmltnj1MoBLdZVpZwe4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.mediaQuery.js" integrity="sha256-TwICFavIMrkATvecejIIDuFYYZ4xTYBZkzLqzhQ9A04=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.triggers.js" integrity="sha256-oEv0PHVR/Do1/W1MyTWtrTd2gzfxdZ5rXJ9M6nGeJ6E=" crossorigin="anonymous"></script>

<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.js"></script>
<script>
    $(document).foundation();
</script>
<script>
    $(document).ready(function () {
        $("#emailContact").validate();
    })
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-136438-39']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
    })();

</script>

</body>
</html>