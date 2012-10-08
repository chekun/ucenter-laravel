<?php

require Bundle::path('ucenter').'config.php';

if (! URI::is('api/uc'))
{
	require Bundle::path('ucenter').'uc_client/client.php';

	class UC_Client
	{
		public static function execute($api, $params = array())
		{
			return call_user_func_array($api, $params);
		}

		public static function gbk2utf8($string)
		{
			return iconv("GB2312", "UTF-8//IGNORE", $string); 
		}
		
	}	
}
else
{
	require Bundle::path('ucenter').'api.php';
}

