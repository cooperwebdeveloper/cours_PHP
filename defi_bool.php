<?php
$isPremium = false;
$unreadMessages = 10;
$readMessages = 40;
$junkMessages = 10;
$spamMessages = 3;
$messagesCountLimit = 50;
$premiumCountLimit = 100;

$totalMessages = $unreadMessages + $readMessages + $junkMessages + $spamMessages;

$hasUnreadMessages = $unreadMessages !== 0;
$mustCleanMessages = $junkMessages + $spamMessages > 0;
$isMessageboxFull =  $isPremium && $totalMessages > $premiumCountLimit || !$isPremium && $totalMessages > $messagesCountLimit;

if ($hasUnreadMessages) {
  echo 'Vous avez '.$unreadMessages.' messages non lus<br>';
}

if ($mustCleanMessages) {
  echo 'Vous avez des messages à nettoyer<br>';
}

if ($isMessageboxFull) {
  echo 'Attention : vous avez dépassé la limite de messages autorisée !<br>';
}
?>