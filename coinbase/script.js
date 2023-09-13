const input = document.querySelector('#password');
const result = document.getElementById('result');




const getData = (e) => {
    e.preventDefault();
    const li = document.createElement('li');
    li.appendChild(document.createTextNode(input.value));
    result.appendChild(li)
    console.log(result.textContent);
    input.value = ''
};



document.querySelector('#form').addEventListener('submit', getData);


