<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['login']= 'Login';
$route['logout']= 'Login/logout';
$route['register']= 'Register';
/*------------------------------ student manager ------------------------------------------*/
$route['student-dashboard']= 'Students';
$route['student-profile']= 'Students/profile';
$route['student-courses']= 'Students/courses';
$route['student-study-material']= 'Students/study_material';
$route['student-course-assignment']= 'Students/course_assignment';
$route['student-job-offers']= 'Students/job_offers';
$route['student-library-management']= 'Students/library_management';
$route['student-document-manager']= 'Students/document_manager';
$route['students-birthday-and-anniversary']= 'Students/birthday_and_anniversary';

$route['student-invention-center']= 'Students/invention_center';
$route['student-settings']= 'Students/settings';

/*-------------------------typing software--------------------*/
$route['typing-software']= 'Typing';
/*-------------------------------------exam manager------------------------------*/
$route['exams']= 'Exams';
$route['demo-exams']= 'Exams';
$route['demo-exam-manager']= 'Exams/demo_exam_manager';
$route['final-exam']= 'Exams/final_exam';
$route['final-exam-manager']= 'Exams/final_exam_manager';
$route['paper-exam']= 'Exams/paper_exam';
$route['paper-exam-manager']= 'Exams/paper_exam_manager';
$route['exam-hall-ticket']= 'Exams/exam_hall_ticket';

/*----------------------------------------resume maker------------------------------*/
$route['student-resume-maker']= 'Resume';
$route['student-resume-type-01']= 'Resume/resume_01';
$route['student-resume-type-02']= 'Resume/resume_02';
$route['student-resume-type-03']= 'Resume/resume_03';
$route['student-resume-type-04']= 'Resume/resume_04';
$route['student-resume-type-05']= 'Resume/resume_05';
$route['student-resume-type-06']= 'Resume/resume_06';
$route['student-resume-type-07']= 'Resume/resume_07';
$route['student-resume-type-08']= 'Resume/resume_08';
$route['student-resume-type-09']= 'Resume/resume_09';
$route['student-resume-type-10']= 'Resume/resume_10';
$route['student-resume-type-11']= 'Resume/resume_11';
$route['student-resume-type-12']= 'Resume/resume_12';
$route['student-resume-type-13']= 'Resume/resume_13';
$route['student-resume-type-14']= 'Resume/resume_14';
$route['student-resume-type-15']= 'Resume/resume_15';

/*------------------------------------- Employer manager ---------------------------------------*/
$route['employer-dashboard']= 'Employer';
$route['employer-profile']= 'Employer/profile';

$route['employer-post-job']= 'Employer/post_job';
$route['employer-post-jobs-report']= 'Employer/post_jobs_report';
$route['employer-view-job-post']= 'Employer/view_post_job';

$route['employer-settings']= 'Employer/settings';
$route['employer-chatbox']= 'Employer/chatbox';
$route['employer-sms-management']= 'Employer/sms_management';
$route['employer-wallet']= 'Employer/wallet';
$route['employer-applicants-list']= 'Employer/applicants_list';
$route['employer-contacts']= 'Employer/contacts';

/*------------------------------------------institution manger---------------------------------*/
$route['institutions-dashboard']= 'Institutions';
$route['institutions-profile']= 'Institutions/profile';

$route['institutions-enquiries']= 'Institutions/enquiries';
$route['institutions-enquiries-export']['post'] = 'Institutions/export_enquiry';
$route['institutions-enquiries/(:num)']= 'Institutions/enquiries/$1';

$route['institutions-admissions']= 'Institutions/admissions';
$route['delete-institutions-admissions']['post']= 'Institutions/delete_admissions';
$route['institutions-admissions/(:num)']= 'Institutions/admissions/$1';
$route['export-institutions-admissions']['post']= 'Institutions/admissions_export';
$route['edit-institutions-admissions']= 'Institutions/edit_admissions';
$route['save-institutions-admissions']['post']= 'Institutions/save_admissions';

$route['institutions-old-students']= 'Institutions/old_students';
$route['delete-institutions-old-students']['post']= 'Institutions/delete_old_student';
$route['institutions-old-students/(:num)']= 'Institutions/old_students/$1';
$route['export-institutions-old-students']['post']= 'Institutions/old_students_export';
$route['edit-institutions-old-students']= 'Institutions/edit_old_students';
$route['save-institutions-old-students']['post']= 'Institutions/save_old_students';


