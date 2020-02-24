for $libro in /bookstore/book
where contains(lower-case($libro/title), "x")
order by $libro/title descending
return $libro