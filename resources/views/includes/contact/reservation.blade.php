    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Reservation</h2>
            <p>Reservez votre table en ligne</p>
          </div>
  
          <div class="alert alert-danger print-error-msg" style="display:none">
          </div>

          <form method="POST" role="form" id="ReservationForm" class="php-email-form" data-aos="fade-up" data-aos-delay="100" autocomplete="off">
           @csrf 

            <div class="form-row">

              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="Rname" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group">
                <input type="email" class="form-control" name="Remail" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" required>
                <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="N° Tél" required>
                <div class="validate"></div>
              </div>
              
              <div class="col-lg-4 col-md-6 form-group">
                <label for="date">Date :</label>
                <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group">
                <label for="time">Heure :</label>
                <input type="time" class="form-control" name="time" id="time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group">
                <label for="people">Nombre de personne :</label>
                <input type="number" class="form-control" name="nbrPerson" id="people" min="1" max="20" placeholder="Nombre de personne" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                <div class="validate"></div>
              </div>

            </div>

            <div class="form-group">
              <textarea class="form-control" name="comment" rows="5" placeholder="Commentaire (facultatif)"></textarea>
              <div class="validate"></div>
            </div>

            <div class="text-center">
              <button type="submit" onclick="reservation()">Je réserve</button>
            </div>

          </form>
  
        </div>
      </section><!-- End Book A Table Section -->