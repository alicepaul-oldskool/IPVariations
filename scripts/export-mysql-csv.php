<?php

function exportMysqlToCsv($table,$filename = 'content.csv') {

$csv_terminated = "\n";

$csv_separator = ",";

$csv_enclosed = '"';

$csv_escaped = "\\";

$query = "select * from $table";

$result = mysql_query($query);

$rowcount = mysql_num_fields($result);

$data = '';

for ($i = 0; $i < $rowcount; $i++) {

$l = $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed,

stripslashes(mysql_field_name($result, $i))) . $csv_enclosed;

$data .= $l;

$data .= $csv_separator; }

$output = trim(substr($data, 0, -1));

$output .= $csv_terminated;

while ($row = mysql_fetch_array($result)) {

$data = '';

for ($j = 0; $j < $fields_cnt; $j++) {

if ($row[$j] == '0' || $row[$j] != '') {

if ($csv_enclosed == '') { $data .= $row[$j]; }

else { $data .= $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed, $row[$j]) . $csv_enclosed; } }

else { $data .= ''; }

if ($j < $rowcount - 1) { $data .= $csv_separator; } }

$output .= $schema_insert;

$output .= $csv_terminated; }

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

header("Content-Length: " . strlen($output));

// Output to browser with appropriate mime type, you choose ;)

header("Content-type: text/x-csv");

//header("Content-type: text/csv");

//header("Content-type: application/csv");

header("Content-Disposition: attachment; filename=$filename");

echo $output;

exit;

} ?>