<?php 

include 'quotes.php';

/* PHP - Random Quote Generator

# Understand the Problem

# Create a random quote program, that when the button is click shows a new random quote. 

# inputs
  # Multidimensional Array (Array of Arrays)

# Outputs
  # Built out strings of text 
    # Print out values in the index file

# Mental Model
  # When a user clicks "Get Random Quote" button, a new random quote will print from our Multidimensional Array.

# Requirements
  # Multidimensional Array (Array of Arrays)
  # 5 or greater quote elements exist in the inner array
  # getRandomQuote function returns a random inner array element from the Multidimensional Array
  # printQuote function invokes (calls) the getRandomQuote function and prints the quote to the page
    # Build out markup and then export it???
  # clear and concise comments are used throughout 
  # New quote is generated after a certain amount of time
    # JavaScript - setTimeout, setInterval???
    # MetaTag - refresh
    # Performance concerns executing a function continually ???
    # How would a metatag refresh affecting performance or user experience???
  # Background color changes each time a new quote is generated
    # Background-image change???


# Examples / Test Cases
  # printQuote() === “It’s supposed to be hard. If it were easy, everyone would do it.” – Jimmy Dugan, A League of Their Own"
  # printQuote() === “Life isn’t about waiting for the storm to pass, it’s about learning to dance in the rain." – Vivian Greene"
  # printQuote() === “Do what you feel in your heart to be right, for you’ll be criticized anyway.” – Eleanor Roosevelt"
  # printQuote() === “I can be changed by what happens to me but I refuse to be reduced by it.” – Maya Angelou"
  # printQuote() === “The only person you should try to be better than is the person you were yesterday.”

# Data Structure 
  # Multidimensional Array (Array of Arrays)
  # String 
  # Integer


# Algorithm
// Create a multidimensional array named "quotes"
// Within that array store an additional array for each quote 0 => [], 1 = [] ect...
// Store properties quote, source, citation, category, img_src,

// create a function named getRandomQuote
// randomize the array key
// store the result in a variable and return it

// create a function named printQuote
// setup an output variable to build the html markup as a string
// it should invoke (call) getRandomQuote function 
// return the the output variable 

// open a php block at the top of the index file
// include functions.php
// open a php code block inside the div#quoteBlock
// call the printQuote function in the

// Work on more advanced features after getting the baseline functioning */

# Code

//refresh the page every 6 seconds - Will execute new quote and background image being generated
header("refresh: 6");

// Return a new random quote each time this function is invoked
function getRandomQuote($arr) {
    // get the quotes array using a super global 
    $arr = $GLOBALS['quotes'];
    return $arr[rand(0, count($arr) - 1)];
}

// Build the quote out 
function printQuote($arr) {
  // start output string
  $output = '';
  // get a single quote 
  $quote = getRandomQuote($arr);
  // Build the quote and return it
  $output = '<p class="quote">' . $quote['quote'] . '</p>';
  $output .= '<p class="source mt-4">' . $quote['source'] . '</p>';
  $output .= '<h2 class="btn btn-primary category">Category: <span class="font-italic">' . $quote['category'] . '</span></p>';
  return $output;
}

// Print a random image to the screen
function getRandomImage($arr) {
  // get a single quote
  $quote = getRandomQuote($arr);
  // add a random quotes category and generate a random image
  $img_src = "https://source.unsplash.com/random?" . $quote['category'];
  // build the full image markup and return it
  return '<img src="' . $img_src . '" alt="Unsplash Random Image">';
}
