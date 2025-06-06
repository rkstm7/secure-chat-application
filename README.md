# 🔐 Secure Chatting Application

<p align="left">
  <img src="https://visitor-badge.laobi.icu/badge?page_id=rkstm7.secure-chatting-app&label=Visitors&color=0e75b6&style=flat" alt="visitor badge"/>
</p>

A **Secure Chatting Application** built using **PHP**, **JavaScript**, and **MySQL**, featuring end-to-end encryption through multiple cryptographic algorithms implemented from scratch.

---

## 🛡️ Implemented Cryptographic Algorithms

| Algorithm          | Description                              | Status                  |
| ------------------ | ---------------------------------------- | ----------------------- |
| **AES**            | Advanced Encryption Standard             | ✅ Fully Functional     |
| **RSA**            | Asymmetric Public Key Cryptosystem       | ✅ Fully Functional     |
| **ElGamal**        | Asymmetric Encryption with Randomization | ✅ Fully Functional     |
| **DES**            | Data Encryption Standard                 | ⚠️ Not Fully Functional |
| **Diffie-Hellman** | Key exchange protocol for AES/DES keys   | ✅ Fully Functional     |

> ✅ All algorithms are implemented **from scratch**, not using built-in libraries.

---

## 📦 Project Contents

- 📝 `Documentation/` — Detailed explanation of each algorithm and its working.
- 💾 `sp_chat.sql` — SQL file to set up the required database schema.
- 🔐 Fully encrypted files using **base64 arrayBuffer**, not path-based encryption (for compliance and security).

---

## 🚀 Technologies Used

- **PHP** – Backend server logic
- **JavaScript** – Frontend and algorithm integration
- **MySQL** – Database for user data and message storage
- **HTML5/CSS3** – UI Layout

---

## 🔧 Setup Instructions

> Make sure you have PHP, MySQL, and a local server (like XAMPP/WAMP) installed.

```bash
1. Clone the Repository
   git clone https://github.com/yourusername/secure-chatting-app.git

2. Place the folder inside your local server directory (e.g., htdocs for XAMPP)

3. Import the `sp_chat.sql` file into your MySQL server using phpMyAdmin or CLI

4. Start Apache and MySQL from your local server manager

5. Visit http://localhost/secure-chatting-app in your browser
```
