import pytest
import System
import Student


def test_add_student():
    gradingSystem = System.System()
    gradingSystem.load_data()
    gradingSystem.login('goggins', 'augurrox')
    gradingSystem.usr.add_student('yted91', 'databases')
    gradingSystem.reload_data()
    gradingSystem.login('yted91', 'imoutofpasswordnames')
    courses = gradingSystem.usr.courses
    assert 'software_engineering'  in courses
 
