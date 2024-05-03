Таск треккер.

Для добавления нескольких записей в таблицы Project, Status и Types реализован seeder. 

Проект содержит 4 таблицы:

Таблица проекты (projects) id - Первичный ключ name

статус задачи (status) id - Первичный ключ name (Новая, выполняется, тестирование, завершена)

Тип задачи (types) id - Первичный ключ name (пожелание, ошибка, авария)

таблица задач (tasks) id - Первичный ключ project_id - id проекта status_id - id статуса type_id - id типа title - название задачи description - подробное описание

Основные url: 

	Проекты:

	GET /api/projects - получение списка проектов
	POST /api/project - добавление проекта

	Задачи:

	GET /api/tasks/{project_id} - получение Списка задач по проекту
	POST /api/tasks/{project_id} - создание задачи

	PUT /api/task/{task_id} - обновление задачи
	DELETE /api/task/{task_id} - удаление задачи