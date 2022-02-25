# Sistema de Unidades de Saúde - Prefeitura de Caruaru

## Descrição

Objetivo do sistema é registrar, acompanhar e gerenciar os atendimentos médicos das unidades de saúde no município.

## Funcionabilidades
### Nível Supervisor
- Gerenciar perfil pessoal
- Gerenciar usuários do sistema
- Gerenciar médicos
- Gerenciar pacientes
- Gerenciar atendimentos
- Gerenciar agendamentos
- Gerenciar unidades de saúde
- Gerar relatórios gerencias

### Nível Colaborador
- Gerenciar perfil pessoal
- Gerenciar pacientes
- Gerenciar atendimentos
- Consultar seus agendamentos
- Gerar relatórios de atendimentos
- Emitir atestados
- Emitir prontuários

### Nivel Paciente
- Gerenciar perfil pessoal
- Companhar seus atendimentos
- Emitir atestados
- Emitir prontuários
- Emitir ficha médica

### Aberto ao Público
- Validar autenticidade de documentos

## Instalação

### Clonar projeto
```
git clone https://github.com/edinaldoFelipe/prefeituraCaruaru.git
```

### Instalar dependências
Para instalar as dependências, execute o seguinte comando no `terminal` dentro da pasta do projeto.
```
composer install
```

### Criar banco de dados
Acesse seu gerenciador de banco de dados ou pelo terminar, crie um banco de dados vazio.
```
mysql> create database <nome do banco>
```

### Arquivo de configurações
Duplicar o arquivo `.env.example` e renomear para `.env`
Adicionar as credencias do banco de dados

### Criar tabelas
Para criar as tabelas no banco de dados, execute o seguinte comando no `terminal` dentro da pasta do projeto.
```
php artisan migrate:fresh
```

### Popular banco de dados
Caso tenha interesse de criar dados fictícios para nível de teste, execute o seguinte comando no `terminal` dentro da pasta do projeto.
```
php artisan db:seed
```

### Iniciar o servidor
Para iniciar o servidor, execute o seguinte comando no `terminal` dentro da pasta do projeto.
```
php artisan serve
```