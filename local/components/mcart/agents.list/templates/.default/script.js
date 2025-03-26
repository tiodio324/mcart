BX.ready(function() {
    /*
    1. Спомощью document.querySelectorAll получить все DOM-элементы с классом star
    2. Повесить обработчик события на click
    Пример: BX.bind(element, "click", clickStar);
     */
    // Получаем все элементы с классом star
    const stars = document.querySelectorAll('.star');

    // Повешаем обработчик события на click для каждого элемента
    stars.forEach(function(element) {
        BX.bind(element, "click", clickStar);
    });
});

function clickStar(event) {
    event.preventDefault();

    /*
    Получить agentID, в template.php добавьте тегу в классов star атрибут dataset
    cо значением ID элемента Агента
    (https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset)
     */

    // Получаем agentID из dataset элемента
    const agentID = event.currentTarget.dataset.agentId; // Получаем ID агента из атрибута data-agent-id

    if (agentID) { // если ID есть, то делаем ajax-запрос
        BX.ajax // https://dev.1c-bitrix.ru/api_help/js_lib/ajax/bx_ajax_runcomponentaction.php
            .runComponentAction(
                "mcart:agents.list", // название компонента
                "clickStar", // название метода, который будет вызван из class.php
                {
                    mode: "class", //это означает, что мы хотим вызывать действие из class.php
                    data: {
                        agentID: agentID // параметры, которые передаются на бэк
                    },
                }
            )
            .then( // если на бэке нет ошибок выполниться
                BX.proxy((response) => {
                    if (response.status == 'success') {
                        // Отобразить пользователю, что агент добавлен в избраное
                        const starElement = event.target.closest('.star');
                        starElement.classList.add('active');
                    }

                }, this)
            )
            .catch( // если на бэке есть ошибки выполниться
                BX.proxy((response) => {
                    console.log(response.errors);
                }, this)
            );
    }

}
