import pytest
import User
import Student
import Staff
import System
import json


def test_change_grade():
    database = System.System()
    database.login('cmhbf5', 'bestTA')
    database.usr.change_grade('yted91', 'software_engineering', 'assignment1', 10)
    database.reload_data()
    database.login('yted91', 'imoutofpasswordnames')
    database.reload_data()
    grades = database.usr.check_grades('software_engineering')
    assert grades[0] == ['assignemnt1', 10]