$route['institutions-dropout-students']= 'Institutions/dropout_students';
$route['delete-institutions-dropout-students']['post']= 'Institutions/delete_dropout_students';
$route['institutions-dropout-students/(:num)']= 'Institutions/dropout_students/$1';
$route['export-institutions-dropout-students']['post']= 'Institutions/dropout_students_export';
$route['edit-institutions-dropout-students']= 'Institutions/edit_dropout_students';
$route['save-institutions-dropout-students']= 'Institutions/save_dropout_students';



$route['institutions-register-student']= 'Institutions/add_student';

$route['institutions-payments']= 'Institutions/payments';
//$route['delete-institutions-payments']['post']= 'Institutions/delete_payments';
$route['institutions-payments/(:num)']= 'Institutions/payments/$1';
$route['export-institutions-payments']['post']= 'Institutions/payments_export';
$route['get-institutions-payments-history']['post']= 'Institutions/get_payments_history';

$route['institutions-assignments']= 'Institutions/assignments';
$route['institutions-assignments/(:num)']= 'Institutions/assignments/$1';
$route['export-institutions-assignments']= 'Institutions/assignments_export';
$route['edit-institutions-assignments']= 'Institutions/edit_assignments';
$route['save-institutions-assignments']['post']= 'Institutions/save_assignments';


$route['institutions-aicpe-world-membership']= 'Institutions/aicpe_world_membership';
$route['delete-institutions-aicpe-world-membership']['post']= 'Institutions/delete_aicpe_world_membership';
$route['institutions-aicpe-world-membership/(:num)']= 'Institutions/aicpe_world_membership/$1';
$route['export-institutions-aicpe-world-membership']['post']= 'Institutions/aicpe_world_membership_export';


$route['institutions-courses']= 'Institutions/all_courses';
$route['institutions-courses/(:num)']= 'Institutions/all_courses/$1';
$route['export-institution-courses']['post']= 'Institutions/all_courses_export';

$route['institutions-associate-courses']= 'Institutions/associate_courses';
$route['institutions-associate-courses/(:num)']= 'Institutions/associate_courses/$1';
$route['export-institution-associate-courses']['post']= 'Institutions/associate_courses_export';

$route['institutions-associate-courses-view']= 'Institutions/view_assos_course';
$route['institutions-associate-courses-view/(:num)']= 'Institutions/view_assos_course/$1';

$route['institution-add-course-fees-details']= 'Institutions/add_assos_course_fees_details';
$route['institution-add-course-fees-details/(:num)']= 'Institutions/add_assos_course_fees_details/$1';

$route['institutions-non-aicpe-courses']= 'Institutions/non_aicpe_courses';
$route['institutions-non-aicpe-courses/(:num)']= 'Institutions/non_aicpe_courses/$1';
$route['institutions-add-non-courses']= 'Institutions/add_non_aicpe_courses';
$route['institutions-add-non-courses/(:num)']= 'Institutions/add_non_aicpe_courses/$1';
$route['institutions-save-non-courses']['post']= 'Institutions/save_non_aicpe_courses';
$route['export-institution-non-aicpe-courses']['post']= 'Institutions/non_aicpe_courses_export';
$route['delete-institution-non-aicpe-courses']['post']= 'Institutions/delete_non_aicpe_course';

$route['institutions-aicpe-courses']= 'Institutions/aicpe_courses';
$route['institutions-aicpe-courses/(:num)']= 'Institutions/aicpe_courses/$1';
$route['export-institution-aicpe-courses']['post']= 'Institutions/aicpe_courses_export';

$route['institutions-course-material']= 'Institutions/course_material';
$route['institutions-suggest-course']= 'Institutions/suggest_course';
$route['institutions-employers']= 'Institutions/employers';
$route['institutions-library-books-categories']= 'Institutions/library_books_categories';
$route['institutions-library-books']= 'Institutions/library_books';
$route['institutions-library-books-issued']= 'Institutions/library_books_issued';
$route['institutions-library-books-return']= 'Institutions/library_books_return';
$route['institutions-library-books-fine']= 'Institutions/library_books_fine';
$route['institutions-library-e-books']= 'Institutions/library_e_books';

$route['institutions-staff-list']= 'Institutions/staff_list';
$route['institutions-staff-list/(:num)']= 'Institutions/staff_list/$1';
$route['export-institutions-staff-list']['post']= 'Institutions/staff_list_export';
$route['delete-institutions-staff-list']['post']= 'Institutions/delete_staff_list';
$route['edit-institutions-staff-list']= 'Institutions/edit_staff_list';

