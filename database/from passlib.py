from passlib.hash import bcrypt

def hash_password(password):
    return bcrypt.hash(password)

def verify_password(password, hash_value):
    return bcrypt.verify(password, hash_value)

def main():
    password = input("Introduce una contraseña: ")
    hash_value = hash_password(password)
    print("la contraseña hash es:", hash_value)

    password2 = input("Introduce otra contraseña:")
    if verify_password(password2, hash_value):
        print("Las contraseñas son iguales")
    else:
        print("Las contraseñas son diferentes")
        
if __name__=="__main__":
    main()