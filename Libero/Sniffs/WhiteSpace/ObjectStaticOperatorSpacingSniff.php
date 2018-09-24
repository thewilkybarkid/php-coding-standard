<?php

namespace Libero\CodingStandard\Sniffs\WhiteSpace;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ObjectOperatorSpacingSniff as BaseObjectOperatorSpacingSniff;
use const T_DOUBLE_COLON;

// This is only present to allow double colons to have separate configuration to the regular object operator.

final class ObjectStaticOperatorSpacingSniff extends BaseObjectOperatorSpacingSniff
{
    public function register()
    {
        return [T_DOUBLE_COLON];
    }
}
