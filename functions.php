<?php

/*Dropdown menu of states*/

function stateselect($state) {
  $states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming',);
  echo "<label for=\"state\">State</label> <select id=\"state\" name=\"state\">";
  foreach($states as $value) {
    if ($value==$state) {
      echo "<option selected=\"selected\" value=\"".$value."\">".$value."</option>";
    }
    else {
      echo "<option value=\"".$value."\">".$value."</option>";
    }
  }
  echo "</select><br />";
}

/*Checkbox*/

function check($name,$label,$checked,$content){
  if ($checked){
    echo "<input type=\"checkbox\" checked=\"checked\" id=\"".$name."\" name=\"".$name."\" /> <label for=\"".$name."\">".$label."</label>\n";
  }
  else {
    echo "<input type=\"checkbox\" id=\"".$name."\" name=\"".$name."\" /> <label for=\"".$name."\">".$label."</label>\n";
  }
  if ($content!="") {
    echo tt($name,$content);
  }
  echo "<br />";
}

/*Help Prompt*/

function tt($name,$content) {
  echo "<div class=\"ttouter\"><div class=\"tt\" onclick=\"toggle('tt".$name."',event)\">?</div><div class=\"ttinner innerleft\" id=\"tt".$name."\">".$content."</div></div>\n";
}

?>