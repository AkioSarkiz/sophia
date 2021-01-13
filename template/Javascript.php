<?php

$scripts = new \Sophia\Javascript;
$scripts->list("bootstrap", "assets/bootstrap-4.5.3/js/bootstrap.min.js");
$scripts->list("jquery", "assets/theme/js/jquery.min.js");
$scripts->list("popper", "assets/theme/js/popper.min.js");
$scripts->list("sidebar", "assets/theme/js/sidebar.js");
$scripts->list("datetimepicker", "assets/theme/js/datetimepicker.js");
$scripts->list("sweetalert2", "assets/theme/js/sweetalert2.js");
$scripts->list("stripe", "https://js.stripe.com/v3/", true);
$scripts->list("sweetalert", "https://cdn.jsdelivr.net/npm/sweetalert2@10", true);


