<?php

function RetourneNombrePremier(int $nombre) : bool
{
    if ($nombre == 0 || $nombre == 1){
        return FALSE;
    }
    if($nombre == 2 || $nombre == 3 || $nombre == 5 || $nombre == 7){
        return TRUE;
    }
    return !($nombre%2==0 || $nombre%3==0 || $nombre%5==0 || $nombre%7==0);
}

function TestNombre(){
    if(RetourneNombrePremier(7)==true){
        echo "Nombre premier";
        exit(1);
    }
    echo "Pas une nombre premier";
    return 0;
}

TestNombre();
