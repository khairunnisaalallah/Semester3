package com.example.test;

public class EmailValidator {
    // Deklarasi metode statis 'isTrue' untuk memvalidasi email
    public static boolean isTrue(String email) {
        // Definisi ekspresi reguler untuk memeriksa format email
       String formatEmail = "^[A-Za-z0-9+_.-]+@(.+)$";
        // Memeriksa apakah 'email' cocok dengan ekspresi reguler
        // Jika cocok, maka email dianggap valid dan metode mengembalikan 'true'

        return email.matches(formatEmail);
    }
}
