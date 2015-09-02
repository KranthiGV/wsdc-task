>>TODO

- Logout
- Change Password
- Profile

>>IMPLEMENTED

- Passwords hashed (SHA-256) and stored with salt
- CSRF Prevention
- SQL Injection prevention (Using prepared statements)
- Data Validation (Right now, it's server side -- client side to be added)
- Runs on PDO. Hence portable across DB platforms.