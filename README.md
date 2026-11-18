
# Campus Supply Tracker

## Project Description

Campus Supply Tracker is a simple web application that uses an HTML form and PHP, the program enables users to enter information on campus supplies and store it in a MySQL database.

## Technologies Used

- HTML
- PHP
- MySQL
- XAMPP
- phpMyAdmin

## Features

- Add campus supplies using an HTML form.
- Enter a product ID, product name, category, and price.
- Connect PHP to MySQL using mysqli.
- Save submitted information using a prepared SQL INSERT statement.
- Display a message showing whether the record was added successfully.

## Database Structure

**Database Name:** `campus_supplies`

**Table Name:** `Supplies`

| Column | Data Type |
|--------|-----------|
| ProductID | VARCHAR(20), Primary Key |
| ProductName | VARCHAR(100) |
| Category | VARCHAR(50) |
| Price | DECIMAL(8,2) |

The ProductID column is the primary key, which means each product must have a unique ID.

## Project Files

- `new_supply.html` - Contains the HTML form used to enter supply information.
- `insert_supply.php` - Receives the submitted information and saves it in the MySQL database.
- `campus_supplies.sql` - Contains the database structure needed to recreate the Supplies table.

## How to Set Up and Run

1. Install XAMPP on your computer.
2. Open XAMPP and start Apache and MySQL.
3. Place the `campus_supply_tracker` folder inside the `htdocs` directory.
4. Open phpMyAdmin at `http://localhost/phpmyadmin`.
5. Create a new database named `campus_supplies`.
6. Import the `campus_supplies.sql` file to create the Supplies table.
7. Open `insert_supply.php` and make sure the database connection settings match your local MySQL setup.
8. Open the following URL in your browser:

   `http://localhost/campus_supply_tracker/new_supply.html`

9. Fill out the form with the product information.
10. Click **Add New Supply** to submit the information.

## How the Form Works

The HTML form contains four fields: ProductID, ProductName, Category, and Price.

When the user clicks **Add New Supply**, the form sends the entered information to `insert_supply.php` using the POST method.

The PHP file checks whether the expected fields were submitted and stores their values in variables. It then connects to the MySQL database using mysqli.

A prepared SQL INSERT statement is used to save the information in the Supplies table. Once the statement runs, the page displays a message indicating whether the record was added.

## Testing

I tested the application by entering two different products through the HTML form.

| Product ID | Product Name | Category | Price |
|------------|--------------|----------|-------|
| P101 | Notebook | Stationery | $4.99 |
| P102 | Calculator | Electronics | $15.99 |

Both products were successfully added to the database.

To confirm that the information was saved, I opened phpMyAdmin, selected the `campus_supplies` database, and checked the Supplies table using the Browse tab.

Both records appeared with the correct information.

## Customization

The application keeps track of campus supplies for this task. Product ID, product name, category, and price are entered by users.

I kept the same basic PHP structure demonstrated in the lesson, including retrieving form data through POST, connecting to MySQL, and using a prepared statement to insert records.

## Notes

This project was developed and tested locally using XAMPP, PHP, and MySQL.

The application requires a running PHP server and MySQL database. It cannot run directly through GitHub Pages because GitHub Pages does not execute PHP.

The project follows the form handling, validation, and database insertion methods. It is a basic coursework application and does not include all the validation and security features needed for a production website.


