<?php
function bytes_transform($bytes, $unit){
    switch($unit){
        case 'b' : return $bytes; break;
        case 'kb': return $bytes / pow(1024, 1); break;
        case 'mb': return $bytes / pow(1024, 2); break;
        case 'gb': return $bytes / pow(1024, 3); break;
        case 'tb': return $bytes / pow(1024, 4); break;
    }
}

function transform_to_bytes($value, $unit){
    switch($unit){
        case 'b' : return $value; break;
        case 'kb': return $value * pow(1024, 1); break;
        case 'mb': return $value * pow(1024, 2); break;
        case 'gb': return $value * pow(1024, 3); break;
        case 'tb': return $value * pow(1024, 4); break;
    }
}