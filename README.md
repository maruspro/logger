## Сервис logger

Токен авторизции к сервису: mDNOxQ0QXgfktNYO7p2jpcktb1MChVxy!Bu!Y1Fphkr5LCC0z0wUZxpkwppztKFySvj0hKF37r8PPFfNPGG9LWxmKlCRGiu2NY=hFND?CUp7-x=fbVi=nWeay7XSZSUgGt1iMykaf311tc6NqWNXJNU=zhH84U=QF!vcOhjUL9hz14=YM3ar2eD!=NgWrU2-sjb9vM?Y/lhb12GUMqiT7EDWNAhX??7AzQV7-H!5ZrBe!jRZWJV-Gf8PKn1xgJSR

1. Архитектура - монолит
2. Базовый паттерн - Controller Service Repository, усложнил дополнительными абстракциями
3. Колонка level таблицы лога имеет тип int, не enum для более удобного расширения типов (через Enum класс), чтобы при каждом добавлении нового типа не делать миграцию с добавлением значения в enum
4. При получении, добавлении, удалении лога не учитываю user_id, предполагаю, что при наличии у меня сервиса users пользователя можно идентифицировать, например, по JWT токену между сервисами
5. Все ответы в формате json, в том числе всевозможные исключения без чего-либо лишнего
7. Постман коллекция в корне - logger.postman_collection.json

## Эндпоинты
1. Получение логов
   #### Тип запроса: GET
   #### Урл: api/v1/logs

2. Добавление лога
   #### Тип запроса: POST
   #### Урл: api/v1/logs
   #### Тело:
   {
       "client": "testst",
       "message": "error message text",
       "level": "info",
       "userId": 25
   }

3. Удаление лога
   #### Тип запроса: DELETE
   #### Урл: api/v1/logs/{id}
