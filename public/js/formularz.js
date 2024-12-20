//wyświetlenie odpowiedniego bloku formularza w zależności od wyboru opcji

function toggleBlendOptions() {
    const readyMix = document.getElementById('readyMixOptions');
    const customMix = document.getElementById('customMixOptions');
    const readyMixRadio = document.getElementById('ready');
    const customMixRadio = document.getElementById('custom');

    if (readyMixRadio.checked) {
        readyMix.style.display = 'block';
        customMix.style.display = 'none';
    } else if (customMixRadio.checked) {
        readyMix.style.display = 'none';
        customMix.style.display = 'block';
    }else{
        readyMix.style.display = 'none';
        customMix.style.display = 'none';
    }
}


//dodanie wyboru do koszyka
function addToCart() {
    const mixType = document.querySelector('input[name="mix"]:checked').value;
    const quantity = document.querySelector('input[name="quantity"]:checked').value; 
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    let item;
    if (mixType === 'ready') {
        const selectedReadyMix = document.querySelector('input[name="ready"]:checked');
        if (!selectedReadyMix) {
            alert('Wybierz gotową mieszankę');
            return;
        }
        if (!quantity) { 
            alert('Wybierz ilość');
            return;
        }
        item = {
            type: 'Gotowa mieszanka',
            mix: selectedReadyMix.nextElementSibling.textContent,
            quantity: quantity
        };
    } else {
        const selectedCustomMix = Array.from(document.getElementById('ziola').selectedOptions)
            .map(option => option.textContent);
        if (selectedCustomMix.length === 0) {
            alert('Wybierz zioła do własnej mieszanki');
            return;
        }
        item = {
            type: 'Własna mieszanka',
            mix: selectedCustomMix,
            quantity: quantity
        };
    }

    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}


//wyswietlenie koszyka
function displayCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartContainer = document.getElementById('cart');
    cartContainer.innerHTML = '<h2>Koszyk</h2>';

    if (cart.length === 0) {
        cartContainer.innerHTML += '<p>Koszyk jest pusty</p>';
    } else {
        cart.forEach((item, index) => {
            cartContainer.innerHTML += `
                        <div>
                            <p>Mieszanka: ${Array.isArray(item.mix) ? item.mix.join(', ') : item.mix}</p>
                            <p>Ilość: ${item.quantity}g</p>
                            <p>Cena: ${pricing[item.quantity]}zł</p>
                            <button id="remove" onclick="removeFromCart(${index})">Usuń</button>
                        </div>
                    `;
        });
        cartContainer.innerHTML += `
                    <p><strong>Łączna cena: ${cartSum()}zł</strong></p>
                    <button id="" onclick="clearCart()">Wyczyść koszyk</button>
                `;
    }
}

//usunięcie pojedynczego produktu
function removeFromCart(index) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}

//wyczyszczenie całego koszyka
function clearCart() {
    localStorage.removeItem('cart');
    displayCart();
}

document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('ready').addEventListener('change', toggleBlendOptions);
    document.getElementById('custom').addEventListener('change', toggleBlendOptions);
    toggleBlendOptions(); 
    displayCart(); 
});

const pricing = {
    50: 15,
    100: 24,
    150: 33,
    200: 42
};

//podliczanie wartości koszyka
function cartSum() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    let total = 0;

    cart.forEach(item => {
        total += pricing[item.quantity];
    });

    return total;
}

//walidacja formularza
function validateInput(id, errorId) {
    const input = document.getElementById(id);
    const error = document.getElementById(errorId);
    if (input.checkValidity()) {
        error.style.display = 'none';
        return true;
    } else {
        error.style.display = 'block';
        return false;
    }
}

function submitOrder() {
    const imieValid = validateInput('imie', 'imieError');
    const nazwiskoValid = validateInput('nazwisko', 'nazwiskoError');
    const emailValid = validateInput('email', 'emailError');
    const telefonValid = document.getElementById('telefon').value === '' || validateInput('telefon', 'telefonError');

    if (!(imieValid && nazwiskoValid && emailValid && telefonValid)) {
        alert('Proszę wypełnić poprawnie wszystkie wymagane pola.');
        return;
    }

    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    
    if (cart.length === 0) {
        alert('Proszę dodać coś do koszyka');
        return;
    }

    
    const imie = document.getElementById('imie').value.trim();
    const nazwisko = document.getElementById('nazwisko').value.trim();
    const email = document.getElementById('email').value.trim();
    const telefon = document.getElementById('telefon').value.trim();

    let orderInfo = `
        Imię: ${imie}
        Nazwisko: ${nazwisko}
        Email: ${email}
        Telefon: ${telefon}
        
        Zamówione produkty:\n`;

    
    cart.forEach(item => {
        orderInfo += `
            Mieszanka: ${Array.isArray(item.mix) ? item.mix.join(', ') : item.mix}
            Ilość: ${item.quantity}g\n`;
    });

    
    if (confirm(`Czy na pewno chcesz złożyć zamówienie z następującymi danymi?\n\n${orderInfo}`)) {
        
        console.log(orderInfo);
        alert('Zamówienie zostało złożone. Dziękujemy!');
        document.getElementById('order').reset();
        document.getElementById('info').reset();
        clearCart();
    }
}

function resetForm() {
    document.getElementById('info').reset();
    document.getElementById('imieError').style.display = 'none';
    document.getElementById('nazwiskoError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('telefonError').style.display = 'none';
}


