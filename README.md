![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![TailwindCss](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white)

![GitHub commit activity (branch)](https://img.shields.io/github/commit-activity/m/melohan/priki/develop?style=flat-square)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/melohan/priki/develop?style=flat-square)
![GitHub issues](https://img.shields.io/github/issues/melohan/priki?style=flat-square)

# Priki

## Table of contents

1. [Prerequisites](#prerequisites)
   1. [Built with](#build-with)
2. [Setting up Dev](#setting-up-dev)
    1. [Installation](#installation)
    2. [Configuration](#configuration)
    3. [Run project](#run-project)

## Prerequisites

### Build with

- Laravel 8 
- PHP 7.3+
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
