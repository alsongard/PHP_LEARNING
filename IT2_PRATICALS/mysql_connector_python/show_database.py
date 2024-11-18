import mysql.connector


myDb = mysql.connector.connect(
	host = "localhost",
	user = "root",
	passwd = ""
)

# trial and error
# create database
myCursorObject = myDb.cursor()
myCursorObject.execute("SHOW DATABASES")
print("print all database")
for i in myCursorObject:
    print(i)
myDb.close()

