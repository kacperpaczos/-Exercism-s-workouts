<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $arr = explode(" ", trim($name));
        if (count($arr) < 2) {
            return ''; // Handle unexpected cases with a missing last name
        }
        return $this->initial($arr[0]) . " " . $this->initial($arr[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
    $initialsA = $this->initials($sweetheart_a);
    $initialsB = $this->initials($sweetheart_b);
    $text = "**     $initialsA  +  $initialsB     **"; // No trailing space

    return rtrim(<<<HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    $text
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    HEART);
    }
}
