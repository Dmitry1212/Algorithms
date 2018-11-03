<?php
$script = "
<script type=\"text/javascript\">
function toggle_show(id) {
    document.getElementById(id).style.display = document.getElementById(id).style.display == 'none' ? 'block' : 'none';
    event.stopPropagation();
}
</script>";

echo $script;