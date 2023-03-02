SELECT DATE_FORMAT(orders.order_date, '%Y-%m') as Ano_Mês, SUM(Orders.order_total) as Total_vendido
FROM User
JOIN orders
ON user_id = orders.order_user_id
GROUP BY DATE_FORMAT(orders.order_date, '%Y-%m');