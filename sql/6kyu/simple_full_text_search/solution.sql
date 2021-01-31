-- Create your SELECT statement here
select * from product where to_tsvector(name) @@ to_tsquery('Awesome');