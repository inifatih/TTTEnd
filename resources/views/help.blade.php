@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/help.css')}}">
<section class="help">
            <main>
                <div class="part1">
                    <div class="title-container">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="body-container">
                        <ul>
                            <li>
                                <h3>Q. Tentang apa situs web ini?</h3>
                                <p>Situs web kami adalah sebuah platform e-commerce yang menjual berbagai jenis pakaian bagi semua orang. 
                                    Tujuan kami adalah untuk membantu masyarakat yang menginginkan berbelanja pakaian tanpa harus pergi ke 
                                    toko fisik dengan mengandalkan kemudahan dan kenyamanan berbelanja yang bisa dilakukan kapan saja dan 
                                    dimana saja. Kami berharap dapat memberikan pengalaman berbelanja yang positif dan memuaskan bagi para pelanggannya.</p>
                            </li>
                            <br>
                            <li>
                                <h3>Q. Bagaimana cara membuat akun?</h3>
                                <p>Untuk membuat akun, Anda dapat mengikuti langkah-langkah berikut:
                                    <ol>
                                        <li>Klik tombol Login pada navbar yang terletak di pojok kanan atas halaman.</li>
                                        <li>Pada halaman Login, tekan tombol register berwarna biru yang berada di bawah tombol Login.</li>
                                        <li>Pada halaman register, isi formulir pendaftaran dengan informasi yang diminta, seperti nama, username,  
                                            alamat email, dan kata sandi.</li>
                                        <li>Setelah mengisi semua informasi yang diperlukan, klik tombol "SignUp" untuk menyelesaikan 
                                            proses pendaftaran.</li>
                                        <li>Akun berhasil dibuat ketika informasi "registrasi telah berhasil" tampil.</li>
                                    </ol>
                                </p>
                            </li>
                            <br>
                            <li>
                                <h3>Q. Bagaimana cara memesan produk?</h3>
                                <p>Untuk memesan produk, ikuti langkah-langkah berikut:
                                    <ol>
                                        <li>Temukan produk yang Anda inginkan dengan menjelajahi kategori atau menggunakan fitur pencarian.</li>
                                        <li>Klik pada produk yang Anda minati untuk melihat detailnya, termasuk gambar, deskripsi, dan harga.</li>
                                        <li>Pilih varian produk yang diinginkan, seperti ukuran atau warna.</li>
                                        <li>Klik tombol "Add To Cart" untuk memasukkan produk ke dalam keranjang belanja Anda.</li>
                                        <li>Lanjutkan ke proses checkout untuk memasukkan detail pengiriman dan metode pembayaran Anda. 
                                            Ikuti instruksi yang diberikan untuk menyelesaikan proses pembelian.</li>
                                    </ol>
                                </p>
                            </li>
                            <br>
                            <li>
                                <h3>Q. Bagaimana cara melihat hasil produk yang telah diorder?</h3>
                                <p>Anda bisa menekan tombol "Orders" pada navbar yang terletak di pojok kanan atas halaman yang 
                                    akan mengarahkan Anda ke halaman Order History.
                                </p>
                            </li>
                            <br>
                            <li>
                                <h3>Q. Apa saja metode pembayaran yang tersedia?</h3>
                                <p>Kami menyediakan berbagai metode pembayaran yang nyaman dan aman. Saat ini, metode pembayaran yang tersedia 
                                    di situs web kami meliputi pembayaran dengan kartu kredit/debit, transfer bank, dan menggunakan layanan GoPay. </p>
                            </li>

                        </ul>
                    </div>
                    <div class="contactus">
                        <h2>Contact Us</h2>
                        <p>Jika Anda memiliki pertanyaan atau komentar, jangan ragu untuk menghubungi kami:</p>
                        <ul>
                            <li>Email: TTTend@gmail.com</li>
                            <li>Phone: 088-100</li>
                            <li>Address: Jl. Bhaskara II no.22, Surabaya IDN</li>
                        </ul>
                    </div>
                </div>
            </main>
        </section>
@endsection