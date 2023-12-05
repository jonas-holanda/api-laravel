<div align="center">

# API com Laravel

</div>

**Criei minha primeira API utilizando o Laravel. Nessa API adicionei um prefixo de rota pra ela chamada v1, onde continha as rotas do tipo (get, post, put e delete) para o CRUD.**

**Criei uma tabela de Produtos usando o Migration do Laravel, também foi criado o model e controller dos Produtos.**

**No ProductsController, foi criado os métodos para o CRUD. que são eles: index(que retorna todos os registros da tabela Produtos do banco de dados), store(que insere um novo produto e retorna um objeto json contendo o valor _created: true_), update(que atualiza os dados de um produto específico e dá como resposta um objeto json contendo o valor _updated: true_) e por fim o método delete(que remove um registro específico da tabela e retorna um objeto json contendo o valor _deleted: true_).**

Versão do Laravel e do PHP utilizados no projeto: Laravel v10.34.2 e PHP v8.2.12

# Rotas da API

**Observação: Utilize Accept: application/json, no cabeçalho(header) da requisição da API, para mostrar possíveis erros/avisos de validação.**

## Listagem de Produtos

- **GET** - `http://127.0.0.1:8000/api/v1/list`

## Cadastro do Produto

- **POST** - `http://127.0.0.1:8000/api/v1/insert`
- **BODY** -
```json
{
    "name": "Product Test",
    "image": "https://cdn.pixabay.com/photo/2013/07/12/17/46/box-152428_640.png",
    "value": 15
}
```
- **RESPONSE** -
```json
{
    "created": true
}
```

## Atualização do Produto

- **PUT** - `http://127.0.0.1:8000/api/v1/update/{id}` exemplo: `http://127.0.0.1:8000/api/v1/update/10`
- **BODY** -
```json
{
    "name": "Update Product Test",
    "image": "https://cdn.pixabay.com/photo/2013/07/12/17/46/box-152428_640.png",
    "value": 20
}
```
- **RESPONSE** -
```json
{
    "updated": true
}
```

## Exclusão do Produto

- **DELETE** - `http://127.0.0.1:8000/api/v1/delete/{id}` exemplo: `http://127.0.0.1:8000/api/v1/delete/10`
- **RESPONSE** -
```JSON
{
    "deleted": true
}
```

<p align="center">
    <strong>Copyright © <a href="https://github.com/jonas-holanda" target="_blank">Jonas Holanda</a>. All Rights Reserved.</strong>
</p>