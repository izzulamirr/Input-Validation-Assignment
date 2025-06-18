# Class assignment Input validation

    ### 1. Input Validation with Form Requests (Make Request)
- Created custom Laravel Form Request classes (`RegisterRequest`, `LoginRequest`, `UpdateProfileRequest`) using `php artisan make:request`.
- Registration and login forms now use these Form Request classes for validation.
- Regex patterns whitelist allowed characters for fields like name and password.
- Validation errors are displayed in the Blade views.

### 2. Profile Page
- Users can view and edit their profile information.
- Editable fields: Nickname, Avatar (profile picture upload), Email, Password, Phone Number, and City.
- Nickname replaces the default name display in the top-right menu after login.
- Avatar upload and display functionality added.
- Users can delete their account, removing their data from the database.

### 3. Database Changes
- The `users` table was updated to include `nickname`, `avatar`, `phone`, and `city` columns via a migration.
