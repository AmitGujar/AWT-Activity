<?php
$q = $_GET['q'];
$xml = simplexml_load_file("player.xml");
echo "<table border=1>
        <tr>
            <th>Name</th>
            <th>Runs</th>
            <th>Country</th>
        </tr>
     </table>";
foreach ($xml->children() as $key) {
    $cn = $key->Pname;
    if ($q == $cn) {
        echo "<tr><td>", $key->Pname;
        echo "<tr><td>", $key->Runs;
        echo "<tr><td>", $key->Wickets;
        echo "<tr><td>", $key->Country;
        echo "</td></tr>";
    }
}
echo "</table>";
