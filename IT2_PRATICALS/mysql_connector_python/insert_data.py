import mysql.connector

# connect to database
database = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password = "",
    database = 'SOFTWARE'
)

# create cursorObject
cursorObject = database.cursor()

# sql query 
sql = "INSERT INTO developer (first_name, second_name, last_name, phone_number, address, department) VALUES (%s, %s, %s, %s, %s, %s)"

# data to be inserted 
val = [
    ("react", "javascript", "node", 1, "node.org", "web application"),
	("python", "django", "templates", 2, "pypi", "data science"),
	("php", "backend", "includes", 3, "mcv", "object Procedura")
]
cursorObject.executemany(sql, val)
database.commit()

print(cursorObject.rowcount, "developers added")
database.close()


