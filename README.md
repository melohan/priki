# Priki

The aim of this project is to create a wiki for the PRW2 projects of the class. Priki is a collaborative project where
the user stories were defined in class.

## Table of contents

1. [Prerequisites](#prerequisites)
    1. [Built with](#built-with)
2. [Setting up Dev](#setting-up-dev)
    1. [Installation](#installation)
    2. [Configuration](#configuration)
    3. [Run project](#run-project)

## Prerequisites

### Build with

- Laravel 8 (PHP 7.3+)
- Tailwindcss v2.2.19
- Composer 2.1.14
- npm 8.1.2

## Setting up Dev

### Installation

``` shell
git clone https://github.com/melohan/priki.git
cd priki
git checkout develop
composer i
npm i 
npm run dev
```

### Configuration

1) Rename `.env.exemple` to `.env`
2) Set these constants `DB_` according to your database access
4) Create a database with the name priki, you can run the following
   command: `CREATE SCHEMA IF NOT EXISTS priki DEFAULT CHARACTER SET utf8;`
5) Generate database `php artisan migrate:fresh --seed`

### Run Project

Execute this laravel command: `php artisan serve`
