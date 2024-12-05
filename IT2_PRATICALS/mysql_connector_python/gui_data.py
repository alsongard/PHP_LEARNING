import tkinter as tk
from tkinter import *
import mysql.connector
my_w = tk.Tk()
my_w.geometry("400*250")
myDb = mysql.connector.connect(
	host = "localhost",
	user = "root",
	passwd = "",
	database = "SOFTWARE"
)

# create cursor object
myCursor = myDb.cursor()

# select data from the user
sql = "SELECT * FROM developer"
my_data = myCursor.execute(sql)
i = 0
for sofdev in my_data:
	for j in range(len(sofdev)):
		e = Entry(my_w, width=10, fg='blue')
		e.grid(row=1, column=j)
		e.insert(END, student[j])
	i = i + 1
my_w.mainloop()
