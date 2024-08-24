<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-white">Contact Us</h1>
            <p class="text-lg text-white mt-2">We are here to help! Please reach out with any questions.</p>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="flex items-center justify-center min-h-screen py-12">
        <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Get in Touch</h2>
            <!-- <form action="save.php" method="POST" class="space-y-4"> -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                    <input type="text" name="fname" id="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                    <textarea name="message" id="message" rows="5"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>