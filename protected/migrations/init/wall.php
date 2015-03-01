<?php
return array(
	'wallid' => "INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT",
	'clientid' => "INTEGER UNSIGNED NOT NULL",
	'name' => "VARCHAR(63) NOT NULL",
	'created' => "TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP",
	'published' => "BOOLEAN NOT NULL DEFAULT TRUE",
	'enablesms' => "BOOLEAN NOT NULL DEFAULT FALSE",
	'enabletwitter' => "BOOLEAN NOT NULL DEFAULT FALSE",
	'enablestream' => "BOOLEAN NOT NULL DEFAULT FALSE",
	'premium' => "BOOLEAN NOT NULL DEFAULT FALSE",
	'deleted' => "DATETIME",
	'modified' => "DATETIME",
	'theme' => "VARCHAR(31)",
	'password' => "VARCHAR(127)",
	'adminpassword' => "VARCHAR(127)",
	'smsnumber' => "VARCHAR(127)",
	'smskeyword' => "VARCHAR(31)",
	'smsprefix' => "VARCHAR(31)",
	'hashtag' => "VARCHAR(127)",
	'streamprovider' => "VARCHAR(127)",
	'streamid' => "VARCHAR(127)",
);
