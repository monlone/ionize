<?php

/**
 * Displays one result for a system check
 * Called through XHR by : /admin/system_check.php
 *
 */

?>
<p style="width:80%;"><b><?= $title ?></b> : <span class="<?= $result_status ?>"><?= $result_text ?></span><a class="icon right ok ml10"></a></p>