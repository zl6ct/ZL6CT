import pytest
import System
import Student

def test_check_password():
    database = System.System()
    database.load_data()
    username = 'akend3'
    password = 'Wrong'
    res = database.check_password(username, password)
    assert res == False
    password = 'dskfs'
    res = database.check_password(username, password)
    assert res == False
    password = 22167
    res = database.check_password(username, password)
    assert res == False
    password = '123454321'
    res = database.check_password(username, password)
    assert res == True
	
