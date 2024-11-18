import mysql.connector

dataBase = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    passwd = '',
    database = 'SOFTWARE'
)

# preparing a cursor object
cursorObject = dataBase.cursor()

deveperRecords = """
    CREATE TABLE EMPLOYEE (
        ID INT NOT NULL PRIMARY KEY,
        NAME VARCHAR(60) NOT NULL,
        AGE INT NOT NULL,
        ADDRESS VARCHAR(60) NOT NULL,
        SALARY DOUBLE NOT NULL
        )
"""

# create tabe
cursorObject.execute(deveperRecords)

print("EMPLOYEE Table is created in Database")
dataBase.close()