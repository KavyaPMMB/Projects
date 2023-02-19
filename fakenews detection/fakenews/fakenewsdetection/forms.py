from django.contrib.auth.forms import UserCreationForm

from .models import User_model


class User_Reg(UserCreationForm):
    class Meta(UserCreationForm.Meta):
        model=User_model
        fields=UserCreationForm.Meta.fields+('first_name','last_name','email',)