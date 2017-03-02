        <div id="footer">
            <div class="footer">
                <div class="footer-logo"> 
                    <!--<img alt="" src="<?php echo BASE_URL;?>/templates/img/footer_logo.png" width="45" height="55">--> 
                </div> 
                <div class="footer-links"> 
                    <ul> 
<!--                        <li>
                            <a href="http://capitaland.com.vn/terms-and-conditions">?i?u kho?n &amp; ?i?u ki?n</a>
                        </li> 
                        <li>|</li> 
                        <li>
                            <a href="http://capitaland.com.vn/privacy-policy">Chinh sach b?o m?t</a>
                        </li> 
                        <li>|</li> 
                        <li>
                            <a href="http://capitaland.com.vn/cookie-policy">Lu?t Cookie</a>
                        </li> -->
                    </ul> 
                </div> 
                <div class="footer-info"> 
                    <p>Bản quyền 2017 thuộc Hưng Thịnh</p> 
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var togglemenu = false
            $(document).ready(function () {
                $("#button-menu").click(function (e) {
                    if (!togglemenu)
                    {
                        $(".responsivemenu").css('display', 'block');
                        $(".responsivemenu").animate({"right": "0%"}, "slow");
                        togglemenu = true;
                    } else
                    {
                        $(".responsivemenu").animate({"right": "-70%"}, "slow");
                        togglemenu = false;
                    }
                    e.preventDefault();
                });

                $(".dropmenu >li").each(function (index) {
                    if ($(this).has("ul").length)
                    {
                        $(this).addClass("dropdown");
                        $(this).find("a").attr("data-toggle", "dropdown");
                    }
                });
            });
        </script>
    </body>
</html>