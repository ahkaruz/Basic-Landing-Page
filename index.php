<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Piece Comforter Set | ComfyHeaven</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1 class="header">৫ পিছের কম্ফোর্টার সেট পাচ্ছেন মাত্র <br> <span>৩১৫০ টাকায়</span></h1>
            <button id="orderButton" class="order-button">এখনই অর্ডার করুন</button>

        </div>

        <img class="product-img" src="img/01.jpg" alt="Comforter Set">

        <div class="description-title">
            <h2>৫ পিছের কম্বো প্যাকেজে যা যা থাকছে</h2>
        </div>

        <div class="description">
            <p>১ টি কিং সাইজ কম্ফোর্টার।</p>
            <p>১ টি কিং সাইজ বেডশীট।</p>
            <p>২ টি মাথার বালিশের কভার।</p>
            <p>২ টি কোল বালিশের কভার।</p>
        </div>

        <div class="checkout" id="checkoutFormContainer">
            <div class="checkout-title">
                <h2>অর্ডার করতে নিচের ফর্মটি সঠিক ভাবে পূরন করুন</h2>
            </div>
            <form class="checkout-form" id="checkoutForm" method="POST" action="process_order.php">

                <p>আপনার নাম<br><input class="input" type="text" name="name" placeholder="সম্পূর্ণ নাম লিখুন"
                        id="inputText" oninput="detectLanguage()" required>
                </p>

                <p>আপনার মোবাইল<br><input class="input" type="text" name="mobile" placeholder="017XXXXXXXX"
                        id="inputText" oninput="detectLanguage()" required>
                </p>

                <p>আপনার ঠিকানা<br><input class="input" type="text" name="address"
                        placeholder="বাসা নাম্বার, গ্রাম, ইউনিয়ন, থানা, জেলা" id="inputText" oninput="detectLanguage()"
                        required></p>

                <div class="input-delivery-charge">
                    <p class="delivery-charge-title">শিপিং এরিয়া</p>
                    <div class="delivery-charge-option">
                        <p>
                            <input type="radio" name="deliveryOption" id="insideDhakaDelivery" value="80" checked>
                            <label for="insideDhakaDelivery">ঢাকা সিটির মধ্যে <br>(৮০ টাকা)</label>
                        </p>
                        <p>
                            <input type="radio" name="deliveryOption" id="outsideDhakaDelivery" value="150">
                            <label for="outsideDhakaDelivery">ঢাকা সিটির বাহিরে <br>(১৫০ টাকা)</label>
                        </p>
                    </div>
                </div>
                <button class="btn-submit" id="checkoutBtn" type="submit">অর্ডার কনফার্ম করুন</button>
            </form>
            <div class="overlay" id="overlay"></div>
            <div class="popup" id="popupForm">
                <video autoplay muted class="popup-video">
                    <source src="right-mark.mp4">
                </video>
                <h2><span>ধন্যবাদ</span> <br> আপনার অর্ডার গ্রহন করা হয়েছে</h2>
                <button id="closePopupBtn" class="close-btn">Close</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>