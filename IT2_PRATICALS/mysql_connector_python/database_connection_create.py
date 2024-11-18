import mysql.connector

dataBase = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    passwd = ''
)

# preparing a cursor object
cursorObject = dataBase.cursor()


# create database
cursorObject.execute("CREATE DATABASE SOFTWARE")
print("SOFTWARE database is created")