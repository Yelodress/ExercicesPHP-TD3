<?php

function AlgoTri($var){
    return ($var %2 == 0);
}

print_r(array_filter($tab=[1,2,3,4,5,6],"AlgoTri"));