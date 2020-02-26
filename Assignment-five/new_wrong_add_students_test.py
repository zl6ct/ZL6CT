import pytest
import System
import Student

#saab is not the instructor for database, it won't add the students to database
def test_wrong_professor_add_student():
    gradingSystem = System.System()
    gradingSystem.load_data()
    gradingSystem.login('saab', 'boomr345')
    gradingSystem.usr.add_student('yted91', 'databases')
    gradingSystem.reload_data()
    gradingSystem.login('yted91', 'imoutofpasswordnames')
    courses = gradingSystem.usr.courses
    assert 'software_engineering' not in courses
 
