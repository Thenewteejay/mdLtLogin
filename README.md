
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

- Open `ltLogin.html` in your browser to start the login flow
- Register via `ltRegistration.html`
- Simulate password resets via `ltForgotPassword.html` and `ltResetPassword.html`
- Check `ltService.php` for backend logic or extend as needed
- You can modify filenames (e.g., `ltLogin.html` to `login.html`) via Lifetechocms software

---

## 📡 API Resources

### Base path: `/user-accounts/`

```http
POST /user-accounts/login
```
🔐 Logs in a user with valid credentials.  
**Controller:** `TbRegistrationsController@login`

**Payload**
```json
{
  "username": "example@email.com",
  "password": "secret123"
}
```
**Response**
```json
{
  "responseResult": "success | failed",
  "responseCode": 101 | 201,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}
```

---

```http
POST /user-accounts/signup
```
📝 Registers a new user account.  
**Controller:** `TbRegistrationsController@signup`

**Payload**
```json
{
  "lifetechFirstname": "Summer",
  "lifetechSurname": "Macdonald",
  "lifetechEmail": "jyxyne@mailinator.com",
  "lifetechUsername": "example",
  "lifetechPhoneNumber": "974",
  "lifetechPassword": "secret123",
  "confirm": "secret123"
}
```
**Response**

```json
{
  "responseResult": "success | failed",
  "responseCode": 201 | 101,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}
```

---

```http
POST /user-accounts/change-password
```
🔁 Changes password for an authenticated user.  
**Controller:** `TbRegistrationsController@changePassword`

**Payload**
```json
{
  "currentPassword": "974123",
  "newPassword": "secret123",
  "confirmPassword": "secret123"
}
```
**Response**
```json
{
  "responseResult": "success | failed",
  "responseCode": 201 | 201,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}

```

---

```http
PATCH /user-accounts/token/{email}
```
📩 Sends a password reset token to user's registered email.  
**Controller:** `TbRegistrationsController@sendToken`

**Response**
```json
{
  "responseResult": "Token Sent Successfully | failed",
  "responseCode": 201 | 101,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}

```

---

```http
PATCH /user-accounts/token/validate/{email}/{token}
```
🔑 Validates the password reset token.  
**Controller:** `TbRegistrationsController@validateToken`

**Response**
```json
{
  "responseResult": "Token verified | Token Expired | Incorrect Token",
  "responseCode": 201 | 101,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}

```

---

```http
POST /user-accounts/forgot-password
```
🔐 Resets the user's password using a valid token.  
**Controller:** `TbRegistrationsController@setPassword`

**Payload**
```json
{
  "userId": "974123",
  "tokenValue": "435465",
  "newPassword": "secret123",
  "confirmPassword": "secret123"
}
```
**Response**
```json
{
  "responseResult": "success | failed",
  "responseCode": 201 | 201,
  "responseCategory": 200 | 100,
  "responseData": { ... }
}

```

---

## 🙋‍♂️ Author

**Thenewteejay** — [Github Profile](https://github.com/Thenewteejay)

---

## 🤝 Contributing

Contributions and improvements are welcome.  
Please submit a pull request or open an issue if you’d like to collaborate.

