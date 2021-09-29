<div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Bikin</h3>
          <p>
            {{ ($contact_emoji[0]->contenu) }}<br>
            <strong>Phone:</strong> {{ ($contact_emoji[1]->contenu) }}<br>
            <strong>Email:</strong> {{ ($contact_emoji[2]->contenu) }}<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>

            @foreach ($footer_links as $item)
                
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ ($item->links) }}</a></li>

            @endforeach

          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>

            @foreach ($footer_links as $item)
                
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{ ($item->services) }}</a></li>

            @endforeach

          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>