<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return strtoupper(substr(trim($name), 0, 1)) . ".";
    }

    public function initials(string $name): string
    {
        list($first_name, $last_name) = explode(" ", trim($name));
        $f_initial = substr($first_name, 0, 1);
        $l_initial = substr($last_name, 0, 1);
        return "$f_initial. $l_initial.";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $name1_inititals = $this->initials($sweetheart_a);
        $name2_inititals = $this->initials($sweetheart_b);
        return <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $name1_inititals  +  $name2_inititals     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    }
}
