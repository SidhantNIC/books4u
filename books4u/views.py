from django.shortcuts import render, redirect
from django.db import models
from django.http import HttpResponse
from .models import books
from .models import approvedbooks
from django.contrib.auth.models import User, auth
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.db.models import Q
# Create your views here.

def home(request):    
    return render(request,"home.html")

@login_required(login_url="login")
def bookstore(request):
    datas = approvedbooks.objects.all()
    return render(request,'bookstore.html',{'datas':datas})

def adminview(request):
    datas = books.objects.all()
    return render(request,'adminview.html',{'datas':datas})

@login_required(login_url="login")
def search(request):
    if request.method=='POST':
        srch = request.POST['srh']
        if srch:
            match = books.objects.filter(Q(bname__icontains=srch))

            if match:
                return render(request,'search.html', {'sr':match})
            else:
                messages.error(request,'NO result found')
        else:
            return render(request,'search.html')
    return render(request,'search.html')

def login(request):
    if request.method == 'POST':
        username = request.POST['username']
        password = request.POST['password']

        user = auth.authenticate(username=username,password=password)

        if user is not None:
            auth.login(request, user)
            return redirect("/")
        else:
            messages.info(request,'invalid credentials')
            return redirect('login')
    else:
        return render(request,'login.html')

@login_required(login_url="login")
def seller(request):
    if request.method == 'POST':
        bname=request.POST['bname']
        bauthor=request.POST['bauthor']
        bimage=request.FILES['bimage']
        bcondition=request.POST['bcondition']
        bprice=request.POST['bprice']
        bdesc=request.POST['bdesc']
        sfname=request.POST['sfname']
        slname=request.POST['slname']
        semail=request.POST['semail']
        sphone=request.POST['sphone']


        data = books(bname=bname, bauthor=bauthor, bimage=bimage, bcondition=bcondition, bprice=bprice, bdesc=bdesc, sfname=sfname, slname=slname, semail=semail, sphone=sphone )
        data.save()
        print('BOOK UPLOADED')
        return redirect('sellerthankyou.html')

    else:
        return render(request,'seller.html')

def sellerthankyou(request):
    return render(request,'sellerthankyou.html')


def register(request):
    if request.method == 'POST':
        fname=request.POST['fname']
        lname=request.POST['lname']
        username=request.POST['username']
        email=request.POST['email']
        password1=request.POST['password1']
        password2=request.POST['password2']

        if password1==password2:
            if User.objects.filter(username=username).exists():
                messages.info(request,'This username is already taken')
                return render(request,'register.html')
            elif User.objects.filter(email=email).exists():
                messages.info(request,'This email is already taken')
                return render(request,'register.html')
            else:
                user = User.objects.create_user(first_name=fname, last_name=lname, username=username, email=email, password=password1)
                user.save()
                print('USER CREATED')
                return redirect('login.html')

        else:
            messages.info(request,'Password not matched')
            return render(request,'register.html')
        return redirect('/')
    
    else:
        return render(request,'register.html')
def logout(request):
    auth.logout(request)
    return redirect("/")
 

