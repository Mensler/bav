<?php

namespace malkusch\bav;

/**
 * Helper for BIC
 *
 * @author Markus Malkusch <markus@malkusch.de>
 * @license WTFPL
 */
class BICUtil
{

    /**
     * Extends an 8 character BIC to an 11 character BIC.
     *
     * @param string $bic BIC
     * @return string
     */
    public static function normalize($bic)
    {
        return (strlen($bic) == 8) ? "{$bic}XXX" : $bic;
    }
}
