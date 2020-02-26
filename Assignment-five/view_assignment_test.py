import System

def test_view_assignments():
    database = System.System()
    database.login('akend3', '123454321')
    assignments = database.usr.view_assignments('databases')
    assert assignments[0] == ['assignment1', '1/5/20']
    assert assignments[1] == ['assignment2', '2/5/20']