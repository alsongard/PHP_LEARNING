import mysql.connector

myDb = mysql.connector.connect(
	host = 'localhost',
	user = 'root',
	passwd = '',
	database = 'SOFTWARE'
)

# create cursor
myCursor = myDb.cursor()

# sql statemetn 
sql = "SELECT * FROM developer"

# Execute statement 
myCursor.execute(sql)

for item in myCursor:
	print(item)