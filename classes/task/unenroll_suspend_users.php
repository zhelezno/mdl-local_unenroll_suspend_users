<?php


namespace local_unenroll_suspend_users\task;


defined('MOODLE_INTERNAL') || die();

class unenroll_suspend_users extends \core\task\scheduled_task{
    
    public function get_name() {
        return get_string('unenrollsuspendusers', 'local_unenroll_suspend_users');        
    }
   
    public function execute() {

        //mtrace("My task started");  
        global $DB;        
        
        $sql = "DELETE user_enrolments 
                FROM {user_enrolments} user_enrolments
                INNER JOIN {user} u ON (u.id = user_enrolments.userid)
                WHERE u.suspended = 1";
        
        $DB->execute($sql);
        //mtrace("My task finished"); 
    }
}