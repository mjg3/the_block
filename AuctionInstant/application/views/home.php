<?php ?>

<html>
<head>
<?php $this->load->view('stuff'); ?>


 <script type="text/javascript">
 $(document).ready(function()	{
   $("#getting-started")
   .countdown("2015/10/30 10:00:00", function(event) {
       $(this).html(
      event.strftime('Time Remaining: %D Days %H:%M:%S')
     );
   });
});
   </script>

</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class='brand-logo center' id="getting-started"></a>
   	  <a href="#" class='left' id="getting-started">Instant Auction</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Sass</a></li>
        <li><a href="#">Components</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>
  </nav>
<div id="getting-started"></div>

	
</body>



</html>