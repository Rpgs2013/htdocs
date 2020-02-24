let $libros := /bookstore/book
return <total>{sum($libros/price)}</total>