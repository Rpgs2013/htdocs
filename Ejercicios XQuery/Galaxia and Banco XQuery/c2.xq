for $x in doc ("banco.xml") /cliente/cuentas_bancarias/cuenta_bancaria
return sum ($x /saldo)