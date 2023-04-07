<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $row_color = ($i % 2 == 0) ? 'white' : 'green';
        ?>
        <tr style="background-color: <?= $row_color ?>">
            <?php
            for ($j = 1; $j <= 5; $j++) {
                $cell_value = ($i - 1) * 5 + $j;
                ?>
                <td><?= $cell_value ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>