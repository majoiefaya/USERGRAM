import cv2
from cvzone.HandTrackingModule import HandDetector
cap=cv2.VideoCapture(0)
detector=HandDetector(detectionCon=0.0,maxHands=2)

while True:
    succes,img=cap.read()
    hands,img=detector.findHands(img,1)
    hands,img=detector.findHands(img,draw=True)

    #Hand-dict(lmlist-bbox-center-type)
    if hands:
        #Hand1
        hand1=hands[0]
        lmlist1=hand1["lmList"]
        bbox1=hand1["bbox"]#bounding box info x,y,w,h
        centerPoint1=hand1["center"]#center of the hand cx cy
        handType1=hand1["type"]#hand type left right

##        print(len(lmlist1),lmlist1)
##        print(bbox1)
##        print(centerPoint1)
##        print(handType1)
        fingers1=detector.fingersUp(hand1)
        #length,info,img=detector.findDistance(lmlist1[8],lmlist1[12],img)
        #length,info=detector.findDistance(lmlist1[8],lmlist1[12])

        if len(hands)==2:
            hand2=hands[0]
            lmlist2=hand2["lmList"]
            bbox2=hand2["bbox"]#bounding box info x,y,w,h
            centerPoint2=hand2["center"]#center of the hand cx cy
            handType2=hand2["type"]#hand type left right
            fingers2=detector.fingersUp(hand2)
            print(fingers1,fingers2)
            length,info,img=detector.findDistance(lmlist1[8],lmlist2[8],img)
            length,info,img=detector.findDistance(centerPoint1,centerPoint2,img)     
       
    cv2.imshow("Image",img)
    
    cv2.waitKey(1)
    
