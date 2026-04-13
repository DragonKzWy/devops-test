# 🚀 DevOps Test - Nginx + PHP-FPM com Docker

## 📌 Descrição
Este projeto consiste na configuração de um ambiente de aplicação PHP utilizando Nginx como servidor web e PHP-FPM para processamento de scripts PHP, orquestrados com Docker Compose.

O objetivo é demonstrar a capacidade de configurar, executar e manter um ambiente básico de aplicação, seguindo conceitos de microsserviços.

---

## 🧰 Tecnologias Utilizadas

- Docker
- Docker Compose
- Nginx
- PHP-FPM
- Linux

---

## 🏗 Arquitetura

A aplicação é composta por dois serviços:

- Nginx:
  Responsável por receber requisições HTTP na porta 80 e encaminhar requisições PHP para o PHP-FPM.

- PHP-FPM:
  Responsável por processar arquivos .php.

A comunicação entre os serviços ocorre via FastCGI (porta 9000).

---

## 📂 Estrutura do Projeto

devops-test/
├── app/
│   └── index.php
├── docker-compose.yml
├── nginx.conf
└── README.md

---

## ⚙️ Pré-requisitos

- Docker instalado
- Docker Compose (docker compose)

---

## ▶️ Como Executar o Projeto

1. Clonar o repositório:

git clone https://github.com/DragonKzWy/devops-test.git
cd devops-test

2. Subir os containers:

docker compose up -d

3. Verificar containers em execução:

docker ps

4. Acessar a aplicação no navegador:

http://localhost

Resultado esperado:

Olá, mundo!

---

## 🔍 Troubleshooting

Caso a aplicação não funcione:

Verificar containers:
docker ps

Ver logs do nginx:
docker logs devops-test-nginx-1

Ver logs do php:
docker logs devops-test-php-1

Testar via terminal:
curl localhost

---

## 🔁 Comandos úteis

Parar containers:
docker compose down

Subir novamente:
docker compose up -d

---

## ☁️ Implantação em Cloud (AWS)

1. Criar instância EC2 (Ubuntu)
2. Liberar portas:
   - 22 (SSH)
   - 80 (HTTP)

3. Instalar Docker:

sudo apt update
sudo apt install docker.io docker-compose-plugin -y

4. Clonar repositório:

git clone https://github.com/DragonKzWy/devops-test.git
cd devops-test

5. Subir containers:

docker compose up -d

6. Acessar via navegador:

http://SEU_IP_PUBLICO

---

## 🛠 Observações

- O Nginx atua como proxy para o PHP-FPM
- O PHP-FPM não responde diretamente via HTTP
- A comunicação entre serviços ocorre via rede interna do Docker
- O projeto foi estruturado de forma simples para foco em configuração e operação

---

## 📌 Autor

Wesley Santos
