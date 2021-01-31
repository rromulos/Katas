-- Create your SELECT statement here
select age, count(age) as people_count from people group by age;