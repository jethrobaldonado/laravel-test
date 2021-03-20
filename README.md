# Comment System

## Implementation

### Laravel
* Service Pattern
* Usage of Traits
* Requests for validation
* Collections for formatting

### JS/VueJS
* Composition API
* Emitting Events
* Component Creation
* API Consumption (axios)
* Added support for TailwindCSS

## Installation

Install dependencies with Composer
```bash
composer install
```

Use Laravel Sail to create docker images for both DB and the application. 

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate //Execute artisan commands via sail
```

Use Yarn to install the JS and CSS dependencies

```bash
yarn
yarn dev
```

### Room for Improvements ###
  - [ ] Create a Service layer for Axios calls
  - [ ] Improve component hierarchy
  - [ ] Passing VueJS methods inside child components caused an antipattern
