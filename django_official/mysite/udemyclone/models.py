from django.db import models

# Create your models here.

class Coursedetails(models.Model):
    title = models.CharField(max_length = 100)
    author = models.CharField(max_length = 100)
    duration = models.CharField(max_length = 100)
    date_created = models.DateField(auto_created=True)
    last_modified = models.DateField(auto_now=True)

    def __str___(self):
        return self.title