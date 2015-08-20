<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');





$PHPJasperXML = new PHPJasperXML("en");
//$PHPJasperXML->debugsql=false;
$PHPJasperXML->arrayParameter=array("p_company_name"=> 'www.tamviettech.vn');
$PHPJasperXML->load_xml_file("sample9_sale-call-log.jrxml");
$PHPJasperXML->transferXMLtoArray('sample9_sale-call-log.xml'); //* use this line if you want to connect with XML File

$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file