$route['institutions-staff-incentives']= 'Institutions/staff_incentives';
$route['institutions-staff-incentives/(:/num)']= 'Institutions/staff_incentives/$1';
$route['export-institutions-staff-incentives']= 'Institutions/staff_incentives_export';
$route['edit-institutions-staff-incentives']= 'Institutions/edit_staff_incentives';
$route['delete-institutions-staff-incentives']= 'Institutions/delete_staff_incentives';

$route['institutions-staff-tasks']= 'Institutions/staff_tasks';
$route['institutions-wallet']= 'Institutions/wallet';
$route['institutions-sms-management']= 'Institutions/sms_management';
$route['institutions-marketing-material']= 'Institutions/marketing_material';
$route['institutions-birthday-and-anniversary']= 'Institutions/birthday_and_anniversary';

$route['institutions-question-bank']= 'Institutions/question_and_answer_bank';
$route['institutions-question-bank/(:num)']= 'Institutions/question_and_answer_bank/$1';
$route['export-institutions-question-bank']['post']= 'Institutions/question_and_answer_bank_export';

$route['institutions-add-question-bank']= 'Institutions/add_question_and_answer_bank';
$route['institutions-add-question-bank/(:num)']= 'Institutions/add_question_and_answer_bank/$1';
$route['institutions-save-question-bank']['post']= 'Institutions/save_question_and_answer_bank';
$route['delete-institution-question-bank']= 'Institutions/delete_question_and_answer_bank';

$route['institutions-edit-question-bank']= 'Institutions/edit_question_bank';
$route['institutions-get-question-bank']= 'Institutions/get_question_bank';
$route['institutions-download-question-bank']= 'Institutions/download_question_bank_files';
//$route['delete-institution-question-bank']['post']= 'Institutions/delete_question_and_answer_bank';


$route['institutions-role-management']= 'Institutions/role_management';
$route['institutions-exam-status']= 'Institutions/exam_status';
$route['institutions-exam-status/(:num)']= 'Institutions/exam_status/$1';
$route['delete-institutions-exam-status']= 'Institutions/delete_exam_status';
$route['export-institutions-exam-status']= 'Institutions/exam_status_export';
$route['edit-institutions-exam-status']= 'Institutions/edit_exam_status';
$route['save-institutions-exam-status']= 'Institutions/save_exam_status';

$route['institutions-hall-tickets']= 'Institutions/hall_tickets';
$route['institutions-hall-tickets/(:num)']= 'Institutions/hall_tickets/$1';
$route['export-institutions-hall-tickets']['post']= 'Institutions/hall_tickets_export';
$route['delete-institutions-hall-tickets']= 'Institutions/delete_hall_tickets';

$route['institutions-secrete-codes']= 'Institutions/secrete_codes';
$route['institutions-secrete-codes/(:num)']= 'Institutions/secrete_codes/$1';
$route['delete-institutions-secrete-codes']['post']= 'Institutions/delete_secrete_codes';
$route['export-institutions-secrete-codes']= 'Institutions/secrete_codes_export';
$route['edit-institutions-secrete-codes']['post']= 'Institutions/edit_secrete_codes';
$route['save-institutions-secrete-codes']= 'Institutions/save_secrete_codes';

$route['institutions-paper-based-exam']= 'Institutions/paper_based_exam';
$route['institutions-paper-based-exam/(:num)']= 'Institutions/paper_based_exam/$1';
$route['delete-institutions-paper-based-exam']= 'Institutions/delete_paper_based_exam';
$route['export-institutions-paper-based-exam']= 'Institutions/paper_based_exam_export';
$route['edit-institutions-paper-based-exam']['post']= 'Institutions/edit_paper_based_exam';
$route['save-institutions-paper-based-exam']= 'Institutions/save_paper_based_exam';

$route['institutions-offline-exam']= 'Institutions/offline_exam';
$route['export-institutions-offline-exam']= 'Institutions/offline_exam_export';

$route['institutions-bulk-registration']= 'Institutions/bulk_registration';
$route['institutions-certificates']= 'Institutions/certificates';

$route['institutions-participation-certificates']= 'Institutions/participation_certificates';
$route['export-institutions-participation-certificates']= 'Institutions/participation_certificates_export';

