/*Consultas chamadas por views*/

SELECT * FROM avaliacao.select_all_decr;
SELECT * FROM avaliacao.count_all_1;

/*Consultas sem Views*/

SELECT
	id, titulo, feito, criado_em
FROM
	todo
ORDER BY
	criado_em DESC;


SELECT 
	count(*) as total_de_1
FROM
	todo
where
	feito = 1;


USE avaliacao;
UPDATE
	todo
SET
	feito = 1
WHERE
	id = ?;/*O ID deve ser definido*/


/*Criando Consultas(views)*/
/*

USE `avaliacao`;
CREATE  OR REPLACE VIEW `select_all_decr` AS
SELECT
	id, titulo, feito, criado_em
FROM
	todo
ORDER BY
	criado_em DESC;

=================================================

USE `avaliacao`;
CREATE  OR REPLACE VIEW `count_all_1` AS
SELECT 
	count(*) as total_de_1
FROM
	todo
where
	feito = 1;

================================================
*/

/*Consulta(views) já Criadas*/
/*

CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `select_all_decr` AS
    SELECT 
        `todo`.`id` AS `id`,
        `todo`.`titulo` AS `titulo`,
        `todo`.`feito` AS `feito`,
        `todo`.`criado_em` AS `criado_em`
    FROM
        `todo`
    ORDER BY `todo`.`criado_em` DESC

===============================================

CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `count_all_1` AS
    SELECT 
        COUNT(0) AS `total_de_1`
    FROM
        `todo`
    WHERE
        (`todo`.`feito` = 1)

==============================================
*/