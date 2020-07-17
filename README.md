# passwordApp

1 - create project -> OK
2 - create DB
3 - create API

We need actualy: 
A) create login name with passwor
B) getStatus (no exist, exist)
C) delete login



DataBase structure: 

loginApp: 

  id  -  INT PRIMARY KEY
  login_name    - VARCHAR
  password
  app
  expiration_date
  create_on
  cretae_date
  last_change_on
  last_change_date
  delete_on
  delete_date
  
Application: 

  id
  app_name
  description
  
Login:

  id
  user_name
  password
  
NTH:
- add new application ( + work with application [edit, change, delete, licens])
