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
                    <a href="/"><img class="brand-logo left small_logo" src="/assets/images/hammer.gif"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/users/faq">FAQ</a></li>
                        <li><a href="/">Auction</a></li>
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
            <div class="row profile_info">
                <div class="col s2 offset-s2">
                    <img class="profile_img" src="/assets/images/person.gif" alt="No Photo" />
                </div>
                <div class="card col s5">
                    <div class="row">
                        <div class="col s4">
                            <h6>Member Name:</h6>
                            <h6>Joined:</h6>
                            <h6>Rating:</h6>
                        </div>
                        <div class="col s8">
                            <h6 class="weight-lighten"><?=$user_info['first_name']?></h6>
                            <h6 class="weight-lighten"><?=$user_info['created_at']?></h6>
                            <h6 class="weight-lighten"><?=$user_info['rating']?>.0</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
