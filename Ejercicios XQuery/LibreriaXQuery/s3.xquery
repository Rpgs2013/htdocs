for $libro in /bookstore/book[contains(lower-case(title), "x")]
order by $libro/title descending
return $libro