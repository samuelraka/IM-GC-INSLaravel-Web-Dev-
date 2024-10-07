var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'], 
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'], 
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai berbagai macam kucing', 'jerry.jpeg']
]

let cartCount = 0;

function loadItems(items) {
    const listBarang = document.getElementById('listBarang');
    listBarang.innerHTML = '';

    items.forEach(item => {
        const card = `
        <div class="col-md-3">
            <div class="card mb-4" style="width: 100%;">
                <img src="${item[4]}" class="card-img-top" height="200px" alt="${item[1]}">
                <div class="card-body">
                    <h5 class="card-title">${item[1]}</h5>
                    <p class="card-text">${item[3]}</p>
                    <p class="card-text">Rp ${item[2]}</p>
                    <a href="#" class="btn btn-primary addCart" data-id="${item[0]}">Tambahkan ke keranjang</a>
                </div>
            </div>
        </div>`;
        listBarang.innerHTML += card;
    });

    document.querySelectorAll('.addCart').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            tambahKeranjang();
        });
    });
}

window.onload = function(){
    loadItems(items);
}

document.getElementById('formItem').addEventListener('submit', function(event) {
    event.preventDefault();
    const keyword = document.getElementById('keyword').value.toLowerCase();

    const filterItems = items.filter(item => item[1].toLowerCase().includes(keyword));

    loadItems(filterItems);
});

function tambahKeranjang(){
    cartCount++;
    document.getElementById('cart').innerHTML = `<i class="fas fa-shopping-cart"></i> (${cartCount})`;
}