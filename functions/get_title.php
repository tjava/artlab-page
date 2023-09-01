<?php

    function getTitle() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        $uri = $_SERVER['REQUEST_URI'];
        
        $url = $protocol . $host . $uri;
        
        // Parse the URL
        $urlParts = parse_url($url);
        
        // Get the path part
        $path = $urlParts['path'];
        
        // Remove leading and trailing slashes
        $path = trim($path, '/');
        
        // Split the path using '/' as the delimiter
        $pathParts = explode('/', $path);
        
        // Get the last part of the path
        $lastPart = end($pathParts);
        
        return ucwords($lastPart); // Output: "about"
    }

