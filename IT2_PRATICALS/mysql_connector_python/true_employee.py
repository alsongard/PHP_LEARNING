import mysql.connector

# connecting to the database
database = mysql.connector.connect(
	host = 'localhost',
	user = 'root',
	password = '',
	database = 'SOFTWARE'
)

# create a workspace in system memory | cursor object
cursorObject = database.cursor()

cursorObject.execute(
	"""
    CREATE TABLE developer(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	second_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	phone_number INT NOT NULL, 
	address VARCHAR(100) NOT NULL,
	department VARCHAR(50) NOT NULL,
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    )

"""	
)
print('table created')
database.close()