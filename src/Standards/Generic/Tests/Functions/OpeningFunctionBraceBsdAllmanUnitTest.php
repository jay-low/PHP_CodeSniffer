<?php
/**
 * Unit test class for the OpeningFunctionBraceBsdAllman sniff.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\Generic\Tests\Functions;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class OpeningFunctionBraceBsdAllmanUnitTest extends AbstractSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {
        return [
            7   => 1,
            16  => 1,
            22  => 1,
            27  => 1,
            33  => 1,
            43  => 1,
            47  => 1,
            53  => 1,
            58  => 1,
            70  => 1,
            81  => 1,
            88  => 1,
            94  => 1,
            101 => 1,
            113 => 1,
            118 => 1,
            125 => 1,
            131 => 1,
            158 => 1,
            161 => 1,
            167 => 1,
            171 => 1,
            175 => 1,
            179 => 1,
            199 => 1,
            204 => 1,
            208 => 2,
            213 => 2,
            218 => 1,
            223 => 1,
            234 => 1,
            239 => 1,
            247 => 1,
            255 => 1,
            263 => 1,
        ];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];

    }//end getWarningList()


}//end class
