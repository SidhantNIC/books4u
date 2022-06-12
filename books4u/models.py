from django.db import models
from django.contrib.auth.models import User

# Create your models here.
class books(models.Model):

    class Meta:
        verbose_name_plural='books'
    bname=models.CharField(max_length = 100)
    bauthor=models.CharField(max_length = 100)
    bprice=models.IntegerField()
    bdesc=models.TextField()
    bimage=models.ImageField(upload_to = 'Pics')
    bcondition=models.CharField(max_length = 100)
    sfname= models.CharField(max_length = 100)
    slname= models.CharField(max_length = 100)
    semail = models.CharField(max_length = 100)
    sphone = models.CharField(max_length = 100)


class approvedbooks(models.Model):

    class Meta:
        verbose_name_plural='approvedbooks'
    bname=models.CharField(max_length = 100)
    bauthor=models.CharField(max_length = 100)
    bprice=models.IntegerField()
    bdesc=models.TextField()
    bimage=models.ImageField(upload_to = 'Pics')
    bcondition=models.CharField(max_length = 100)
    sfname= models.CharField(max_length = 100)
    slname= models.CharField(max_length = 100)
    semail = models.CharField(max_length = 100)
    sphone = models.CharField(max_length = 100)



