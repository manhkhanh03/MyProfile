const $ = document.querySelector.bind(document);

function handleEdit() {
    const boxEdit = $('#box-edit')
    const btnEdit = $('#edit')
    btnEdit.onclick = () => {
        const name = $('input[name="name"]').value
        const address = $('input[name="address"]').value
        const phone = $('input[name="phone"]').value
        const data = {
            name: name,
            address: address,
            phone: phone
        }
        const option = {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data)
        }
        fetch(`http://127.0.0.1:8000/api/profile/${boxEdit.getAttribute('data-id')}`, option)
            .then(() => window.location.href = 'http://127.0.0.1:8000/profile/home')
            .catch((error) => {
                console.log('Error:', error)
            })
        
    }
}

handleEdit();