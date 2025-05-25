<?php
function nav($menu)
{
?>
    <nav>
        <ul>
        <?php
            foreach ($menu as $title => $link){
                echo "<li><a href = '$link'>$title</a></li>";
            }
        ?>
        </ul>
    </nav>
<?php
}
?>