# Generated by Django 3.0.4 on 2020-03-12 17:07

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('books4u', '0001_initial'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='books',
            name='sellerid',
        ),
    ]
