<html>
    <head>
        <title>Profile</title>
        <?php
            $this->load->view('/partials/meta');
        ?>
    </head>
    <body>
        <div class="container">
            <nav>
                <div class="nav-wrapper red darken-3">
                    <a href="/auction"><img class="brand-logo left small_logo" src="/assets/images/hammer.gif"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/auction">Auction</a></li>
                        <li><a href="/dash/1">Your Dash</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/dash/1">Your Dash</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>
