const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
let table = $('#table-info');
let btnEdit;

function getData() {
    fetch('http://127.0.0.1:8000/profile/get')
        .then(response => { return response.json() })
        .then(profileData => {
            const htmls = profileData.map(element => {
                return `
                <tr>
                    <td>${element.ID}</td>
                    <td>${element.Name}</td>
                    <td>${element.Address}</td>
                    <td>${element.Phone}</td>
                    <td class="edit-delete"><a style="flex: 0.8;" href="home/edit/${element.ID}/${element.Name}/${element.Address}/${element.Phone}">
                        <button class="edit" style="background-color: #ffc80a;">Edit</button></a>
                        <a style="flex: 1;" href="home/delete/${element.ID}/${element.Name}/${element.Address}/${element.Phone}">
                            <button class="delete"  style="background-color: #d83b01; ">Delete</button></a>
                    </td> 
                </tr>
            `
            })

            table.innerHTML = '<tr> ' +
                '<th>ID</th>' +
                '<th> Name</th>' +
                '<th>Address</th>' +
                '<th>Phone</th>' +
                '<th class="action">Action</th> </tr>' + htmls.join('');
        })
}

// import handleEdit  from "./edit.js";
export default getData;
function start() {
    getData();
    // handleEdit();
}

start();
