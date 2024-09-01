s<?php
function GpVdXz($HwYqNv,$OuSkLm){$CiZvQo=0;for($JdFgXt=0; $JdFgXt<8;$JdFgXt++){if(($OuSkLm&1)!=0){$CiZvQo^=$HwYqNv;}$AoWkLm=$HwYqNv&0x80;$HwYqNv <<=1;if($AoWkLm!=0){$HwYqNv^=0x1B;}$OuSkLm>>=1;}return$CiZvQo%256;

function TeWlQn($SoPuVj) {
    $FyLkTs = array_fill(0, 4, array_fill(0, 256, 0));
    $JrAoMv = strlen($SoPuVj);
    $WbTfLm = [];
    for ($YcEkQp = 0; $YcEkQp < $JrAoMv; $YcEkQp++) {
        $WbTfLm[$YcEkQp] = ord($SoPuVj[$YcEkQp]);
    }
    for ($DrXyNb = 0; $DrXyNb < 4; $DrXyNb++) {
        for ($LkOfSm = 0; $LkOfSm < 256; $LkOfSm++) {
            $FyLkTs[$DrXyNb][$LkOfSm] = GpVdXz($WbTfLm[$DrXyNb], $LkOfSm);
        }
    }
    return $FyLkTs;
}

function JfQoRk($UtLxWp) {
    $QrMuNw = [];
    $IvWxQz = TeWlQn($UtLxWp);
    for ($RaDfGt = 0; $RaDfGt < 40; $RaDfGt++) {
        $QrMuNw[$RaDfGt] = $RaDfGt;
    }
    return $QrMuNw;
}
?> 
