>>TODO

- Logout

- Change Password

- Profile

>>IMPLEMENTED

- CSRF Prevention
- SQL Injection prevention (Using prepared statements)
- Passwords hashed (SHA-256) and stored with salt
- Data Validation (Right now, it's server side -- easily replaceable with client side)
- Runs on PDO. Hence portable across DB platforms.