<?php
/**
 * ***********************************************************************************
 * upc.php
 * -----
 * Author: Viraj Sinha (viraj@indent.com)
 * Contributors:
 * - Nigel McNie (nigel@geshi.org)
 * - Jack Lloyd (lloyd@randombit.net)
 * - Michael Mol (mikemol@gmail.com)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * UPC language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/06/14 (1.0.8.11)
 * - This file is a revision of c.php with UPC keywords added
 *
 * ************************************************************************************
 *
 * This file is part of GeSHi.
 *
 * GeSHi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * GeSHi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GeSHi; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * **********************************************************************************
 */y( 
        'LANG_NAME' =( 
        , 
        'COMMENT , 
        ' => array( 
           ( 
                    1 =>  , 
                /' , 
  
        ) , 
               2 => '#' 
      ( 
                 ) , 
      
        ) , 
        ENT_MULTI' => array( 
  ( 
                // Multiline-continued single-line comments
                EXP' => array( 
                // Mu , 
                // Multiline-continued preprocessor define
                /\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m' ,  
        ) , 
        // Multiline-continued preprocessor def , 
                      2 => '/( 
                (?: , 
                \\\ 
        ) , 
        \\n|.)*$/m' 
      , 
        
        'CASE_KEYWORDS( 
                // Simple Single Char Escapes
                ' => array( 
                "'"  , 
                // Hexadecimal Char Specs
                   'ESCAPE_CHAR' => '' , 
 , 
                // Hexadecimal Char Specs
                       // Simple Single Cha , 
                // Hexadecimal Char Specs
                fnrtv\'\"?\n]#i" , 
       , 
                // Octal Char Specs
                              2 => "#\\ 
        ) , 
         , 
     => / Hexadecimal Char Specs
                3 => "#\\\\u[\da-fA-F]{4}#" , 
    |  // Hexadecimal Char Specs
                4 => "#\\\\U[\da-fA-F]{8}#" ,  |      // Octal Char Specs
                5 => "#\\\\[0-7]{1,3}#" 
        ) , 
 , 
         'NUMBERS' => GESHI( 
                _BASIC | G( 
                        _CST , 
                        E | GESH , 
                        NUMBER_ , 
                        N_PREF , 
                        _0B | GESH , 
                        NUMBER_OC , 
                        I_NU , 
                        ER_HEX , 
                        REFIX , 
                         GESHI_N , 
                        BER_FL , 
                        
                        NUMBER_FLT_N , 
                        SCI_F | GESHI , 
                        UMBER_FLT_SC , 
                        SHORT | GE , 
                        I_NUMBER_FL 
                ) , 
                YWORDS' =>( 
                               , 
                           1 => , 
                        rray(  , 
                               , 
                                   , 
                        
                           'if , 
                        , 
     , 
                                 
                ) , 
                  =>      ( 
                               ' , 
                        e' ,  , 
                                , 
                                 , 
                            'd , 
                        ault' , , 
                        
        , 
                                , 
                        
       , 
                               , 
                                , 
                        else'  , 
                        
      , 
                              , 
                               , 
                          'for , 
                               , 
                                , 
                        witch'  , 
                        
     , 
                                , 
                                , 
                        'goto' , 
                         
     , 
                        
                              'upc_f , 
                        all' , 
 , 
                                  , 
                                  , 
                        'upc_barr , 
                        r' , 
   , 
                               'u , 
                        _notify'  , 
                        
        , 
                                  , 
                            'upc_ , 
                        it' , 
  , 
                                ' , 
                        c_fence'  , 
                                  , 
                            ) ,  , 
                                  , 
                         'null' , , 
                        
         , 
                                    , 
                         'false' ,  , 
                                    , 
                        reak' , 
  , 
                                     , 
                           'functio , 
                         
    , 
                               , 
                               , 
                           'ext , 
                        n' ,  , 
                              , 
                               , 
                              , 
                               , 
                                , 
                        , 
    , 
                                , 
                          3 = , 
                        array(  , 
                               , 
                              ,  // a                        ssert , 
                        
     , 
                               , 
                              , 
                           'as , 
                        
                                  , 
                                 ,  // complex.h
                        bs' ,  , 
                                 , 
                                  , 
                        cacosh'  , 
                        
         , 
                                   , 
                        inh' , 
  , 
                                 , 
                                 , 
                         'cata , 
                         , 
    , 
                                 , 
                                , 
                                  , 
                                , 
                            'cc , 
                        ' , 
    , 
                                , 
                                   , 
                                , 
                                , 
                           'cexp' , 
                         
      , 
                                , 
                                ' , 
                        mag' ,  , 
                                 , 
                         'cis' , 
                         
     , 
                                  , 
                               , 
                        clog' ,  , 
                                 , 
                         'conj , 
                        , 
      , 
                               , 
                                 , 
                        cpow' ,  , 
                                 , 
                                , 
                        , 
     , 
                                  , 
                               'cr , 
                        l' , 
   , 
                                 , 
                                  , 
                                 , 
                                 , 
                         'csinh' , , 
                        
         , 
                                  , 
                           'csqr , 
                                   , 
                            'ctan , 
                        
       , 
                              , 
                                 , 
                        
      , 
                               , 
                               , 
                         // ctype , 
                                 , 
                           'd , 
                        ittoin , 
                         , 
  , 
                                 , 
                               , 
                           'is , 
                        num' , , 
                               , 
                            'isa , 
                        ha' ,  , 
                               , 
                                  , 
                            'is , 
                        cii' ,  , 
                                 , 
                        'isblank' , 
                         
      , 
                                 , 
                              'i , 
                        igit' ,  , 
                                  , 
                                 , 
                           'isgr , 
                                 , 
                                 , 
                        slower' , , 
                        
        , 
                                  , 
                            'ispri , 
                                 , 
                               'i , 
                        unct' ,  , 
                                  , 
                                  , 
                         'isspace , 
                                 , 
                             'is , 
                        per' ,  , 
                                  , 
                                  , 
                           'toa , 
                        ii' ,  , 
                                   , 
                                 , 
                         'tolower'  , 
                                 , 
                           'touppe , 
                         , 
  , 
                        
                                , 
                        // intty , 
                        s.h
    , 
                                 , 
                                 , 
                        imaxabs , 
                                   , 
                           'imaxd , 
                        ' , 
  , 
                                   , 
                                 , 
                        strtoimax , 
                                  , 
                            'strtou , 
                        x' , 
 , 
                                   , 
                                   , 
                        cstoimax' , 
                                  , 
                           'wcstoum , 
                        ' , 
      , 
                                   , 
                             
   , 
                               / , 
                        locale.h , 
                                 , 
                                  , 
                           'loca , 
                        conv' ,  , 
                                   , 
                        etlocale , 
                        , 
      , 
                                  , 
                              
  , 
                                  ,  //                        math.h
  , 
                                    , 
                                 , 
                        cos' ,  , 
                                 , 
                                 , 
                        
        , 
                                  , 
                            'atan , 
                        , 
    , 
                                  , 
                                ' , 
                                  , 
                                 ' , 
                        il' , 
  , 
                                  , 
                                 , 
                        ' , 
     , 
                                   , 
                              'exp , 
                        , 
       , 
                                   , 
                        
         , 
                                   , 
                          'floor'  , 
                        
         , 
                                   , 
                        
          , 
                                    , 
                        'ldexp' ,  , 
                                   , 
                                   , 
                                  , 
                                 
                ) , 
                  =>      ( 
                               , 
                               , 
                             'p , 
                        ' , 
   , 
                                , 
                              , 
                           'si , 
                                   , 
                            'si , 
                        ' , 
   , 
                                 , 
                                 , 
                        'sqrt' , , 
                                  , 
                         'tan'  , 
                        
         , 
                               , 
                              'tan , 
                         , 
     , 
                           
  , 
                                , 
                                , 
                           // s , 
                                , 
                                 , 
                        longjmp' , 
                         
      , 
                          'setjmp' ,  , 
                                       , 
                                
     , 
                                       ,  // signal.h                        
             , 
                                  'rais , 
                         , 
           , 
                                    
  , 
                              // stdar , 
                        h
             , 
                                  'va_a , 
                        ' , 
          , 
                        'va_copy' , 
  , 
                                         , 
                           'va_end' , 
 , 
                                         , 
                        , 
     , 
                                  , 
                               
 , 
                                  , 
                         stddef.h , 
                                   , 
                                   , 
                        'offsetof' , 
                                   , 
                        
          , 
                                   , 
                         // stdio.h , 
                                 , 
                         'clear , 
                                     , 
                          'fclos , 
                         , 
    , 
                                  , 
                                'fdopen'  , 
                                     'feo , 
                         , 
            
                ) 
        ) , 
                  =>    'f( 
                    , 
                    , 
                    , 
                    , 
                    , 
                fge , 
                    , 
                    , 
                    , 
                    , 
                 'f , 
                
   , 
                    , 
                    , 
                 'f , 
                ts' , 
                 
 , 
                    , 
                    , 
                    , 
                
   , 
                    
        ) , 
        fprintf' , 
    =>      ( 
                 'fputc' , 
  =>       , 
                  => putc , 
                  =>      , 
                  => uts' , 
                  =>      
        ) , 
        
       =>      ( 
                reopen' ,  =>      ( 
                          => canf' , 
        , 
                          => eek' , 
                        'fs , 
                          =>                'f , 
                          =>               'fw 
                ) , 
                        'g =>  , 
