<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
<script type="text/javascript" src="./js/index_script.js"></script>
<script type="text/javascript" src="./js/chart_script.js"></script>
</body>

</html>
<?php

$success = -1;
if (isset($_GET['success']) && $_GET['success'] == "true") {
    $success = 1;
} else if (isset($_GET['success']) && $_GET['success'] == "false") {
    $success = 0;
}

?>