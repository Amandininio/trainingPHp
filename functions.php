<?php
/* glaces prix */

function generateChkboxIntoForm (string $nameAttribute,Array $array, Array $checkedValues = null){
    $htmlToReturn="";
    //Pour chaques valeur 'glace'->4 du tableau
    foreach($array as $value => $price){
        $checked="";
        if (!empty($checkedValues) && in_array($value, $checkedValues)){
                    $checked = "checked";
        }   
            $htmlToReturn .= "
            <input type=\"checkbox\" name=\"$nameAttribute\" value=\"$value\" $checked> $value - {$price}€ <br/>";

        }
        echo $htmlToReturn;
};
function generateRadioIntoForm (string $nameAttribute,Array $array, string $checkedValue = null){
    $htmlToReturn="";
    foreach($array as $value => $price){
        $checked="";
        if (!empty($checkedValue) && ($value == $checkedValue)){
                    $checked = "checked";
        }   
            $htmlToReturn .= "
            <input type=\"radio\" name=\"$nameAttribute\" value=\"$value\" $checked> $value - {$price}€ <br/>";

        }
        echo $htmlToReturn;
};
