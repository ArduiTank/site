from tkinter import *
from math import *
import serial 
from tkinter import ttk
import webbrowser
import time
# création de variable de départ
a = ""
H = 640
W = 640
 
def progressBar(step):
    global progressbar, flaggProgress,fenetre_bar
    flaggProgress += 1
    if flaggProgress < 100/step:
        progressbar.step(step)
        loop = fen1.after(50, lambda : progressBar(step))
    else :
        progressbar.destroy()
        fenetre_bar.destroy()
        flaggProgress = 0      
        return True
         
def bar_launch():
    global imfond_launch, progressbar, flaggProgress, fenetre_bar
    fenetre_bar = Frame(fen1)
    fenetre_bar.grid()
    
    can_bar = Canvas(fenetre_bar, width = 640, height = 640)
    can_bar.grid()
    
    imfond_launch = PhotoImage(file = "Images\\bg.png") 
    can_bar.create_image(320, 320, image = imfond_launch)
    
    progressbar = ttk.Progressbar(orient=HORIZONTAL, length=250, mode='determinate', value = 0, style = "Futur.Horizontal.TProgressbar")
    progressbar.place(x = 200, y = 320)
    
    flaggProgress = 0
    progressBar(5)
      


def loopValues():   
    global TanksIcon,Damage, CannonLoading, Munitions, StructurePoints, Velocity, RotationSpeed, LabelTank
    DamageRate = Degats.get()
    LifeRate = Vie.get()
    LabelValue1.configure(text=str(DamageRate)+"%")   
    LabelValue2.configure(text=str(LifeRate)+"%")   
    
    Damage = DamageRate*3 + 25                                          
    CannonLoading = Damage/32                                  
    Munitions = 9750/Damage    
                                  
    StructurePoints = LifeRate*25                                      
    Velocity = 15*log((5/(StructurePoints/1000.0)), 10)                        
    RotationSpeed = 60*log((6/(StructurePoints/1000.0)), 10)
    
    StatDamage.configure(text = Damage)
    can.coords(RectDamage, coox1 , cooy1 , int(coox1 + Damage/2.683) , cooy2) # MaxDamage/longRect : 322/120 = 2.683
    StatLoading.configure(text = round(CannonLoading, 1))
    can.coords(RectLoading, coox1 , cooy1+20 , int(coox1 + CannonLoading/0.08385) , cooy2+20)
    StatMunitions.configure(text = int(Munitions))
    can.coords(RectMunitions, coox1 , cooy1+40 , int(coox1 + Munitions/0.9558) , cooy2+40 )
    
    StatLife.configure(text = StructurePoints)
    can.coords(RectLife, coox1 , cooy1+80 , int(coox1 + StructurePoints/20.625) , cooy2+80 )
    StatSpeed.configure(text = round(Velocity,1))
    can.coords(RectSpeed, coox1 , cooy1+100 , int(coox1 + Velocity/0.125) , cooy2+100 )
    StatRotSpeed.configure(text = round(RotationSpeed,1))
    can.coords(RectRotSpeed, coox1 , cooy1+120 , int(coox1 + RotationSpeed/0.53959) , cooy2+120 )
    
    if LifeRate < 46 :  
        can.delete(TanksIcon) 
        TanksIcon = can.create_image(500, 520, image = listImTanks[0]) 
        can.delete(LabelTank)
        LabelTank = can.create_image(372, 530, image = listLabTanks[0]) 
        
        #LabelTanks.configure(text = "Light tank")
    elif LifeRate < 72 :
        can.delete(TanksIcon) 
        TanksIcon = can.create_image(500, 520, image = listImTanks[1]) 
        can.delete(LabelTank)
        LabelTank = can.create_image(379, 529, image = listLabTanks[1]) 
        
        #LabelTanks.configure(text = "Medium tank")
    else :
        can.delete(TanksIcon) 
        TanksIcon = can.create_image(500, 516, image = listImTanks[2]) 
        can.delete(LabelTank)
        LabelTank = can.create_image(370, 530, image = listLabTanks[2]) 
        
        #LabelTanks.configure(text = "Heavy tank")
        
    loop = fen1.after(50, loopValues)
    
    
