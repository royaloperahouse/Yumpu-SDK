<?php
/** config array
 * 
 * token - user token provided by yumpu;
 * returnFormat - the response data format: array or json; default is array;
 * endpointDomain - the yumpu domain for the api methods;
 * endpointSearchDomain - the yumpu domain for the search api method;
 * debug - wether to write requests logs ot not; default is FALSE;
 * useCurl - wether to use CURL method or non CURL methods for request to yumpu api; default is TRUE;
 * logFilePath - path to the log file ;
 * uploadPath - pdfs' path location;
 * yumpuEndpoints - full paths array for the yumpu api methods;
 */

$config = array(
    'token' => '',
	'returnFormat' => 'array',
	'endpointDomain' => 'http://api.yumpu.com/2.0/',
	'endpointSearchDomain' => 'http://search.yumpu.com/2.0/',
	'debug' => FALSE,
	'useCurl' => TRUE,
	'logFilePath' => 'yumpu_log.txt',
    'uploadPath' => '',
);

$config['yumpuEndpoints'] = array( 
	'user/get' => $config['endpointDomain'].'user.json',
	'user/post' => $config['endpointDomain'].'user.json',
	'user/put' => $config['endpointDomain'].'user.json',
	'document/get' => $config['endpointDomain'].'document.json',
	'document/post/file' => $config['endpointDomain'].'document/file.json',
	'document/post/url' => $config['endpointDomain'].'document/url.json',
	'document/progress' => $config['endpointDomain'].'document/progress.json',
	'documents/get' => $config['endpointDomain'].'documents.json',
	'document/delete' => $config['endpointDomain'].'document.json',
	'document/put' => $config['endpointDomain'].'document.json',
	'collection/get' => $config['endpointDomain'].'collection.json',
	'collection/post' => $config['endpointDomain'].'collection.json',
	'collection/put' => $config['endpointDomain'].'collection.json',
	'collection/delete' => $config['endpointDomain'].'collection.json',
	'collections/get' => $config['endpointDomain'].'collections.json',
	'section/get' => $config['endpointDomain'].'collection/section.json',
	'section/post' => $config['endpointDomain'].'collection/section.json',
	'section/put' => $config['endpointDomain'].'collection/section.json',
	'section/delete' => $config['endpointDomain'].'collection/section.json',
	'sectionDocument/post' => $config['endpointDomain'].'collection/section/document.json',
	'sectionDocument/delete' => $config['endpointDomain'].'collection/section/document.json',
	'categories/get' => $config['endpointDomain'].'document/categories.json',
	'countries/get' => $config['endpointDomain'].'countries.json',
	'languages/get' => $config['endpointDomain'].'document/languages.json',
	'search/get' => $config['endpointSearchDomain'].'search.json'
);
?>