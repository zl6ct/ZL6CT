import pytest
import User
import Student
import Staff
import System
import json

#test change students which is not in the same course with TA
def test_change_wrongstaff_grade():
    database = System.System()
    database.login('cmhbf5', 'bestTA')
    database.usr.change_grade('akend3', 'comp_sci', 'assignment1', 10)
    database.reload_data()
    database.login('akend3', '123454321')
    database.reload_data()
    grades = database.usr.check_grades('comp_sci')
    assert grades[0] == ['assignemnt1', 10]