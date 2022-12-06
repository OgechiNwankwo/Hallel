<?php
require("../Controller/customization_controller.php");



//show journal table
function showrandCustomizationTable_fnc()
{
    $mydata = select_customization_ctr();
    echo "<table class='table'>
    <thead class='table-'>
      <tr>
        <th scope='col'>Image</th>
        <th scope='col'>Description</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($mydata as $customize) {
        $image = $customize['customization_image'];
        $desc = $customize['customization_desc'];
        
        showjournalRow_fnc($image, $desc);
    }
    echo "
    </tbody>
</table>";
}

function showjournalRow_fnc($image, $desc)
{
    echo "
    <tr>
      <td><img src='$image'  width='200px' height='200'> </td>
      <td>$desc</td>
    </tr>
    ";
}





?>