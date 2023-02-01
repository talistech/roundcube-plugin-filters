<?php

$config['autoAddSpamFilterRule'] = TRUE;
$config['spam_subject'] = '*****SPAM*****';
$config['caseInsensitiveSearch'] = TRUE;
$config['decodeBase64Msg'] = FALSE;
$config['spam_headers'] = array('X-Spam-Flag','X-Spam-Status','X-Yandex-Spam');
$config['blacklisted_subjects'] = array(
    'Herinnering: update vereist',
    'Probleem met levering - Bpost pakket.',
);

?>
