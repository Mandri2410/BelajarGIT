<!DOCTYPE html>
<html>

<head>
    <title>PWL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }

        .profile-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 100%;
            border-radius: 10px;
        }

        .center-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menggunakan tinggi 100vh agar gambar berada di tengah vertikal layar */
        }

        .skills-bar {
            margin-top: 10px;
        }

        .skills-label {
            font-weight: bold;
        }

        .progress {
            width: 100%;
            background-color: #ccc; /* Warna latar belakang bar */
            height: 30px; /* Tinggi bar */
            border-radius: 5px; /* Sudut yang lebih halus */
        }

        .progress-bar {
            text-align: center;
            line-height: 30px; /* Pusatkan teks vertikal di dalam bar */
            width: 0; /* Panjang awal bar */
            height: 100%;
            background-color: #d39bcb; /* Warna bar persentase */
            color: white; /* Warna teks */
            border-radius: 5px; /* Sudut yang lebih halus */
        }

        /* Navbar styles */
        .navbar {
            overflow: hidden;
            background-color: #ffffff;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #11ff4100;
            color: rgba(235, 235, 235, 0.816);
        }

        /* Styles for the combined header and navbar */
        .header-navbar {
            background-color: #fdfd96;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        /* Custom footer style */
        .custom-footer {
            background-color: #fdfd96;
        }

        .w3-text-custom {
            color: #d39bcb !important;
        }
        
    </style>
</head>
    

</html>