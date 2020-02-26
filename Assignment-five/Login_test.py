import pytest
import System
import User
import Student

def test_login_system():
    database = System.System()
    database.login('akend3', '123454321')
    database.load_data()
    user = database.load_user_db()
    users = database.usr
    assert users.name == "akend3"

    assert users.password == '123454321'