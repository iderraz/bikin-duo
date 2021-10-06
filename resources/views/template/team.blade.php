    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ ($titre[6]->titre) }}</h2>
            <p>{{ ($titre[6]->description) }}</p>
          </div>
  
          <div class="row">

            @foreach ($team_image as $item)

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{asset('assets/img/team/'. $item->url)}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ ($item->nom) }}</h4>
                    <span>{{ ($item->fonction) }}</span>
                  </div>
                  <div class="social">

                    @foreach ($team_image as $icone)

                      <a href=""><i class="{{ ($icone->icone) }}"></i></a>

                    @endforeach
                    
                  </div>
                </div>
              </div>
            </div>

                
            @endforeach
  
        </div>
      </section><!-- End Team Section -->