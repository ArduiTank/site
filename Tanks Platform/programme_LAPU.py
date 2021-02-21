from tkinter import *
import serial
import time
from math import *

H = 640
W = 640
i = 0
bloc = ""
back_bloc = ""

def coord(event):
    print((round(((event.y+22)/50+(event.y-22)/50)/2)))
    
def clic():
    global bloc, back_bloc
    back_bloc = can2.create_rectangle(470,50,530,70,fill = 'red')
    bloc = can2.create_image(520, 55,image = imb1_LAPU)

def clic2(event):
    global bloc, back_bloc
    can2.coords(bloc,event.x,event.y)
    can2.coords(back_bloc,event.x-60,event.y-20,event.x+60,event.y+20)
    
def configuration(event):
    print((can2.find_closest(can2.coords(back_bloc)[0],can2.coords(back_bloc)[1],can2.coords(back_bloc)[2],can2.coords(back_bloc)[3])))

fen2 = Tk()

fen2.geometry("640x640")
fen2.configure(bg='#191818')
fen2.resizable(width=False, height=False)
fen2.title("List of predefined actions")

can2 =  Canvas(fen2, width = W,height = H,bg ="#272727")
can2.place(x = 0,y =0)

imb1_LAPU = PhotoImage(file = "Images\\btn_LAPU.png")
btn1 =Button(fen2, image= imb1_LAPU, bg = "#0b2e58" ,bd = 0,activebackground = "#0b2e58",command = clic) 
btn1.place(x = 505 , y= 50)

imb2_LAPU = PhotoImage(file = "Images\\btn_LAPU2.png")
btn2 =Button(fen2, image= imb2_LAPU, bg = "#0b2e58" ,bd = 0,activebackground = "#0b2e58",command = clic)
btn2.place(x = 505 , y= 250)

imfond2 = PhotoImage(file = "Images\\fond_2.png")
can2.create_image(200, H/2, image = imfond2)

fen2.bind("<B1-Motion>",clic2)
fen2.bind("<Double-Button-1>",configuration)
fen2.bind("<Button>",coord)

fen2.mainloop()