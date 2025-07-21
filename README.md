
# 🔐 MdLtLogin

A lightweight modular login and authentication system built using HTML, PHP, JavaScript, and CSS/Bootstrap. This system provides features like registration, login, password reset, token verification, and secure session handling.

---

## 📁 Project Structure

```plaintext
├── 📁 View
│   ├── Login                  # Login form
│   ├── Sign_Up                # User registration
│   ├── Logout                 # Logout endpoint
│   ├── Forgot Password        # Request password via token
│   ├── Verify Token           # Token verification UI
│   ├── Reset Password         # Set new password after verifying token
│   └── Change Password        # Change password (after login)

├── 📁 Service
│   ├── ltScriptLogin.js       # Handles form validation and UI behaviors
│   ├── ltStyleLogin.css       # Basic styling for the login UI
│   └── ltService.php          # Auth logic: verify credentials, reset token, etc.

├── 📁 Controller
│   ├── MdlLtLoginRoute.php    # Route mappings for API endpoints
│   └── TbRegistrationsController.php # Handles user registration and account changes

├── 📁 Model
│   └── TbRegistrations.php    # Database model logic

```

---

## 🚀 Features

- 🔒 Login / Logout  
- 📝 Sign Up  
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

- Ensure your server supports the **latest version of PHP** (recommended)
- Set up **Lifetechocms** software

Install Lifetechocms using Composer:

```bash
composer create-project lifetechocms/lifetechocms "your-project-name"
```

---

## 🛠️ Usage

- Open `Login` in your browser to start the login flow
- Register via `Sign Up`
- Simulate password resets via `Forgot Password` and `Reset Password`
- Check `ltService.php` for backend logic or extend as needed

---

## 📡 API Resources

### Base path: `/api/user-accounts/`

```http
POST /api/user-accounts/login
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
POST /api/user-accounts/signup
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
POST /api/user-accounts/change-password
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
PATCH /api/user-accounts/token/{email}
```
📩 Send a token to verify user account.  
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
PATCH /api/user-accounts/token/validate/{email}/{token}
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
POST /api/user-accounts/forgot-password
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

