import face_recognition
import sys
ivan_image = face_recognition.load_image_file("ivan.jpg")
artem_image = face_recognition.load_image_file("artem.png")
unknown_image = face_recognition.load_image_file("get.jpg")

ivan_encoding = face_recognition.face_encodings(ivan_image)[0]
artem_encoding = face_recognition.face_encodings(artem_image)[0]
unknown_encoding = face_recognition.face_encodings(unknown_image)[0]

result = face_recognition.compare_faces([ivan_encoding, artem_encoding], unknown_encoding)

# file = open("data.txt", "w")
#
# file.write(str(result))
#
# file.close()

sys.stdout.write(str(result))