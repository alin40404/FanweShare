<?php  function showjsmessage($message,$isBack = 0){ echo "<script type=\"text/javascript\">showmessage(\"".$message."\",".$isBack.");</script>"."\r\n"; flush(); ob_flush(); } function clear_cache() { clearDir1(FANWE_ROOT."public/data/admin/runtime/"); clearDir1(FANWE_ROOT."install/runtime/"); } function clearDir1($dir) { if(!file_exists($dir)) return; $directory = dir($dir); while($entry = $directory->read()) { if($entry != '.' && $entry != '..') { $filename = $dir.'/'.$entry; if(is_dir($filename)) clearDir1($filename); if(is_file($filename)) @unlink($filename); } } $directory->close(); } function fanweC1($name) { return C($name); } function fanweDBC($name) { static $sysConf = array(); if ($sysConf[$name] === NULL) { $db_config = include FANWE_ROOT."public/db_config.php"; $db = Db::getInstance(array('dbms'=>'mysql','hostname'=>$db_config['DB_HOST'],'username'=>$db_config['DB_USER'],'password'=>$db_config['DB_PWD'],'hostport'=>$db_config['DB_PORT'],'database'=>$db_config['DB_NAME'])); $value = $db->query('SELECT val FROM '.$db_config['DB_PREFIX']."sys_conf WHERE name = '$name'"); if(count($value) > 0) $sysConf[$name] = $value[0]['val']; else $sysConf[$name] = false; } return $sysConf[$name]; } function random1($length, $numeric = 0) { $seed = base_convert(md5(microtime().$_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35); $seed = $numeric ? (str_replace('0', '', $seed).'012340567890') : ($seed.'zZ'.strtoupper($seed)); $hash = ''; $max = strlen($seed) - 1; for($i = 0; $i < $length; $i++) { $hash .= $seed{mt_rand(0, $max)}; } return $hash; } function stripslashesDeep($value) { if (empty($value)) { return $value; } else { return is_array($value) ? array_map('stripslashesDeep', $value) : stripslashes($value); } } return array ( 'app_debug' => false, 'app_domain_deploy' => false, 'app_sub_domain_deploy' => false, 'app_plugin_on' => false, 'app_file_case' => false, 'app_group_depr' => '.', 'app_group_list' => '', 'app_autoload_reg' => false, 'app_autoload_path' => '@.ORG.,Think.Util.', 'app_config_list' => array ( 0 => 'taglibs', 1 => 'routes', 2 => 'tags', 3 => 'htmls', 4 => 'modules', 5 => 'actions', ), 'cookie_expire' => 3600, 'cookie_domain' => '', 'cookie_path' => '/', 'cookie_prefix' => '', 'default_app' => '@', 'default_group' => 'Home', 'default_module' => 'Index', 'default_action' => 'index', 'default_charset' => 'utf-8', 'default_timezone' => 'PRC', 'default_ajax_return' => 'JSON', 'default_theme' => 'default', 'default_lang' => 'zh-cn', 'db_type' => 'mysql', 'db_host' => 'localhost', 'db_name' => 'fanweshare', 'db_user' => 'root', 'db_pwd' => 'awfiss', 'db_port' => '3306', 'db_prefix' => 'fanwe_', 'db_suffix' => '', 'db_fieldtype_check' => false, 'db_fields_cache' => true, 'db_charset' => 'utf8', 'db_deploy_type' => 0, 'db_rw_separate' => false, 'data_cache_time' => -1, 'data_cache_compress' => false, 'data_cache_check' => false, 'data_cache_type' => 'File', 'data_cache_path' => 'D:/AppServ/www/FanweShare/install/runtime/Temp/', 'data_cache_subdir' => false, 'data_path_level' => 1, 'error_message' => '您浏览的页面暂时发生了错误！请稍后再试～', 'error_page' => '', 'html_cache_on' => false, 'html_cache_time' => 60, 'html_read_type' => 0, 'html_file_suffix' => '.shtml', 'lang_switch_on' => false, 'lang_auto_detect' => true, 'log_exception_record' => true, 'log_record' => false, 'log_file_size' => 2097152, 'log_record_level' => array ( 0 => 'EMERG', 1 => 'ALERT', 2 => 'CRIT', 3 => 'ERR', ), 'page_rollpage' => 5, 'page_listrows' => 20, 'session_auto_start' => true, 'show_run_time' => false, 'show_adv_time' => false, 'show_db_times' => false, 'show_cache_times' => false, 'show_use_mem' => false, 'show_page_trace' => false, 'show_error_msg' => true, 'tmpl_engine_type' => 'Think', 'tmpl_detect_theme' => false, 'tmpl_template_suffix' => '.html', 'tmpl_content_type' => 'text/html', 'tmpl_cachfile_suffix' => '.php', 'tmpl_deny_func_list' => 'echo,exit', 'tmpl_parse_string' => '', 'tmpl_l_delim' => '{', 'tmpl_r_delim' => '}', 'tmpl_var_identify' => 'array', 'tmpl_strip_space' => false, 'tmpl_cache_on' => true, 'tmpl_cache_time' => -1, 'tmpl_action_error' => 'Public:success', 'tmpl_action_success' => 'Public:success', 'tmpl_trace_file' => 'D:/AppServ/www/FanweShare/admin/ThinkPHP/Tpl/PageTrace.tpl.php', 'tmpl_exception_file' => 'D:/AppServ/www/FanweShare/admin/ThinkPHP/Tpl/ThinkException.tpl.php', 'tmpl_file_depr' => '/', 'taglib_begin' => '<', 'taglib_end' => '>', 'taglib_load' => true, 'taglib_build_in' => 'cx', 'taglib_pre_load' => '', 'tag_nested_level' => 3, 'tag_extend_parse' => '', 'token_on' => true, 'token_name' => '__hash__', 'token_type' => 'md5', 'url_case_insensitive' => false, 'url_router_on' => false, 'url_route_rules' => array ( ), 'url_model' => 0, 'url_pathinfo_model' => 2, 'url_pathinfo_depr' => '/', 'url_html_suffix' => '', 'var_group' => 'g', 'var_module' => 'm', 'var_action' => 'a', 'var_router' => 'r', 'var_page' => 'p', 'var_template' => 't', 'var_language' => 'l', 'var_ajax_submit' => 'ajax', 'var_pathinfo' => 's', 'dirs_check' => array ( 0 => 'public/', 1 => 'public/db.global.php', 2 => 'install/runtime/', 3 => 'logo.gif', 4 => 'foot_logo.gif', 5 => 'link_logo.gif', 6 => 'rewrite/', 7 => 'rewrite/httpd.ini', 8 => 'rewrite/httpd.parse.errors', ), 'db_check' => array ( 0 => 'CREATE TEMPORARY TABLES', 1 => 'ALTER ROUTINE', 2 => 'CREATE ROUTINE', 3 => 'EXECUTE', ), 'function_check' => array ( 0 => 'mysql_connect', 1 => 'fsockopen', 2 => 'gethostbyname', 3 => 'file_get_contents', 4 => 'xml_parser_create', 5 => 'mb_strlen', 6 => 'curl_exec', ), 'from_items' => array ( 'dbinfo' => array ( 'DB_HOST' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => 'localhost', 'name' => '数据库主机名/IP', 'error' => 0, 'notice' => '数据库主机名, 一般为 localhost', 'msg' => '数据库主机名为空，或者格式错误，请检查', ), 'DB_NAME' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => '', 'name' => '数据库名', 'error' => 0, 'notice' => '', 'msg' => '数据库名为空，或者格式错误，请检查', ), 'DB_USER' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => 'root', 'name' => '数据库用户名', 'error' => 0, 'notice' => '', 'msg' => '数据库用户名为空，或者格式错误，请检查', ), 'DB_PWD' => array ( 'type' => 'text', 'required' => 0, 'reg' => '/^.*$/', 'value' => '', 'name' => '数据库密码', 'error' => 0, 'notice' => '', 'msg' => '', ), 'DB_PORT' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^\\d+$/', 'value' => '3306', 'name' => '端口号', 'error' => 0, 'notice' => '', 'msg' => '端口号为空，或者格式错误，请检查', ), 'DB_PREFIX' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^[a-z0-9_]+$/', 'value' => 'fanwe_', 'name' => '表前缀', 'error' => 0, 'notice' => '同一数据库运行多个程序时，请确保前缀为唯一，安装时将会覆盖相同名称的数据表', 'msg' => '表前缀为空，或者格式错误，请检查', ), ), 'admin' => array ( 'ADM_NAME' => array ( 'type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => 'fanwe', 'name' => '管理员账号', 'error' => 0, 'notice' => '', 'msg' => '管理员账号为空，或者格式错误，请检查', ), 'ADM_PWD' => array ( 'type' => 'password', 'required' => 1, 'reg' => '/^.+$/', 'value' => 'fanwe', 'name' => '管理员密码', 'error' => 0, 'notice' => '默认密码为fanwe', 'msg' => '管理员密码为空，请检查', ), 'ADM_PWD2' => array ( 'type' => 'password', 'required' => 1, 'reg' => '/^.+$/', 'value' => 'fanwe', 'name' => '管理员重复密码', 'error' => 0, 'notice' => '', 'msg' => '两次密码不一致，请检查', ), ), ), ); ?>