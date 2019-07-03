<?php


use App\Log;

/**
 * A helper class related to logs.
 */
class LogHelper
{

    /**
     * Get the type a logged action can be (e.g kill is danger).
     *
     * @param Log $log
     * @return string
     */
    public static function type(Log $log)
    {
        // Go through the different known actions and pick a type.
        switch (strtolower($log->action)) {
            // TODO 03/07/2019 2:24 PM - add some more actions here
            case 'player died':        return 'danger';
            case 'player killed':      return 'danger';
            case 'possible injection': return 'danger';
        }
        // Default is just "primary".
        return 'primary';
    }

}