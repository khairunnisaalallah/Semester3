package com.example.test;

import static org.junit.Assert.assertTrue; // Mengimpor metode assertTrue dari pustaka JUnit
import org.junit.Test; // Mengimpor anotasi @Test dari pustaka JUnit

public class EmailValidatorTest {
    @Test // Anotasi @Test menandai metode ini sebagai metode tes JUnit
    public void emailValidator_CorrectEmailSimple_ReturnsTrue() {
        // Mendefinisikan email yang valid
        String validEmail = "anisa@gmail.com";

        // Memanggil metode assertTrue untuk memverifikasi bahwa hasil validasi adalah benar
        assertTrue(EmailValidator.isTrue(validEmail));
    }
}
