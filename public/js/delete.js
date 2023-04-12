const $ = document.querySelector.bind(document);

function handleDelete() {
    const btnDelete = $('#delete');
    const id = $('#box-delete')
    const option = {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
        }
    }
    btnDelete.onclick = () => {
        fetch(`http://127.0.0.1:8000/api/profile/${id.getAttribute('data-id')}`, option) 
            .then(() => window.location.href = 'http://127.0.0.1:8000/profile/home')
            .catch((error) => {
                console.log('Error:', error)
            })
    }
}

handleDelete();