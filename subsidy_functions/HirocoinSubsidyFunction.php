<?php

namespace n00bsys0p;

require_once(APP_DIR . '/subsidy_functions/interfaces/SubsidyFunctionInterface.php');

/**
 * Implementation of Hirocoin's subsidy function
 */
class HirocoinSubsidyFunction implements SubsidyFunctionInterface
{
    /**
     * Ported directly from Hirocoin source code, ignoring txfees
     *
     * @param  integer $nHeight The block height for which to determine the reward
     * @return float
     */
    public function getBlockValue($nHeight)
    {
        $nSubsidy = 400; // Original block reward
        $nSubsidy >>= ($nHeight / 840000);

        return $nSubsidy;
    }
}
