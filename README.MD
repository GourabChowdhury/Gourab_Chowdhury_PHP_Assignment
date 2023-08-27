# Contact Us Form ( using HTML CSS)

# Store in Mysql Database with PHP

# And Finaly used PHP Mailer to send mail to the site owner

This is a simple Contact Us form built with HTML, CSS, and PHP. The form allows users to submit their contact information and messages, and the submissions are processed and sent via email using the PHPMailer library to site owner's email id. The form styling is defined in the `style.css` file.
 
## Table of Contents

- [Features](#features)
- [Usage](#usage)
- [Dependencies](#dependencies)
- [Setup](#setup)
- [License](#license)

## Features

- Input fields for Name, Email, Phone, Subject, and Message.
- Validation for name, email, phone, subject, and non-empty message.
- IP address tracking using the `get_client_ip()` function.
- MySQL database integration to store submissions.
- Email notifications sent to specified recipients using PHPMailer.

## Usage

1. Clone or download this repository to your local environment.
2. Configure a local web server (e.g., XAMPP, WAMP) with PHP and MySQL support.
3. Import the provided `bussinessdb.sql` database file to create the necessary database.
4. Update database credentials in the `submit.php` script.
5. Configure your email credentials in the `submit.php` script to enable email notifications.
6. Customize the form behavior, styling, and recipient email addresses as needed.
7. Run your local web server and access the `index.html` file through a web browser to interact with the form.

## Dependencies

- [PHPMailer Library](https://github.com/PHPMailer/PHPMailer): Used for sending email notifications.

## Setup

1. **Database Setup:**

   - Import the `bussinessdb.sql` file into your MySQL database.
   - Update the database credentials (`$db_server`, `$db_user`, `$db_pass`, `$db_name`) in the `submit.php` script.

2. **Email Configuration:**

   - Set up your email credentials (`Username` and `Password`) in the `submit.php` script for email notifications.

3. **Web Server:**

   - Configure a local web server environment (e.g., XAMPP) with PHP and MySQL.
   - Place the project files in the appropriate web server directory.

4. **Customization:**
   - Adjust the styling by modifying the `style.css` file.
   - Customize recipient email addresses in the `submit.php` script.

## License

This project is licensed under the [MIT License](LICENSE).

---

Feel free to adapt this `README.md` to your project's specifics. Make sure to replace placeholders, URLs, and instructions with actual information relevant to your project.
