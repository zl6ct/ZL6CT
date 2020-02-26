import pytest
import System


def test_create_assignment():
    database = System.System()
    database.login('cmhbf5', 'bestTA')
    database.load_data()
    database.usr.create_assignment('assignment4', '04/03/20', 'cloud_computing')
    data = database.load_course_db()
    assert data['cloud_computing']['assignments']['assignment4']['due_date'] == '04/03/20'