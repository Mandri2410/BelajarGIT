<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H1101221052-Mandri-TugasPWD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0; 
            display: flex;
            justify-content: space-between; 
            align-items: center; 
        }

        h1 {
            font-size: 28px; 
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            text-align: left;
        }

        
        .navbar {
            display: flex;
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            font-size: 16px;
            color: white;
            text-decoration: none;
            margin: 0 10px; 
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a {
                margin: 10px 0; 
            }
        }
        .section-header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
        }

        .contact-us {
            background-color: #333;
            color: #fff;
            padding: 10px; 
            text-align: center;
        }

        select {
            width: 100%; 
        }

        .profile-image {
            max-width: 200px; 
            height: auto; 
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
        }

        table td, table th {
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }

        table th {
            background-color: #f2f2f2; 
            width: 200px; 
        }

        .justify-text {
            text-align: justify;
         }
</style>
    </style>
</head>
<body>
    <header>
        <h1> PWL</h1>
        <nav class="navbar">
            <a href="home.html">1</a>
            <a href="service.html">2</a>
            <a href="about.html">3</a>
        </nav>
    </header>

    <div class="container">
        <div id="home">
            <div class="section-header">
                <h2>Hello World</h2>
            </div>
            <h1>Biodata Diri</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdLWo6jGA63byzL5RlMg_mILAZJmyAByEViw&usqp=CAU" alt="gambar profil" class="profile-image">
            <p class="justify-text">
                "HELLO WORLD".
            </p>            
            <table>
                <tr>
                    <td><b>Nama</b></td>
                    <td>Mandri</td>
                </tr>
                <tr>
                    <td><b>Tempat, Tanggal Lahir</b></td>
                    <td>Sintang, 24 Oktober 2004</td>
                </tr>
                <tr>
                    <td><b>Hobby</b></td>
                    <td>Main game, membaca komik dan novel, mendengarkan music</td>
                </tr>
            </table>
           
        </div>




    <!-- Simplified Contact Us Section -->
    <div class="contact-us">
        <p>please don't hesitate to get in touch with us:</p>
        <p>Email: H1101221052@student.untan.ac.id</p>
        <p>Phone: +62 822 5370 6110</p>
    </div>
</body>
</html>