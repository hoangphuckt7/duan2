<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/meta')?>
</head>
<body>
    <div class="page">

        <nav class="side-navbar">
            <?php $this->load->view('admin/sidebar')?>
        </nav>

        <header class="header">
            <?php $this->load->view('admin/header')?>
        </header>

        <?php $this->load->view($dulieu, $this->data);?>

        <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
            <?php $this->load->view('admin/footer');?>
        </footer>
        <!-- JavaScript files-->
    <script src="<?php echo base_url()?>public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>public/template/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url()?>public/template/vendor/just-validate/js/just-validate.min.js"></script>
    <script src="<?php echo base_url()?>public/template/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="<?php echo base_url()?>public/template/vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="<?php echo base_url()?>public/template/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url()?>public/template/js/front.js"></script>
    <script>
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function (e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
</body>
</html>