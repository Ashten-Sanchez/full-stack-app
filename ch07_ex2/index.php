<?php 
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <select name = "investment">
                <option value = "10000" <?php if ($investment == 10000) echo 'selected'; ?>>$10,000</option>
                <option value = "15000" <?php if ($investment == 15000) echo 'selected'; ?>>$15,000</option>
                <option value = "20000" <?php if ($investment == 20000) echo 'selected'; ?>>$20,000</option>
                <option value = "25000" <?php if ($investment == 25000) echo 'selected'; ?>>$25,000</option>
                <option value = "30000" <?php if ($investment == 30000) echo 'selected'; ?>>$30,000</option>
                <option value = "35000" <?php if ($investment == 35000) echo 'selected'; ?>>$35,000</option>
                <option value = "40000" <?php if ($investment == 40000) echo 'selected'; ?>>$40,000</option>
                <option value = "45000" <?php if ($investment == 45000) echo 'selected'; ?>>$45,000</option>
                <option value = "50000" <?php if ($investment == 50000) echo 'selected'; ?>>$50,000</option>
            </select>

            <br>

            <label>Yearly Interest Rate:</label>
            <select name = "interest_rate">
                <option value = "4" <?php if ($interest_rate == 4) echo 'selected'; ?>>4</option>
                <option value = "4.5" <?php if ($interest_rate == 4.5) echo 'selected'; ?>>4.5</option>
                <option value = "5" <?php if ($interest_rate == 5) echo 'selected'; ?>>5</option>
                <option value = "5.5" <?php if ($interest_rate == 5.5) echo 'selected'; ?>>5.5</option>
                <option value = "6" <?php if ($interest_rate == 6) echo 'selected'; ?>>6</option>
                <option value = "6.5" <?php if ($interest_rate == 6.5) echo 'selected'; ?>>6.5</option>
                <option value = "7" <?php if ($interest_rate == 7) echo 'selected'; ?>>7</option>
                <option value = "7.5" <?php if ($interest_rate == 7.5) echo 'selected'; ?>>7.5</option>
                <option value = "8" <?php if ($interest_rate == 8) echo 'selected'; ?>>8</option>
                <option value = "8.5" <?php if ($interest_rate == 8.5) echo 'selected'; ?>>8.5</option>
                <option value = "9" <?php if ($interest_rate == 9) echo 'selected'; ?>>9</option>
                <option value = "9.5" <?php if ($interest_rate == 9.5) echo 'selected'; ?>>9.5</option>
                <option value = "10" <?php if ($interest_rate == 10) echo 'selected'; ?>>10</option>
                <option value = "10.5" <?php if ($interest_rate == 10.5) echo 'selected'; ?>>10.5</option>
                <option value = "11" <?php if ($interest_rate == 11) echo 'selected'; ?>>11</option>
                <option value = "11.5" <?php if ($interest_rate == 11.5) echo 'selected'; ?>>11.5</option>
                <option value = "12" <?php if ($interest_rate == 12) echo 'selected'; ?>>12</option>
            </select>

            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>