$route['getenqList']= 'Institutions/enquiriesList';
/*--------------------------------------------admin routes start here-------------------------*/

$route['admin-dashboard']= 'Admin';
$route['admin-profile']= 'Admin/profile';
/*-----------------------------------admin institution ------------------------------------*/
$route['admin-institutions']= 'Admin_institution/index';
$route['admin-institutions/(:num)']= 'Admin_institution/index/$1';
$route['add-institution']= 'Admin_institution/add';
$route['edit-institution']= 'Admin_institution/edit';
$route['get-institution']= 'Admin_institution/get';
$route['delete-institution']= 'Admin_institution/delete';
$route['export-institution']['post']= 'Admin_institution/export';
$route['send-sms-admin-to-institution']= 'Admin_institution/send_sms_admin_to_institution';
$route['send-password-recovery-mail']= 'Admin_institution/send_password_recovery_mail';
$route['send-password-recovery-message']= 'Admin_institution/send_password_recovery_message';
$route['institute-login/(:num)']= 'Admin_institution/institute_login/$1';

$route['admin-institutions-staff']= 'Admin_institution/institutions_staff';
$route['admin-institutions-staff/(:num)']= 'Admin_institution/institutions_staff/$1';
$route['admin-export-institution-staff']['post']= 'Admin_institution/export_institutions_staff';
/*-----------------------------------admin institution ------------------------------------*/
$route['admin-bulk-upload']= 'Admin/bulk_upload';

$route['admin-role-management']= 'Admin/role_management';
$route['add-role-institute']= 'Admin/add_role_institute';
$route['get-role-institute']= 'Admin/get_role_institute';

$route['admin-institutions-remarks']= 'Admin/institutions_remarks';
$route['admin-institutions-remarks/(:num)']= 'Admin/institutions_remarks/$1';
$route['add-institutions-remarks']= 'Admin/add_institutions_remarks';
$route['get-institutions-remarks']= 'Admin/get_institutions_remarks';
$route['delete-institutions-remarks']= 'Admin/delete_institutions_remarks';



$route['admin-subjects']= 'Admin/subjects';
$route['admin-subjects/(:num)']= 'Admin/subjects/$1';
$route['add-subject']= 'Admin/add_subject';
$route['delete-subject']= 'Admin/delete_subject';
$route['get-subject']= 'Admin/get_subject';
$route['admin-export-subject']['post']= 'Admin/export_subject';

$route['admin-course-stream']= 'Admin/course_types';
$route['admin-course-stream/(:num)']= 'Admin/course_types/$1';
$route['get-course-stream']= 'Admin/get_course_type';
$route['add-course-stream']= 'Admin/add_course_type';
$route['delete-course-stream']= 'Admin/delete_course_type';

$route['admin-aicpe-courses']= 'Admin/aicpe_courses';
$route['admin-aicpe-courses/(:num)']= 'Admin/aicpe_courses/$1';
$route['add-aicpe-courses']= 'Admin/add_aicpe_courses';
$route['get-aicpe-courses']= 'Admin/get_aicpe_courses';
$route['delete-aicpe-courses']= 'Admin/delete_aicpe_courses';
$route['edit-aicpe-courses']= 'Admin/edit_aicpe_courses';
$route['export-aicpe-courses']['post']= 'Admin/export_aicpe_courses';

$route['admin-associate-courses']= 'Admin/associate_courses';
$route['admin-associate-courses/(:num)']= 'Admin/associate_courses/$1';
$route['get-associate-courses']= 'Admin/get_associate_courses';
$route['add-associate-courses']= 'Admin/add_associate_courses';
$route['delete-associate-courses']= 'Admin/delete_associate_courses';
$route['edit-associate-courses']= 'Admin/edit_associate_course';
$route['export-associte-courses']['post']= 'Admin/export_associte_courses';

$route['admin-non-aicpe-courses']= 'Admin/non_aicpe_courses';
$route['admin-non-aicpe-courses/(:num)']= 'Admin/non_aicpe_courses/$1';
$route['delete-non-aicpe-courses']= 'Admin/delete_non_aicpe_courses';
$route['approve-non-aicpe-course']= 'Admin/approve_non_aicpe_courses';
$route['export-non-aicpe-courses']['post']= 'Admin/export_non_aicpe_courses';

