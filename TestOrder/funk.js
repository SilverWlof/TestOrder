var cart={};

function check(){
	if (localStorage.getItem("item") != null){
		cart = JSON.parse(localStorage.getItem("item"))
	}
}
	
function Cart(){
	var out='';
	for (var i in cart){
		var id = cart[i];
		out +=
		'<div class="list row" name ="'+id+'">'+
			'<button class="close" id="'+id+'" name="'+i+'" onclick="del(this)"></button>'+
			'<p class="name">'+i+'</p>'+ 
			'<p class="price">'+cart[i]+'</p>'+
		'</div>';
	}
	$('#cart').html(out);
	sum();
}

function addCart(obj){
	var name = document.querySelectorAll(".name_1");
	var price = document.querySelectorAll(".price_1");
	var id = obj.id-1;		
	cart [name[id].textContent] = price[id].textContent;
	localStorage.setItem("item", JSON.stringify(cart));
	Cart();
	
}

function del(obj){
	var id = obj.id;
	var name=obj.name;
	var div = document.getElementsByName(id);
	console.log(obj);
	console.log(name);	
	$(div).remove();
	delete cart[name];
	localStorage.setItem("item", JSON.stringify(cart));
	sum();
}

function sum(){
	var sum = 0;
	for (var i in cart) {		
		sum =sum+ + +cart[i];
	}
	$('#sum').html(sum);
}