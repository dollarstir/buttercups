<?php




$string="1. Tim Moltzen, 2. Joel Reddy, 3. Blake Ayshford, 4. Chris Lawrence, 5. James Tedesco, 6. Benji Marshall, 7. Braith Anasta, 8. Aaron Woods, 9. Robbie Farah, 10. Jack Buchanan, 11. Bodene Thompson, 12. Liam Fulton, 13. Adam Blair, 14. Ben Murdoch Masila, 15. Ava Seumanufagai 16. Matt Bell, 17. Eddy Pettybourne";

$string=explode(', ',$string);
echo '<ol>';
foreach($string as $val)
    {
        echo '<li>'. $val.'</li>';
    $val=explode('. ',$val);
    // mysql_query('INSERT INTO yourtable (col_number,col_name) VALUES ("'.$val[0].'.","'.$val[1].'")';
    }
    echo '</ol>';



?>