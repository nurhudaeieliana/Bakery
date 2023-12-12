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