<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<script src="scripts/main.js"></script>

<link href="styles/main.css" rel="stylesheet">

<title> 401k Retirement Calculator</title>
<head>
</head>

<body>
<div id="wrapper">
    <form id="ret-calc-form">
        <label for="current-balance">Current 401k Balance:</label>
        <input id="current-balance" type="text" required="required">

        <label for="">Monthly Contributions (yours, employer match, catch-up):</label>
        <input id="current-balance" type="text" required="required">

        <label for="">Estimated Annual Return on Investment:</label>
        <input id="current-balance" type="text" required="required">

        <label for="">Current Age:</label>
        <input id="current-balance" type="text" required="required">

        <label for="">Retirement Age:</label>
        <input id="current-balance" type="text" required="required">

        <button type="submit">Calculate</button>
        <button type="reset">Reset</button>
    </form>

    <!-- TODO
        <button>Email My Results</button>
    -->
</div><!--wrapper-->
</body>
</html>