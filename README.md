# Portal Dashboard

Um sistema de portal dashboard desenvolvido em PHP para gerenciar usuários, fornecedores, produtos e níveis de acesso.

## Funcionalidades

1. **Cadastro de Usuários:**
   - Página para cadastrar novos usuários.
   - Campos necessários: Nome, Email, Senha.

2. **Cadastro de Fornecedores:**
   - Página para cadastrar novos fornecedores.
   - Campos necessários: Nome, Contato, Endereço.

3. **Cadastro de Produtos:**
   - Página para cadastrar novos produtos.
   - Campos necessários: Nome, Descrição, Preço, Fornecedor.

4. **Cadastro de Níveis de Acesso:**
   - Página para cadastrar novos níveis de acesso.
   - Exemplos de níveis: Administrador, Usuário Regular.

## Estrutura do Banco de Dados

- Tabela de Usuários
  - ID, Nome, Email, Senha

- Tabela de Fornecedores
  - ID, Nome, Contato, Endereço

- Tabela de Produtos
  - ID, Nome, Descrição, Preço, FornecedorID

- Tabela de Níveis de Acesso
  - ID, Nível

## Como Usar

1. Clone o repositório.
2. Configure seu ambiente PHP e banco de dados.
3. Importe o esquema do banco de dados a partir do arquivo `database.sql`.
4. Inicie o servidor PHP.
5. Acesse o sistema via navegador.

## Controle de Acesso

O sistema possui um sistema de controle de acesso para garantir que apenas usuários autorizados acessem determinadas funcionalidades.

## Contribuindo

Sinta-se à vontade para contribuir! Se encontrar bugs ou tiver sugestões, abra uma issue ou envie um pull request.


## Desenvolvedora

Este projeto foi desenvolvido por:

**Jaqueline Moura de Oliveira**

- [GitHub](https://github.com/Jaqueline107)
- [LinkedIn](https://www.linkedin.com/in/jaqueline-moura-de-oliveira/)
