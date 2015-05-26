<?php

    preg_match('no-modifiers', '');             //ok
    preg_match('/Valid/i', '');                 //ok

    preg_match('/^-both-presented-$/m', '');          //ok
    preg_match('/both^-$presented/m', '');            //ok
    preg_match('/no-[^]-or-[\\$]-occurrences/m', ''); //reported
    preg_match('/^-no-[\\$]-occurrence/m', '');       //reported
    preg_match('/no-[^]-occurrence$/m', '');          //reported

    preg_match('/$-presented/D',           '');       //ok
    preg_match('/^-no-[\\$]-occurrence/D', '');       //reported
    preg_match('/^-ignored-$/mD',          '');       //reported

    preg_match('/.-provided/s',            '');       //ok
    preg_match('/no-dot-char/s',           '');       //reported

    preg_match('/.*-report/',              '');       //reported
    preg_match('/report-.*/',              '');       //reported
    preg_match('/.*(no-report)-.*\0/',     '');       //ok
    preg_match('/^.*-no-report/',          '');       //ok
    preg_match('/no-report-.*$/',          '');       //ok


    preg_match('/a-z-provided/i',          '');       //ok
    preg_match('/.{2}-.{2}/i',             '');       //reported

    preg_match('/[seq].../',                    '');  //ok
    preg_match('/[seq][seq].../',               '');  //reported
    preg_match('/[seq][seq]+/',                 '');  //reported
    preg_match('/[seq][seq]*/',                 '');  //reported
    preg_match('/[seq][seq]?/',                 '');  //reported
    preg_match('/[seq]+[seq]*[seq]?[seq]{1,}/', '');  //reported

    preg_match('/[0-9]/',     '');              //reported
    preg_match('/[^0-9]/',    '');              //reported
    preg_match('/[:digit:]/', '');              //reported
    preg_match('/[:word:]/',  '');              //reported
    preg_match('/[^\w]/',     '');              //reported
    preg_match('/[^\s]/',     '');              //reported

    preg_match('/deprecated/e', '');            //reported
    preg_match('/non-existing/Zy', '');         //reported