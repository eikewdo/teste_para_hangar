SELECT user_country, SUM(orders.order_total) as Total_Vendido
FROM User
JOIN orders
ON user_id = orders.order_user_id
GROUP BY user_country;