import System
import pytest

def test_check_grades():
    database = System.System()
    database.login('akend3', '123454321')
    checkgrades = database.usr.check_grades('databases')
    assert checkgrades[0] == ['assignment1', 23]
    assert  checkgrades[1] == ['assignment2', 46]