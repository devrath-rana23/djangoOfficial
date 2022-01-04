#  python3 -m pip install --upgrade pip
# python3 -m venv tutorial-env
# source /var/www/html/cart_app/djangoOfficial/django_official/tutorial-env/bin/activate
# python -m pip install Django
# django-admin startproject mysite (This will create two directories one having core project folder with same name and manage.py file and other is core project folder)
# cd mysite
# python manage.py(To find all commands list that it can run)

#
The inner mysite/ directory is the actual Python package for your project. Its name is the Python package name you’ll need to use to import anything inside it (e.g. mysite.urls).

mysite/__init__.py: An empty file that tells Python that this directory should be considered a Python package. 

mysite/settings.py: Settings/configuration for this Django project.

mysite/urls.py: The URL declarations for this Django project; a “table of contents” of your Django-powered site.

mysite/asgi.py: An entry-point for ASGI-compatible web servers to serve your project.

mysite/wsgi.py: An entry-point for WSGI-compatible web servers to serve your project.
#

# python manage.py runserver (Just like phpp artisan serve)

# python manage.py runserver 8080 (To assign port manually)

# Projects vs. apps
An app is a web application that does something – e.g., a blog system, a database of public records or a small poll app. A project is a collection of configuration and apps for a particular website. A project can contain multiple apps. An app can be in multiple projects.
# Your apps can live anywhere on your Python path.

# python manage.py startapp polls

# DB installation
$ sudo apt-get install python3-dev default-libmysqlclient-dev build-essential
$ pip install mysqlclient
Configure settings.py and run
# python manage.py migrate 

# configure settings file for polls map after making model classes for it
# run "python manage.py makemigrations polls"
# run "python manage.py sqlmigrate polls 0001" to check the sql commands run by 0001_initial.py migration file generated due to above command
# then run python manage.py migrate again to run newly created migration file 0001

# how to make migrations
Change your models (in models.py).
Run python manage.py makemigrations to create migrations for those changes
Run python manage.py migrate to apply those changes to the database.
#

# Queries in shell
>>> from app_name.models import class_name
>>> b = class_name(name='Beatles Blog', tagline='All the latest Beatles news.')
>>> b.save()

#

# Query debug
>>> from sampleapp.models import Student  
>>> queryset = Student.objects.all()  
>>> queryset  
## str(queryset.query)  
#

# Creating an admin user
# python manage.py createsuperuser

# Start development server
# python manage.py runserver

# Make the poll app modifiable in the admin¶
# make changes to polls/admin.py

# Introducing automated testing
# python manage.py shell
#
>>> import datetime
>>> from django.utils import timezone
>>> from polls.models import Question
>>> # create a Question instance with pub_date 30 days in the future
>>> future_question = Question(pub_date=timezone.now() + datetime.timedelta(days=30))
>>> # was it published recently?
>>> future_question.was_published_recently()
True
#

# Running tests
# python manage.py test polls

# Test a view

## FOR MAKING API

# pip install djangorestframework

# update settings.py
INSTALLED_APPS = [
    # All your installed apps stay the same
    ...
    'rest_framework',
]

# Serialize the model

# create medium_myapi/serializers.py

# Display the data

# pip install django-coreapi (for api documentation)


##