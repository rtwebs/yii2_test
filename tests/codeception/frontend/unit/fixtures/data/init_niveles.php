<?php
// data fixture niveles

$time = date('Y-m-d');


return [
	// nivel sin id-Padre o nivel Padre
    [
    	'nid' => 1,
        'title' => 'nivel de prueba #1',
        'rid' => null,
        'org_id' => 1
    ],
    // nivel con ID-Padre
    [
    	'nid' => 2,
        'title' => 'nivel de prueba #2',
        'rid' => 2,
        'org_id' => 1
    ],
];
