
# 🔐 MdLtLogin

A lightweight modular login and authentication system built using HTML, PHP, JavaScript, and CSS/Bootstrap. This system provides features like registration, login, password reset, token verification, and secure session handling.

---

## 📁 Project Structure

```plaintext
├── LtLogin.html               # Login form
├── LtRegistration.html        # User registration
├── LtForgotPassword.html      # Request password via token
├── LtVerifyToken.html         # Token verification UI
├── LtResetPassword.html       # Reset password after verifying token
├── LtChangePassword.html      # Change password (after login)
├── LtLogout.html              # Logout endpoint

├── LtScriptLogin.js           # Handles form validation, UI behaviors
├── LtStyleLogin.css           # Basic styling for the login UI

├── LtService.php              # Auth logic: verify credentials, reset token, etc.
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

[https://lifetech.host/hub/module](https://lifetech.host/hub/module)

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

## 🙋‍♂️ Author

**Thenewteejay** — [https://github.com/Thenewteejay](https://github.com/Thenewteejay)

---

## 🤝 Contributing

Contributions and improvements are welcome.  
Please submit a pull request or open an issue if you’d like to collaborate.
