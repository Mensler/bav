<?php

namespace malkusch\bav;

/**
 * Logs a E_USER_WARNING if an update should be performed.
 *
 * @author Markus Malkusch <markus@malkusch.de>
 * @license WTFPL
 * @api
 */
class LogUpdatePlan extends UpdatePlan
{

    /**
     * Log an E_USER_WARNING
     */
    public function perform(DataBackend $backend)
    {
        trigger_error(
            "bav's bank data is outdated. Update the data with e.g. bin/bav-update.php",
            E_USER_WARNING
        );
    }
}
