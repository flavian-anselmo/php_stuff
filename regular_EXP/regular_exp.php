<?php
/*
//REGULAR EXPRESSION
    Aregular expression is a sequence of characters 
    that form a search pattern 
    When you search for data in a text you can use this search pattern
    to describe what you areseaching for 
    A regular expression can be a single character or more
    complicated pattern to describe what you are searching for 
    Regular expresion can be used to perform all types of text 
    search and relace operations 
    -in php regular-exp are strings composed of delimiters 
    a pattern and optionsl modifiers
    example{
        $exp="/anselmo/i";

        in the above example /->delmiter
                            anselmo->pattern
                            i->modifier that makes the search casesensitive 
         note->the delimeter can be any character that is not a letter
         number, backslash or space 
         THe most common delimeter is the forward slash /
         but when your pattern contains forward slashes it is convinient 
         to choose other delimeters suchh as # or ~                   
    }
    reg-exxp functions 
        preg_match()-1 if the pattern was founnd in the string and false if not 
        preg_match_all()-returns the number of times the pattern was found in the string 
        preg_replace()-returns the new string where matched patternhave been replaced with another string 
    []->brackets areused to find the range of characters 
        [0-9]->matches decimal digits from 0 to 9
        [a-z]->matches any char form lower case to lower casez
        [A-Z]->UPPPER A TO UPPER Z 
        [a-Z]->lowercase through upper case Z
        But one can use ay range eg [0-3]
    Qabtifiers{
        the frequency or osition of bracketed characters 
        sequencees and single characters can be denoted by a special
        character 
        p+...matches any string containing at least one p
        p*...matches any string containing zero or more ps
        p?...matches any string containing zero or one ps
        p{N}...Matches any string containing a sequence of N ps 
        p{2,3}..matches any string containing a sequence of two or three ps 
        p{2,}...matches a string containing a sequence of at least two ps 
        p$..matches any string with p at the end of it 
        ^p...matches any string with  p at the begining of it 
        ..PREDEFINED RANGES{
            [[:alphs:]]->[aA-zZ]
            [[:digit:]]->[0-9]
            [[:alnum:]]->[aA-zZ,0-9]
            [[:space:]]->[Matches any string containing a space ]
        }
        metacharacters{
            |->find a match for any one of the following pattern seprerated with 
            a|b means or 
            . find just one instance of any character
            ^ find a match at the begining of a string 
            $ find a match at the end of the string 
            \d find a digit 
            \s find a white space character 
            \S match non-white space 
            \b ind a match at the begining of a string like \bword or 
            at the end like word\b
            \w-selects words including the digits except specia;
            characters 
            \W -match the non words 
            \D Match the non-digits 
        }
    }        
        
*/
