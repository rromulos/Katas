-- Create your SELECT statement here
select id, name 
  from departments 
 where id in (select department_id 
                from sales 
               where price > 98)