$route['admin-course-suggestions']= 'Admin/course_suggestions';
$route['admin-course-suggestions/(:num)']= 'Admin/course_suggestions/$1';
$route['delete-course-suggestions']= 'Admin/delete_course_suggestions';
$route['export-course-suggestions']['post']= 'Admin/export_course_suggestions';

$route['admin-question-bank']= 'Admin/question_bank';
$route['admin-question-bank/(:num)']= 'Admin/question_bank/$1';
$route['add-question-bank']= 'Admin/add_question_bank';
$route['edit-question-bank']= 'Admin/edit_question_bank';
$route['get-question-bank']= 'Admin/get_question_bank';
$route['delete-question-bank']= 'Admin/delete_question_bank';

$route['admin-settings']= 'Admin/settings';

$route['admin-marketing-material']= 'Admin/marketing_material';
$route['admin-marketing-material/(:num)']= 'Admin/marketing_material/$1';
$route['get-marketing-material']= 'Admin/get_marketing_material';
$route['add-marketing-material']= 'Admin/add_marketing_material';
$route['delete-marketing-material']= 'Admin/delete_marketing_material';

$route['admin-gallery']= 'Admin/gallery';
$route['admin-aicpe-world-membership-invention-center']= 'Admin/aicpe_world_membership_invention_center';

$route['admin-aicpe-associates']= 'Admin/aicpe_associates';
$route['admin-aicpe-associates/(:num)']= 'Admin/aicpe_associates/$1';
$route['add-aicpe-associates']= 'Admin/add_aicpe_associates';
$route['get-aicpe-associates']= 'Admin/get_aicpe_associates';
$route['delete-aicpe-associates']= 'Admin/delete_aicpe_associates';
$route['block-aicpe-associates']= 'Admin/block_aicpe_associates';
$route['view-aicpe-associates']= 'Admin/view_aicpe_associates';

$route['admin-e-books']= 'Admin/e_books';
$route['admin-e-books/(:num)']= 'Admin/e_books/$1';
$route['get-e-books']= 'Admin/get_e_books';
$route['add-e-books']= 'Admin/add_e_books';
$route['delete-e-books']= 'Admin/delete_e_books';

$route['admin-employers']= 'Employer_admin';
$route['add-employer']= 'Employer_admin/add';
$route['admin-employers-jobpost']= 'Admin/employers_jobpost';

$route['admin-birthday-and-anniversary']= 'Admin/birthday_and_anniversary';
$route['admin-birthday-and-anniversary/(:num)']= 'Admin/birthday_and_anniversary/$1';
$route['add-birthday-and-anniversary']= 'Admin/add_birthday_and_anniversary';
$route['get-birthday-and-anniversary']= 'Admin/get_birthday_and_anniversary';
$route['delete-birthday-and-anniversary']= 'Admin/delete_birthday_and_anniversary';

$route['admin-sms-management']= 'Admin/sms_management';
$route['admin-wallet']= 'Admin/wallet';

$route['admin-student-enquiries']= 'Admin/student_enquiries';
$route['admin-student-enquiries/(:num)']= 'Admin/student_enquiries/$1';
$route['delete-student-enquiry']= 'Admin/delete_student_enquiry';
$route['allot-institute']= 'Admin/allot_institute';

$route['admin-institution-enquiries']= 'Admin/institution_enquiries';
$route['admin-institution-enquiries/(:num)']= 'Admin/institution_enquiries/$1';
$route['delete-institution-enquiry']= 'Admin/delete_institute_enquiry';

$route['admin-employer-enquiries']= 'Admin/employer_enquiries';
$route['admin-employer-enquiries/(:num)']= 'Admin/employer_enquiries/$1';
$route['delete-employer-enquiry']= 'Admin/delete_employere_enquiry';

$route['admin-quick-enquiries']= 'Admin/quick_enquiries';
$route['admin-quick-enquiries/(:num)']= 'Admin/quick_enquiries/$1';
$route['delete-quick-enquiry']= 'Admin/delete_quick_enquiry';

$route['admin-admissions']= 'Admin/admissions';
$route['admin-aicpe-admissions']= 'Admin/aicpe_admissions';
$route['admin-associates-admissions']= 'Admin/associates_admissions';
$route['admin-dropouts-students']= 'Admin/dropout_students';
$route['admin-old-students']= 'Admin/old_Students';
$route['admin-register-student']= 'Admin/add_student';

