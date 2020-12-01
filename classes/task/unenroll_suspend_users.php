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
                INNER JOIN {enrol} enrol ON (enrol.id = user_enrolments.enrolid)
                INNER JOIN {course} course ON (course.id = enrol.courseid)
                INNER JOIN {course_categories} course_categories ON (course_categories.id = course.category)
                WHERE u.suspended = 1
                AND course_categories.parent = 30";
        
        $DB->execute($sql);
        //mtrace("My task finished"); 
    }
}