( 
                          =>     'getch' , 
                      , 
                         =>                   , 
                                =>              'perror' , 
            
                ) , 
                              =>      ( 
                          =>                  'putchar' , 
      , 
                          => puts' , 
                        'r , 
                          =>                'rename' , 
         , 
                          => ind' , 
                        'sc , 
                          =>              'setbuf' , 
           , 
                        s => uf' , 
                        'snp , 
                               =>    
                ) , 
                           =>      ( 
                          =>                   
                ) , 
                          => tmpna( 
                          =>            'unget 
                ) , 
                     'vfp => f' , ( 
                          =>       'vfscanf' , , 
                                    'vprintf' , 
 =>                   , 
                        
                       => sprintf' , 
     , 
                             'vsscanf' , 
     =>                  , 
                        
                                  // stdlib.h
    =>                  , 
                                              'ab =>  
              , 
                        xit' , 
                 =>     'atof' , 
  , 
                                'atoi' , 
     =>                  
                ) , 
                          => arch'( 
                          =>          'calloc' , 
                          =>          'div' ,  
                ) , 
                'exit' ,  =>      ( 
                          => ee' , 
          
                ) , 
                
        =>      () , 
                         =>     '() 
        ) , 
        'ldiv' => 
    ( 
                  =>    , 
                 =>    , 
                  =>    'malloc' , 
                        'qsort' , 
                    , 
                  =>    
        ) , 
            'rea => ' ,  , 
                           => and' ( 
                  =>     , 
                t => ' ,  
        ) , 
                ' => ol' ,() , 
                'strtoul' ,  =>             , 
           'system' , 
    =>      () , 
        
                           // st => .h
 () , 
            'memchr =>  
)%>
;               'memcmp' , 
                        'memcpy' , 
                        'memmove' , 
                        'memset' , 
                        'strcat' , 
                        'strchr' , 
                        'strcmp' , 
                        'strcoll' , 
                        'strcpy' , 
                        'strcspn' , 
                        'strerror' , 
                        'strlen' , 
                        'strncat' , 
                        'strncmp' , 
                        'strncpy' , 
                        'strpbrk' , 
                        'strrchr' , 
                        'strspn' , 
                        'strstr' , 
                        'strtok' , 
                        'strxfrm' , 
                        
                        // time.h
                        'asctime' , 
                        'clock' , 
                        'ctime' , 
                        'difftime' , 
                        'gmtime' , 
                        'localtime' , 
                        'mktime' , 
                        'strftime' , 
                        'time' , 
                        
                        // wchar.h
                        'btowc' , 
                        'fgetwc' , 
                        'fgetws' , 
                        'fputwc' , 
                        'fputws' , 
                        'fwide' , 
                        'fwprintf' , 
                        'fwscanf' , 
                        'getwc' , 
                        'getwchar' , 
                        'mbrlen' , 
                        'mbrtowc' , 
                        'mbsinit' , 
                        'mbsrtowcs' , 
                        'putwc' , 
                        'putwchar' , 
                        'swprintf' , 
                        'swscanf' , 
                        'ungetwc' , 
                        'vfwprintf' , 
                        'vswprintf' , 
                        'vwprintf' , 
                        'wcrtomb' , 
                        'wcscat' , 
                        'wcschr' , 
                        'wcscmp' , 
                        'wcscoll' , 
                        'wcscpy' , 
                        'wcscspn' , 
                        'wcsftime' , 
                        'wcslen' , 
                        'wcsncat' , 
                        'wcsncmp' , 
                        'wcsncpy' , 
                        'wcspbrk' , 
                        'wcsrchr' , 
                        'wcsrtombs' , 
                        'wcsspn' , 
                        'wcsstr' , 
                        'wcstod' , 
                        'wcstok' , 
                        'wcstol' , 
                        'wcstoul' , 
                        'wcsxfrm' , 
                        'wctob' , 
                        'wmemchr' , 
                        'wmemcmp' , 
                        'wmemcpy' , 
                        'wmemmove' , 
                        'wmemset' , 
                        'wprintf' , 
                        'wscanf' , 
                        
                        // wctype.h
                        'iswalnum' , 
                        'iswalpha' , 
                        'iswcntrl' , 
                        'iswctype' , 
                        'iswdigit' , 
                        'iswgraph' , 
                        'iswlower' , 
                        'iswprint' , 
                        'iswpunct' , 
                        'iswspace' , 
                        'iswupper' , 
                        'iswxdigit' , 
                        'towctrans' , 
                        'towlower' , 
                        'towupper' , 
                        'wctrans' , 
                        'wctype' 
                ) , 
                4 => array( 
                        'auto' , 
                        'char' , 
                        'const' , 
                        'double' , 
                        'float' , 
                        'int' , 
                        'long' , 
                        'register' , 
                        'short' , 
                        'signed' , 
                        'sizeof' , 
                        'static' , 
                        'struct' , 
                        'typedef' , 
                        'union' , 
                        'unsigned' , 
                        'void' , 
                        'volatile' , 
                        'wchar_t' , 
                        
                        'int8' , 
                        'int16' , 
                        'int32' , 
                        'int64' , 
                        'uint8' , 
                        'uint16' , 
                        'uint32' , 
                        'uint64' , 
                        
                        'int_fast8_t' , 
                        'int_fast16_t' , 
                        'int_fast32_t' , 
                        'int_fast64_t' , 
                        'uint_fast8_t' , 
                        'uint_fast16_t' , 
                        'uint_fast32_t' , 
                        'uint_fast64_t' , 
                        
                        'int_least8_t' , 
                        'int_least16_t' , 
                        'int_least32_t' , 
                        'int_least64_t' , 
                        'uint_least8_t' , 
                        'uint_least16_t' , 
                        'uint_least32_t' , 
                        'uint_least64_t' , 
                        
                        'int8_t' , 
                        'int16_t' , 
                        'int32_t' , 
                        'int64_t' , 
                        'uint8_t' , 
                        'uint16_t' , 
                        'uint32_t' , 
                        'uint64_t' , 
                        
                        'intmax_t' , 
                        'uintmax_t' , 
                        'intptr_t' , 
                        'uintptr_t' , 
                        'size_t' , 
                        'off_t' , 
                        
                        'upc_lock_t' , 
                        'shared' , 
                        'strict' , 
                        'relaxed' , 
                        'upc_blocksizeof' , 
                        'upc_localsizeof' , 
                        'upc_elemsizeof' 
                ) 
        ) , 
        'SYMBOLS' => array( 
                '(' , 
                ')' , 
                '{' , 
                '}' , 
                '[' , 
                ']' , 
                '+' , 
                '-' , 
                '*' , 
                '/' , 
                '%' , 
                '=' , 
                '<' , 
                '>' , 
                '! ' , 
                ' ^ ' , 
                ' & ' , 
                ' | ' , 
                ' ? ' , 
                ' : ' , 
                ';' , 
                ',' 
        ) , 
        'CASE_SENSITIVE' => array( 
                GESHI_COMMENTS => false , 
                1 => true , 
                2 => true , 
                3 => true , 
                4 => true 
        ) , 
        'STYLES' => array( 
                'KEYWORDS' => array( 
                        1 => '
color: #b1b100;' , 
                        2 => 'color: #000000; font-weight: bold;' , 
                        3 => 'color: #000066;' , 
                        4 => 'color: #993333;' 
                ) , 
                'COMMENTS' => array( 
                        1 => 'color: #666666; font-style: italic;' , 
                        2 => 'color: #339933;' , 
                        'MULTI' => 'color: #808080; font-style: italic;' 
                ) , 
                'ESCAPE_CHAR' => array( 
                        0 => 'color: #000099; font-weight: bold;' , 
                        1 => 'color: #000099; font-weight: bold;' , 
                        2 => 'color: #660099; font-weight: bold;' , 
                        3 => 'color: #660099; font-weight: bold;' , 
                        4 => 'color: #660099; font-weight: bold;' , 
                        5 => 'color: #006699; font-weight: bold;' , 
                        'HARD' => '' 
                ) , 
                'BRACKETS' => array( 
                        0 => 'color: #009900;' 
                ) , 
                'STRINGS' => array( 
                        0 => 'color: #ff0000;' 
                ) , 
                'NUMBERS' => array( 
                        0 => 'color: #0000dd;' , 
                        GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;' , 
                        GESHI_NUMBER_OCT_PREFIX => 'color: #208080;' , 
                        GESHI_NUMBER_HEX_PREFIX => 'color: #208080;' , 
                        GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;' , 
                        GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;' , 
                        GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;' , 
                        GESHI_NUMBER_FLT_NONSCI => 'color:#800080;' 
                ) , 
                'METHODS' => array( 
                        1 => 'color: #202020;' , 
                        2 => 'color: #202020;' 
                ) , 
                'SYMBOLS' => array( 
                        0 => 'color: #339933;' 
                ) , 
                'REGEXPS' => array() , 
                'SCRIPT' => array() 
        ) , 
        'URLS' => array( 
                1 => '' , 
                2 => '' , 
                3 => 'http://www.opengroup.org/onlinepubs/009695399/functions/{FNAMEL}.html' , 
                4 => '' 
        ) , 
        'OOLANG' => true , 
        'OBJECT_SPLITTERS' => array( 
                1 => '.' , 
                2 => '::' 
        ) , 
        'REGEXPS' => array() , 
        'STRICT_MODE_APPLIES' => GESHI_NEVER , 
        'SCRIPT_DELIMITERS' => array() , 
        'HIGHLIGHT_STRICT_BLOCK' => array() , 
        'TAB_WIDTH' => 4 
)
;

?>