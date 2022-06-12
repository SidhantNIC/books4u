from django.urls import path
from . import views
urlpatterns = [
    path('',views.home,name='home'),
    path('register.html',views.register,name='register'),
    path('seller.html',views.seller,name='seller'),
    path('search.html',views.search,name='search'),
    path('login.html',views.login, name='login'),
    path('logout.html',views.logout,name='logout'),
    path('bookstore.html',views.bookstore, name='bookstore'),
    path('adminview.html',views.adminview, name='adminview'),
    path('sellerthankyou.html',views.sellerthankyou,name='sellerthankyou'),

]