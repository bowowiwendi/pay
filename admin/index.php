<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="canonical" href="https://x-tools.my.id">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ramabhadra&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Dashboard - ホストコード</title>
    <meta name="base_url" content="index.php">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="index.php">
    <link rel="icon" href="asset/favicon-32x32.png" type="image/png">
    <meta name='description' itemprop='description' content='X-TOOLS VIP adalah sebuah website untuk membuat sebuah subdomain yang dapat digunakan untuk melakukan pointing ip server hosting anda ke subdomain kami.'>
    <meta property="og:title" content="X-TOOLS VIP">
    <meta property="og:description" content="X-TOOLS VIP adalah sebuah website untuk membuat sebuah subdomain yang dapat digunakan untuk melakukan pointing ip server hosting anda ke subdomain kami.">
    <meta property="og:url" content="index.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="asset/thumbnail.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="index.php">
    <meta property="twitter:title" content="X-TOOLS VIP">
    <meta property="twitter:description" content="X-TOOLS VIP adalah sebuah website untuk membuat sebuah subdomain yang dapat digunakan untuk melakukan pointing ip server hosting anda ke subdomain kami.">
    <meta property="twitter:image" content="asset/thumbnail.jpg">
    <link rel="icon" href="asset/favicon-32x32.png" type="image/png">
</head>
<body class="font-sans-serif p-4 bg-gray-900 text-sm" style="font-family: 'Ramabhadra', sans-serif;
font-family: 'Tilt Neon', sans-serif; padding-top: 5rem;">
<nav class="fixed z-50 top-0 left-0 right-0 flex flex-wrap border items-center justify-between bg-gray-800 p-2 mt-1 mx-auto rounded-lg" style="border-radius:20px;margin:5px;">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z" />
            <path d="M12 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5zm0-8c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3z" />
        </svg>
        <a href="" class="font-semibold text-2xl tracking-tight ml-4 bg-gradient-to-r from-blue-400 via-white to-green-500 text-transparent bg-clip-text hover:text-white hover:bg-clip-text">
            ホストコード
        </a>
    </div>
    <div class="block lg:hidden">
        <button id="menu-toggle" class="flex items-center px-4 py-2 border rounded-lg text-gray-200 border-gray-400 hover:text-white hover:border-white">
    <i class="fas fa-bars"></i> 
</button>
    </div>
    <div id="nav-menu" class="hidden w-full lg:block lg:flex-grow lg:w-auto" style="font-size: 12px;">
    	<div class="text-center lg:flex-grow border-b border-gray-700 pb-2 text-xs"></div>
            <div class="lg:flex-grow border-b border-gray-700 pb-2">
                <a href="jacob.php" class="hover:bg-transparent block w-full border-gray-100 border py-2 px-6 rounded-lg mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white hover:text-teal-500 mr-4 font-bold">
                    ⟩⟩ CREATE JASTEB
                </a>
            </div>
            <div class="flex justify-center text-center items-center mt-2 mb-1">
                <a href="index.php" class="inline-block px-8 py-2 leading-none w-full rounded-full text-white bg-blue-500 hover:border-transparent hover:text-gray-100 hover:bg-blue-700 font-bold">BACK</a>
                </div>
                <div class="flex justify-center text-center items-center mb-2">
                <a href="logout.php" class="inline-block px-8 py-2 leading-none w-full rounded-full text-white bg-red-500 hover:border-transparent hover:text-gray-100 hover:bg-red-700 font-bold">LOGOUT</a>
            </div>
        </div>
</nav>
    <style>
        @media screen and (max-width: 800px) {
            .bg-red-400,
            .bg-green-400,
            .bg-gray-800 {
                border-radius: 20px;
                padding: 8px;
                margin: 4px;
                button.rounded-sm {
                    border-radius: 10px;
                }
                button.text-sm {
                    font-size: 0.875rem;
                    line-height: 1rem;
                }
                .bg-green-uuu {
                    background-color: #48bb78;
                    width: auto;
                    display: inline-block;
                    margin-right: 10px;
                    border-radius: 5px;
                }
    </style>
    
<div class="max-w-full mx-auto bg-gray-800 text-white text-center rounded-lg shadow-lg p-6 mt-14" style="margin-top: 2%">
    <form method="POST" class="p-5 space-y-3">
        <label for="api_token" class="block font-bold mb-2 text-xl">-- MENU SETTING WEB --</label>
        <input type="text" name="url" id="url"
            class="w-full border px-4 py-2 bg-gray-700 rounded-lg leading-tight focus:outline-none focus:shadow-outline transition text-center duration-200"
            placeholder="Url Crate">
        <input type="text" name="username" id="username"
            class="w-full border px-4 py-2 bg-gray-700 rounded-lg leading-tight focus:outline-none focus:shadow-outline transition text-center duration-200"
            placeholder="Username">
        <input type="password" name="password" id="password"
            class="w-full border px-4 py-2 bg-gray-700 rounded-lg leading-tight focus:outline-none focus:shadow-outline transition text-center duration-200"
            placeholder="Password">
        <div class="flex items-center justify-center">
            <input type="submit" name="submit" value="Update"
                class="bg-blue-600 hover:bg-gray-700 border text-white font-bold py-2 px-8 rounded-full focus:outline-none focus:shadow-outline transition duration-200 mb-4">
        </div>
    </form>
    <?php 
	function generateHash($password) {
    // You can adjust the cost factor according to your needs
    $options = ['cost' => 12];

    // Use password_hash to create a hashed password
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
    if(isset($_POST["submit"])) {
        $data_path = 'config/data.json';
        $data = json_decode(file_get_contents($data_path), true);
        $url = $_POST["url"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (!empty($url)) {
            $data["url"] = $url;
        }
        if (!empty($username)) {
            $data["users"][0]["username"] = $username;
        }
        if (!empty($password)) {
            // Generate hash from the password and save it
            $hashedPassword = generateHash($password);
            $data["users"][0]["password"] = $hashedPassword;
        }

        if (file_put_contents($data_path, json_encode($data))) {
            echo '<b><span class="success">|| DATA BERHASIL DIPERBARUI ||</span></b>';
        } else {
            echo '<span class="error">GAGAL MEMPERBARUI DATA. SILAKAN COBA LAGI NANTI.</span>';
        }
    }
    ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/HWIJakob/package@main/function.js"></script>
</body>
</html>
