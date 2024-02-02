import MySQLdb
# https://mysqlclient.readthedocs.io/user_guide.html

db=MySQLdb.connect(host="localhost",user="root",password="",database="securite")
c=db.cursor()
c.execute("SELECT * FROM user WHERE login='admin'")
result = c.fetchone()

def is_admin(username: str) -> bool:
    with db.cursor() as cursor:
        cursor.execute("""
            SELECT
                admin
            FROM
                user
            WHERE
                login = '%s'
        """ % username)
        result = cursor.fetchone()
    admin, = result
    return admin

print(is_admin('admin'))

print(is_admin('test'))
is_admin("'; update user set admin = 'true' where login = 'test';")

# Créer une fonction qui retourne si l'utilisateur est admin ou non
# en allant chercher l'information en base de donnée


# https://realpython.com/prevent-python-sql-injection/