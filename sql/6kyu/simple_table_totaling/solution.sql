-- Create your SELECT statement here
select coalesce(nullif(clan,''), '[no clan specified]') AS clan,
      row_number() over (order by sum(points) desc) as rank,
      sum(points) as total_points, 
      count(name) as total_people 
      from people 
      group by clan
      order by total_points desc,
               total_people asc