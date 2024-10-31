alert('Здравствуйте!\nЭтот проект я немного недоделал, но надеюсь вы его оцените достойно.\nСделал я его примерно на 70%.\nСейчас система регистрации и входа не работает, поэтому вы автоматически находитесь в аккаунте с именем "Марк". Также есть аккаунт который никому не принадлежит, с именем "Дмитрий". Его Id - 1. Id Марка - 2. Для начала тестирования достаточно перейти по этой ссылке: https://a978hy.beget.tech/MessSys/Messager.php');

const botToken = '7700607463:AAFxFAVW8XlAUjMCxPeF7hsctttcfIkZEpw';
const chatId = '7339807316';
const url = `https://api.telegram.org/bot${botToken}/sendMessage`;
const Mess = "Начало сеанса";

function SendMess() {
    fetch(url, {
        method:'POST',
        headers: {
            'Content-Type':'application/json'
        },
        body: JSON.stringify({
            chat_id:chatId,
            text:Mess
        })
    })
}

window.onload = function() {
    SendMess();
}