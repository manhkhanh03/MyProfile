const $ = document.querySelector.bind(document);
let bool;
function checkValueInput() {
    let phone = $('input[name="phone"]')
    let val = [];
    let myBool = false;
    phone.onkeyup = (event) => {
        let value = event.key;
        if(event.target.value.length >= 10) {
            if (Number(value) || value == 0 || "+()-".includes(value) || value == 'Shift') {
                phone.style.border = '2px solid #39ff32';
                myBool = true;
            }
            else {
                val.push(event.key);
                if (event.key == 'Backspace') {
                    val.pop();
                    val.pop();
                }
                let newVal = val[val.length - 1];
                if (event.target.value.includes(newVal)) {
                    phone.style.border = '2px solid #ff0a1f';
                    myBool = false;
                } else {
                    phone.style.border = '2px solid #39ff32';
                    myBool = true;
                }
            }

        }else 
            phone.style.border = '2px solid #ff0a1f';
        bool = myBool;
    }
}


function handleAdd() {
    const btnEdit = $('#add');
    btnEdit.onclick = () => {
        let name = $('input[name="name"]').value;
        let address = $('input[name="address"]').value;
        let phone = $('input[name="phone"]').value;
        const data = {
            name: name,
            address: address,
            phone: phone
        }

        const option = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data)
        }
        if(bool) {
            fetch(`http://127.0.0.1:8000/api/profile`, option)
                .then(() => window.location.href = '../../profile/home')
                .catch((error) => {
                    console.log('Error:', error);
                })
        }
    }
}

function start() {
    handleAdd();
    checkValueInput();
}

start();