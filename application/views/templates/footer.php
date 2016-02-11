
<footer>

<div class="row main-footer">
<div class="medium-3 columns">
<ul class="footer-link">
<h4>Text Example</h4>
<li><a href="#">Legal</a></li>
<li><a href="#">Partner</a></li>
<li><a href="#">Explore</a></li>
</ul>
</div>
<div class="medium-3 columns">
<ul class="footer-link">
<h4>Text Example</h4>
<li><a href="#">Legal</a></li>
<li><a href="#">Partner</a></li>
<li><a href="#">Explore</a></li>
</ul>
</div>
<div class="medium-3 columns">
<ul class="footer-link">
<h4>Text Example</h4>
<li><a href="#">Legal</a></li>
<li><a href="#">Partner</a></li>
<li><a href="#">Explore</a></li>
</ul>
</div>
<div class="medium-3 columns">
<ul class="footer-link">
<h4>Text Example</h4>
<li><a href="#">Legal</a></li>
<li><a href="#">Partner</a></li>
<li><a href="#">Explore</a></li>
</ul>
</div>
</div>
<div class="sub-footer">
<div class="row columns">
&copy; 2016 Workaria / Licenses / Terms & Conditions / Privacy Policy
</div>
</div>

</footer>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url() . 'asset/js/vendor/jquery.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/js/app.js';?>"></script>
    <script src="<?=base_url() . 'asset/js/foundation.js';?>"></script>
    <!--script for this page-->
    <script>
    $(document).ready(function() {
        $(document).foundation();
    })
    </script>

    <script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            // $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            $("#report").jExpand();
        });
    </script>
            
  </body>
</html>