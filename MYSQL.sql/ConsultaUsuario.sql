/** se seleciona la tabla Usuarios y se Ejecuta esta linea de codigo
*/
SELECT * Nombre, apellido; FROM usuarios;

/** Consulta de Nombre y precios
*/

SELECT nombre, precio FROM productos WHERE precio > 50;

/**
consulta SQL para contar cuántos pedidos ha realizado cada cliente

SELECT id_cliente, COUNT(id_pedido) AS num_pedidos
FROM pedidos
GROUP BY id_cliente;

*/
SELECT id, COUNT(id) AS num_pedidos FROM pedidos GROUP BY id_usuario;


/**
consulta SQL que encuentre el cliente que ha realizado más pedidos

SELECT clientes.id_cliente, COUNT(pedidos.id_pedido) AS num_pedidos
FROM clientes
JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente
GROUP BY clientes.id_cliente
ORDER BY num_pedidos DESC
LIMIT 1;
*/

SELECT usuarios .id, COUNT(pedidos.id) AS num_pedidos
FROM usuarios
JOIN pedidos ON usuarios.id = pedidos.id
GROUP BY usuarios.id
ORDER BY num_pedidos DESC
LIMIT 30;

