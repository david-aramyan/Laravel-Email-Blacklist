# EmailBlacklist package for Laravel 5.7 
### Package provides
- migration to create blacklist_emails table
- method to add new email to the list
- method to check if email is in the list
- method to remove email from the list

### Installation
```sh
$ composer require davaramyan/blacklist
$ php artisan migrate blacklist_emails
```

### Usage

The package comes with the routes listed below. All the methods return json responses.

| Method | ROUTE | PARAMS | SUCCESS RESPONSE |
| ------ | ------ | ------ | ------ |
| POST | /blacklist | email | {"status": "OK", "message": "Success."} |
| GET | /blacklist | email | {"status": "OK", "message": "Email exists."} / {"status": "OK", "message": "Email doesn't exist."} |
| DELETE | /blacklist/{email} | --- | {"status": "OK", "message": "Email deleted."} |


License
----

MIT
