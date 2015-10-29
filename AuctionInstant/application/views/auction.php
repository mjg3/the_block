<html>
    <head>
        <title>The Hammer</title>
        <?php
            $this->load->view('/partials/meta');
        ?>
    </head>
    <body>
        <div class="container">
            <nav>
                <div class="nav-wrapper red darken-3">
                    <a href="/"><img class="brand-logo left small_logo bump_right" src="/assets/images/hammer.gif"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/users/faq">FAQ</a></li>
                        <li><a href="/users/dash">Your Dash</a></li>
                        <li><a href="/users/logout">Logout</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="/users/faq">FAQ</a></li>
                        <li><a href="/users/dash">Your Dash</a></li>
                        <li><a href="/users/logout">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col s6 offset-s3">
                    <div id="clock" class="card-panel center-align big z-depth-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 col m5 offset-m1">
                    <img id="feature_img" class="responsive-img" src="/assets/images/featur_product.gif" onerror='this.onerror = null; this.src="/assets/images/alt_feature.gif"' alt="No Product"/>

                </div>
                <div class="col s12 col m5">
                    <h5 id="feature_product_name">Product Name</h5>
                    <p id="feature_product_description">
                        Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <h6 class="col s8 offset-s4">Seller: <a>'seller name'</a></h6>
                    <div class="row">
                        <div class="col s4">
                            <h4>Price:</h4>
                        </div>
                        <div class="col s8">
                            <h4>$15.00</h4>
                        </div>
                        <h6 class="col s8 offset-s4">Highest Bidder: <a>'bidder name'</a></h6>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <form class="input-field" action="/auctions/update" method="post">
                                <div class="input-field">
                                    <select class="grey-text text-lighten-1">
                                        <option value="" disabled selected>Your Bid ($USD)</option>
<?php
                                    for($i=20; $i<=2000; $i = $i + 5){?>
                                        <option value="<?=$i?>"><?=$i?>.00</option>
<?php
                                    }
?>
                                    </select>
                                </div>
                                <input class="btn right modal-close red darken-2" type="submit" value="Bid!">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
