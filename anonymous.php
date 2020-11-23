<?php

$mobil = function(){
    return "Avanza";
};

function merk ($mobil){
    echo "Mobil dengan merk " .$mobil. " menjadi andalan kami. " .$mobil. " memiliki kecepatan yang luar biasa.";
}

merk($mobil());

?>