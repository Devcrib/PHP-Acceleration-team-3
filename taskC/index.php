<?
/**
 * @param $sentence
 * @param $row
 * @param $column
 * @return array
 */
function breakSentence($sentence, $row, $column)
{
    $sentence_length = strlen($sentence);
    $index = 0;
    for ($i = 0; $i < $row; $i++) {
        $length = strlen(substr($sentence, $index, $column));
        if ($length == $column) {
            echo substr($sentence, $index, $column) . "\n";
            $broken_string[] = substr($sentence, $index, $column);
        } elseif (strlen(substr($sentence, $index, $column) < $column)) {
            echo substr($sentence, $index, $sentence_length) . "\n";
            $broken_string[] = substr($sentence, $index, $sentence_length);
        }
        $index = $index + $column;
    }
    return $broken_string;
}

$sentence = "Welcome to Hell Where Beasts Are Made";
$sentence = str_replace(" ", "", $sentence);
echo "The sentence without the spaces is : " . $sentence . "\n\n";

$sentence_length = strlen($sentence);
echo "The length of the sentence is : " . $sentence_length . "\n\n";
$len_sqrt = sqrt($sentence_length);

echo "The square root of the length is : " . $len_sqrt . "\n\n";
$column = ceil($len_sqrt);
$row = floor($len_sqrt);

echo "Column is : " . $column . " and row is : " . $row . "\n\n";
// $index = 0;
$broken_string = [];

//Test case for column and row when column times row is greater than sentence length
if ($column * $row > $sentence_length) {
    echo "The grid formed is : ". "\n";
    $broken_string = breakSentence($sentence, $row, $column);

} //Test case for row when row times row is greater than sentence length
elseif ($row * $row > $sentence_length) {
    echo "The grid formed is : ". "\n";
    $broken_string = breakSentence($sentence, $row, $row);

} //Test case for column when column times column is greater than sentence length
elseif ($column * $column > $sentence_length) {
    echo "The grid formed is : ". "\n";
    $broken_string = breakSentence($sentence, $column, $column);

} else {
    echo "Both $column * $column and $row * $row is not greater than $sentence_length " ."\n\n";
    die();
}

$last_string_arr = [];
foreach ($broken_string as $string) {
    $len = strlen($string);
    for ($k = 0; $k < $len; $k++) {
        if (!empty($last_string_arr[$k])) {
            $last_string_arr[$k] .= $string[$k];
        } else {
            $last_string_arr[$k] = $string[$k];
        }
    }
}
echo "The encrypted sentence is : " . "\n";

echo implode(" ", $last_string_arr);
