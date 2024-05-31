# Test documentation

Tester:	Gábor Máté <br>
Operating system: 	Windows 10 <br>
Browser: 	Chrome <br>
Date: 	2024.05.31 	

## First test
### Unsuccessful log in
This test atempts a log in with bad credentials. 
#### Steps:
1. Open the site.
2. Click Log in button
3. Type in E-mail adress
4. Type in password
5. Click Log in button
6. Check for error message

## Second test
### Successful log in
This test atempts a log in with already registered credentials.
#### Steps:
1. Open the site.
2. Click Log in button
3. Type in E-mail adress
4. Type in password
5. Click Log in button
6. Check if the url includes "/dashboard"

## Third test
### Successful log out
This test atempts a log in with already registered credentials, after this use the log out function.
#### Steps:
1. Open the site.
2. Click Log in button
3. Type in E-mail adress
4. Type in password
5. Click Log in button
6. Click dropdown menu with username 
7. Click log out button
8. Check if the url includes "/public"

## Fourth test
### Profile check
This test atempts a log in with already registered credentials, after this use the profile function.
#### Steps:
1. Open the site.
2. Click Log in button
3. Type in E-mail adress
4. Type in password
5. Click Log in button
6. Click dropdown menu with username 
7. Click profile button
8. Check if the url includes "/profile"

