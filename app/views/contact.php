<section class="contact">
        <div class="container1">
            <div class="section-heading">
                <h2>Užsakymo forma</h2>
            </div>
            <div class="section-content">
                <form class="contact-form" action="kontaktai.php" method="post">
                    <div class="input-row">
                        <input type="text" name="vardas" placeholder="Vardas" required>
                        <input type="tel" name="tel" placeholder="Tel.Nr. (370xxxxxxxx)" pattern="[0-9]{11}" required>
                    </div>
                    <textarea name="message" placeholder="Jūsų žinutė" rows="8" required></textarea>
                    <input type="submit" class="btn btn-form" name="submit" value="Siųsti">
                </form>
            </div>
        </div>
    </section>