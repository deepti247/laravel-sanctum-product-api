# Laravel Sanctum Product API

A simple RESTful API built with Laravel and Sanctum authentication.
This project demonstrates user authentication and product CRUD operations using secure API tokens.
It has features like User Register API, User Login API, Sanctum Token Authentication, Product CRUD API, Protected routes...

# Features

- User Registration API
- User Login API
- Token-based Authentication using Laravel Sanctum
- Logout API
- Product CRUD APIs
- Protected routes using Sanctum middleware
- RESTful API structure

# Tech Stack

- PHP
- Laravel
- Laravel Sanctum
- MySQL
- REST API

# Installation

### 1 Clone the repository

```bash
git clone https://github.com/deepti247/sanctum-product-api.git
```

### 2 Go to project directory

```bash
cd sanctum-product-api
```

### 3 Install dependencies

```bash
composer install
```

### 4 Copy environment file

```bash
cp .env.example .env
```

### 5 Generate application key

```bash
php artisan key:generate
```

### 6 Configure database

Update `.env` file:

```
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

### 7 Run migrations

```bash
php artisan migrate
```

### 8 Start development server

```bash
php artisan serve
```

API will run on:

```
http://127.0.0.1:8000
```

# Authentication

This project uses Laravel Sanctum for API token authentication.

After login or registration, the API returns a token which must be included in request headers.

Example header:

```
Authorization: Bearer YOUR_TOKEN
```

# API Endpoints

## Register User

```
POST /api/register
```

Request body:

```json
{
"name":"John",
"email":"john@example.com",
"password":"123456"
}
```

Response:

```json
{
"token":"1|abcxyz123"
}
```

# Login User

```
POST /api/login
```

Request:

```json
{
"email":"dipti@example.com",
"password":"123456"
}
```

Response:

```json
{
"token":"1|abcxyz123"
}
```

# Logout

```
POST /api/logout
```

Header:

```
Authorization: Bearer TOKEN
```

# Product APIs

All product APIs require authentication.

## Get All Products

```
GET /api/products
```

---

## Create Product

```
POST /api/products
```

Request:

```json
{
"name":"Laptop",
"description":"Gaming Laptop",
"price":"1200"
}
```

## Get Single Product

```
GET /api/products/{id}
```

## Update Product

```
PUT /api/products/{id}
```

Request:

```json
{
"name":"Laptop Updated",
"description":"New model",
"price":"1500"
}
```

## Delete Product

```
DELETE /api/products/{id}
```

# Database Structure

## Users Table

Default Laravel users table.

## Products Table

```
id
name
description
price
created_at
updated_at
```

# Folder Structure

```
app
 ├ Http
 │   └ Controllers
 │        ├ AuthController.php
 │        └ ProductController.php

database
 └ migrations

routes
 └ api.php
```

# Example Authorization Header

```
Authorization: Bearer 1|exampletoken123
```

# Author

Dipti Sahay
PHP / Laravel / WordPress Developer

# License

This project is open-source and available under the MIT License.

