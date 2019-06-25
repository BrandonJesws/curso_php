/*
	Modificar la comision de los vendedores y ponerla al 0.5% cuando
	ganand mas de 50000
*/

update vendedores set comision = 0.5 where sueldo >= 50000;