def PeripheriqueMenu():
    global entry_com, Labelcom, FlaggMenu
    
    if FlaggMenu == 0 :
        MenuFrame()
    else :    
        CleanMenu()
    
    Labelcom = Label(fen1,text="insérer l'entrée Arduino:", fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",12))
    Labelcom.place(x = 30,y =160)
    
    entry_com = Entry(fen1,width = 7,font=("OCR A Extended",16))
    entry_com.place(x = 110,y = 190)
    FlaggMenu = "PeripheriqueMenu"
    
def bindcom(event):
    can.bind("<KeyPress-Return>",com)
    
def com (event):
    global ser
    Ncom = entry_com.get()
    
    #info permettant la liaison série entre l'arduino et python
    ser = serial.Serial(
    port = Ncom,
    baudrate = 9600, 
    parity = serial.PARITY_ODD, 
    stopbits = serial.STOPBITS_TWO, 
    bytesize = serial.EIGHTBITS
    ) 
    DestroyMenu()
    
def ExplicationMenu():
    global instruction, FlaggMenu
    
    if FlaggMenu == 0 :
        MenuFrame()
    else :    
        CleanMenu()
    instruction = Label(fen1,text="Ce programme a pour but\nde pouvoir personnaliser\n les statistiques des Tanks Uno.\n"
                        "pour ce faire, vous avez deux curseurs\npermettant la customisation des statistique.\n"
                        "A vous de choisir quel type de vhéhicule\nest le plus adapter à votre style de jeu.",
                        fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",9))
    instruction.place(x=5,y = 70)
    FlaggMenu = "ExplicationMenu"
    
def StatMenu():
    global calcule_ex, FlaggMenu
    
    if FlaggMenu == 0 :
        MenuFrame()
    else :    
        CleanMenu()  
        
    calcule_ex = Label(fen1,text=  "A fin de mieux comprendre\n"
                                       "le ratio des statistiques,\n"
                                       "une explication sur les calculs\n"
                                       "peut etre intéressante.\n",
                                       fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",9))
    calcule_ex.place(x=5,y = 70)    
    FlaggMenu = "StatMenu"
    
def CleanMenu():

    if FlaggMenu == "StatMenu" :
        calcule_ex.destroy()
        
    if FlaggMenu == "ExplicationMenu" :
        instruction.destroy()

    if FlaggMenu == "PeripheriqueMenu" :
        Labelcom.destroy()
        entry_com.destroy()
  
def P_T0_A():
    global progressbar
    if ser.isOpen():
            print("ok,le chemin a été trouvé")
            progressbar = ttk.Progressbar(orient=HORIZONTAL, length=330, mode='determinate', value = 0, style = "Futur.Horizontal.TProgressbar")
            progressbar.place(x = 95, y = 550)
            progressBar(3)
            time.sleep(2)
       
    liste_data = [Damage, CannonLoading, Munitions, StructurePoints, Velocity, RotationSpeed]
    ser.write(str(Damage).encode('ascii'))

    print("les informations ont été transmises\nvous pouvez enlever le port en toute sécurité") 
    
def DestroyMenu():
    global  FlaggMenu, canMenu, bgMenu, imB2, btnCloseMenu
    CleanMenu()
    canMenu.delete(ImBgMenu)
    canMenu.delete(imB2)
    btnCloseMenu.destroy()
    canMenu.destroy()     
    FlaggMenu = 0
    
def MenuFrame():
    global canMenu, bgMenu, imB2, FlaggMenu,btnCloseMenu, ImBgMenu 

    canMenu = Canvas(fen1, width = 320, height = 320)
    canMenu.place(x=0, y =0)
    
    bgMenu = PhotoImage(file = "Images\\image_pe.png") 
    ImBgMenu = canMenu.create_image(160, 160, image = bgMenu)
    imB2 = PhotoImage(file = "Images\\back.png")
    
    btnCloseMenu = Button(fen1,image = imB2, bg = "#021722" ,bd = 0,activebackground = "#021722", command = DestroyMenu)
    btnCloseMenu.place(x = 265, y = 298)
    
def TextStats(event, text):
    global imbgStatsInfo, LabelStatstextDAMAGE, LabelStatstextLOADING, LabelStatstextMUNITIONS, LabelStatstextLIFE, LabelStatstextSPEED , LabelStatstextROTSPEED
    
    imbgStatsInfo = can.create_image(170, 390, image = bgStatsInfo)
    if text == listoftags[0]:
        LabelStatstextDAMAGE = Label(fen1,text="Damage :  \n\nQuantitée \nde points \nde vie à  \ninfliger  \nà l'ennemi" ,fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextDAMAGE.place(x = 120,y = 310)
    elif text == listoftags[1]:
        LabelStatstextLOADING = Label(fen1,text="Loading : \n\nQuantitée \nde temps  \nde        \nchargement\nd'un obus \nen seconde" ,fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextLOADING.place(x = 120,y = 310)
    elif text == listoftags[2]:
        LabelStatstextMUNITIONS = Label(fen1,text="Munitions:\n\nQuantitée \nd'obus    \ndisponible\ndans le   \nvéhicule  " ,fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextMUNITIONS.place(x = 120,y = 310)
    elif text == listoftags[3]:
        LabelStatstextLIFE = Label(fen1,text="Structure \nPoints :  \n\nQuantitée \nde points \nde vie    \ndu        \nvéhicule  " ,fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextLIFE.place(x = 120,y = 310)
    elif text == listoftags[4]:
        LabelStatstextSPEED = Label(fen1,text="Speed :   \n\nVitesse du\nvéhicule  \nen km/h   " ,fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextSPEED.place(x = 120,y = 310)
    elif text == listoftags[5]:
        LabelStatstextROTSPEED = Label(fen1,text="Rotation  \nSpeed :   \n\nVitesse de\nrotation  \ndu        \nvéhicule  \nen °/sec  ",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
        LabelStatstextROTSPEED.place(x = 120,y = 310)
    
def DelTextStats(event, text):
    global imbgStatsInfo
    
    can.delete(imbgStatsInfo) 
    if text == listoftags[0]:
        LabelStatstextDAMAGE.destroy()
    elif text == listoftags[1]:
        LabelStatstextLOADING.destroy()
    elif text == listoftags[2]:
        LabelStatstextMUNITIONS.destroy()
    elif text == listoftags[3]:
        LabelStatstextLIFE.destroy()  
    elif text == listoftags[4]:
        LabelStatstextSPEED.destroy()  
    elif text == listoftags[5]:
        LabelStatstextROTSPEED.destroy()  
        
def SITE():
     webbrowser.open("http://arduitank.be/")

# fenetre principal ---------------------------------------------------------------------------------

fen1 = Tk()

#personnaliser la fenetre
fen1.geometry("640x640")
fen1.configure(bg='blue')
fen1.resizable(width=False, height=False)
fen1.title("Tanks Uno")
fen1.iconbitmap("Images\\ico.ico")

can = Canvas(fen1, height = H, width = W,bg = 'blue')
can.place(x = 0,y =0)

imfond = PhotoImage(file = "Images\\bg.png") 
can.create_image(H/2, H/2, image = imfond)

colorPB1 = "#011e30"
colorPB2 = '#00f7ff'
s = ttk.Style()
s.theme_use("clam")
s.configure("Futur.Horizontal.TProgressbar", background=colorPB2, bordercolor=colorPB1, troughcolor=colorPB1, darkcolor=colorPB1)

bgStats = PhotoImage(file = "Images\\bgStats.png") 
can.create_image(400,390, image = bgStats)

LabelStatsDamage = Label(fen1,text="Damage     :",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsDamage.place(x = 260,y = 310)
LabelStatsLoading = Label(fen1,text="Loading (s):",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsLoading.place(x = 260,y = 330)
LabelStatsMunitions = Label(fen1,text="Munitions  :",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsMunitions.place(x = 260,y = 350)

LabelStatsLife = Label(fen1,text="St. Points :",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsLife.place(x = 260,y = 390)
LabelStatsSpeed = Label(fen1,text="Speed(km/h):",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsSpeed.place(x = 260,y = 410)
LabelStatsRotationSpeed = Label(fen1,text="Rot. Speed :",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsRotationSpeed.place(x = 260,y = 430)
LabelStatsRotationSpeedDS = Label(fen1,text="(°/s) ",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
LabelStatsRotationSpeedDS.place(x = 290,y = 450)

coox1 = 380
cooy1 = 316
coox2 = coox1 + 120
cooy2 = cooy1 + 10
RectDamage = can.create_rectangle(coox1 , cooy1 , coox2 , cooy2 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "DamageClick")
RectLoading = can.create_rectangle(coox1 , cooy1+20 , coox2 , cooy2+20 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "LoadingClick" )
RectMunitions = can.create_rectangle(coox1 , cooy1+40 , coox2 , cooy2+40 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "MunitionsClick" )
RectLife = can.create_rectangle(coox1 , cooy1+80 , coox2 , cooy2+80 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "LifeClick" )
RectSpeed = can.create_rectangle(coox1 , cooy1+100 , coox2 , cooy2+100 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "SpeedClick" )
RectRotSpeed = can.create_rectangle(coox1 , cooy1+120 , coox2 , cooy2+120 , fill = "#52df7f", activefill = "#3daf6d", outline = "#52df7f", activeoutline = "#3daf6d", tags = "RotSpeedClick" )

listoftags = ["DamageClick", "LoadingClick", "MunitionsClick", "LifeClick", "SpeedClick", "RotSpeedClick"]
"""
for i in range(0,6):   
    can.tag_bind(listoftags[i],'<Enter>',lambda event: TextStats(event, listoftags[i])) #Enter, la souris est posé sur le rectangle "RectDamage"
    can.tag_bind(listoftags[i],'<Leave>',lambda event: DelTextStats(event, listoftags[i])) #Enter, la souris est posé sur le rectangle "RectDamage"
"""
can.tag_bind(listoftags[0],'<Enter>',lambda event: TextStats(event, listoftags[0])) #Enter, la souris est posé sur le rectangle "RectDamage"
can.tag_bind(listoftags[0],'<Leave>',lambda event: DelTextStats(event, listoftags[0])) #Enter, la souris est posé sur le rectangle "RectDamage"
can.tag_bind(listoftags[1],'<Enter>',lambda event: TextStats(event, listoftags[1])) 
can.tag_bind(listoftags[1],'<Leave>',lambda event: DelTextStats(event, listoftags[1])) 
can.tag_bind(listoftags[2],'<Enter>',lambda event: TextStats(event, listoftags[2])) 
can.tag_bind(listoftags[2],'<Leave>',lambda event: DelTextStats(event, listoftags[2])) 
can.tag_bind(listoftags[3],'<Enter>',lambda event: TextStats(event, listoftags[3])) 
can.tag_bind(listoftags[3],'<Leave>',lambda event: DelTextStats(event, listoftags[3]))
can.tag_bind(listoftags[4],'<Enter>',lambda event: TextStats(event, listoftags[4])) 
can.tag_bind(listoftags[4],'<Leave>',lambda event: DelTextStats(event, listoftags[4]))
can.tag_bind(listoftags[5],'<Enter>',lambda event: TextStats(event, listoftags[5])) 
can.tag_bind(listoftags[5],'<Leave>',lambda event: DelTextStats(event, listoftags[5]))
bgStatsInfo = PhotoImage(file = "Images\\bgStatsInfo.png") 

StatDamage = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatDamage.place(x = 505,y =309)
StatLoading = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatLoading.place(x = 505,y =329)
StatMunitions = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatMunitions.place(x = 505,y =349)

StatLife = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatLife.place(x = 505,y =389)
StatSpeed = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatSpeed.place(x = 505,y =409)
StatRotSpeed = Label(fen1,text="20",fg='#00f7ff',bg='#021e2d',font=("OCR A Extended",12))
StatRotSpeed.place(x = 505,y =429)


#Curseur 1 ---------------------------------------------------------------------
Degats = Scale(fen1, orient='horizontal', from_=20, to=99,
               resolution=1, length=350,
               sliderrelief = 'flat', 
               troughcolor = '#011e30', activebackground = '#00f7ff',
               bg = "#0b2e58",highlightthickness=0, showvalue = 0, bd = 0 )
Degats.place(x = W/2-180,y = 150)

LabelDamage = PhotoImage(file = "Images\\Damage.png") 
can.create_image(183, 120, image = LabelDamage)

LabelValue1 = Label(fen1,text="20",fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",16), relief = 'sunken')
LabelValue1.place(x = W/2+200,y =143)

imbgCurs = PhotoImage(file = "Images\\bgCurs.png") 
can.create_image(W/2-5, 158, image = imbgCurs)


#Curseur 2 ---------------------------------------------------------------------
Vie = Scale(fen1, orient='horizontal', from_=20, to=99,
               resolution=1, length=350,
               sliderrelief = 'flat', 
               troughcolor = '#011e30', activebackground = '#00f7ff',
               bg = "#0b2e58",highlightthickness=0, showvalue = 0, bd = 0)
Vie.place(x = W/2-180,y = 250)

LabelLife = PhotoImage(file = "Images\\StructurePoints.png") 
can.create_image( 252, 220, image = LabelLife)         
  
LabelValue2 = Label(fen1,text="20",fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",16), relief = 'sunken')
LabelValue2.place(x = W/2+200,y =243)

imbgCurs2 = PhotoImage(file = "Images\\bgCurs.png") 
can.create_image(W/2-5, 258, image = imbgCurs2)

#Char image --------------------------------------------------------------------------

imTanks = ["Images\\Charleger.png","Images\\Charmoyen.png", "Images\\Charlourd.png"]
listImTanks = [1,2,3]
for i in range(0,3):   
    listImTanks[i] = PhotoImage(file = imTanks[i])
    
LabTanks = ["Images\\LightTank.png","Images\\MediumTank.png", "Images\\HeavyTank.png"]
listLabTanks = [1,2,3]
for i in range(0,3):   
    listLabTanks[i] = PhotoImage(file = LabTanks[i])
   
TanksIcon = can.create_image(150, 310, image = listImTanks[0]) 
LabelTank = can.create_image(250, 305, image = listLabTanks[0]) 

        
#LabelTanks = Label(fen1,text="LIght Tank",fg='#00f7ff',bg='#095a8f',font=("OCR A Extended",16))
#LabelTanks.place(x = 200,y = 295)

#Bouton -----------------------------------------------------------------------------------------------------------
imb1 = PhotoImage(file = "Images\\bouton1.png") 
Button(fen1, image= imb1, bg = "#0b2e58" ,bd = 0,activebackground = "#0b2e58", command = P_T0_A).place(x = H-520 , y= W-140) 
loopValues()

#Menu déroulant --------------------------------------------------------------------------------------------------

menu_bar = Menu(fen1)

    
#creer un premier menu option
file_menu1 = Menu(menu_bar, tearoff=0, activebackground = '#095a8f')     #tearoff==pas de tiret
file_menu1.add_command(label="périphérique", command= PeripheriqueMenu)
file_menu1.add_command(label="Quitter le programme ", command= fen1.destroy)
menu_bar.add_cascade(label="Options", menu=file_menu1)

file_menu2 = Menu(menu_bar, tearoff=0, activebackground = '#095a8f') 
file_menu2.add_command(label="Generale", command= ExplicationMenu)
file_menu2.add_command(label="Statistique", command= StatMenu)
file_menu2.add_command(label="Site Internet", command= SITE)
menu_bar.add_cascade(label="Aide", menu=file_menu2)
    
#configurer la fenetre pour le menu bar
fen1.config(menu=menu_bar)

#clavier----------------------------------------------------------------------------------------------------------
fen1.bind("<KeyPress-Return>",com)
fen1.bind("<KeyRelease-Return>",bindcom)

FlaggMenu = 0

bar_launch()

fen1.mainloop()

