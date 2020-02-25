window.onload = function(){

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			var misDatos = this.responseText;
			var miObjetoDatos =  eval("("+ misDatos +")");
			console.log(miObjetoDatos);
			
			//Pintar la tabla con los datos que se nos ha pedido
			obtenerDatos(miObjetoDatos);
			guardarDatos(miObjetoDatos);
			
		} else if (this.readyState==4 && this.status ==404){
			document.getElementById("divTabla").innerHTML = "<h1>Error 404</h1>";
		}
	}
	
	xmlhttp.open("GET","http://www.json-generator.com/api/json/get/cksoTXpFxK?indent=2", true);
	xmlhttp.send();
	
	
}

function obtenerDatos(miObjetoDatos){
	
	var tabla = document.createElement("Table");
	
	//estilos tabla
	tabla.style.borderStyle = "solid";
	tabla.style.borderSpacing = "15px 15px";
	
	//mostrar nombre de cada grupo, componentes y genero musical
	miObjetoDatos.misGrupos.forEach((grupo,i) => {
		var tr = document.createElement("tr");
		//tr.style.borderStyle = "solid";
		console.log("Grupo "+(i+1)+" - "+grupo.nombreGrupo);
		var td = document.createElement("td");
		var texto = document.createTextNode(grupo.nombreGrupo);
		td.appendChild(texto);
		tr.appendChild(td);
				
		//Obtenemos los componentes del grupo
		var td2 = document.createElement("td");
		grupo.componentes.forEach((componente, j) => {
			console.log(" - "+j+". "+componente.nombre);
			var li = document.createElement("li");
			var textoComponente = document.createTextNode(componente.nombre);
			li.appendChild(textoComponente);
			td2.appendChild(li);
		}		
		);
		tr.appendChild(td2);
		
		//Obtenemos genero musical
		var td3 = document.createElement("td");
		var textoGenero = document.createTextNode(grupo.generoMusical);
		console.log(grupo.generoMusical);
		td3.appendChild(textoGenero);
		tr.appendChild(td3);
		
		//Insertamos la fila en la tabla
		tabla.appendChild(tr);
	});
	
	
	document.getElementById("divTabla").appendChild(tabla);
	
}

function guardarDatos(miObjetoDatos){
	
	miObjetoDatos.misGrupos.forEach((grupo, i) => {
			
		var componente = {
			genero: grupo.generoMusical,
			grupo: grupo.nombreGrupo
		}
		grupo.componentes.forEach((musico, j) => {
			var nombre = musico.nombre;
						
			localStorage.setItem(nombre, JSON.stringify(componente));
			
			
		}
		);
			
	}	
	);
	
}



function obtenerDatos2(miObjetoDatos){
	
	//mostrar nombre de cada grupo, componentes y genero musical
	miObjetoDatos.misGrupos.forEach((grupo,i) => {
		console.log("Grupo "+(i+1)+" - "+grupo.nombreGrupo);
		document.getElementById("divTabla").innerHTML += "<h3>"+grupo.nombreGrupo+"</h3>";
		
		//Obtenemos los componentes del grupo
		grupo.componentes.forEach((componente, j) => {
			console.log(" - "+j+". "+componente.nombre);
			document.getElementById("divTabla").innerHTML += "<h5>"+" - "+j+". "+componente.nombre+"</h5>"
		}		
		);
		
		console.log(grupo.generoMusical);
		document.getElementById("divTabla").innerHTML += "<h5>"+grupo.generoMusical+"</h5>"
	});
	
}