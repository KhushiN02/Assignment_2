<!-- 9. Create a program that censors inappropriate words from a comment:

Replace bad words with asterisks (****)
Count how many words were censored
Display both original and censored text
    Given:    

    $comment = "This is a damn good product but the service is hell";

    $badWords = ["damn", "hell"];

    Expected Output:

    Original: This is a damn good product but the service is hell

    Censored: This is a **** good product but the service is ****

    Words censored: 2 -->

<?php
$comment = "This is a damn good product but the service is hell";
$badWords = ["damn", "hell"];   
echo "Original: $comment<br>";
$censoredComment = $comment;
$wordsCensored = 0;
foreach ($badWords as $badWord) {   
    $pattern = "/\b" . preg_quote($badWord, '/') . "\b/i"; 
    $replacement = str_repeat('*', strlen($badWord)); 
    $count = 0;  
    $censoredComment = preg_replace($pattern, $replacement, $censoredComment, -1, $count); 
    $wordsCensored += $count; 
}   
echo "Censored: $censoredComment<br>";
echo "Words censored: $wordsCensored";
?>