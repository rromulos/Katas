--- 3, 2, 1, fight! ---
select fig.name, sum(fig.won) as won, sum(fig.lost) as lost
from fighters fig inner join winning_moves wm on wm.id = fig.move_id
where move_id NOT IN (1,2,3)
group by name
order by won desc
limit 6