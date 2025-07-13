
# 🔐 MdLtLogin

A lightweight modular login and authentication system built using HTML, PHP, JavaScript, and CSS/Bootstrap. This system provides features like registration, login, password reset, token verification, and secure session handling.

---

## 📁 Project Structure

```plaintext
├── ltLogin.html               # Login form
├── ltRegistration.html        # User registration
├── ltForgotPassword.html      # Request password via token
├── ltVerifyToken.html         # Token verification UI
├── ltResetPassword.html       # Reset password after verifying token
├── ltChangePassword.html      # Change password (after login)
├── ltLogout.html              # Logout endpoint

├── ltScriptLogin.js           # Handles form validation, UI behaviors
├── ltStyleLogin.css           # Basic styling for the login UI

├── ltService.php              # Auth logic: verify credentials, reset token, etc.
├── MdlLtLoginRoute.php        # Route mappings for API endpoints
├── TbRegistrationsController.php # Handles user registration and account changes
```

---

## 🚀 Features

- 🔒 Login / Logout  
- 📝 Registration  
- 🔁 Password Reset (with token verification)  
- 📩 Email token verification UI  
- 📦 Modular structure (HTML + PHP separation)  
- 🧠 Simple JavaScript-based form logic  
- 🎨 Clean, customizable UI with CSS/Bootstrap  

---

## 📦 Installation

### 🔽 Download via GitHub

You can clone this repository directly from GitHub:

```bash
git clone https://github.com/Thenewteejay/mdLtLogin.git
```

### 🔽 Download via Official Website

[lifetech Modules](https://lifetech.host/hub/module)

---

## 🧰 Configure Your Environment

- Ensure your server supports **PHP**
- Set up **Lifetechocms** software

Install Lifetechocms using Composer:

```bash
composer create-project lifetechocms/lifetechocms "your-project-name"
```

---

## 🛠️ Usage

- Open `LtLogin.html` in your browser to start the login flow
- Register via `LtRegistration.html`
- Simulate password resets via `LtForgotPassword.html` and `LtResetPassword.html`
- Check `LtService.php` for backend logic or extend as needed
- You can modify filenames (e.g., `LtLogin.html` to `login.html`) via Lifetechocms software

---

## 📡 API Resources
All API endpoints use the **POST** method unless stated otherwise.

### Base path: `/user-accounts/`

```http
POST /user-accounts/login
```
🔐 Logs in a user with valid credentials.  
**Controller:** `TbRegistrationsController@login`

---

```http
POST /user-accounts/signup
```
📝 Registers a new user account.  
**Controller:** `TbRegistrationsController@signup`

---

```http
POST /user-accounts/change-password
```
🔁 Changes password for an authenticated user.  
**Controller:** `TbRegistrationsController@changePassword`

---

```http
POST /user-accounts/forgot-password/get-token
```
📩 Sends a password reset token to user's registered email.  
**Controller:** `TbRegistrationsController@sendToken`

---

```http
POST /user-accounts/validate/token
```
🔑 Validates the password reset token.  
**Controller:** `TbRegistrationsController@validateToken`

---

```http
POST /user-accounts/resend-token
```
🔄 Resends the password reset token.  
**Controller:** `TbRegistrationsController@resendToken`

---

```http
POST /user-accounts/password/reset/
```
🔐 Resets the user's password using a valid token.  
**Controller:** `TbRegistrationsController@resetPassword`

---

## 🙋‍♂️ Author

**Thenewteejay** — [Github Profile](https://github.com/Thenewteejay)

---

## 🤝 Contributing

Contributions and improvements are welcome.  
Please submit a pull request or open an issue if you’d like to collaborate.

