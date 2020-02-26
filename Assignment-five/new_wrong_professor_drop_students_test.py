import System

#test wether the professor could drop students if the student is not in his class
def test_drop_student():
    database = System.System()
    database.load_data()
    database.login('goggins', 'augurrox')
    database.usr.drop_student('yted91', 'cloud_computing')
    database.reload_data()
    data = database.load_user_db()
    assert data['yted91']['courses'] == 'cloud_computing'