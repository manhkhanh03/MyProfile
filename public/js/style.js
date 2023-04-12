const $ = document.querySelector.bind(document);
let table = $('#table-info');

function getData() {
    fetch('http://127.0.0.1:8000/api/profile')
        .then(response => { return response.json()})
        .then(profileData => {
            const htmls = profileData.map(element => {
                return `
                <tr>
                    <td>${element.id}</td>
                    <td>${element.name}</td>
                    <td>${element.address}</td>
                    <td>${element.phone}</td>
                    <td class="edit-delete"><a style="flex: 0.8;" href="home/edit/${element.id}/${element.name}/${element.address}/${element.phone}">
                        <button class="edit" style="background-color: #ffc80a;">Edit</button></a>
                        <a style="flex: 1;" href="home/delete/${element.id}/${element.name}/${element.address}/${element.phone}">
                            <button class="delete"  style="background-color: #d83b01; ">Delete</button></a>
                    </td> 
                </tr>
                `;
            })

            table.innerHTML = '<tr> ' +
                '<th>ID</th>' +
                '<th> Name</th>' +
                '<th>Address</th>' +
                '<th>Phone</th>' +
                '<th class="action">Action</th> </tr>' + htmls.join('');
        })
}

function start() {
    getData();
}

start();
