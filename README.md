<<<<<<< HEAD
COMPONENTS

global:
- ToastNotification ✅
- LoadingSpinner ✅
- Button ✅

- forms (input, select etc.)✅
- tables✅
- Modal✅
- Image✅


Setting Up server (Laravel REST API)
- Creating server & installing packages ✅
    - composer create-project laravel/laravel project-name OR laravel new project-name (composer global require laravel/installer)
    - composer require laravel/sanctum
    - php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    - composer require propaganistas/laravel-phone (https://github.com/Propaganistas/Laravel-Phone)
    - Setting up .env cors.php app.php
    - php artisan migrate (make sure to run your xampp first)

- Setting up migration, model, trait, controller, resource, request & api.php ✅
    - php artisan make:trait Traits/ApiResponse
    - php artisan make:enum Enums/UserRole
    - php artisan make:controller API/v1/UserController --resource
    - php artisan make:resource UserResource
    - php artisan make:request UserRequest

    Run this command after modifying the migration
    - php artisan migrate:fresh
    - php artisan db:seed

- Setting up a client-side connection to the server.
    - .env configuration ✅
    - .env types ✅
    - axios connection (api and handling request) ✅
    - useDebounce and useDateFormatter Hooks ✅
    - service ✅
        - Fetching Users (backend)✅
        - Create User (with image handling) ✅
        - Show ✅
        - Edit/Update ✅
        - Delete (softd delete & permanently delete) ✅
        - Restore ✅

- Authentication & Authorizationcd server
php artisan migrate:fresh --seed
=======
# React + TypeScript + Vite

This template provides a minimal setup to get React working in Vite with HMR and some ESLint rules.

Currently, two official plugins are available:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react) uses [Babel](https://babeljs.io/) (or [oxc](https://oxc.rs) when used in [rolldown-vite](https://vite.dev/guide/rolldown)) for Fast Refresh
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react-swc) uses [SWC](https://swc.rs/) for Fast Refresh

## React Compiler

The React Compiler is not enabled on this template because of its impact on dev & build performances. To add it, see [this documentation](https://react.dev/learn/react-compiler/installation).

## Expanding the ESLint configuration

If you are developing a production application, we recommend updating the configuration to enable type-aware lint rules:

```js
export default defineConfig([
  globalIgnores(['dist']),
  {
    files: ['**/*.{ts,tsx}'],
    extends: [
      // Other configs...

      // Remove tseslint.configs.recommended and replace with this
      tseslint.configs.recommendedTypeChecked,
      // Alternatively, use this for stricter rules
      tseslint.configs.strictTypeChecked,
      // Optionally, add this for stylistic rules
      tseslint.configs.stylisticTypeChecked,

      // Other configs...
    ],
    languageOptions: {
      parserOptions: {
        project: ['./tsconfig.node.json', './tsconfig.app.json'],
        tsconfigRootDir: import.meta.dirname,
      },
      // other options...
    },
  },
])
```

You can also install [eslint-plugin-react-x](https://github.com/Rel1cx/eslint-react/tree/main/packages/plugins/eslint-plugin-react-x) and [eslint-plugin-react-dom](https://github.com/Rel1cx/eslint-react/tree/main/packages/plugins/eslint-plugin-react-dom) for React-specific lint rules:

```js
// eslint.config.js
import reactX from 'eslint-plugin-react-x'
import reactDom from 'eslint-plugin-react-dom'

export default defineConfig([
  globalIgnores(['dist']),
  {
    files: ['**/*.{ts,tsx}'],
    extends: [
      // Other configs...
      // Enable lint rules for React
      reactX.configs['recommended-typescript'],
      // Enable lint rules for React DOM
      reactDom.configs.recommended,
    ],
    languageOptions: {
      parserOptions: {
        project: ['./tsconfig.node.json', './tsconfig.app.json'],
        tsconfigRootDir: import.meta.dirname,
      },
      // other options...
    },
  },
])
```
>>>>>>> 83d7e41df8d69af8ce12c0690925e52cc0849789
