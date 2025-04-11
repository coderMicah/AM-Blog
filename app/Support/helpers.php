<?php 

if(!function_exists('getInitials')) {
    function getInitials(String $name)
    {
        return collect(explode(' ', $name))
            ->filter()
            ->map(fn($word) => strtoupper($word[0]))
            ->take(2)
            ->implode('');
    }
}