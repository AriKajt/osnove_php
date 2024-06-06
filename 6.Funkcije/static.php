<?php
function staticScope()
{
    static $a = 0;
    echo $a;
    $a++;
}

//Visestruko pozivanje fn, vidimo da svaki put raste (012) jer je static, ostalo nakon zavrsenja fn
//bez static, bilo bi 000
staticScope();//0
staticScope();//1
staticScope(); //2
//cesto bude pitanje na ispitu ili intervjuu za posao
