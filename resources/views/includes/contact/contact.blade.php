    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>Contactez-nous</p>
          </div>
        </div>
  
        <div data-aos="fade-up">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>
  
        <div class="container" data-aos="fade-up">
  
          <div class="row mt-5">
  
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Adresse :</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
  
                <div class="open-hours">
                  <i class="icofont-clock-time icofont-rotate-90"></i>
                  <h4>Heures d'ouverture :</h4>
                  <p>
                    Samedi-Jeudi :<br>
                    11:00 AM - 23:00 PM
                  </p>
                </div>
  
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email :</h4>
                  <p>RestaurentApp@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>N° Tél :</h4>
                  <p>021 23 46 55</p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">

              <div class="alert alert-danger error-msg" style="display:none">
              </div>
  
              <form method="POST" role="form" id="ContactForm" class="php-email-form" autocomplete="off">
              @csrf

                  <div class="form-row">
                    <div class="col-md-6 form-group">
                       <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:3" data-msg="Veuillez saisir au moins 3 caractères" required/>
                      <div class="validate"></div>
                    </div>

                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Veuillez saisir une adresse mail valide" required/>
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:6" data-msg="Veuillez saisir au moins 6 caractères de sujet" required/>
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Veuillez écrire quelque chose" placeholder="Message" required></textarea>
                    <div class="validate"></div>
                  </div>
                 
                  <div class="text-center">
                    <button type="submit" onclick="sendMsg()">Envoyer</button>
                  </div>
             
              </form>
  
            </div>
  
          </div>
  
        </div>

      </section><!-- End Contact Section -->

      