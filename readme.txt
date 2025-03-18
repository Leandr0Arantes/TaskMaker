TaskMaker é um Sistema de Tarefas (To-Do List) utilizando HTML, CSS, JavaScript, PHP e MySQL. Ele inclui as seguintes funcionalidades:

✅ Cadastro e login de usuários
✅ Adição, edição e remoção de tarefas
✅ Marcar tarefas como concluídas
✅ Exibição das tarefas do usuário logado

Como foi feito o banco de dados

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each user
    nome VARCHAR(50) NOT NULL,         -- First name
    sobrenome VARCHAR(50) NOT NULL,    -- Last name
    email VARCHAR(100) NOT NULL UNIQUE, -- Email (unique to avoid duplicates)
    senha VARCHAR(255) NOT NULL,       -- Password (hashed for security)
    grupo_id INT,                      -- Foreign key to a 'grupos' table (optional)
    status TINYINT(1) DEFAULT 1,       -- User status: 1 for active, 0 for inactive
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE SET NULL -- Link to 'grupos' table
);

CREATE TABLE grupos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each group
    nome VARCHAR(100) NOT NULL,        -- Name of the group
    usuario_id INT NOT NULL,           -- Foreign key referencing 'usuarios' table
    status TINYINT(1) DEFAULT 1,       -- Group status: 1 for active, 0 for inactive
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE -- Link to 'usuarios' table
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each task
    titulo VARCHAR(100) NOT NULL,      -- Title of the task
    descricao TEXT,                    -- Description of the task
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Creation date of the task
    data_conclusao TIMESTAMP,          -- Completion date of the task (optional)
    status TINYINT(1) DEFAULT 0,       -- Task status: 0 for pending, 1 for completed
    usuario_id INT NOT NULL,           -- Foreign key referencing 'usuarios' table
    grupo_id INT,                      -- Foreign key referencing 'grupos' table (optional)
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE, -- Link to 'usuarios' table
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE SET NULL -- Link to 'grupos' table
);

Quais são as funcionalidades do Sistema

- O usuário pode se cadastrar, fazer login e trocar senha.
- O usuário vai poder mudar as informações de seu perfil.
- Vai existir grupos de modo que os usuários trabalhem junto em um grupo de tarefas, onde será possivel criar, editar, deletar um grupo.
- Vai existir a mecanica de tarefas onde o usuário vai poder criar, editar, deletar uma tarefa.
