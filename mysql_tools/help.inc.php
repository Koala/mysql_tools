<?php
/**
* MySQL Tools Addon
*
* @author http://rexdev.de
*
* @package redaxo4.3
* @version 0.1
* $Id$:
*/

// ADDON VARS
////////////////////////////////////////////////////////////////////////////////
$mypage = 'mysql_tools';
$myroot = $REX['INCLUDE_PATH'].'/addons/'.$mypage.'/';

// LOCAL INCLUDES
////////////////////////////////////////////////////////////////////////////////
require_once $myroot.'functions/function.a895_commons.inc.php';

// HELP CONTENT
////////////////////////////////////////////////////////////////////////////////
$help_includes = array
(
  'Hilfe'     => array('_readme.textile'    ,'textile'),
  'Changelog' => array('_changelog.textile' ,'textile')
);

// MAIN
////////////////////////////////////////////////////////////////////////////////
foreach($help_includes as $k => $v)
{
  if(file_exists($myroot.$v[0]))
  {
    echo '
    <div class="rex-addon-output" style="overflow:auto">
      <h2 class="rex-hl2" style="font-size:1em">'.$k.' <span style="color: gray; font-style: normal; font-weight: normal;">( '.$v[0].' )</span></h2>
      <div class="rex-addon-content">
        <div class="'.$mypage.'">
          '.a895_incparse($myroot,$v[0],$v[1],true).'
        </div>
      </div>
    </div>';
  }
}
