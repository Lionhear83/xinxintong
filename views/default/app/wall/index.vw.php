<?php
$view['template'] = '/app';
$view['params']['app_title'] = TPL::val('title');
$view['params']['app_view'] = '/app/wall/index';
$view['params']['css'] = array(array('/app/wall','index'));
$view['params']['js'] = array(array('/app/wall','index'));
