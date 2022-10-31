<?php
$hora = 0;
$min = 0;
$seg = 0;
sumseg (4999);
echo " h:".$hora. " m:".$min. " h:".$seg;

    function sumseg($cants)
    {
        global $seg;
        if ($cants >1)
        {
            sumseg($cants-1);
        }
        if ($seg<59)
        {
            $seg++;
        }
        else
        {
            $seg = 0;
            sumMin(1);
        }
    }

    function sumMin($canmin)
    {
        global $min;
        if ($canmin > 1) {
            sumMin($canmin - 1);
        }
        if ($min < 59) {
            $min++;
        } else {
            $min = 0;
            sumhora(1);
        }
    }

    function sumhora($canhora)
    {
        global $hora;
        if ($canhora>1)
        {
            sumhora($canhora-1);
        }
        $hora++;
    }


