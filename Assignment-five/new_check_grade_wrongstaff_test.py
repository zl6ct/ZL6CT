import pytest
import System
import Student

#test what happen if the wrong staff check grades
#the result should result an blank value
def test_wrong_staff_check_grades():
    database = System.System()
    database.login('yted91', 'imoutofpasswordnames')
    grades = database.usr.check_grades('akend3', 'comp_sci')
    assert grades == []
 
