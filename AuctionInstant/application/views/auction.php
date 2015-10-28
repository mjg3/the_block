<html>
    <head>
        <title>The Hammer</title>
        <?php
            $this->load->view('/partials/meta');
        ?>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class='brand-logo center'></a>
           	    <a href="#" class='left'>Instant Auction</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/dash/1">Your Dash</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div id="clock"></div>
        <div class="container">
            <div class="row">
                <div class="col s4 offset-s2">
                    <img id="feature_img" src="/assets/images/feature_product.gif" alt="No Photo"/>
                </div>
                <div class="col s3 offset-s1">
                    <div id="current_price">
                        <h3>$$Current Price</h3>
                        <div class="row">
                            <form class="input-field col s" action="index.html" method="post">

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
