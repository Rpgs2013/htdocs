<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Direccionamiento IP</title>
    
</head>



<body>
    <header id="encabezado">
        <h1 align="center">Direccionamiento IPv4</h1>
    </header>

    <nav id="navegador">
        <ul>
            <li><a href="#direccion_ip">Qué es una dirección IP</a></li>
            <li><a href="#nic">NIC</a></li>
            <li><a href="#direccion_ip">Clases de dirección IP</a></li>
            <li><a href="#cidr">CIDR</a></li>
        </ul>
    </nav>

    <div id="direccion_ip">
        <article>
            <h2>¿Qué es una dirección IP?</h2>
            <p>Es un número que identifica de manera lógica y jerárquica, el dispositivo de comunicación de cualquier
            dispositivo electrónico (móvil, portátil, tableta...). Estos dispositivos deben utilizar un protocolo que corresponda al 
            nivel de red del modelo <a href="https://es.wikipedia.org/wiki/Modelo_TCP/IP" target="_blank"><em>TCP/IP</em></a>.<br>
            Esta dirección puede cambiar a menudo dependiendo de qué tipo de dirección IP se trate: si es
            una dirección <strong>estática</strong> siempre será la misma, mientras que si es <strong>dinámica</strong>, 
            el aparato encargado de asignar la dirección puede llegar a 
            cambiarla.</p>
            <img src="https://xvp.akamaized.net/assets/es/customer_tools/ip_checker/what-is-ip-address-ipv4-d7bfb1de5fa60e38d29cc440b61619304bca1d8e5aa349ebfec592df23a86f5c.png"
            alt="Dirección IPv4"/>
        </article>
    </div>
    
    <div id="nic">
        <article>
            <h2>¿Qué es el NIC?</h2>
            <?php
            echo "El <strong>NIC</strong>, o <strong>Network Information Center</strong>, es una autoridad que se encarga de administrar los nombres de los dominios en internet. <br>Cada país tiene su propio
            NIC, que está llevado por universidades o empresas privadas, no por el gobierno.<br><br>" 
             ?>
            <aside>
                <a href="https://www.nic.es/sgnd/dominio/publicInformacionDominios.action" target="_blank">Ir al NIC español</a>
            </aside>
        </article>
    </div>

    <div id="direccion_ip">
        <article>
            <h2>Clases de dirección IP</h2
            <p>Antes hemos definido la dirección IP como un número identificador, ahora vamos a hablar de los tipos que existen.<br>
            Primero tenemos que diferenciar entre una dirección IP <strong>pública</strong> y una <strong>privada</strong>. Una IP pública es aquella
            que puede ser visible en todo Internet y que se utiliza para identificarse en una gran red, puede ser fija si siempre es la misma, o dinámica si va cambiando.<br>
            Por otra parte está la IP privada es el número que se le da a cada dispositivo en una red privada, ya sea en casa o en una empresa. <strong>Todos los dispositivos de una
            red privada tendrán la misma dirección IP pública.</strong><br>
            Existen 3 tipos de dirección IP privada:</p>
        
            <ol>
               <li>Clase A: que van <strong>de 10.0.0.0 a 10.255.255.255</strong>, y se utilizan en grandes redes privadas.</li>
               <li>Clase B: van <strong>de 172.16.0.0 a 172.31.255.255</strong>. Son utilizadas en redes de menor tamaño que las de clase A</li>
               <li>Clase C: estas van <strong>de 192.168.0.0 a 192.168.255.255</strong>, es el tipo más normal ya que se usa en las casas.</li>
            </ol>
        </article>
    </div>

    <div id="cidr">
        <article>
            <h2>CIDR</h2>
            <?php
            echo "CIDR es un estándar de red para la interpretación de direcciones IP. <br>
            CIDR facilita el encaminamiento al permitir agrupar bloques de direcciones en una sola entrada de tabla de rutas.
            Estos grupos, llamados comúnmente Bloques CIDR, comparten una misma secuencia inicial de bits en la representación binaria de sus direcciones IP.<br>
            En el siguiente vídeo podemos observar cómo funciona:"
            ?>
            <br>
            <br>
        </article>
        <aside>
            <iframe src="https://youtube.com/embed/iDiGBIOq7ec" width="620" height="340" >EL vídeo no se encuentra disponible :(</iframe>
        </aside>
    </div>
    
    <footer>
        <p>Todos los derechos reservados. El lol está guapo.</p>     
    </footer>
</body>
</html>