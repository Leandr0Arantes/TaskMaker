TaskMaker é um Sistema de Tarefas (To-Do List) utilizando HTML, CSS, JavaScript, PHP e MySQL. Ele inclui as seguintes funcionalidades:

✅ Cadastro e login de usuários
✅ Adição, edição e remoção de tarefas
✅ Marcar tarefas como concluídas
✅ Exibição das tarefas do usuário logado

Como foi feito o banco de dados

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    completed BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
