<?php
require("../Controller/journal_controller.php");



//show journal table
function showrandJournalTable_fnc()
{
    $mydata = select_journal_ctr();
    echo "<table class='table'>
    <thead class='table-'>
      <tr>
        <th scope='col'>Product Name</th>
        <th scope='col'>Product Image</th>
        <th scope='col'>Product Desc</th>
        <th scope='col'>Product Keyword</th>
        <th scope='col'>Product Price</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($mydata as $journal) {
        $journalId = $journal['journal_id'];
        $journalName = $journal['journal_title'];
        $journalImage = $journal['journal_image'];
        $journalDesc = $journal['journal_desc'];
       $journalPrice = $journal['journal_price'];
       $journalKeyword=$journal['journal_keywords'];
        
        showjournalRow_fnc($journalId, $journalName, $journalImage,$journalDesc,$journalPrice,$journalKeyword);
    }
    echo "
    </tbody>
</table>";
}

function showjournalRow_fnc($journalId, $journalName, $journalImage,$journalDesc,$journalPrice,$journalKeyword)
{
    echo "
    <tr>
      <td>$journalName</td>
      <td><img src='$journalImage' alt = '$journalName' width='200px' height='200'> </td>
      <td>$journalDesc</td>
      <td>$journalKeyword</td>
      <td>$journalPrice</td>
      <td>
      <a href = '../Admin/deletejournal.php?id=$journalId'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '../View/updatejournal.php?id=$journalId&journalName=$journalName&journaldes=$journalDesc&journalprice=$journalPrice&journalKeyword=$journalKeyword'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
}





?>