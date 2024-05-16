<?php

function getVariablePost($variable)
{
    if (isset($variable)) // vérifie si la valeur existe
    {
        if (!empty($variable)) {

            return $variable;
        }
    } else {
        echo "Error no posted data";
    }
}

$nb1 = (int) getVariablePost($_POST["nb1"]);
$nb2 = (int) getVariablePost($_POST["nb2"]);
$calculation = getVariablePost($_POST["calcul-select"]);

function add(int $nb1, int $nb2): int
{
    return $nb1 + $nb2;
};

function substract(int $nb1, int $nb2): int
{
    return $nb1 - $nb2;
};

function multiply(int $nb1, int $nb2): int
{
    return $nb1 * $nb2;
};
function divide(int $nb1, int $nb2): ?float
{
    if ($nb1 === 0 || $nb2 === 0) {
        return null;
    }
    return $nb1 / $nb2;
};

function modulo(int $nb1, int $nb2): ?int
{
    return $nb1 % $nb2;
};

function calculate(float $nb1, float $nb2, string $calculation): ?float
{
    switch ($calculation) {
        case "add":
            return add($nb1, $nb2);
            break;
        case "substract":
            return substract($nb1, $nb2);
            break;
        case "multiply":
            return multiply($nb1, $nb2);
            break;
        case "divide":
            return divide($nb1, $nb2);
            break;
        case "modulo":
            return modulo($nb1, $nb2);
            break;
    }
}

$result = calculate($nb1, $nb2, $calculation);
if ($result === null) {
    $result = 'résultat nul';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <p><?= $result ?> </p>
    <form action="index.php" method="POST">
        <label for="nb1">First Number:</label>
        <input name="nb1" id="nb1" type="number" required>
        <label for="nb2">Second Number:</label>
        <input name="nb2" id="nb2" type="number" required>
        <label for="calcul-select">Choose a calculation:</label>
        <select name="calcul-select" id="calcul-select">
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="modulo">Modulo</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

</body>

</html>