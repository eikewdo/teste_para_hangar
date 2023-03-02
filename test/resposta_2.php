SELECT
    user_name,
    user_city,
    user_country,
    order_date,
    order_Total
FROM
    user
JOIN orders ON user_id = orders.order_user_id
WHERE
    user_id IN(1, 3, 5)
ORDER BY
    user_name;