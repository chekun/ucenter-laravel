<?php
/**
 * place your callback functionality here.
 */
class uc_api_callback
{

	public function test($get,$post)
	{
		return API_RETURN_SUCCEED;
	}
	
	public function deleteuser($get, $post)
	{
		$uids = $get['ids'];
		if (! API_DELETEUSER)
		{
			return API_RETURN_FORBIDDEN;
		}
		/**
		 * user code begin on deleteuser
		 */
		
		/**
		 * user code end on deleteuser
		 */
		
		return API_RETURN_SUCCEED;	
	}
	
	public function renameuser($get, $post)
	{
		$uid = $get['uid'];
		$usernameold = $get['oldusername'];
		$usernamenew = $get['newusername'];
		if (!API_RENAMEUSER) 
		{
			return API_RETURN_FORBIDDEN;
		}

		/**
		 * user code begin on renameuser
		 */
		
		/**
		 * user code end on renameuser
		 */
		
		return API_RETURN_SUCCEED;	
	}
	
	public function gettag($get, $post) 
	{
		return API_RETURN_FORBIDDEN;
	}

	public function synlogin($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function synlogout($get, $post) 
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updatepw($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updatebadwords($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updatehosts($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updateapps($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updateclient($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function updatecredit($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

	public function getcredit($get, $post)
	{
		return API_RETURN_FORBIDDEN;
	}

}