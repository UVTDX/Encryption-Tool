<?php

function GpVdXz($HwYqNv,$OuSkLm){$CiZvQo=0;for($JdFgXt=0;$JdFgXt<8;$JdFgXt++){if(($OuSkLm&1)!=0){$CiZvQo^=$HwYqNv;}$AoWkLm=$HwYqNv&0x80;$HwYqNv<<=1;if($AoWkLm!=0){$HwYqNv^=0x1B;}$OuSkLm>>=1;}return$CiZvQo%256;}

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

function JfQoRk($UtLxWp){$QrMuNw=[];$IvWxQz=TeWlQn($UtLxWp);for($RaDfGt=0;$RaDfGt<40;$RaDfGt++){$QrMuNw[$RaDfGt]=$RaDfGt;}return$QrMuNw;}

function UrDoPg($PeXwRl,$TiYpZr){$PeXwRl=($PeXwRl+$TiYpZr)%0x100000000;$TiYpZr=($PeXwRl+2*$TiYpZr)%0x100000000;return[$PeXwRl,$TiYpZr];}

function XpSwRt($FbUaYp,$ViWnLy){return(($FbUaYp<<$ViWnLy)&0xFFFFFFFF)|($FbUaYp>>(32-$ViWnLy));}

function RtAeUk($QxYoWm,$IaJqRt){return($QxYoWm+$IaJqRt)%0x100000000;}

function WdYnXp($WmYqRp,$DkEnQz){$CeJoTs=JfQoRk($DkEnQz);

    $QjReXy = ord($WmYqRp[0]) | (ord($WmYqRp[1]) << 8) | (ord($WmYqRp[2]) << 16) | (ord($WmYqRp[3]) << 24);
    $MxYsWd = ord($WmYqRp[4]) | (ord($WmYqRp[5]) << 8) | (ord($WmYqRp[6]) << 16) | (ord($WmYqRp[7]) << 24);

    for ($TtLyJf = 0; $TtLyJf < 16; $TtLyJf++) {
        list($QjReXy, $MxYsWd) = UrDoPg($QjReXy, $MxYsWd);
        $QjReXy = RtAeUk($QjReXy, $CeJoTs[$TtLyJf]);
        $MxYsWd = XpSwRt($MxYsWd, 1);
    }
        $HfLsZt = chr($QjReXy & 0xFF) . chr(($QjReXy >> 8) & 0xFF) . chr(($QjReXy >> 16) & 0xFF) . chr(($QjReXy >> 24) & 0xFF);
    $HfLsZt .= chr($MxYsWd & 0xFF) . chr(($MxYsWd >> 8) & 0xFF) . chr(($MxYsWd >> 16) & 0xFF) . chr(($MxYsWd >> 24) & 0xFF);

    return $HfLsZt;
}

$NkRmSg = readline("Key: ");
$QxKoJf = readline("Plaintext: ");

$QxKoJf = str_pad($QxKoJf, 8);

$TpYwZr = WdYnXp($QxKoJf, $NkRmSg);
echo "Result: " . bin2hex($TpYwZr) . "
";

?>
