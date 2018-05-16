import sys,os, random
foodArray = []
f=open('FoodDB.txt', 'r',encoding='utf-8')
foodArray = f.readlines()
f.close()
rand = random.randint(0,len(foodArray))
print(foodArray[rand])
print("Content-type: text/html\n")
print("""<!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Обработка данных форм</title>
        </head>
        <body>""")

print("<h1>Обработка данных форм!</h1>")
print("<p>TEXT_1: {}</p>")
print(foodArray[rand])

print("""</body>
        </html>""")
