<?php

/**
 * handle request from ucenter.
 *
 * you can do api calls functionality by modifying api.php within ucenter bundle folder.
 */
Route::any('(:bundle)', function()
{
	return UC_Client::execute();
});
