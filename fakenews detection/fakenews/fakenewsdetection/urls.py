
from django.urls import path

from fakenewsdetection import views

urlpatterns = [
    path('',views.home),
    path('registration',views.register,name='register'),
    path('userhome',views.userhome,name='userhome'),
    path('adminhome',views.adminhome,name='adminhome'),
    path('userview',views.userview,name='userview'),

]
