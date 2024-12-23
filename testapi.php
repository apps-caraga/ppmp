<?php

namespace Tqdev\PhpCrudApi;

use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use Tqdev\PhpCrudApi\RequestFactory;
use Tqdev\PhpCrudApi\ResponseUtils;

require_once 'api.include.php';

$config = new Config([
        'driver' => 'mysql',
        'address' => 'localhost',
		'port'=>'3306',
		'database'=>'ppmp',
		'username'=>'root',
		'password'=>'r**T',
		'middlewares'=>'dbAuth,validation,authorization,multiTenancy',
		 
		'dbAuth.mode'=>'required',
		'dbAuth.loginTable'=>'active_users',
 		'dbAuth.usersTable'=>'users',
		'dbAuth.usernameColumn'=>'username',
		'dbAuth.passwordColumn'=>'password',
		'dbAuth.passwordLength'=>8,
		'dbAuth.registerUser'=>"1",
		
		'authorization.tableHandler' => function ($operation, $tableName) {
			$insert_priv = $_SESSION['user']['insert_priv'];
			$update_priv = $_SESSION['user']['update_priv'];
			$delete_priv = $_SESSION['user']['delete_priv'];
			$admin_priv	 = $_SESSION['user']['admin_priv'];
			if($admin_priv){ 
				return true; 
			} else{
				switch($operation){ 
					case 'read':
					case 'list':
						return true;
					break;
					case 'create':
						return $insert_priv;
					break;
					case 'update':
					case 'increment': #patch
						return $update_priv; 
					break;
					case 'delete':
						return $delete_priv; 
					break;
				}
			}
		},
		'authorization.columnHandler' => function ($operation, $tableName, $columnName) {
			$protectedColumns = ['access_key','password','username'];
			if(in_array($operation, ['read','list','update']))
				return !( in_array($columnName,$protectedColumns));
			else
				return true;
		},
		
		'multiTenancy.handler' => function ($operation, $tableName) {
			$admin_priv	 = $_SESSION['user']['admin_priv'];
			if($operation =='create'){
				/* on insert, add the following (present on the table)
				 user_id = preparer
				 enduser_office_id = for use in filtering end-user ppmp
				 conso_office_id = for filtering division-level ppmp 
				 */
				return ['user_id' => $_SESSION['user']['id'],
						'enduser_office_id' => $_SESSION['user']['office_id'],
						'division_id' => $_SESSION['user']['parent_office_id']
						]; 
			}else if(in_array($operation,['read','list'])){
				;
			}else{
				#filter by office, users in same office can view their office records
				#return ['office_id' => $_SESSION['user']['conso_office_id']]; 
			}
		},

		"cacheType"=>"NoCache",
		"debug"=>true
     ]);
$request = RequestFactory::fromGlobals();
$api = new Api($config);
$response = $api->handle($request);
ResponseUtils::output($response);
//filename: testapi.php