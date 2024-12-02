<?php
function generateFibonacci($n) {
    // Array para almacenar la secuencia Fibonacci
    $fibonacci = array();

    // Los dos primeros términos son 0 y 1
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    // Generar los siguientes términos sumando los dos anteriores
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Retornar la secuencia Fibonacci
    return $fibonacci;
}

// Ejemplo de uso
$n = 10; // Número de términos a generar
$fibonacciSequence = generateFibonacci($n);

// Mostrar los resultados
echo "The first $n Fibonacci numbers are: ";
echo implode(", ", $fibonacciSequence);


function isPrime($number) {
    // Los números menores o iguales a 1 no son primos
    if ($number <= 1) {
        return false;
    }

    // Solo necesitamos comprobar hasta la raíz cuadrada de $number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            // Si el número es divisible por cualquier número en el rango, no es primo
            return false;
        }
    }

    // Si no fue divisible por ninguno de los anteriores, es primo
    return true;
}

// Ejemplo de uso
$number = 29; // Número que vamos a comprobar
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}


function isPalindrome($string) {
    // Eliminar los espacios en blanco y convertir la cadena a minúsculas
    $string = strtolower(preg_replace('/\s+/', '', $string));

    // Invertir la cadena
    $reversedString = strrev($string);

    // Comparar la cadena original con la invertida
    if ($string === $reversedString) {
        return true; // Es un palíndromo
    } else {
        return false; // No es un palíndromo
    }
}

// Ejemplo de uso
$word = "A man a plan a canal Panama"; // Frase que es un palíndromo
if (isPalindrome($word)) {
    echo "'$word' is a palindrome.";
} else {
    echo "'$word' is not a palindrome.";
}
?>
