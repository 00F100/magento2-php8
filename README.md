# Guia de Instalação e Uso do Magento 2 com Docker

Este repositório contém um projeto Magento 2 configurado para ser executado em um ambiente Docker, facilitando o desenvolvimento e teste no Ubuntu.

## Índice

- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Uso Básico](#uso-básico)

## Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- Ubuntu (versão recomendada: XX.XX)
- Docker (versão mínima requerida: X.X)
- Docker Compose (versão mínima requerida: X.X)

## Instalar uma nova cópia do Magento2

Para instalar uma nova cópia do Magento no diretório "magento2-ce", siga os passos abaixo:

```bash
# Clone o repositório
git clone git@github.com:00F100/magento2-php8.git

# Navegue até o diretório do projeto
cd magento2-php8

# Execute o script de criação para instalar o Magento
bin/host/create
```

## Uso Básico

```bash
# Abrir um Terminal com PHP
bin/host/client

# Executar servidor HTTP usando o diretório "magento2-ce" como raiz
bin/host/develop
```
