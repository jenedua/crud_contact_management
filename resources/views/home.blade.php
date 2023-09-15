@extends('master')

@section('content')
<h2>home</h2> <a href="{{route('contacts.index')}}">List contacts</a>
<p>
    Contact Management
    Web application


    Develop a CRUD Laravel web application to manage contacts

    Application Features

    The web application should have 5 features:

    1 - An index page with a list of existing contacts.

    2 - A page with a form for adding new contacts.

    3 - A page for showing contact details.

    4 - Allow editing an existing record

    5 - Allow deletion of an existing record

    Considerations

    A contact is an entity with 4 fields: ID, Name, Contact and email address. Name should be a string of any size greater than 5, contact should be 9 digits, and email should be a valid email.

    Each row in the index page should have a link to edit the contact, and a button to delete the contact. The delete should perform a soft delete of the record, using Laravel features.

    The contact details page should show all the fields of the contact plus the edit link and the delete button.

    Contact and email address should be unique, two contacts cannot have the same.

    Any needed database structure information or data should be added using migrations and / or seeds.

    Always use Laravel native features when possible, including routes, controllers, form validation rules, soft deletes and other features.

    Additional Requirements
    The following requirements should be implemented if within test execution time:

    Allow viewing the list of contacts by anyone, but the other features should only be accessed by an authenticated user. This can be a static user previously created.
    Implement tests for checking form validation errors when adding or editing contacts.

    Development steps

    1 - Access CloudCMD (file manager and terminal)

    2 - Create and Initialize a repository and push the baseline version of the Laravel site to it

    3 - Make several pushes with code changes according to best practices
    Notes
    The development environment already comes with Laravel 10 preinstalled. In case of any error, one can install a fresh version of Laravel through the command line or through the CloudCMD file manager.

    If installing a new version of Laravel, do not delete the .env and .htaccess files, or the environment will stop working, and the exercise will not be taken into consideration.

    The exercise environment uses PHP version 8.1, you will need to create code that is compatible with this PHP version.

    The env and .htaccess files are required for the proper functioning of the environment, and are already present in the environment. Please do not delete or change these files unless strictly necessary.

</p>



@endsection