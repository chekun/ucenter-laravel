laravel-ucenter
===============

ucenter bundle for laravel with uc_client 1.6.0

===============
# what is UCenter?
you can go and check it out [here](http://www.comsenz.com/products/ucenter/).

# installation
`
$ php artisan bundle:install laravel-ucenter
`

# config

* route bundle in application/bundles.php

  `
    'ucenter' => array('handles' => 'api/uc')
  `  

* place your ucenter config in bundles/ucenter/config.php

# usage
* start the bundle
  
  `
  Bundle::start('ucenter');
  `

* call api
  
  `
  UC_Client::execute('uc_user_login', array('username', 'password'));
  `
  
  > you can find all apis on ucenter develop documentation.

* callback functionality
  
  > just modify bundles/ucenter/callback.php.


## hope it'll help you.:-)

