CREATE DATABASE app_contatos;


CREATE TABLE `contatos` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci',
	`contato` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=6
;
