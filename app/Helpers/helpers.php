<?php

if (!function_exists('maskEmail')) {
    function maskEmail($email) {
        if (!$email) return '';
        
        $parts = explode('@', $email);
        $username = $parts[0];
        $domain = $parts[1];
        
        if (strlen($username) <= 2) {
            return $email;
        }
        
        $visible = substr($username, 0, 2);
        $masked = str_repeat('*', strlen($username) - 2);
        
        return $visible . $masked . '@' . $domain;
    }
}