<?php
if ($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document_status') == 'Not Verified' || $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'email_activation') == "no") {
 header("location:verify-account");
}
