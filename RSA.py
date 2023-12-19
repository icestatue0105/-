
letter = {chr(i): f"{i-65:0>2d}" for i in range(65, 91)} #covert ASCII  code A to Z , i=65 i-65=0 so A=00, B=01, C=02, ... , Z=25
letter[' '] = '26'


def key(p,q,e):             # Find the Public key(e,n) and Private key (d,n)
    d = pow(e,-1,(p-1)*(q-1))
    n = p * q
    return d,n

def encrypt(data,e,n):        
    data += ' ' if len(data)%2 else '' #Ensure that the length of the data is even
    pre_encrypt = "".join([letter[i] for i in data]) #Convert data to string number A=00, B=01 then connect them to a new string 'pre_encrypt'
    encrypt_data = [int(pre_encrypt[i:i+4]) for i in range(0,len(pre_encrypt),4)]#Split string 'pre_encrypt' into 4 digits and convert it to an integer in 'encrypt_data'
    encrypt_data = [pow(i,e,n) for i in encrypt_data]#Encrypt for i in encrypt_data, i^e mod n
    return encrypt_data

def decrypt(data,d,n):
    return [pow(i,d,n) for i in data]#Decrypt for i in data, i^d mod n



p,q,e,data= int(input("Enter p: ")),int(input("Enter q: ")),int(input("Enter e: ")),input("Enter plain text: ")

d,n = key(p,q,e)
encrypt_data = encrypt(data,e,n)
decrypt_data = decrypt(encrypt_data,d,n)
print("")
print(f"d: {d}")
print(f"n: {n}","\n")
print(f"(C): {' '.join(list(map(str,encrypt_data)))}","\n")
print(f"(M): {' '.join(list(map(str,decrypt_data)))}")

