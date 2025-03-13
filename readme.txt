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
    tarefa_id INT,                     -- Foreign key to a 'tarefas' table (optional)
    status TINYINT(1) DEFAULT 1,       -- User status: 1 for active, 0 for inactive
    FOREIGN KEY (grupo_id) REFERENCES grupos(id), -- Optional: Link to a 'grupos' table
    FOREIGN KEY (tarefa_id) REFERENCES tarefas(id) -- Optional: Link to a 'tarefas' table
);

CREATE TABLE grupos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each group
    nome VARCHAR(100) NOT NULL,        -- Name of the group
    usuario_id INT NOT NULL,           -- Foreign key referencing 'usuarios' table
    tarefa_id INT NOT NULL,            -- Foreign key referencing 'tarefas' table
    status TINYINT(1) DEFAULT 1,       -- Group status: 1 for active, 0 for inactive
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id), -- Link to 'usuarios' table
    FOREIGN KEY (tarefa_id) REFERENCES tarefas(id)   -- Link to 'tarefas' table
);

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
