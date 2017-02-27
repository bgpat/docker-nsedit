<?php
$apipass = getenv('API_PASS');
$apiip = gethostbyname(getenv('API_HOST'));
$apiport = getenv('API_PORT');
$apiproto = 'http';
$apisslverify = false;
$allowzoneadd = false;
$logging = true;
$allowclearlogs = true;
$allowrotatelogs = false;
$logsdirectory = "../etc";
$authdb = "/app/pdns.users.sqlite3";
$templates = array();
$defaults['soa_edit'] = 'INCEPTION-INCREMENT';
$defaults['soa_edit_api'] = 'INCEPTION-INCREMENT';
$defaults['defaulttype'] = 'Master';
$defaults['ns'][0] = 'ns1.tld.domain.';
$defaults['ns'][1] = 'ns2.tld.domain.';
$defaults['ttl'] = 3600;
$defaults['disabled'] = false;
$menutype = 'horizontal';
$logo = 'img/nsedit.png';