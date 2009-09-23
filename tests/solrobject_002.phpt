--TEST--
SolrObject - checking illegal operation of modifying object
--FILE--
<?php

$solrObject = new SolrObject();

try
{
   @$solrObject->email = "iekpo@php.net";

} catch (Exception $e) {

    var_dump($e->getCode());

    var_dump($e->getMessage());
}

var_dump($solrObject->getPropertyNames());
?>
--EXPECT--
int(1006)
string(34) "SolrObject instances are read-only"
array(0) {
}
