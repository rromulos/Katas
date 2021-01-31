-- Create your SELECT statement here
SELECT age, count(age) as total_people FROM people group by age HAVING count(age) >= 10;