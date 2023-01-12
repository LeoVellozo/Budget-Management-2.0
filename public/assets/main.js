const chart = document.querySelector("#chart").getContext('2d');

// create a new chart instance

new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dez', ],

        datasets: [{
                label: 'Earnings',
                data: [29374, 33537, 49631, 59095, 57828, 36684, 33572, 39774, 48847, 48116, 61004],
                borderColor: 'green',
                borderWidth: 2
            },
            {
                label: 'Spending',
                data: [31500, 41000, 88800, 26000, 46000, 32698, 5000, 3000, 18656, 24832, 36844],
                borderColor: 'red',
                borderWidth: 2
            },

        ]
    },
    options: {
        responsive: true
    }
})

// show or hide sidebar

const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const sidebar = document.querySelector('aside');

menuBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
})

//change theme

const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    themeBtn.querySelector('span:first-child').classList.toggle('active');

    themeBtn.querySelector('span:last-child').classList.toggle('active');
})

// MODAL

$(document).ready(function() {
    $('#categoriesModal form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            success: function(data) {
                $('#exampleModal').modal('hide');
                // mostrar mensagem de sucesso ou atualizar a tabela de registros
            },
            error: function(data) {
                // mostrar mensagem de erro ou destacar os campos inválidos
            }
        });
    });
});