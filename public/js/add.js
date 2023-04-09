const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function handleAdd() {
    const btnEdit = $('#add')
    
    btnEdit.onclick = () => {
        let Name = $('input[name="name"]').value
        let Address = $('input[name="address"]').value
        let Phone = $('input[name="phone"]').value
        fetch(`http://127.0.0.1:8000/profile/add/${Name}/${Address}/${Phone}`)
            .catch((error) => {
                console.log('Error:', error)
            })
    }
}

handleAdd();