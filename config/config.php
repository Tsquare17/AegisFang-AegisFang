<?php

use AegisFang\Log\LogToFile;
use AegisFang\Database\MySqlConnection;

return [
    'logger'    => LogToFile::class,
    'db_driver' => MySqlConnection::class,
	'hashing_algorithm' => PASSWORD_BCRYPT,
];
