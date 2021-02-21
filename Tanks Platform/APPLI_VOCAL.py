from tkinter import *
import speech_recognition as sr
import serial 
import time
#from Bibliothèque_Q import *

H = 640
W = 640
texte = ""
mot = ""

liste_bonjour = ["bjr","bonjour","salut","slt","hello"]

def Vocal ():
    global texte
    word = sr.Recognizer()
    with sr.Microphone() as source:
        audio = word.listen(source)
        
    try:
         texte = word.recognize_google(audio,language="fr-FR")
         texte = texte.lower()
         print(texte)
    except sr.UnknownValueError:
        print("l'audio n'a pas été compris")
    
    except sr.RequestError as e:
        print("le service Google Speech API ne fonctionne plus"+format(e))
        
        
def recuperation(event):
    global texte
    mot = entry.get()
    mot = mot.lower()
    print("mot")
    #if mot in liste_bonjour or texte in liste_bonjour :
        #print("ok ca marche")


    
    
def bindrecuperation(event):
    can2.bind("<KeyPress-Return>",recuperation)
    

fen2 = Tk()

#personnaliser la fenetre
fen2.geometry("640x640")
fen2.configure(bg='blue')
fen2.resizable(width=False, height=False)
fen2.title("Tanks Uno")
fen2.iconbitmap("Images\\ico.ico")

can2 = Canvas(fen2, height = H, width = W,bg = 'blue')
can2.place(x = 0,y =0)

imfond2 = PhotoImage(file = "C:\\Users\\Admin\\Pictures\\application2.png") 
can2.create_image(H/2, H/2, image = imfond2)

bou2 = Button(can2,text="Parler",font=("BankGothic Md BT",24), fg='#10E7E5',command = Vocal)
bou2.place(x = W/2 - 250, y = H/2 + 240)


entry = Entry(fen2,font=("courrier",24))
entry.place(x = W/2 - 190,y = H/2 + 150)

fen2.bind("<KeyPress-Return>",recuperation)
fen2.bind("<KeyRelease-Return>",bindrecuperation)

mainloop()