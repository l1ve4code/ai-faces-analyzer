import cv2, os

face_cascade_db = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")

files = os.listdir("images")
count = 0
for i in files:
    count += 1
    img = cv2.imread("images/%s" % format(i))
    img_gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

    faces = face_cascade_db.detectMultiScale(img, 1.1, 19)
    for (x,y,w,h) in faces:
        cv2.rectangle(img, (x,y),
                      (x+w,y+h), (0,255,0),2)

    cv2.imshow(str(count), img)
    cv2.waitKey(500)
    cv2.destroyAllWindows()