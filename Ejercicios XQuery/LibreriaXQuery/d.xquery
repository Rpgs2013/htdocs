<html>
<body>
  <table border="1px">
  {
  for $x in /bookstore/book
  where $x /price <= 30
  order by $x /title
  return <tr><td>{$x}</td></tr>
  }
  </table>
</body>
</html>