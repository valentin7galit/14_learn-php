<?php

/* Use a try-catch-finally block to first catch the exception and print out Exception caught! and then finally print out Done!. Your final output should look like: Exception caught! Done! */

# This function will throw an exception!
function throw_exception() {
    throw new Exception("Exception!");
  }
  
  # Surround the statement in a try-catch-finally block!
    try {
        throw_exception();
    } catch (Exception $e) {
        echo "Exception caught!" . "\n";
    } finally {
        echo "Done!";
    }

?>