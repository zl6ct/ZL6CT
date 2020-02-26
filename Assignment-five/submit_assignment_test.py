import System


def test_submit_assignment():
    database = System.System()
    database.login('yted91', 'imoutofpasswordnames')
    database.usr.submit_assignment('cloud_computing', 'assignment3', 'this is a submission', '03/29/20')
    data = database.load_user_db()
    assert data['yted91']['courses']['cloud_computing']['assignment3']['ontime'] == True