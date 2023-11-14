import numpy as np

def initializeMatrix(key):
    # Inisialisasi matriks 5x5 dengan huruf-huruf dari kunci
    key = key.replace("j", "i")
    key = ''.join(sorted(set(key), key=key.find))
    matrix = np.array(list(key + "abcdefghiklmnopqrstuvwxyz")).reshape(5, 5)
    return matrix

def prepareText(text):
    # Persiapkan teks sesuai aturan Playfair Cipher
    text = text.replace("j", "i")
    text = [text[i:i+2] for i in range(0, len(text), 2)]
    for i in range(len(text)):
        if len(text[i]) == 1:
            text[i] += "x"
        elif text[i][0] == text[i][1]:
            text[i] = text[i][0] + "x" + text[i][1]
    return text

def findPosition(matrix, char):
    # Temukan posisi karakter dalam matriks
    for i in range(5):
        for j in range(5):
            if matrix[i][j] == char:
                return i, j

def playfairEncrypt(password, matrix):
    encrypted_password = ""
    for pair in password:
        row1, col1 = findPosition(matrix, pair[0])
        row2, col2 = findPosition(matrix, pair[1])
        if row1 == row2:
            encrypted_password += matrix[row1, (col1 + 1) % 5] + matrix[row2, (col2 + 1) % 5]
        elif col1 == col2:
            encrypted_password += matrix[(row1 + 1) % 5, col1] + matrix[(row2 + 1) % 5, col2]
        else:
            encrypted_password += matrix[row1, col2] + matrix[row2, col1]
    return encrypted_password

# Contoh penggunaan
key = ""
matrix = initializeMatrix(key)
password = ""
preparedPassword = prepareText(password)
encryptedPassword = playfairEncrypt(preparedPassword, matrix)

# Output hasil enkripsi
print("Password Asli:", password)
print("Password Terenkripsi:", encryptedPassword)