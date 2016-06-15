<div class="content">
<?php
    for($i = 0; $i < count($result); $i++) {
        $c = $result[$i];
        $body = nl2br($c['body']);
        echo "<p id='title_$c[id]' class='title bg-primary'>$c[created]</p>";
        echo "<div id='text_$c[id]' class='text'>$body</div>";
    }
?>
</div>