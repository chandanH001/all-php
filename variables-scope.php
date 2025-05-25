<?php
/**
 * There are 3 Types of scope
 * 1. Global
 * 2.local
 * 3. Static
 *
 */

// Global variables

$x = 5;

function newFunction()
{
    global $x; // Global
    echo "my lucky number is $x" . "\n";
}

newFunction(); // Function Call

// Local

function localVariable()
{
    $x = 10;

    echo "My local lucky number is $x ";

}
localVariable();
