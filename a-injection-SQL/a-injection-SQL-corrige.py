import MySQLdb
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
                login = %(username)s
        """, {
            'username': username
        })
        result = cursor.fetchone()

    if result is None:
        # User does not exist
        return False

    admin, = result
    return admin

print(is_admin('admin'))

print(is_admin('test'))
is_admin("'; update user set admin = 'true' where login = 'test';")

# Le code malveillant ne fonctionne plus

# https://realpython.com/prevent-python-sql-injection/