$route['admin-administrative-staff']= 'Admin/admin_staff';
$route['admin-administrative-staff/(:num)']= 'Admin/admin_staff/$1';
$route['admin-export-admin-staff']['post']= 'Admin/export_admin_staff';
$route['add-administrative-staff']= 'Admin/add_admin_staff';
$route['edit-administrative-staff']= 'Admin/edit_admin_staff';
$route['get-administrative-staff']= 'Admin/get_admin_staff';
$route['delete-administrative-staff']= 'Admin/delete_admin_staff';

$route['admin-field-staff']= 'Admin/staff_field';
$route['admin-field-staff/(:num)']= 'Admin/staff_field/$1';
$route['admin-export-field-staff']['post']= 'Admin/export_field_staff';
$route['get-field-staff']= 'Admin/get_staff_field';
$route['add-field-staff']= 'Admin/add_staff_field';
$route['edit-field-staff']= 'Admin/edit_staff_field';
$route['delete-field-staff']= 'Admin/delete_staff_field';

$route['admin-agent-and-other-staff']= 'Admin/staff_agents';
$route['admin-agent-and-other-staff/(:num)']= 'Admin/staff_agents/$1';
$route['admin-export-agent-and-other-staff']['post']= 'Admin/export_agent_staff';
$route['get-agent-and-other-staff']= 'Admin/get_staff_agents';
$route['add-agent-and-other-staff']= 'Admin/add_staff_agents';
$route['edit-agent-and-other-staff']= 'Admin/edit_staff_agents';
$route['delete-agent-and-other-staff']= 'Admin/delete_staff_agents';

$route['admin-staff-tasks']= 'Admin/staff_tasks';
$route['admin-staff-tasks/(:num)']= 'Admin/staff_tasks/$1';
$route['add-staff-tasks']= 'Admin/add_staff_tasks';
$route['delete-staff-tasks']= 'Admin/delete_staff_tasks';
$route['get-staff-tasks']= 'Admin/get_staff_tasks';

$route['admin-course-admissions']= 'Admin/course_admissions';
$route['admin-aicpe-vocational-certificates']= 'Admin/aicpe_vocational_certificates';
$route['admin-non-aicpe-certificates']= 'Admin/non_aicpe_certificates';
$route['admin-aicpe-typing-certificates']= 'Admin/aicpe_typing_certificates';
$route['admin-participation-certificates']= 'Admin/participation_certificates';
/******** admin Master tables ************/
$route['admin-countries']= 'Admin_master/countries';
$route['admin-countries/(:num)']= 'Admin_master/countries/$1';
$route['add-country']= 'Admin_master/add_country';
$route['delete-country']= 'Admin_master/delete_country';
$route['get-countries']= 'Admin_master/get_countries';

$route['admin-states']= 'Admin_master/states';
$route['admin-states/(:num)']= 'Admin_master/states/$1';
$route['add-state']= 'Admin_master/add_state';
$route['delete-state']= 'Admin_master/delete_state';
$route['get-states']= 'Admin_master/get_states';

$route['admin-district']= 'Admin_master/district';
$route['admin-district/(:num)']= 'Admin_master/district/$1';
$route['add-district']= 'Admin_master/add_district';
$route['delete-district']= 'Admin_master/delete_district';
$route['get-districts']= 'Admin_master/get_districts';

$route['get-state-by-country']= 'Admin_master/get_state_by_country';
$route['get-district-by-state']= 'Admin_master/get_district_by_state';
$route['get-cities-by-district']= 'Admin_master/get_cities_by_district';

$route['admin-cities']= 'Admin_master/cities';
$route['admin-cities/(:num)']= 'Admin_master/cities/$1';
$route['add-city']= 'Admin_master/add_city';
$route['delete-city']= 'Admin_master/delete_city';
$route['get-cities']= 'Admin_master/get_cities';

$route['admin-awards']= 'Admin_master/awards';
$route['admin-awards/(:num)']= 'Admin_master/awards/$1';
$route['add-award']= 'Admin_master/add_award';
$route['get-awards']= 'Admin_master/get_awards';
$route['delete-award']= 'Admin_master/delete_award';

$route['admin-institute-staff-designation']= 'Admin_master/institute_staff_designation';
$route['admin-institute-staff-designation/(:num)']= 'Admin_master/institute_staff_designation/$1';
$route['add-institute-staff-designation']= 'Admin_master/add_institute_staff_designation';
$route['get-institute-staff-designation']= 'Admin_master/get_institute_staff_designation';
$route['delete-institute-staff-designation']= 'Admin_master/delete_institute_staff_designation';

