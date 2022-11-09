
# API TODO SOFTPAR

Aplicação teste 


## Stack utilizada

**Back-end:** PHP 8.1, Laravel Framework 9.38.0, Postgres v14


## Documentação da API

#### Retorna todos os itens

```http
  GET /api/tasks
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `api_key` | `string` | **Obrigatório**. A chave da sua API |

#### Retorna um item

```http
  GET /api/task/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |


#### Inclui um item
```http
  POST /api/task
```
```javascript
{
    "name":"test",
    "init":"2022-11-7",
    "end":"2022-11-8",
    "description":"test a task",
}
```
| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `name` | `string` | **Obrigatório**. nome da task |
| `description` | `string` | **Obrigatório**. Descrição da task |
| `init` | `date` | **Obrigatório**. data de inicio |
| `end` | `date` | **Obrigatório**. data fim |



#### Atualiza um item
```http
  PUT /api/task/${id}
```
| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |

```javascript
{
    "name":"test",
    "init":"2022-11-7",
    "end":"2022-11-8",
    "description":"test a task",
    "conclude":true,
}
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `name` | `string` | **Obrigatório**. nome da task |
| `description` | `string` | **Obrigatório**. Descrição da task |
| `init` | `date` | **Obrigatório**. data de inicio |
| `end` | `date` | **Obrigatório**. data fim |


#### Altera o estado de concluido 
```http
  PATCH /api/task/${id}/${conclude}
```
| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |
| `conclude`      | `string` | **Obrigatório**. true ou false para alterar o estado da task |



#### Deleta um item
```http
  DELETE /api/task/${id}
```
| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |
