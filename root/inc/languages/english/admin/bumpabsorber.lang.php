<?php

$l['bmp_name'] = 'Bump Absorber';
$l['bmp_desc'] = 'Allows the stipulation of forums in which only replies by a thread\'s author after the expiry of a bump interval bump the thread - replies by other members never bump it. Also allows thread authors in those forums to close their threads to new replies.';

$l['bmp_settings_title'] = 'Bump Absorber Settings';
$l['bmp_settings_desc' ] = 'Settings for the Bump Absorber plugin.';

$l['bmp_setting_forums_title'] = 'Enabled forums';
$l['bmp_setting_forums_desc' ] = 'Select the forums for which bump absorption should be enabled.';

$l['bmp_setting_bumpinterval_title'] = 'Bump interval (in hours)';
$l['bmp_setting_bumpinterval_desc' ] = 'Set the number of hours that must elapse since the author\'s last post to a thread in the enabled forums before a new reply by the author will bump that thread.';

$l['bmp_all_patched'] = 'All necessary patches have automatically been applied to the following file(s): {1}. To auto-revert them, uninstall this plugin.';
$l['bmp_unwritable' ] = 'The following file(s) is/are not writable by your web server, and patches could not be auto-applied to it/them: {1}. Please grant your web server write permissions on that/those file(s). ';
$l['bmp_fpcfalse'   ] = 'Whilst the following files(s) seem(s) to be writable by your web server, a return of false was obtained when trying to save it/them: {1}. Please ensure that your web server can write to that/those file(s). ';
$l['bmp_unpatchable'] = 'Whilst the following file(s) is/are writable by your web server, not all of the patch(es) auto-applied to them succeeded: {1}. Please check that all of the "from" fields of the patch(es) for that/those file(s) has a match in the file(s), and adjust as necessary. ';