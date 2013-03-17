<?php 
echo "Pi compute : ";
echo gethostname();
 
$totalDotNumber = 10000001;

$inCircleDotNumber = 0;
$maxRand = mt_getrandmax();
$maxRand_pow2 = pow($maxRand, 2);

for ($i=0; $i<$totalDotNumber; $i++) {
    if ( (pow(mt_rand(), 2)+pow(mt_rand(), 2) ) < $maxRand_pow2) {
        $inCircleDotNumber++;
    }
}

$frequency = $inCircleDotNumber / $totalDotNumber;
$pi = $frequency*4;

echo 'Dot number : '.$totalDotNumber."\n";
echo 'in circle : '.$inCircleDotNumber."\n";
echo 'frequency : '.$frequency.' (=Pi/4)'."\n";
echo 'Pi = '.$pi."\n";
