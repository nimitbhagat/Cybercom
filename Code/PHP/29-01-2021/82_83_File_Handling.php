<?php

$dir = "files";

if ($handle = opendir($dir . '/')) {
    echo "In Directory '" . $dir . "'";

    while ($file = readdir($handle)) {
        if ($file != ".." && $file != ".") {
?>
            <a href="<?php echo $dir . "/" . $file; ?>"><?php echo $file; ?></a>
<?php
        }
    }
}
