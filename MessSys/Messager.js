let InputId;
let InputName;

let result;

async function NewChat() {
    InputId = prompt('Введите Id пользователя, с которым хотите создать диалог:');
    if (InputId.length == 0) {
        alert('Поле не может быть пустым!');
        return;
    }
    InputName = prompt('Введите имя пользователя, с которым хотите создать диалог');
    if (InputName.length == 0) {
        alert('Поле не может быть пустым!');
        return;
    }

    document.getElementById('ColumnL').innerHTML = "";

    let Data = {
        Id:InputId,
        Name:InputName
    };

    const response = await fetch('NewChat.php', {
        method:'POST',
        headers: {
            'Content-Type':'application/json'
        },
        body:JSON.stringify(Data)
    });

    if (response.ok) {
        result = await response.text();
    
        if (document.getElementById('Up') === null) {
            document.getElementById('ColumnL').innerHTML = "<div id='Up'><button id='UpSearch'><H2>Поиск</H2></button><H1 id='UpNew'>+</H1></div>" + result;
        }
        else {
            document.getElementById('ColumnL').innerHTML += result;
        }

        document.getElementById('UpSearch').addEventListener('click', function() {
            alert('временно не работает\nПриносим свои извинения');
        });
    
        document.getElementById('UpNew').addEventListener('click', function() {
            NewChat();
        });
    }
}

async function CheckChat() {
    const response = await fetch('CheckChat.php');
    result = await response.text();
    console.log(result);
}

// Main
document.getElementById('FirstDialog').addEventListener('click', NewChat);