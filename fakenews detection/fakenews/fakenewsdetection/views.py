from django.shortcuts import render, redirect
import pickle

# Create your views here.
from fakenewsdetection.forms import User_Reg

load_model = pickle.load(open(r"C:\Users\user\Desktop\fakenews\final_model.sav", 'rb'))


def home(request):
    return render(request,'home.html')



def register(request):
    form=User_Reg()
    if request.method=='POST':
        form=User_Reg(request.POST)
        if form.is_valid():
            form=form.save(commit=False)
            form.type=1
            form.save()
            return redirect('login')
    return render(request,'register.html',{'form':form})



def adminhome(request):
    return render(request,'adminhome.html')


def userview(request):
    type = request.user.type
    if type == 1:
        return redirect('userhome')
    else:
        return redirect('userhome')

def userhome(request):
    username = request.user.username
    if request.method=='POST':
        getnews=request.POST.get('news')
        print(getnews)
        prediction = load_model.predict([getnews])
        prob = load_model.predict_proba([getnews])
        return render(request, 'userhome.html', {'status': prediction[0], 'score': prob[0][1]})

    return render(request, 'userhome.html',{'username':username})
