<?php

return [
    'code_401' => 'You are not authenticated or do not have the necessary permissions.',
    'code_403' => 'You do not have the necessary permissions.',
    'code_402' => 'Limit reached. This action cannot be performed.',
    'code_404' => 'Page not found.',
    'code_419' => 'Page Expired',
    'code_422' => 'The request cannot be processed because necessary data is missing. (Possibly the account is not correctly provisioned).',
    'code_429' => 'Too Many Requests.',
    'code_500' => 'Server error. Please notify the administrators if this error occurs repeatedly.',
    'code_503' => 'Curriculum is temporarily unavailable. Please notify the administrators if this error occurs repeatedly and no maintenance windows are announced.',
    'id' => 'ID',
    'id_helper' => '',
    'title' => 'Title',
    'title_helper' => '',
    'description' => 'Description',
    'description_helper' => '',
    'name' => 'Name',
    'created_at' => 'Created at',
    'created_at_helper' => '',
    'updated_at' => 'Updated at',
    'updated_at_helper' => '',
    'deleted_at' => 'Deleted at',
    'deleted_at_helper' => '',

    'my_files' => 'My media',
    'shared_files' => 'shared media',
    'public_files' => 'public media',
    'add' => 'Add',
    'create' => 'Create',
    'paste' => 'paste',
    'list' => 'List',
    'resetOrder' => 'reset Order',
    'show' => 'Show',
    'entries' => 'Entries',
    'perPage' => 'Entries per page',
    'search' => 'Search',
    'view' => 'View',
    'edit' => 'Edit',
    'locked' => 'locked',
    'delete' => 'Delete dataset finally',
    'forceDelete' => '.',
    'save' => 'Save',
    'open' => 'open',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'generate' => 'Generate',
    'share' => 'Share',
    'pleaseSelect' => 'Please select',
    'waitForFile' => 'Generating file...',
    'areYouSure' => 'Are you sure?',
    'allRightsReserved' => 'All rights reserved.',
    'downloadFile' => 'Download file',
    'toggleNavigation' => 'Toggle navigation',
    'toggle' => 'toggle',
    'home' => 'Home',
    'youAreLoggedIn' => 'You are logged in!',
    'user_name' => 'Name',
    'reset_password' => 'Reset Password',
    'login' => 'Login',
    'login_text' => 'Sign in to start your session',
    'login_guest' => 'Login as guest',
    'remember_me' => 'Remember me',
    'forgot_password' => 'Forgot your password?',
    'register' => 'Register',
    'login_email' => 'Email',
    'login_password' => 'Password',
    'password_show' => 'Show Password',
    'login_password_show' => 'Show Password',
    'login_password_confirmation' => 'Password confirmation',
    'login_SSO' => 'Login with SSO',
    'owner' => 'Owner',
    'yes' => 'Yes',
    'no' => 'No',
    'view_file' => 'View file',
    'verifyYourUser' => 'To finish your registration - site asks you to verify your email',
    'clickHereToVerify' => 'Click here to verify',
    'thankYouForUsingOurApplication' => 'Thank you for using our website',
    'verifyYourEmail' => 'Please verify your email',
    'emailVerificationSuccess' => 'User email verified successfully',
    'yourAccountNeedsAdminApproval' => 'Your accounts needs an administrator approval in order to log in',
    'timeFrom' => 'From',
    'timeTo' => 'To',
    'filterDate' => 'Filter by date',
    'reports' => 'Reports',
    'year' => 'Year',
    'month' => 'Month',
    'logout' => 'Logout',
    'calendar' => 'Calendar',
    'percent_accomplished' => 'Percentage value at which content becomes visible',
    'today' => 'Today',
    'sinceYesterday' => 'Since yesterday',
    'lastWeek' => 'last week',
    'lastMonth' => 'last month',
    'lastYear' => 'last year',
    'currentPeriod' => 'current learning period',
    'selectDateRange' => 'Select range',
    'dashboard' => [
        'title' => 'Dashboard',
        'actual' => 'Aktuell',
        'statistic' => 'Statistic',
        'statistic_archievements' => 'Achieved goals',
        'statistic_archievements_total' => 'total',
        'today' => 'today',
        'online' => 'online',
        'now_online' => 'now online',
    ],
    'about' => 'About',
    'information' => 'Information',
    'documentation' => 'Documentation',
    'curricula_content_subscriptions' => 'Digitalized contents',
    'curricula_media_subscriptions' => 'Media',
    'curricula_cross_references' => 'Cross references',
    'curricula_cross_references_description' => 'Suggestions for lesson planning',
    'myProfile' => 'Userprofile',
    'settings' => 'Settings',
    'minutes' => 'Minutes',
    'sum' => 'Sum',
    'active' => 'Active',
    'App\Achievement' => 'Achievement',
    'App\Course' => 'Course',
    'App\Curriculum' => 'Curriculum',
    'App\User' => 'User',
    'App\Group' => 'Group',
    'App\Organization' => 'Organization',
    'config' => [
        'title' => 'Configs',
        'title_singular' => 'Config',
        'create' => 'Create Config',
        'edit' => 'Edit Config',
        'fields' => [
            'key' => 'Key',
            'key_helper' => '',
            'value' => 'Wert',
            'value_helper' => '',
            'referenceable_type' => 'Model',
            'referenceable_type_helper' => '',
            'referenceable_id' => 'Model-ID',
            'referenceable_id_helper' => '',
            'data_type' => 'Data-Typ',
            'data_type_helper' => '',
        ],
        'model_limiter_title' => 'Limiter config',
        'model_limiter_description' => 'A limit for the maximum number of objects (e.g. logbooks) that can be created can be set here.',
    ],
    'metadataset' => [
        'title' => 'Metadatasets',
        'title_singular' => 'Metadatenset',
        'create' => 'Create metadaten',
        'edit' => 'Edit metadaten',
        'fields' => [
            'version' => 'Version',
            'version_helper' => '',
        ],
    ],
    'date' => 'Date',
    'region' => 'Region',
    'place' => 'Place',
    'details' => 'Details',
    'choose' => 'Please select',
    'datatables' => [
        'copy' => 'Copy',
        'csv' => 'CSV',
        'excel' => 'Excel',
        'pdf' => 'PDF',
        'print' => 'Print',
        'colvis' => 'Column visibility',
        'delete' => 'Delete selected',
        'zero_selected' => 'No rows selected',
        'resetPassword' => 'Reset Password',
        'action' => 'Action',
    ],
    'restore' => 'Restore',
    'permadel' => 'Delete Permanently',
    'all' => 'All',
    'trash' => 'Trash',
    'update' => 'Update',
    'enrol_info' => 'Enrol/expel group to curricula',
    'objective_tab' => 'Objectives',
    'superordinate_element_singular' => 'Superordinate Element',
    'superordinate_element' => 'Superordinate Elements',
    'subordinate_element_singular' => 'Subordinate Element',
    'subordinate_element' => 'Subordinate Elements',
    'roles' => 'Roles',
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'create' => 'Create role',
        'edit' => 'Edit role',
        'fields' => [
            'permissions' => 'Permissions',
            'permissions_helper' => '',
        ],
    ],
    'user_management' => 'Users',
    'users' => 'Users',
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
        'add' => 'Add user',
        'create' => 'Create user',
        'edit' => 'Edit user',
        'import' => 'Import users',
        'import_helper' => 'The CSV file must have the following format:
                <ul>
                    <li>The first line must contain the key values (e.g.:username, password, firstname, lastname, email, role_id, confirmed, postalcode, city, state, country).</li>
                    <li>The key values <strong>username, password, firstname, lastname, email</strong> and <strong>organization_id</strong> must be set.</li>
                    <li>In addition, the field <strong>group_id</strong> and <strong>role_id</strong> can be defined. </li><li>Possible ID values for organization_id, group_id and role_id can be found in the tables. If a new learning group is entered, curriculum creates it during import.</li>
                </ul>',
        'dsgvoExport' => 'Export user related data',
        'fields' => [
            'username' => 'Username',
            'username_helper' => '',
            'firstname' => 'Firstname',
            'firstname_helper' => '',
            'lastname' => 'Lastname',
            'lastname_helper' => '',
            'email' => 'Email',
            'email_helper' => '',
            'email_verified_at' => 'Email verified at',
            'email_verified_at_helper' => '',
            'password' => 'Password',
            'password_helper' => '',
            'roles' => 'Roles',
            'roles_helper' => '',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => '',
        ],
    ],
    'teacher' => 'Teacher',
    'remember_token' => 'Remember token',
    'permissions' => 'Permissions',
    'user_actions' => 'User actions',
    'time' => 'Time',
    'valid_from' => 'Valid from',
    'valid_to' => 'Valid to',
    'valid' => 'valid',
    'code' => 'Code',
    'start_time' => 'Start time',
    'end_time' => 'End time',
    'monthly_report' => 'Monthly report',
    'address' => 'Address',
    'website' => 'Website',
    'contacts' => 'Contacts',
    'contact' => 'Contact',
    'first_name' => 'First name',
    'last_name' => 'Last name',
    'phone' => 'Phone',
    'photo' => 'Photo (max 8mb)',
    'tags' => 'Tags',
    'tag' => 'Tag',
    'photo' => 'Photo',
    'statuses' => 'Statuses',
    'attachment' => 'Attachment',
    'due_date' => 'Due date',
    'assigned_to' => 'Assigned to',
    'location' => 'Location',
    'locations' => 'Locations',
    'assigned_user' => 'Assigned (user)',
    'content_management' => 'Content management',
    'text' => 'Text',
    'excerpt' => 'Excerpt',
    'featured_image' => 'Featured image',
    'pages' => 'Pages',
    'group_by' => 'Group by',
    'chart_type' => 'Chart type',
    'create_new_report' => 'Create new report',
    'no_reports_yet' => 'No reports yet.',
    'reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
    'reports_y_axis_field' => 'Y-axis - please choose one of number fields',
    'select_crud_placeholder' => 'Please select one of your CRUDs',
    'select_dt_placeholder' => 'Please select one of date/time fields',
    'aggregate_function_use' => 'Aggregate function to use',
    'x_axis_group_by' => 'X-axis group by',
    'x_axis_field' => 'X-axis field (date/time)',
    'y_axis_field' => 'Y-axis field',
    'integer_float_placeholder' => 'Please select one of integer/float fields',
    'change_notifications_field_1_label' => 'Send email notification to User',
    'change_notifications_field_2_label' => 'When Entry on CRUD',
    'select_users_placeholder' => 'Please select one of your Users',
    'is_created' => 'is created',
    'is_updated' => 'is updated',
    'is_deleted' => 'is deleted',
    'notifications' => 'Notifications',
    'notify_user' => 'Notify User',
    'when_crud' => 'When CRUD',
    'create_new_notification' => 'Create new Notification',
    'stripe_transactions' => 'Stripe Transactions',
    'upgrade_to_premium' => 'Upgrade to Premium',
    'messages' => 'Messages',
    'you_have_no_messages' => 'You have no messages.',
    'all_messages' => 'All Messages',
    'new_message' => 'New message',
    'outbox' => 'Outbox',
    'inbox' => 'Inbox',
    'recipient' => 'Recipient',
    'message_subject' => 'Subject',
    'message' => 'Message',
    'comment' => 'Comment',
    'send' => 'Send',
    'reply' => 'Reply',
    'documents' => 'Documents',
    'file' => 'File',
    'current_password' => 'Current password',
    'new_password' => 'New password',
    'change_password' => 'Change password',
    'reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
    'email_line1' => 'You are receiving this email because we received a password reset request for your account.',
    'email_line2' => 'If you did not request a password reset, no further action is required.',
    'email_greet' => 'Hello',
    'email_regards' => 'Regards',
    'confirm_password' => 'Confirm password',
    'if_you_are_having_trouble' => 'If you’re having trouble clicking the',
    'copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
    'registration' => 'Registration',
    'not_approved_title' => 'You are not approved',
    'not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
    'there_were_problems_with_input' => 'There were problems with input',
    'whoops' => 'Whoops!',
    'file_contains_header_row' => 'File contains header row?',
    'csvImport' => 'CSV Import',
    'csv_file_to_import' => 'CSV file to import',
    'parse_csv' => 'Parse CSV',
    'import_data' => 'Import data',
    'imported_rows_to_table' => 'Imported :rows rows to :table table',
    'import' => 'Import',
    'select_all' => 'Select all',
    'deselect_all' => 'Deselect all',
    'team-management' => 'Teams',
    'team-management-singular' => 'Team',
    'site_title' => 'curriculum',
    'history' => 'History',
    'can_edit' => 'darf bearbeiten',
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
        'create' => 'Create Permission',
        'edit' => 'Edit Permission',
    ],
    'organization_management' => 'Organizations',
    'organization' => [
        'title' => 'Organizations',
        'title_singular' => 'Organization',
        'create' => 'Create Organisation',
        'edit' => 'Update Organisation',
        'fields' => [
            'title' => 'Name',
            'street' => 'Street',
            'street_helper' => '',
            'postcode' => 'Postcode',
            'postcode_helper' => '',
            'city' => 'City',
            'city_helper' => '',
            'phone' => 'Phone',
            'phone_helper' => '',
            'email' => 'Email',
            'email_helper' => '',
            'status' => 'Status',
            'status_helper' => '',
            'lms_url' => 'LMS-URL',
            'lms_url_helper' => '',
        ],
    ],
    'group' => [
        'title' => 'Groups',
        'title_singular' => 'Group',
        'create' => 'Create Group',
        'edit' => 'Edit Group',
    ],
    'grade' => [
        'title' => 'Grades',
        'title_singular' => 'Grade',
        'create' => 'Create Grade',
        'edit' => 'Edit Grade',
        'fields' => [
            'external_begin' => 'Begin',
            'external_begin_helper' => '',
            'external_end' => 'End',
            'external_end_helper' => '',
        ],
    ],
    'organizationtype' => [
        'title' => 'Organization Types',
        'title_singular' => 'Organization Type',
        'create' => 'Create Organisation-Typ',
        'edit' => 'Edit Organisation-Typ',
        'fields' => [
            'external_id' => 'External ID',
            'external_id_helper' => '',
        ],
    ],
    'state' => [
        'title' => 'States',
        'title_singular' => 'State',
        'fields' => [
            'lang_de' => 'Title',
            'lang_de_helper' => '',
        ],
    ],
    'country' => [
        'title' => 'Countries',
        'title_singular' => 'Country',
        'fields' => [
            'alpha2' => 'Code (alpha2)',
            'alpha2_helper' => '',
            'alpha3' => 'Code (alpha3)',
            'alpha3_helper' => '',
            'langCS' => 'Title (langCS)',
            'langCS_helper' => '',
            'lang_de' => 'Title (lang_de)',
            'lang_de_helper' => '',
            'lang_en' => 'Title (lang_en)',
            'lang_en_helper' => '',
            'langES' => 'Title (langES)',
            'langES_helper' => '',
            'langFR' => 'Title (langFR)',
            'langFR_helper' => '',
            'langIT' => 'Title (langIT)',
            'langIT_helper' => '',
            'langNL' => 'Title (langNL)',
            'langNL_helper' => '',
        ],
    ],
    'status' => [
        'title' => 'Statuses',
        'title_singular' => 'Status',
        'fields' => [
            'status_id' => 'Status ID',
            'status_id_helper' => '',
            'lang_de' => 'Title (lang_de)',
            'lang_de_helper' => '',
            'lang_en' => 'Title (lang_en)',
            'lang_en_helper' => '',
        ],
    ],
    'period' => [
        'title' => 'Periods',
        'title_singular' => 'Period',
        'create' => 'Create Period',
        'edit' => 'Edit Period',
        'fields' => [
            'begin' => 'Begin',
            'begin_helper' => '',
            'end' => 'End',
            'end_helper' => '',
        ],
    ],
    'subject' => [
        'title' => 'Subjects',
        'title_singular' => 'Subject',
        'create' => 'Create Subject',
        'edit' => 'Edit Subject',
        'fields' => [
            'title_short' => 'Title (short)',
            'title_short_helper' => '',
        ],
    ],
    'content' => [
        'title' => 'Contents',
        'title_singular' => 'Content',
        'create' => 'Create Content',
        'copy' => 'Copy Content',
        'edit' => 'Edit Content',
        'no_content' => 'No (further) contents available.',
        'index' => 'Table of contents',
        'index_alt' => 'Hinweise/Ergänzungen',
        'fields' => [
            'content' => 'Content',
            'content_helper' => '',
        ],
    ],
    'categorie' => [
        'title' => 'Categories',
        'title_singular' => 'Categorie',
        'create' => 'Create Categorie',
        'edit' => 'Create Categorie',
    ],
    'curriculum' => [
        'title' => 'Curricula',
        'title_singular' => 'Curriculum',
        'create' => 'Create curriculum',
        'edit' => 'Edit curriculum',
        'edit_owner' => 'Edit owner of curriculum',
        'import' => 'Import curriculum',
        'export' => 'Export curriculum',
        'print' => 'Print curriculum',
        'print_references' => 'Print curriculum references',
        'fields' => [
            'author' => 'Author',
            'author_helper' => '',
            'publisher' => 'Publisher',
            'publisher_helper' => '',
            'city' => 'City',
            'city_helper' => '',
            'date' => 'Date',
            'date_helper' => '',
            'color' => 'Color',
            'color_helper' => '',
            'variant_default_title' => 'Title (Standard Variant)',
            'variant_default_title_helper' => '',
            'variant_default_description' => 'Description (Standard Variant)',
            'variant_default_description_helper' => '',
        ],
    ],
    'curriculumType' => [
        'title' => 'Typ',
        'title_singular' => 'Typ',
    ],
    'terminalObjective' => [
        'title' => 'Terminal Objectives',
        'title_singular' => 'Terminal Objective',
        'create' => 'Create terminal objective',
        'edit' => 'Edit terminal objective',
        'move_to_curriculum' => 'Move terminal objective to other curriculum',
        'fields' => [
            'time_approach' => 'Time approach',
        ],
    ],
    'objectiveType' => [
        'title' => 'Type',
        'title_singular' => 'Type',
        'create' => 'Create type',
        'edit' => 'Edit type',
        'fields' => [
            'title_short' => 'Title (short)',
        ],
    ],
    'enablingObjective' => [
        'title' => 'Enabling Objectives',
        'title_singular' => 'Enabling Objective',
        'create' => 'Create enabling objective',
        'edit' => 'Edit enabling objective',
        'fields' => [
            'time_approach' => 'Time approach',
        ],
    ],
    'glossar' => [
        'title' => 'Glossary',
        'title_singular' => 'Glossaries',
        'add' => 'Add Glossary',
        'create' => 'Create Glossary ',
        'edit' => 'Edit GlosGlossarysar',
        'print' => 'Print glossary',
    ],
    'media' => [
        'title' => 'Media',
        'title_singular' => 'Media',
        'add' => 'Add Media',
        'create' => 'Create Media',
        'edit' => 'Edit Media',
        'upload' => 'Upload Media',
        'link' => 'Link',
        'no_media' => 'Nothing here yet.',
        'fields' => [
            'path' => 'Path',
            'path_helper' => '',
            'medium_name' => 'Medium name',
            'medium_name_helper' => '',
            'author' => 'Author',
            'author_helper' => '',
            'publisher' => 'Publisher',
            'publisher_helper' => '',
            'city' => 'City',
            'city_helper' => '',
            'date' => 'Date',
            'date_helper' => '',
            'size' => 'Size',
            'size_helper' => '',
            'mime_type' => 'Mime_type',
            'mime_type_helper' => '',
            'license_id' => 'License_id',
            'license_id_helper' => '',
            'owner_id' => 'Owner_id',
            'owner_id_helper' => '',
            'public' => 'public',
            'public_helper' => '',
        ],
    ],
    'navigator' => [
        'title' => 'Navigators',
        'title_singular' => 'Navigator',
        'create' => 'Create Navigator',
        'edit' => 'Edit Navigator',
    ],
    'navigator_view' => [
        'title' => 'Navigator Views',
        'title_singular' => 'Navigator View',
        'create' => 'Create Navigator-View',
        'edit' => 'Edit Navigator-View',
    ],
    'navigator_item' => [
        'title' => 'Navigator Items',
        'title_singular' => 'Navigator Item',
        'create' => 'Create Navigator-Block',
        'edit' => 'Edit Navigator-Block',
        'fields' => [
            'referenceable_type' => 'Type',
            'referenceable_type_helper' => '',
            'referenceable_id' => 'Target Id',
            'referenceable_id_helper' => '',
            'position' => 'Position',
            'position_helper' => '',
            'css_class' => 'css_class',
            'css_class_helper' => '',
            'visibility_show' => 'show',
            'visibility_hide' => 'hide',
        ],
    ],
    'referenceable_types' => [
        'objective' => 'Link terminal/enabling objective',
        'add_reference' => 'Add Reference',
        'navigator_view' => 'Link a navigator view',
        'curriculum' => 'Link a curriculum',
        'content' => 'Link a text',
        'medium' => 'Link a medium (file, url)',
    ],
    'course' => [
        'title' => 'Courses',
        'title_singular' => 'Course',
    ],
    'achievement' => [
        'title' => 'Achievements',
        'title_singular' => 'Achievement',
        'fields' => [
            'referenceable_type' => 'Type',
            'referenceable_type_helper' => '',
            'referenceable_id' => 'Target Id',
            'referenceable_id_helper' => '',
            'status' => 'Status',
            'status_helper' => '',
            'user_id' => 'User Id',
            'user_id_helper' => '',
            'owner_id' => 'Owner Id',
            'owner_id_helper' => '',
        ],
    ],
    'progress' => [
        'title' => 'Progresses',
        'title_singular' => 'Progress',
        'fields' => [
            'referenceable_type' => 'Model',
            'referenceable_type_helper' => '',
            'referenceable_id' => 'Model Id',
            'referenceable_id_helper' => '',
            'associable_type' => 'Associable Model',
            'associable_type_helper' => '',
            'associable_id' => 'Associable Model Id',
            'associable_id_helper' => '',
            'value' => 'Value',
            'value_helper' => '',
        ],
    ],
    'certificate' => [
        'title' => 'Certificates',
        'title_singular' => 'Certificate',
        'create' => 'Create Certificate-Template',
        'edit' => 'Edit Certificate-Template',
        'generate' => 'Generate Certificate(s)',
        'fields' => [
            'body' => 'Body',
            'body_helper' => '',
            'curriculum_id' => 'Curriculum Id',
            'curriculum_id_helper' => '',
            'organization_id' => 'Organization Id',
            'organization_id_helper' => '',
            'owner_id' => 'Owner Id',
            'owner_id_helper' => '',
        ],
    ],
    'logbook' => [
        'title' => 'Logbooks',
        'title_singular' => 'Logbook',
        'create' => 'Create Logbook',
        'edit' => 'Edit Logbook',
        'print' => 'Print Logbook',
    ],
    'logbookEntry' => [
        'title' => 'Logs',
        'title_singular' => 'Log',
        'create' => 'Create Logbookentry',
        'edit' => 'Edit Logbookentry',
        'addition' => 'Make addition to Logbookentry',
        'fields' => [
            'begin' => 'Begin',
            'begin_helper' => '',
            'end' => 'End',
            'end_helper' => '',
        ],
    ],
    'task' => [
        'title' => 'Tasks',
        'title_singular' => 'Task',
        'create' => 'Create task',
        'edit' => 'Edit task',
        'subscriptions' => 'Assignments',
        'fields' => [
            'start_date' => 'Start Date',
            'start_date_helper' => '',
            'completion_date' => 'Completion Date',
            'completion_date_helper' => '',
            'due_date' => 'Due Date',
            'due_date_helper' => '',
            'priority_id' => 'Priority (ID)',
            'priority_id_helper' => '',
        ],
    ],
    'exam' => [
        'title' => 'Exams',
        'title_singular' => 'Exam',
        'create' => 'Create Exam',
        'edit' => 'Edit Exam',
        'login_key' => 'Login Key',
        'select_tests' => 'Select Tests',
        'fields' => [
            'tool' => 'Tool',
            'test_booklet' => 'Test Booklet',
            'subject' => 'Subject',
            'status' => 'Status',
            'completed_at' => 'Completed At',
            'action' => 'Action',
        ],
        'add_remove_users' => [
            'students_exam_title' => 'Students in Exam',
            'users_group_title' => 'Users in Group ',
        ],
        'status_options' => [
            'not_started' => 'Not Started',
            'started' => 'Started',
            'completed' => 'Completed',
        ],
        'confirm_messages' => [
            'confirm_delete' => 'Are you sure you want to delete this Exam?',
        ],
        'success_messages' => [
            'exam_created' => 'Successfully Created Exam',
            'exam_removed' => 'Successfully removed Exam',
        ],
        'error_messages' => [
            'get_tests' => 'Test list could not be retrieved',
            'remove_users' => 'Students who have already started or completed this exam cannot be removed',
            'remove_exam' => 'This Exam has been started by one or more Student(s) and cannot be removed',
        ],
    ],
    'absences' => [
        'title' => 'Absences',
        'title_singular' => 'Absence',
        'create' => 'Absence erstellen',
        'edit' => 'Absence bearbeiten',
        'fields' => [
            'reason' => 'Reason',
            'reason_helper' => '',
            'done' => 'done',
            'done_helper' => '',
            'time' => 'absence time (minutes)',
            'time_helper' => '',
        ],
    ],
    'externalRepositorySubscription' => [
        'title' => 'External resources',
        'title_singular' => 'External resource',
        'create' => 'Add external resource',
        'search' => 'Search external resource',
        'edit' => 'Edit external resource',
    ],
    'eventSubscription' => [
        'title' => 'Events',
        'title_singular' => 'Event',
        'title_alt' => 'Trainings',
        'create' => 'Creat eventlink ',
        'search' => 'Search event',
        'search_subject' => '... by subject',
        'search_keyword' => '... individual search term',
        'edit' => 'Edit eventlink',
    ],
    'message' => [
        'title' => 'Messages',
        'title_singular' => 'Message',
        'create' => 'Create Message',
        'compose' => 'Compose new Message',
        'search' => 'Search Message',
        'edit' => 'Edit Message',
        'send' => 'Send',
        'to' => 'To',
        'from' => 'From',
        'folder' => 'Folder',
        'inbox' => 'Inbox',
        'sendbox' => 'Sent',
        'junk' => 'Junk',
        'drafts' => 'Drafts',
        'trash' => 'Trash',
        'fields' => [
            'subject' => 'Subject',
            'subject_helper' => '',
            'message' => 'Message',
            'message_helper' => '',
        ],
    ],
    'plan' => [
        'title' => 'Plans',
        'title_singular' => 'Plan',
        'create' => 'Create plan',
        'search' => 'Search plan',
        'edit' => 'Edit plan',
        'fields' => [
            'type' => 'Typ',
            'type_helper' => '',
            'begin' => 'Start date',
            'begin_helper' => '',
            'end' => 'Due date',
            'end_helper' => '',
            'duration' => 'Duration',
            'duration_helper' => 'Specify how much time (in minutes) should be scheduled to complete the learning/work schedule.',
        ],
    ],
    'planItem' => [
        'title' => 'Aufgaben',
        'title_singular' => 'Aufgabe',
        'create' => 'Aufgabe erstellen',
        'search' => 'Aufgabe suchen',
        'edit' => 'Aufgabe bearbeiten',
        'fields' => [
            'type' => 'Typ',
            'type_helper' => '',
        ],
    ],
    'contactdetail' => [
        'title' => 'Contact',
        'title_singular' => 'Contact',
        'create' => 'Create contact',
        'edit' => 'Edit contact',
        'fields' => [
            'email' => 'Email',
            'email_helper' => '',
            'phone' => 'Phone',
            'phone_helper' => '',
            'mobile' => 'Mobile',
            'mobile_helper' => '',
            'notes' => 'Notes/Office Hours',
            'notes_helper' => '',
        ],
    ],
    'kanban' => [
        'title' => 'Kanban-Boards',
        'title_singular' => 'Kanban-Board',
        'create' => 'Create Kanban-Board',
        'edit' => 'Edit Kanban-Board',
        'delete' => 'Delete Kanban-Board',
        'delete_helper' => 'Should Kanban-Board be deleted?',
    ],
    'kanbanItem' => [
        'title' => 'Items',
        'title_singular' => 'Item',
        'create' => 'Create items',
        'edit' => 'Edit items',
        'delete' => 'Delete items',
        'delete_helper' => 'Should item be deleted?',
        'fields' => [
            'order_id' => 'Order ID',
            'order_id_helper' => '',
            'kanban_status_id' => 'Status ID',
            'kanban_status_helper' => '',
        ],
    ],
    'kanbanStatus' => [
        'title' => 'Statuses',
        'title_singular' => 'Status',
        'create' => 'Create status ',
        'edit' => 'Edit status ',
        'delete' => 'Delete status',
        'delete_helper' => 'Should the status and the associated items be deleted?',
        'fields' => [
            'order_id' => 'Order ID',
            'order_id_helper' => '',
            'kanban_id' => 'Kanban ID',
            'kanban_helper' => '',
        ],
    ],
    'prerequisite' => [
        'title' => 'Prerequisites',
        'title_singular' => 'Prerequisite',
        'create' => 'Link prerequisite',
        'edit' => 'Edit prerequisite-link',
        'delete' => 'Delete prerequisite-link',
    ],
    'artefact' => [
        'title' => 'Artefacts',
        'title_singular' => 'Artefact',
        'create' => 'Create artefact',
        'edit' => 'Edit Artefact',
        'delete' => 'Delete Artefact',
    ],
    'note' => [
        'title' => 'Notes',
        'title_singular' => 'Note',
        'create' => 'Create note',
        'edit' => 'Edit note',
        'delete' => 'Delete note',
        'delete_helper' => 'Should the note be deleted?',
        'fields' => [
            'content' => 'Inhalt',
            'content_helper' => '',
        ],
    ],
    'lms' => [
        'title' => 'LMS',
        'title_singular' => 'LMS',
        'add' => 'Add LMS-Object',
    ],
    'meeting'              => [
        'title'          => 'Meetings',
        'title_singular' => 'Meeting',
        'create'         => 'Meeting erstellen',
        'edit'           => 'Meeting bearbeiten',
        'fields'         => [
            'uid'              => 'UID',
            'uid_helper'       => '',
            'title'            => 'Meeting-Title',
            'subtitle'         => 'Subtitle',
            'info'             => 'Info',
            'info_helper'      => '',
            'speakers'         => 'Speakers',
            'speakers_helper'  => '',
            'begin'            => 'Begin',
            'end'              => 'End',
            'status'           => 'Status',
            'category'         => 'Category',
            'target_group'     => 'Targetgroup',
            'provider'         => 'Provider',
            'livestream'       => 'Livestream',
            'livestream_helper'=> ''
        ],
    ],
    'meetingDate'              => [
        'title'          => 'Meetingdatetitel',
        'title_singular' => 'Meetingdatetitel',
        'create'         => 'Create meetingdatetitel ',
        'edit'           => 'Edit meetingdatetitel ',
        'fields'         => [
            'uid'              => 'UID',
            'uid_helper'       => '',
            'access_token'        => 'Access Token',
            'access_token_helper' => '',
            'address'          => 'Address',
            'address_helper'   => '',
            'begin'            => 'Begin',
            'end'              => 'End',
            'type'             => 'Type',
            'type_helper'       => '',
        ],
    ],
    'subtitle' => 'Untertitel',
    'agendaItemType' => [
        'title' => 'Typ',
        'title_singular' => 'Typ',
    ],
    'token' => 'Token',
    'token_copied' => 'Token copied to clipboard!',
    'variantDefinitions' => [
        'title' => 'Variant Definitions',
        'title_singular' => 'Variant Definition',
        'create' => 'Create variant definition',
        'edit' => 'Edit variant definition',
        'delete' => 'Delete variant definition',
        'delete_helper' => 'Should the variant definition be deleted?',
        'fields' => [
            'color' => 'Color',
            'color_helper' => '',
            'css_icon' => 'CSS Icon',
            'css_icon_helper' => '',
        ],
    ],
    'videoconference' => [
        'title' => 'Videoconferences',
        'title_singular' => 'Videoconference',
        'create' => 'Create videoconference',
        'edit' => 'Edit videoconference ',
        'delete' => 'Delete videoconference',
        'delete_helper' => 'Should the videoconference be deleted?',
        'fields' => [
            'meetingID' => 'meetingID',
            'meetingID_helper' => '',
            'meetingName' => 'Title',
            'meetingName_helper' => '',
            'attendeePW' => 'Attendee-Password',
            'attendeePW_helper' => '',
            'moderatorPW' => 'Moderator-Password',
            'moderatorPW_helper' => '',
            'callbackURL' => 'Callback URL',
            'callbackURL_helper' => '',
        ],
    ],
];
