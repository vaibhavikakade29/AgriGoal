let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
let payButton = document.querySelector('.pay');
let totalContainer = document.querySelector('.total-container');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

payButton.addEventListener('click', () => {
    window.location.href = 'details.php';
})


// Product data
let products = [
    { id: 10, name: 'Grapes', image: 'img/f1.png', price: 200 },
    { id: 11, name: 'Apple', image: 'img/f2.png', price: 200},
    { id: 12, name: 'Mango', image: 'img/f3.png', price: 150 },
    { id: 13, name: 'Orange', image: 'img/f4.png', price: 150 },
    { id: 14, name: 'Watermelon', image: 'img/f5.png', price: 60},
    { id: 15, name: 'Custard Apple', image: 'img/f6.png', price: 100 },
    { id: 16, name: 'Papaya', image: 'img/f7.png', price: 50 },
    { id: 17, name: 'Chickoo', image: 'img/f8.png', price: 100 },
    { id: 18, name: 'Banana', image: 'img/f9.png', price: 50}
];

let listCards = {}; // Initialize listCards as an object

function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <a href="${value.detailsPage}">
                <img src="${value.image}" alt="${value.name}"/>
            </a>
            <div class="title">${value.name}</div>
            <div class="price">&#8377;${value.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Add To Cart</button>`; // Correct function name here
        list.appendChild(newDiv);
    });
}




function addToCart(key) {
    if (!listCards[key]) { 
        listCards[key] = { ...products[key], quantity: 1 }; 
    } else {
        listCards[key].quantity++;
    }
    reloadCart();

    // Show pop-up message
    showPopup('Product added to cart!');
}

function reloadCart() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    let hasItems = false;

    Object.values(listCards).forEach((value, key) => {
        totalPrice += value.price * value.quantity;
        count += value.quantity;
        let newDiv = document.createElement('li');
        newDiv.innerHTML = `
            <div><img src="${value.image}" alt="${value.name}"/> <!-- Using direct image path -->
            </div>
            <div>${value.name}</div>
            <div>&#8377;${value.price.toLocaleString()}</div>
            <div>
                <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                <div class="count">${value.quantity}</div>
                <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
            </div>`;
        listCard.appendChild(newDiv);
        hasItems = true;
    });

    if (hasItems) {
        totalContainer.classList.remove('hidden');
    } else {
        totalContainer.classList.add('hidden');
    }

    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity) {
    if (quantity === 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
    }
    reloadCart();
}

function showPopup(message) {
    let popup = document.getElementById('cartPopup');
    if (!popup) {
        popup = document.createElement('div');
        popup.id = 'cartPopup';
        popup.className = 'popup';
        document.body.appendChild(popup);
    }

    popup.innerHTML = `<p>${message}</p>`;
    popup.classList.add('show');

    setTimeout(function() {
        popup.classList.remove('show');
    }, 3000);
}

initApp();
