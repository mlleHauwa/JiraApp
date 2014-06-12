<?php

class StockController extends CController
{
    /**
     * @param string the symbol of the stock
     * @return float the stock price
     * @soap
     */

	public function actions()
    {
        return array(
            'quote'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }
	
    public function getPrice($symbol)
    {
        $prices=array('IBM'=>100, 'GOOGLE'=>350);
        return isset($prices[$symbol])?$prices[$symbol]:0;
        //...return stock price for $symbol
    }
}

    

//ini_set ('soap.wsdl_cache_enable', 0); 
//ini_set ('soap.wsdl_cache_ttl', 0);
//$client=new SoapClient('http://localhost/jiraapp/index.php/stock/quote');
//echo $client->getPrice('GOOGLE');

// In the above, we declare the method getPrice to be a Web service
// API by marking it with the tag @soap in its doc comment. 
// We rely on doc comment to specify the data type of the input 
// parameters and return value. Additional APIs can be declared in the similar way.
