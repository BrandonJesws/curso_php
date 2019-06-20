# MOSTRAR TODO LOS REGISTROS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios; 
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT email, (4+7) AS 'Operacion' FROM usuarios;

SELECT id, email, (7-7) AS 'Operacion' FROM usuarios ORDER BY id DESC;
SELECT id, email, (7-7) AS 'Operacion' FROM usuarios ORDER BY id ASC;

SELECT id, email, (id+7) AS 'Operacion' FROM usuarios;

# FUNCIONES MATEMATICAS #
SELECT ABS(7) AS 'Operacion' FROM usuarios;
CEIL
FLOOR
ROUND
RAND
TRUNCATE

# FUNCIONES PARA TEXTO #
UPPER()
LOWER()
CONCAT(VAR, ' ', VAR)
LENGTH()
TRIM()

# FUNCIONES PARA FECHAS #
CURDATE()
DATEDIFF(fecha1, fecha2)/*Saca diferencia de dias*/
DAYNAME()/*nombre del dia*/
DAYOFMONTH/*DIA DEL MES*/
DAYOFWEEK()
DAYOFYEAR()
MONTH()/*MES*/
YEAR()
DAY()
HOUR()
CURTIME()/*Hora actual*/
SYSDATE()/*HORA DEL SISTEMA*/
DATE_FORMAT(fecha, '%d-%m-%Y')


# Funciones generales #
ISNULL(columna)/* Devuelve true o false */
STRCMP(string1, string2)/*FALSE O TRUE SI SON O NO IGUALES*/
VERSION()
DISTINCT
DATABASE()
IFNULL(valor, 'Esta basio');
