<div>
    <?php if($cookie): ?>
        <style>
            .remove_cart {
                margin-left: -22px;
                margin-right: 8px;
                cursor: pointer;
            }

            .theme_cookies {
                background: <?php echo e(@$cookie->bg_color); ?>;
            }

            .theme_cookies .cookie_btn {
                background: <?php echo e($cookie->text_color); ?>;
            }
        </style>
        <div class="theme_cookies" style="display: none">
            <div class="theme_cookies_info flex-fill">
                <div class="icon">
                    <img src="<?php echo e(asset(@$cookie->image)); ?>" alt="">
                </div>
                <p><?php echo @$cookie->details; ?></p>
            </div>
            <button type="button" class="cookie_btn" onclick="setCookies();"><?php echo e(@$cookie->btn_text); ?></button>
        </div>
    <?php endif; ?>

        <script>
            $( document ).ready(function() {
                <?php if($cookie->allow): ?>
                checkCookie();
                <?php endif; ?>
            });


            function setCookies() {
                $('.theme_cookies').hide(500);
                var d = new Date();
                document.cookie = "allow=1; expires=Thu, 21 Dec " + (d.getFullYear() + 1) + " 12:00:00 UTC";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            function checkCookie() {
                var check = getCookie("allow");
                if (check != "") {
                    $('.theme_cookies').hide();
                } else {
                    $('.theme_cookies').show();
                }
            }
        </script>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/components/footer-cookie.blade.php ENDPATH**/ ?>