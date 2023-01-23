# x=input("saisir x")
# x=int(x)

# if(x==4):
#     print("yacouba")
# else:
#     print("oki")
from gtts import gTTS
import os
# filin = open("essaie.txt", "r")
# filin.read()
# fichier = open("essaie.txt", "r")
fichier = open("essayer.txt","r")
mytext=fichier.read()
fichier.close()
# mytext=filin
# filin.close()
language = 'fr'
textSpeech = gTTS(text=mytext, lang=language, slow=False)
textSpeech.save("super_programme.mp3")
os.popen("super_programme.mp3")