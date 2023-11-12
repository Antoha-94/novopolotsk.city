Описание:
1.В этом проекте: шаблон wordPress + mySQL + phpMyAdmin + apache - в docker container.
2.Для установки с gita: перейти в дерикторию проекта, и выполнить git clone git@github.com:Antoha-94/novopolotsk.city
3.В docker-compose.yml до билда обязательно указать 4 параметра:
-Имя БД (MYSQL_DATABASE)
-Имя пользователя БД (MYSQL_USER)
-Пароль пользователя БД(MYSQL_PASSWORD) 
-Пароль для root-пользователя(MYSQL_ROOT_PASSWORD)
4.В дериктории с docker-compose.yml выполняем билд командой: docker compose up -d --build
5.Даем пользователю БД root доступ: 
-переходим в контейнер mySQL: docker exec -it mysqldb bash
-получаем доступ к оболочке mySQL после ввода root пароля: mysql -u root -p
-даем права пользователю: GRANT ALL PRIVILEGES ON *.* TO 'ИмяПользователя'@'%' IDENTIFIED BY 'ПарольПользователя' WITH GRANT OPTION; 
-Выполняем команду, чтобы изманенеия вступили в силу: FLUSH PRIVILEGES; 
6.Открываем в браузере: 127.0.0.1:8080 и настраиваем WordPress


