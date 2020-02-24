for $libro in /bookstore/book
order by $libro/price * 1.21
return 
<libro>
  <titulo>{$libro/title/text()}</titulo>
  <precio>{$libro/price/text()} €</precio>
  <precio_iva>{$libro/price * 1.21} €</precio_iva>
</libro>