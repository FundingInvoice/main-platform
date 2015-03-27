<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 
/*
print "test->".$output; 
$curdate = date("Y-m-d")
$timestamp_start = strtotime($curdate);
$timestamp_end = strtotime($output);
$difference = abs($timestamp_end - $timestamp_start);
*/
?>
<?php

//$curdate = date("Y-m-d")
//$diff1=new DateTime('2000-01-01');
//$testdata="test data";

//$tes=$diff1->format("%R%a days");
?>

<?php
/*
$date1=date_create("2014-08-15");
$date2=date_create("2014-10-07");

$diff=date_diff($date1,$date2);
//echo $diff->format("%a days");

$test = date_create("2014-08-15");
$curdate = date("Y-m-d");
$diff1=date_diff($test,$curdate);
//echo $diff1->format("%a days");
*/
?>


