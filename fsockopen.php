<?php

// Test if fsockopen() available
if(function_exists('fsockopen')) {
echo "fsockopen function is available";
} else {
echo "fsockopen function is not available";
}

?>
