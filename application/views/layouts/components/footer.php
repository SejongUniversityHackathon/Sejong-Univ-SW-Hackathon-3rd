<!-- START Footer -->
<footer>
    <div class="container-fluid">
        <p style="color: #5c5c5c;">
            <strong class="m-r-1">세종이노베이션센터 빌딩관리시스템 </strong> 
            <span>&#xA9; 2017. 세종대학교 다..당신이 프린스송..?</span>팀</span>
        </p>
    </div>
</footer>
<!-- END Footer -->

    </div>
    <script>
        // Hide loader
        (function() {
            var bodyElement = document.querySelector('body');
            bodyElement.classList.add('loading');

            document.addEventListener('readystatechange', function() {
                if(document.readyState === 'complete') {
                    var bodyElement = document.querySelector('body');
                    var loaderElement = document.querySelector('#initial-loader');

                    bodyElement.classList.add('loaded');
                    setTimeout(function() {
                        bodyElement.removeChild(loaderElement);
                        bodyElement.classList.remove('loading', 'loaded');
                    }, 200);
                }
            });
        })();
    </script>

    <!-- Bower Libraries Styles -->
    <link rel="stylesheet" href="<?=site_url()?>assets/vendor/css/lib.min.css">

    <script src="<?=site_url()?>assets/javascript/app.min.13a3a368.js"></script>

    <script src="<?=site_url()?>assets/javascript/plugins-init.js"></script>
    <script src="<?=site_url()?>assets/javascript/switchery-settings.js"></script>
</body>

</html>