$route['admin-staff-designation']= 'Admin_master/admin_staff_designation';
$route['admin-staff-designation/(:num)']= 'Admin_master/admin_staff_designation/$1';
$route['get-staff-designation']= 'Admin_master/get_staff_designation';
$route['add-staff-designation']= 'Admin_master/add_staff_designation';
$route['delete-staff-designation']= 'Admin_master/delete_staff_designation';

$route['admin-payment-mode']= 'Admin_master/payment_mode';
$route['admin-payment-mode/(:num)']= 'Admin_master/payment_mode/$1';
$route['add-payment-mode']= 'Admin_master/add_payment_mode';
$route['get-payment-mode']= 'Admin_master/get_payment_mode';
$route['delete-payment-mode']= 'Admin_master/delete_payment_mode';

$route['admin-transaction-type']= 'Admin_master/transaction_type';
$route['admin-transaction-type/(:num)']= 'Admin_master/transaction_type/$1';
$route['get-transaction-type']= 'Admin_master/get_transaction_type';
$route['add-transaction-type']= 'Admin_master/add_transaction_type';
$route['delete-transaction-type']= 'Admin_master/delete_transaction_type';

$route['admin-photo-id-type']= 'Admin_master/photo_id_type';
$route['admin-photo-id-type/(:num)']= 'Admin_master/photo_id_type/$1';
$route['get-photo-id-type']= 'Admin_master/get_photo_id_type';
$route['add-photo-id-type']= 'Admin_master/add_photo_id_type';
$route['delete-photo-id-type']= 'Admin_master/delete_photo_id_type';

$route['admin-qualification']= 'Admin_master/qualification';
$route['admin-qualification/(:num)']= 'Admin_master/qualification/$1';
$route['get-qualification']= 'Admin_master/get_qualification';
$route['add-qualification']= 'Admin_master/add_qualification';
$route['delete-qualification']= 'Admin_master/delete_qualification';

$route['admin-aicpe-world-content']= 'Admin_master/aicpe_world_content';
$route['admin-aicpe-world-content/(:num)']= 'Admin_master/aicpe_world_content/$1';
$route['get-aicpe-world-content']= 'Admin_master/get_aicpe_world_content';
$route['add-aicpe-world-content']= 'Admin_master/add_aicpe_world_content';
$route['delete-aicpe-world-content']= 'Admin_master/delete_aicpe_world_content';

$route['admin-currency-converter']= 'Admin_master/currency_converter'; ;
$route['convert_currency']= 'Admin_master/convert_currency'; 

$route['admin-book-categories']= 'Admin_master/book_categories';
$route['admin-book-categories/(:num)']= 'Admin_master/book_categories/$1';
$route['get-book-categories']= 'Admin_master/get_book_categories';
$route['add-book-categories']= 'Admin_master/add_book_categories';
$route['delete-book-categories']= 'Admin_master/delete_book_categories';

$route['admin-subject-level']= 'Admin_master/subject_levels';
$route['admin-subject-level/(:num)']= 'Admin_master/subject_levels/$1';
$route['get-subject-level']= 'Admin_master/get_subject_level';
$route['add-subject-level']= 'Admin_master/add_subject_level';
$route['delete-subject-level']= 'Admin_master/delete_subject_level';

/******** admin Master tables ************/
$route['admin-postage-record']= 'Admin/postage_record';
$route['admin-address-label']= 'Admin/address_label';
$route['admin-business-institutions']= 'Admin/business_institutions';
$route['admin-monthly-business']= 'Admin/monthly_business';
$route['admin-virtual-business']= 'Admin/virtual_business';
$route['admin-recharge-report']= 'Admin/recharge_report';
$route['admin-institution-role-management']= 'Admin/institution_role_management';
/*-------------------------------------Ajax responses-----------------------*/

$route['add-enquiry']= 'Ajax/add_enquiry';
$route['add-student']= 'Ajax/add_student';
$route['check-email']= 'Ajax/check_email';
$route['approve-institute']= 'Ajax/approve_institute';
$route['active-institute']= 'Ajax/active_institute';
$route['hold-institute']= 'Ajax/hold_institute';
$route['block-institute']= 'Ajax/block_institute';
$route['change-quick-enquiry-status']= 'Ajax/change_quick_enquiry_status';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
