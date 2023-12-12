let openShopping = document.querySelector('.shooping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quatity = document.queryselector('.quantity');

openShopping.addEventListener('click', ()=>{
 body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
 body.classList.remove('active');
})

let listCard = [];
function initApp(){
 poducts.forEach((value, key)=>{
  let newDiv = document.createElement('div');
  newDiv.innerHTML = `
  <img src= "image/${value.image}"/>
  <div class="title">${value.name}</div>
  <div class ="price">${value.price.toLocaleString()}</div>
  <button onclick="addToCard(${key})">Add To Card</button>`;
  list.appendChild(newDiv);
 })
}
initApp();
function addToCard(key){
	if(listCards[key] == null){
		listCards[key] = products[key];
		listCards[key].quantity = 1;
	}
	reloadCard();
}
function reloadCard(){
	listCard.innerHTML = '';
	let count = 0;
	let totalPrice = 0;
	listCards.forEach((value, key) => {
		totalPrice = totalPrice + value.price;
		count = count + value.quantity;

		if(value != null){
			let newDiv= document.createElement('li')
			newDiv.innerHTML = `
			<div><img src="image/${value.image}"/></div>
			<div>${value.name}</div>
			<div>${value.price.toLocaleString()}</div>
			<div>${value.quantity}</div>
			<div>
			<button onclick="changeQuantity(${key},${value.quantity - 1})">-</button>
			<div class = "count">${value.quantity}</div>
			<button onclick="changeQuantity(${key},${value.quantity + 1})">+</button>
			<div class = "count">${value.quantity}</div>
			</div>
			`;
		}
	})
	total.innerText = totalPrice.toLocaleString();
	quantity.innerText = count;
}
function changeQuantity(key, quantity){
	if(quantity == 0){
		delete listCards[key];
	}else{
		listCards[key].quantity = quantity;
		listCards[key].price = quantity * product[key].price;
	}
	reloadCard();
}