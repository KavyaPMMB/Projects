from django.contrib.auth.models import AbstractUser
from django.db import models

# Create your models here.

class User_model(AbstractUser):
    first_name=models.CharField(max_length=200)
    last_name=models.CharField(max_length=200)
    email=models.EmailField(max_length=200)
    type=models.IntegerField(null=True)