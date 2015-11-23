UEFA Euro 2016
========

Develop [![Develop](https://travis-ci.org/EvgenSalyakin/euro2016.svg?branch=dev)](https://travis-ci.org/EvgenSalyakin/euro2016)

Після успішного виходу збірної України на Євро 2016, до нашої команди звернувся клієнт із замовленням. Він хоче, щоб ми зробили 
невеличкий сайт всіх збірних, що пройшли на Євро 2016.
На головній сторінці, ми мали турнірну сітку із заповненими збірними. При натисканні на якусь команду, відкривався її короткий 
огляд: список гравців, тренерський склад, останні зіграні матчі, тощо. При натисканні на якогось із гравців чи тренера, можна 
було переглянути його коротку біографію. При натисканні на прапор команди - короткий опис про країну.

Отож після певних перемовин, було вирішено розбити даний проект на декілька частин.

Частина 1.

1. Встановити Symfony2.
2. Продумати логіку і зробити схему всього вашого додатка.
3. На основі п.2 створити контролери і написати на них роутинг для всіх частин
4. Контролери мають приймати реквест, і віддавати респонс про те, що на цій сторінці буде знаходитись, наприклад: головна сторінка 
має багато посилань на різні збірні команд, ця інформація має бути прописана звичайним HTML у відповідному шаблоні (ніяких даних з 
контролера не має передаватися).
5. Роутинг має бути сконфігурований таким чином, щоб всі URL параметри були відвалідовані в самому роутингу (згадуємо про 
requirements).
6. На всі наші контролери мають бути написані юніт-тести.
