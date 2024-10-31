// function SaveData() {
//     sessionStorage.setItem("Receiver", Receiver)
//     localStorage.setItem()
// }

// document.getElementById('Receiver')

// const ColL = document.getElementById('ColumnL');
// const ColR = document.getElementById('ColumnR');

// let InputPhone = [1, 2];
// let InputName = [1, 2];

// let Search;

// // function NewPerDialog() {
// // }

// function NewDialog() {
//     InputPhone[1] = prompt('Введите номер телефона');
//     if (InputPhone[1] === "" || InputPhone[1] === null) {
//         alert('Необходимо ввести номер телефона');
//         return;
//     }
//     InputName[1] = prompt('Введите имя или прозвище');
//     if (InputName[1] === "" || InputName[1] === null) {
//         alert('Необходимо ввести имя или прозвище');
//         return;
//     }

//     // const NewSDialog = NewPerDialog();
    
//     // if (NewSDialog !== null) {
//     //     document.getElementById(NewSDialog).innerHTML += `
//     //     <div id="PerDialog">
//     //         <img src="Photo/Красный Беркут.jpg" class="PerDialog img" width="60px" height="60px">
//     //         <H3 class="PerDialog">${InputName[1]}</H3>
//     //     </div>
//     //     `;
//     // }
//     // else {
//     //     alert('Больше 5 диалогов создавать нельзя');
//     // }
// }

// // Main
// document.getElementById('FirstDialog').addEventListener('click', function() {
//     InputPhone[0] = prompt('Введите номер телефона');
//     if (InputPhone[0] === "" || InputPhone[0] === null) {
//         alert('Необходимо ввести номер телефона');
//         return;
//     }
//     InputName[0] = prompt('Введите имя или прозвище');
//     if (InputName[0] === "" || InputName[0] === null) {
//         alert('Необходимо ввести имя или прозвище');
//         return;
//     }

//     ColL.innerHTML = `
//     <div id="Up">
//         <button id="UpSearch"><H2>Поиск</H2></button>
//         <H1 id="UpNew">+</H1>
//     </div>
//     <div id="PerDialog">
//         <img src="Photo/Красный Беркут.jpg" class="PerDialog img" width="60px" height="60px">
//         <H3 class="PerDialog">${InputName[0]}</H3>
//     </div>
//     <div id="AllDialogs"></div>
//     `;

//     // ColR.innerHTML = '<img src="Photo/Фон.jpg" width="100%" height="100%">';

//     // Search
//     // document.getElementById('UpSearch').addEventListener('click', function() {
//     // });

//     document.getElementById('UpNew').addEventListener('click', function() {
//         NewDialog();
//     });
// });