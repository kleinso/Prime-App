<h1>Is it prime?</h1>

<p>Enter number to see if it is PRIME!</p>
<form>

    <input name="enteredNumber" type="number">
    
    <input type="submit" value="Submit">

</form>

<?php

if (is_numeric($_GET['enteredNumber']) && $_GET['enteredNumber'] > 2 && $_GET['enteredNumber'] == round($_GET['enteredNumber'], 0)){
    
    $i = 2;
    
    $isPrime = true;
    while ($i < $_GET['enteredNumber']) {

        if ($_GET['enteredNumber'] % $i == 0) {
            
            $isPrime = false;
            
        } 
            $i++;
        } 
        if ($isPrime) {
            
            echo "<p>".$i." is a prime number!</p>";
            
        } else {
            
            echo "<p>".$i." is not prime.</p>";
        }
} 
else if ($_GET['enteredNumber'] != 1 && $_GET['enteredNumber'] != 2) {
    // User submitted something that is not a positive whole number
    
    echo "<p>Please enter a positive whole number.</p>";
    
}


if ($_GET['enteredNumber'] == 1) {
    echo "PRIME!";
}
    
if ($_GET['enteredNumber'] == 2) {
    echo "NOT PRIME.";
}
    


?>