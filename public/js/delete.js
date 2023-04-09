const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function handleDelete() {
    const btnDelete = $('#delete');
    const id = $('#box-delete')
    btnDelete.onclick = () => {
        fetch(`http://127.0.0.1:8000/profile/delete/${id.getAttribute('data-id')}`)
            .catch((error) => {
                console.log('Error:', error)
            })
    }
}

handleDelete();