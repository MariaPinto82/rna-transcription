<?php

function toRna($adn)
{
    $rna = '';
    for ($i = 0; $i < strlen($adn); $i++) {
        if ($adn[$i] === 'G') {
            $rna .= 'C';
        }
        elseif ($adn[$i] === 'C') {
            $rna .= 'G';
        }
        elseif ($adn[$i] === 'T') {
            $rna .= 'A';
        }
        elseif ($adn[$i] === 'A') {
            $rna .= 'U';
        }
        elseif ($adn[$i] === '') {
            $rna .= '';
        }
    }
    return $rna;
}

/**  
 export const toRna = (adn) => {

 	let rna = '';
 	for(let i = 0; i < adn.length; i ++) {
 		if (adn[i] === 'G') {
 			rna += 'C';
 		} else if(adn[i] === 'C') {
 			rna += 'G';
 		} else if(adn[i] === 'T') {
 			rna += 'A';
 		} else if (adn[i] === 'A') {
 			rna += 'U';
 		} else if (adn[i] === ''){ 
 			rna = ''
 		}
 	}
 	return rna;
 }
*/