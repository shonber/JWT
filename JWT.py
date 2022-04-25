import jwt # Importing the module

key = 'secret' # Can be enything inside the quotes.
encoded = jwt.encode({'data': {"name":"admin"}}, key, algorithm='HS256') # Creating the JWT.
print(encoded) # Just to display it to the screen.
