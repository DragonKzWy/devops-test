# 🚀 DevOps Test - Nginx + PHP-FPM + MySQL com Docker

## 📌 Descrição
Este projeto consiste na configuração de um ambiente completo de aplicação PHP utilizando **Nginx**, **PHP-FPM** e **MySQL**, orquestrados com Docker Compose.

O objetivo é demonstrar a capacidade de configurar, executar e manter um ambiente de aplicação, incluindo integração entre serviços, persistência de dados, monitoramento e deploy em cloud.

---

## 🧰 Tecnologias Utilizadas

- Docker
- Docker Compose
- Nginx
- PHP-FPM
- MySQL
- GitHub Actions (CI)
- AWS EC2
- Linux

---

## 🏗 Arquitetura

A aplicação é composta por três serviços:

- **Nginx**
  - Responsável por receber requisições HTTP (porta 80)
  - Atua como proxy para o PHP-FPM

- **PHP-FPM**
  - Processa arquivos `.php`
  - Conecta ao banco de dados MySQL

- **MySQL**
  - Armazena os dados da aplicação
  - Configurado com persistência via volume Docker

### 🔗 Comunicação entre serviços

A comunicação ocorre via rede interna do Docker:

- Nginx → PHP-FPM (`fastcgi_pass`)
- PHP → MySQL (`host = mysql`)

---

## 📂 Estrutura do Projeto

```
devops-test/
├── app/
│   └── index.php
├── docker-compose.yml
├── nginx.conf
├── Dockerfile
└── README.md
```

---

## ⚙️ Pré-requisitos

- Docker instalado
- Docker Compose

---

## ▶️ Como Executar o Projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/DragonKzWy/devops-test.git
cd devops-test
```

---

### 2. Subir os containers

```bash
docker compose up -d --build
```

---

### 3. Verificar containers

```bash
docker ps
```

---

### 4. Acessar aplicação

```
http://localhost
```

---

### Resultado esperado

```
Conectado ao MySQL com sucesso!
```

---

## 🔍 Troubleshooting

### Ver containers
```bash
docker ps
```

### Logs do Nginx
```bash
docker logs devops-test-nginx-1
```

### Logs do PHP
```bash
docker logs devops-test-php-1
```

### Logs do MySQL
```bash
docker logs devops-test-mysql-1
```

### Teste via terminal
```bash
curl localhost
```

---

## 🔁 Comandos úteis

```bash
docker compose down
docker compose up -d
docker compose up -d --build
```

---

## ⚙️ Dockerfile

Foi criada uma imagem customizada do PHP para incluir suporte ao MySQL:

```Dockerfile
FROM php:8.1-fpm
RUN docker-php-ext-install mysqli
```

---

## ❤️ Healthcheck

Foi configurado healthcheck no Nginx para validar a disponibilidade da aplicação:

- Verifica periodicamente se o serviço responde
- Permite monitoramento básico de status

---

## 💾 Persistência de dados

O MySQL utiliza volume Docker:

- Evita perda de dados ao reiniciar containers
- Simula ambiente de produção

---

## 🔄 CI (GitHub Actions)

Foi implementado pipeline de integração contínua:

- Build da imagem Docker
- Validação do docker-compose

Executado automaticamente a cada push na branch `main`.

---

## ☁️ Deploy na AWS

O projeto foi implantado em uma instância EC2.

### Passos:

1. Criar instância EC2
2. Liberar portas:
   - 22 (SSH)
   - 80 (HTTP)

3. Instalar Docker:
```bash
sudo apt update
sudo apt install docker.io docker-compose-plugin -y
```

4. Clonar repositório:
```bash
git clone https://github.com/DragonKzWy/devops-test.git
cd devops-test
```

5. Subir containers:
```bash
docker compose up -d --build
```

---

### Acesso

```
http://SEU_IP_PUBLICO
```

---

## 🛠 Observações

- O PHP-FPM não responde diretamente via HTTP
- O Nginx atua como proxy via FastCGI
- Os serviços se comunicam pela rede interna do Docker
- O projeto simula uma arquitetura real simplificada

---

## 📌 Autor

Wesley Santos
