<?php
    class ClientCommand extends CConsoleCommand
	{
    
    	public function actionClient(){
			ini_set ( 'soap.wsdl_cache_enable' , 0 ); ini_set ( 'soap.wsdl_cache_ttl' , 0 );
	    	$wsdlURL='http://localhost/jiraapp/index.php/stock/quote';
	    	$client=new SoapClient($wsdlURL);
	    	$result=$client->getPrice('GOOGLE');
    		echo $result;
    	}

	}
