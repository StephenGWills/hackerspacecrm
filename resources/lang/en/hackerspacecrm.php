<?php

return [
	'messages'	=> [
		'welcome'	=>	'Welcome to :applicationname',
		'models'	=>	[
			'create'	=>	[
				'success'	=>	':modelname was created successfully!',
				'fail'	=>	':modelname could not be created!',
			],
			'update'	=>	[
				'success'	=>	':modelname was updated successfully!',
				'fail'	=>	':modelname could not be updated!',
			],
			'delete'	=>	[
				'success'	=>	':modelname was deleted successfully!',
				'fail'	=>	':modelname could not be deleted!',
			],
			'translate'	=>	[
				'success'	=>	':modelname translation was created successfully!',
				'fail'	=>	':modelname translation could not be created.',
				'exists'	=>	'This :modelname already has a translation.',
			],
			'notexist'	=>	'The :modelname you were looking for does not exist!',
			'notfound'	=>	'The :modelname you were looking for was not found!',
		],
		'nopermission'	=>	'You don\'t have the required permission to perform this action!',
		'mustlogin'	=>	'You must be loged in in order to see this page!',
		'sessionexpired'	=>	'Your session has expired!',
		'notallowed'	=>	'You are not allowed to perform this action!',
		'confirmemail'	=>	'Please check your email address to confirm and activate your account.',
		'tokennotfound'	=>	'User with provided token was not found!',
		'accountverified'	=>	'Your account has been verified. You may now log in.',
		'notranslation'	=>	'No translation available for this locale!',
	],
	'models'	=> [
		'permission'	=>	'Permission',
		'permissions'	=>	'Permissions',
		'role'	=>	'Role',
		'roles'	=>	'Roles',
		'profile'	=>	'Profile',
		'profiles'	=>	'Profiles',
		'user'	=>	'User',
		'users'	=>	'Users',
		'setting'	=>	'Setting',
		'settings'	=>	'Settings',
		'menu'	=>	'Menu',
		'menus'	=>	'Menus',
		'emailtemplate'	=>	'Email Template',
		'emailtemplates'	=>	'Email Templates',
	],
	'help'	=> [
		'settings'	=> [
			'emails'	=>	'<b>Do not write php code!!!</b> <br />Please make sure you only use the required variables specified under the textarea.<br /><br /><b>Variables you can use:</b> $crm->crmname, $crm->description, $crm->orgname, $crm->orgdescription, $crm->address, $crm->url, $crm->locale, $crm->theme, $crm->new_user_role.<br><br><b>Syntax examples for displaying a variable:</b> {{ $crm->crmname }}, {{ $edit_link }}',
			'roles'		=>	'We do not recommend deleting the default CRM roles, doing so may affect the CRM\'s behaviour. Please consider adding new ones instead.',
		],
		'translation' => 'Please note that this action will create a copy of this :object to the selected locale (if it doesn\'t already exist). After performing this action, you will have to switch to that locale in order to see the :object and translate its contet.',
		'cannotbetranslated'	=>	'The following can not be translated!',
		'createprofile'	=> 'Creating a profile can not be undone. User/Member profiles are public and can be seen by unauthenticated users.',

	],
	'pages'	=>	[
		'titles'	=>	[
			'register'	=> 'Register to :name',
			'signin'	=> 'Sign in to enter :name',
			'resetpassword'	=> 'Reset password',
			'createprofile'	=> 'Create profile',
			'editaccount'	=> 'Edit account',
			'settings'	=> 'Settings',
		],
		'subtitles'	=>	[
			'allusers' => 'All users',
			'createnewuser' => 'Create new user',
			'edituser' => 'Edit user',
			'confirmuserdeletion' => 'Confirm user deletion',
			'createnewmenu' => 'Create new menu',
			'confirmmenudeletion' => 'Confirm menu deletion',
			'editmenu' => 'Edit menu',
			'editroles' => 'Edit roles',
			'userroles' => 'User roles',
			'createnewrole' => 'Create new role',
			'editrole' => 'Edit role',
			'confirmroledeletion' => 'Confirm role deletion',
			'permissions' => 'Permissions',
			'createtranslation' => 'Create translation',
			'menus' => 'Menus',
			'publicmenus' => 'Public menus',
			'mainmenus' => 'Main menus',
			'settingsmenus' => 'Settings menus',
		],
		'descriptions'	=>	[],
	],
	'forms'	=> [
		'labels'	=> [
			'login'	=>	'Login',
			'logout'	=>	'Logout',
			'register'	=>	'Register',
			'language' => 'Language',
			'locale' => 'Locale',
			'changelanguage' => 'Change language',
			'selectlocale'	=>	'Select locale',
			'editaccount'	=>	'Edit Account',
			'createprofile'	=>	'Create Profile',
			'profile'	=>	'Profile',
			'resetpassword'	=> 'Reset password',
			'forgotpassword'	=>	'Forgot your password?',
			'sendresetlink'	=>	'Send Password Reset Link',
			'fullname'	=> 'Full name',
			'label' => 'Label',
			'name'	=> 'Name',
			'surname'	=> 'Surname',
			'username'	=> 'Username',
			'email'	=> 'E-Mail Address',
			'password'	=> 'Password',
			'confirmpassword'	=> 'Confirm password',
			'newpassword'	=> 'New password',
			'confirmnewpassword'	=> 'Confirm new password',
			'birthday'	=>	'Birthday',
			'gender'	=>	'Gender',
			'socialid'	=>	'Social ID',
			'phone'	=>	'Phone',
			'address'	=>	'Address',
			'skills'	=>	'Skills',
			'biography'	=>	'Biography',
			'website'	=>	'Website',
			'socialmedia'	=>	'Social media',
			'roles_l'	=> 'roles',
			'roles_u'	=> 'Roles',
			'note' => 'Note',
			'translate' => 'Translate',
			'emailsubject' => 'Email subject',
			'emailbody' => 'Email body',
			'fontawesomeicon' => 'Font awesome icon',
			'slug' => 'Slug',
			'parentmenu' => 'Parent menu',
			'order' => 'Order',
			'title' => 'Title',
			'location' => 'location',
			'description' => 'Description',
			'permission' => 'Permission',
			'menugroup' => 'Menu group',
			'' => '',
		],
		'help'	=> [
			'skills'	=>	'Separate each skill with a comma. Exc: skill1,skill2,skill3',
			'website'	=>	'Provide full URL. Exc: http://example.com',
			'areyousure' => 'Are you sure you want to delete',
			'deletingrole' => 'Deleting a role will remove all its relations with Permissions and CRM Users',
			'nospecialchar' => 'The name should not contain spaces, special characters or capital letters. Only underscore "_" allowed.',
			'selectnonemenu' => 'Select "(None)" for this menu to be a master menu',
			'highestordermenu' => '0 is highest',
			'selectpermissionmenu' => 'Permission which can access this menu. Select "public" for non authenticated users to see it.',
			'notemenudeletion' => 'All children of this menu will not be deleted but will become parents.',
		],
		'titles'	=> [
			'createprofile'	=> 'Create profile',
			'deleteprofile'	=> 'Delete profile',
			'verifyuser'	=> 'Verify user',
			'edit'	=> 'Edit',
			'delete'	=> 'Delete',
			'editroles'	=> 'Edit roles',
			'translate' => 'Translate',
		],
		'placeholders'	=> [
			'namesurname'	=> 'Name Surname',
			'fullname'	=> 'Full name',
			'username'	=> 'Username',
			'email'	=> 'E-Mail Address',
			'emailorusername'	=> 'E-Mail or Username',
			'password'	=> 'Password',
			'passwordconfirmation'	=> 'Password confirmation',
			'entertexthere'	=> 'Enter text here',
			'exampleaddress' => 'Example St. City',
			'skills' =>	'skill1,skill2,skill3',
			'url' => 'http://www.example.com/',
			'example_l' => 'example',
			'example_u' => 'Example',
			'example_location' => 'settings/menus',
			'description' => 'This is just a description',
		],
		'dropdowns'	=> [
			'selectlocale' => 'Select locale',
			'selectpermission' => 'Select permission',
			'selectgroup' => 'Select group',
			'none' => '(None)',
		],
		'checkboxes'	=> [
			'rememberme'	=>	'Remember me',
			'male'	=>	'Male',
			'female'	=>	'Female',
			'other'	=>	'Other',
			'notifyusernewacc' => 'Notify new user for their new account.',
		],
		'buttons'	=> [
			'open'	=> 'Open',
			'close'	=> 'Close',
			'create'	=> 'Create',	
			'update'	=> 'Update',
			'save'	=> 'Save',
			'delete'	=> 'Delete',
			'submit'	=> 'Submit',
			'send'	=> 'Send',
			'change' => 'Change',
			'addnew' => 'Add new',
			'translate' => 'Translate',
			'generatepasswd' => 'Generate password',
		],
		'tables'	=>	[
			'columns' => [
				'id' => 'ID',
				'name' => 'Name',
				'label' => 'Label',
				'fullname' => 'Full name',
				'username' => 'Username',
				'email' => 'E-mail',
				'profile' => 'Profile',
				'lastlogin' => 'Last login',
				'verified' => 'Verified',
				'createdat' => 'Created at',
				'action' => 'Action',
				'icon' => 'Icon',
				'slug' => 'Slug',
				'title' => 'Title',
				'location' => 'Location',
				'parent' => 'Parent',
				'permission' => 'Permission',
				'group' => 'Group',
				'order' => 'Order',
				'description' => 'Description',
			]
		],
	],
	'menus'		=> [
	    'mainnavigation'	=>	'MAIN NAVIGATION',
	    'settings'	=>	'SETTINGS',
	    'public'	=>	'PUBLIC',
	]
];