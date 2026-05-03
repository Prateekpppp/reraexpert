
    <!-- ========================= contact style-6 start ========================= -->
    <section id="contact" class="contact-section contact-style-6">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 order-first order-lg-last">
            <div class="left-wrapper">
              <div class="section-title mb-40">
                <h6 class="mb-15">Connect With Us</h6>
                <div class="single-item">
                    <!-- <div class="icon">
                        <i class="lni lni-phone"></i>
                    </div> -->
                    <div class="text">
                        <p class="app_color_green fw-bold">Phone Number</p>
                    </div>
                </div>
                <div class="ml-5 pl-5 mb-3">
                    <ul>
                        <li><a class="app_color_green" onclick="gtag('event', 'call_click');" href="tel:+91 <?= $contact_phone ?>">+91 <?= $contact_phone ?></a></li>
                    </ul>
                </div>
                <div class="single-item">
                    <!-- <div class="icon">
                        <i class="lni lni-envelope"></i>
                    </div> -->
                    <div class="text">
                        <p class="app_color_green fw-bold">Email</p>
                    </div>
                </div>
                <div class="ml-5 pl-5">
                    <ul>
                        <li><a class="app_color_green" onclick="gtag('event', 'call_click');" href="mailto:<?= $contact_mail ?>"><?= $contact_mail ?></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-first order-lg-last">
            <div class="left-wrapper">
              <div class="section-title mb-40">
                <h6 class="mb-15">Let Us Connect With You</h6>
                    <div class="contact-form-wrapper">
                    <!-- <form action="assets/php/contact.php" method="POST"> -->
                      <form onsubmit="return sendToWhatsApp()">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="single-input">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Name">
                            <i class="lni lni-user"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                            <i class="lni lni-envelope"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                            <label for="number">Number</label>
                            <input type="text" id="number" name="number" maxlength="10" minlength="10" class="form-input" placeholder="Number">
                            <i class="lni lni-phone"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-input" placeholder="Subject">
                            <i class="lni lni-text-format"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-input" placeholder="Message" rows="6"></textarea>
                            <i class="lni lni-comments-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-button">
                            <button type="submit" class="button radius-10" onclick="gtag('event', 'call_click');">Submit <i class="lni lni-telegram-original"></i> </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= contact style-6 end ========================= -->

    
<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("number").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        // Simple form validation
        if (!name || !subject || !email || !phone || !message) {
            alert("Please fill in all fields.");
            return false;
        }

        const fullMessage = `*Contact Form Submission*\n` +
                        `*Name:* ${name}\n` +
                        `*Email:* ${email}\n` +
                        `*Phone:* ${phone}\n` +
                        `*Subject:* ${subject}\n` +
                        `*Message:* ${message}`;

        const whatsappNumber = "<?= $contact_phone ?>"; // Change this to your WhatsApp number
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(fullMessage)}`;

        window.open(whatsappURL, '_blank');
        return false; // Prevent default form submission
    }
</script>