/**
Ubah NIM.sql menggunakan nim kalian
Script untuk membuat database
Script untuk membuat 1 tabel (berisi kolom nim, nama, email)
 */

-- Script untuk membuat database
CREATE DATABASE IF NOT EXISTS uas_2212500272;
USE uas_2212500272;

-- Script untuk membuat 1 tabel (berisi kolom nim, nama, email)
CREATE TABLE IF NOT EXISTS mahasiswa (
    nim VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
