-- Create your SELECT statement here
WITH special_sales as(
  select * from sales where price > 90.00
)
select id,name 
  from departments 
 where id IN (select department_id
                from sales
               where price > 90.00)