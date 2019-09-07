import re

def is_username_valid(username):
    if re.match(r'[A-Z0-9@#$%^&+=]', username):
        print('False')
    elif re.match(r'[a-z]{5,}', username):
        if (len(username)<=9):
            print('True')
        else:
            print('False')
    else:
        print('False')
        

def is_password_valid(password):
    if re.match(r'[A-Za-z0-9@#$%^&+=]{8,}', password):
        print('True')
    else:
        print('False')
        

is_username_valid('cod3r')
is_username_valid('siska')
is_password_valid('p4s$gW')
is_password_valid('codeYourFuture!123')