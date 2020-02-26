import pytest
import System
import Student
#test wether the system will recongnize the password if not the same datatype
#if can recongnize , the test will pass
def test_check_password():
    database = System.System()
    database.load_data()
    username = 'akend3'

    password = 123454321
    res = database.check_password(username, password)
    assert res == True

	