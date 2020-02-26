import System

def test_drop_student():
    database = System.System()
    database.load_data()
    database.login('goggins', 'augurrox')
    database.usr.drop_student('yted91', 'software_engineering')
    database.reload_data()
    data = database.load_user_db()
    assert data['yted91']['courses'] != 'software_engineering'