<?php

@include_once(ROOT.'languages/SMotionssvg_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SMotionssvg_default'.'.php');

   $this->device_types['motionsvg'] = array(
        'TITLE'=>LANG_DEVICES_MOTION .' svg',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMotionssvg',
        'PROPERTIES'=>array(
            'ignoreNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_IGNORE,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIgnoreNobodysHome'),
            'noTimeNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_NOTIME,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdnoTimeNobodysHome'),
            'resetNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_RESET,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdResetNobodysHome'),
            'timeout'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_TIMEOUT,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdMotionTimeout'),
            'blocked'=>array('DESCRIPTION'=>'Is blocked'),
	    'motionDetected'=>array('DESCRIPTION'=>'Прием статуса с датчика движения'),
            'alarm'=>array('DESCRIPTION'=>'Тревога'),
        ),
        'METHODS'=>array(
            'motionDetected'=>array('DESCRIPTION'=>'Motion Detected'),
            'blockSensor'=>array('DESCRIPTION'=>LANG_BLOCK_SENSOR,'_CONFIG_SHOW'=>1),
            'unblockSensor'=>array('DESCRIPTION'=>LANG_UNBLOCK_SENSOR,'_CONFIG_SHOW'=>1),
        )
    );
