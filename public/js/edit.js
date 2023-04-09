// import getData from "./style.js";
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function handleEdit() {
    const boxEdit = $('#box-edit')
    const btnEdit = $('#edit')
    btnEdit.onclick = () => {
        const Name = $('input[name="name"]').value
        const Address = $('input[name="address"]').value
        const Phone = $('input[name="phone"]').value
        fetch(`http://127.0.0.1:8000/profile/edit/${boxEdit.getAttribute('data-id')}/${Name}/${Address}/${Phone}`)
            .catch((error) => {
                console.log('Error:', error)
            })
    }
}

handleEdit();

// module.export = handleEdit;
// export default handleEdit();