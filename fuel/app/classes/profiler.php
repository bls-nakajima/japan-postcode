<?php

class Profiler extends \Fuel\Core\Profiler {

    public static $db_logs = array();

    public static function db_log($log = true) {
        if ($log) {
            Log::debug(print_r(self::$db_logs, true));
        } else {
            return self::$db_logs;
        }
    }

    public static function start($dbname, $sql, $stacktrace = array()) {
        self::$db_logs[] = $sql;
        if (static::$profiler) {
            static::$query = array(
                'sql'        => \Security::htmlentities($sql),
                'time'       => static::$profiler->getMicroTime(),
                'stacktrace' => $stacktrace,
            );
            return true;
        }
    }

}