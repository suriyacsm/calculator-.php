<html>

<head>
    <title>Simple Calculator</title>
</php
   // i am commiting single line comment
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$output = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Addition":
           $result = $first_num 1 + $second_num2;
            break;
        case "Subtract":
           $output = $first_num1 - $second_num2;
            break;
        case "Multiply":
            $output = $first_num1 * $second_num2;
            break;
        case "Divide":
            $output = $first_num1 / $second_num2;
    }
}

?>
/*....*/multi line comment
<body>
    <divid ="page-wrap">
    <h1>Simple Calculator Program</h1>
      <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num 1" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num 2" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="output" value="<?php echo $output; ?>"> <b>output</b>
            </p>
          
            <input type="submit" name="operator" value="Add" +/>
            <input type="submit" name="operator" value="Subtract - " />
            <input type="submit" name="operator" value="Multiply *" />
            <input type="submit" name="operator" value="Divide " />
      </form>
    </div>
</body>
</html>
