<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epicurean Themes - Book Table</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- navigation -->
    <?php include "assets/components/navbar.php"; ?>

    <!-- main body content -->
    <article>
        <h1>Book Table</h1>
        <form action="scripts\php\booking-handle.php" method="POST">
            <section class="booking-section">
                <h2>Date & Time</h2>
                <input type="datetime-local" name="booking-datetime">
            </section>
            <section class="booking-section">
                <h2>Number of guests & Accomodations</h2>
                <ul class="no-marker" class="flex-item-container">
                    <li>
                        <span>Guests</span>
                        <input type="number" class="guest_amounts" value="0" min="0" max="15" name="guest-amount" id="guest-amount">
                    </li>
                    <li>
                        <span>Accommodations</span>
                        <ul class="no-marker">
                            <li>
                                <label for="high_chair">High chair</label>
                                <input type="checkbox" name="accommodations[]" value="high-chair" id="high-chair">
                            </li>
                            <li>
                                <label for="kids_menu">Kids' menu</label>
                                <input type="checkbox" name="accommodations[]" value="kids-menu" id="kids-menu">
                            </li>
                            <li>
                                <label for="quiet_seating_area">Quiet seating area</label>
                                <input type="checkbox" name="accommodations[]" value="quiet-seating-area" id="quiet-seating-area">
                            </li>
                            <li>
                                <label for="large_group">Quiet seating area</label>
                                <input type="checkbox" name="accommodations[]" value="large_group" id="large_group">
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="booking-section">
                <h2>Personal details</h2>
                <ul class="no-marker">
                    <li>
                        <label for="first_name">First name:</label>
                        <input type="text" name="first-name" id="first-name">
                    </li>
                    <li>
                        <label for="last_name">Last name:</label>
                        <input type="text" name="last-name" id="last-name">
                    </li>
                    <li>
                        <label for="dob">Date of birth</label>
                        <input type="date" name="dob" id="dob">
                    </li>
                    <li>
                        <label for="email">Email address:</label>
                        <input type="email" name="email" id="email">
                    </li>
                    <li>
                        <label for="phone_no">Phone number:</label>
                        <input type="tel" name="phone_no" id="phone_no">
                    </li>
                    <li>
                        <label for="post_code">Post code:</label>
                        <input type="text" name="post-code" id="post-code">
                    </li>
                </ul>
                <p class="disclaimer-text">These details should be those of the main booker. This individual must be 16 or over - ID may be requested upon entry.</p>
            </section>
            <section class="booking-section">
                <h2>Card details & Alternative payment</h2>
                <p class="disclaimer-text">If you are using a regular debit/credit card for this purchase, please enter your details below.</p>
                <ul class="no-marker">
                    <li>
                        <label for="card_number">Card number:</label>
                        <input type="text" name="card-number" id="card-number">
                    </li>
                    <li>
                        <label for="name_on_card">Name on card:</label>
                        <input type="text" name="name-on-card" id="name-on-card">
                    </li>
                    <li>
                        <label for="card_expiry_date">Card expiry date:</label>
                        <input type="text" min="0" max="4" name="card-expiry-date" id="card-expiry-date">
                    </li>
                    <li>
                        <label for="cvv">Card security code:</label>
                        <input type="number" min="0" max="999" name="cvv" id="cvv">
                    </li>
                </ul>
                <button class="call-to-action" type="submit">Confirm Payment</button>
            </section>
        </form>
        <p>Note: this page has not been fully styled and does not send data to the database yet. This functionality will be built in a future iteration.</p>
        <!-- footer -->
        <?php include "assets/components/footer.php"; ?>
    </article>

    <script type="module" src="script.js"></script>
</body>
</html>