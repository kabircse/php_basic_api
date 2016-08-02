###Simple RESTful API implementation in PHP

A very simple implementation of RESTful API in PHP for managing Orders and Users pertaining to an Online Food Catering Service. 
Error and exception handling are at their minimum.   

Functionality provided by the REST API:

User related:
*   fetch details for a particular user
*   create a new user.
*   update user details.
*   delete an existing user

MySQL tables :  
*   users  
        
        CREATE TABLE `users` (
        `user_id` int(11) NOT NULL AUTO_INCREMENT,
        `user_fullname` varchar(25) NOT NULL,
        `user_email` varchar(50) NOT NULL,
        `user_password` varchar(50) NOT NULL,
        PRIMARY KEY (`user_id`)
        );
              
API Functions :

An API function can be invoked by passing the function name in url as parameter 'q'  
e.g. http://localhost/api.php?q=functionName

*   insertUser() - Insert a new user in users table  
    
    Method  :   POST   
    Required Parameters -  
    'name'  :   User Name  
    'email' :   User Email ID  
    'pwd'   :   Password  
    
*   updateUser() - Update details of a user

    Method  :   PUT  
    Required Parameters -   
    'id'    :   ID of the user to be updated  
    'name'  :   User Name  
    'email' :   User Email ID  
    'pwd'   :   Password
    
*   deleteUser() - Delete user with specific ID
    
    Method  :   DELETE  
    Required Parameters -  
    'id'    :   ID of the user to be deleted  
    
*   userDetails() - Get details of a user with specific ID
    
    Method  :   GET   
    Required Parameters -
    'id'    :   ID of the user whose details are to be fetched

