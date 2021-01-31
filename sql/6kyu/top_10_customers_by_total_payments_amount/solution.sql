-- Replace with your query (in pure SQL)
SELECT customer.customer_id,
       customer.email,
       count(payment.payment_id) as payments_count,
       cast(sum(amount) as float) as total_amount       
  FROM customer
 INNER JOIN payment
    ON payment.customer_id = customer.customer_id
 GROUP BY customer.customer_id
 ORDER BY total_amount desc
 LIMIT 10