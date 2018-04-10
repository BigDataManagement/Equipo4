
file = open("combined_data_4.txt","r")
proces = open("combined_data_4_Clean.txt","w")
doc = file.read()
parts = doc.split(',')
count = 0
while(count < len(parts)):
    agregar = parts[count]
    if '-' in parts[count]:
        date = parts[count]
        dateParts = date.split('-')
        partofdate = dateParts[2]
        truedate = partofdate[0:2]
        newidentifyer = partofdate[2:len(partofdate)-1]
        dateParts.pop(2)
        dateParts.append(truedate)
        dateParts.append(newidentifyer)
        agregar = " ".join(dateParts)
    agregar += '\n'
    proces.write(agregar)
    count +=1
print("limpieza terminada")
proces.close()
file.close()