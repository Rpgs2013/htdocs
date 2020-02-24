for $x in doc ("galaxia.xml")/galaxia/sistema_planetario/planetas/planeta
where $x/ edad > 1000.00000
return $x/nombre