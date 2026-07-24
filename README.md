# Paddock 64 — Web (Laravel + Blade)

Versão web multi-página do Paddock64, usando Laravel + Blade, com o mesmo
layout, cores, fontes e componentes do mockup original. Leilão e Sorteio
já funcionam de verdade (via sessão do navegador, sem banco de dados ainda)
— dar um lance ou sortear realmente atualiza a página.

## Este zip NÃO é um projeto Laravel completo

Ele contém só os arquivos específicos do Paddock64 (rotas, controllers,
views, CSS). O "esqueleto" do Laravel (vendor/, .env, artisan, bootstrap/,
etc.) é gerado pelo Composer — é mais seguro deixar o Composer criar essa
parte do que eu recriar à mão.

## Como instalar

Pré-requisitos: **PHP 8.2+** e **Composer** instalados.

```bash
# 1. Cria um projeto Laravel novo e limpo
composer create-project laravel/laravel paddock64-web
cd paddock64-web

# 2. Extrai este zip e copia os arquivos por cima da pasta do projeto,
#    substituindo quando perguntado (routes/web.php, config, etc.)

# 3. Sobe o servidor
php artisan serve
```

Abre **http://127.0.0.1:8000** no navegador.

Se aparecer erro de "APP_KEY não definida", roda:
```bash
php artisan key:generate
```
(normalmente o `create-project` já faz isso sozinho.)

## O que copiar do zip pra dentro do projeto Laravel

```
paddock64-web/          (conteúdo deste zip)
├── app/Http/Controllers/*.php   → cole em app/Http/Controllers/
├── config/paddock.php            → cole em config/
├── routes/web.php                → substitui routes/web.php
├── resources/views/**            → cole em resources/views/
└── public/css/app.css            → cole em public/css/
    public/js/app.js              → cole em public/js/
```

## Estrutura de rotas

| Rota | Página |
|---|---|
| `GET /` | Vitrine (com filtro `?cat=`) |
| `GET /item/{id}` | Detalhe do item |
| `GET /leiloes` | Lista de leilões |
| `GET /leiloes/{id}` | Detalhe do leilão |
| `POST /leiloes/{id}/lance` | Dar lance (grava na sessão) |
| `GET /sorteios` | Lista de sorteios |
| `GET /sorteios/{id}` | Detalhe do sorteio |
| `POST /sorteios/{id}/sortear` | Sortear um participante (grava na sessão) |
| `GET /comunidade` | Feed |
| `GET /chat` | Lista de conversas |
| `GET /chat/{id}` | Conversa |
| `POST /chat/{id}/mensagem` | Enviar mensagem (grava na sessão) |

## O que já funciona de verdade

- Filtro de categoria na vitrine (via query string, sem JS)
- Dar lance no leilão → some no histórico e atualiza o "lance atual" (persistido na sessão, então sobrevive a um refresh — mas é por navegador, não é banco de dados compartilhado ainda)
- Sortear no sorteio → sorteio real em PHP (`array_rand`), resultado fica marcado
- Enviar mensagem no chat → aparece na conversa

## Próximo passo natural: banco de dados

Hoje os dados vêm de `config/paddock.php` (array fixo) e as ações usam
`session()` como "banco de dados fake". Pra virar produto de verdade, o
próximo passo é trocar isso por:

1. **Migrations + Models** (Eloquent) para `products`, `auctions`, `bids`, `raffles`, `messages`, `posts`
2. **Autenticação** (`laravel/breeze` ou `laravel/fortify`) pra ter usuários de verdade em vez de "Você" fixo
3. Mover o `SESSION_DRIVER` de `file` pra `database` ou `redis` em produção

Posso montar isso a seguir, ou prefere primeiro rodar essa versão localmente
e conferir se o layout ficou como esperado?
