<?php

namespace AcyMailing\Controllers;

use AcyMailing\Libraries\acymController;

class DeactivateController extends acymController
{
    public function saveFeedback()
    {
        $reason = acym_getVar('string', 'reason', '');
        $otherReason = acym_getVar('string', 'otherReason', '');
        $email = acym_getVar('string', 'email', '');

        $url = ACYM_FEEDBACK_URL.'saveFeedback';
        acym_makeCurlCall($url, ['reason' => $reason, 'otherReason' => $otherReason, 'email' => $email]);
        exit;
    }
}
