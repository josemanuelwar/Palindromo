'use strict'

const form = document.getElementById('formulario');

form.addEventListener("submit",(event)=>{
	event.preventDefault();
	let text = document.getElementById("Palindromo").value;

	let url ="Proceso/Palindromo.php"
	if(text !== null && text !== ""){
		fetch(url,{
			method:'POST',
			mode: "same-origin",
	    	credentials: "same-origin",
			body:JSON.stringify({"texto": text}),
			headers:{
				'Content-Type':'aplication/json'
			}
		}).then(res=>res.json()).then(response =>{
			if(response){
				Swal.fire({
				  icon: 'success',
				  title: 'La palabra es un Palindromo',
				  showConfirmButton: false,
				  timer: 1500
				})
			}else{
				Swal.fire({
				  icon: 'error',
				  title: 'La palabra no es un Palindromo',
				  showConfirmButton: false,
				  timer: 1500
				})
			}
		}).catch(error=>console.log(error))
	}else{
		Swal.fire({
				  icon: 'error',
				  title: 'Ingrese una palabra',
				  showConfirmButton: false,
				  timer: 1500
				})
	}
},true)