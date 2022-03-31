const STATUS_OK = 200;
const STATUS_ERROR_SERVER = 500;
const STATUS_NOT_FOUND = 404;
const container = document.getElementById('menuContainer');
const menu = document.getElementById('menu');




async function show(catg){
    const url =  `foods.php?catg=${catg}`;
    const response = await fetch(url);

    switch(response.status){
        case STATUS_OK:
            const data = await response.json();
            draw(Object.values(data));
            break;
        case STATUS_NOT_FOUND:
            container.textContent = 'No hemos encontrado lo que buscabas...';
            break;
        case STATUS_ERROR_SERVER:
            container.textContent = 'Ha ocurrido un error en el servidor.';
            break;
    }

}

function draw(data){
    menu.innerHTML = '';
    data.forEach(element => {
        const elementHTML =         
        `
        <div class="col-span-1 flex flex-col justify-between bg-indigo-50 shadow-md rounded-sm">
        <div class="bg-gray-700">
                <img src="${element.image}" alt="${element.name}" class="object-contain" loading="lazy">
        </div>
        <div class="p-4 flex flex-col justify-between">
                <div class="h-28">
                    <h3 class="text-xl text-gray-900"> ${element.name}</h3>
                    <p class="mb-4 text-gray-700">${element.description}</p>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between">
        
                    </div>
                    <p class="text-right proxima-nova">${element.price} €</p>
                </div>
            </div>
        
        </div>
        `;
        menu.insertAdjacentHTML('beforeend', elementHTML);
    });
}


