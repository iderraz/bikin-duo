    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ ($titre[6]->titre) }}</h2>
            <p>{{ ($titre[6]->description) }}</p>
          </div>
  
          <div class="row">
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ ($team_image[0]->nom) }}</h4>
                    <span>{{ ($team_image[0]->fonction) }}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="{{ ($team_image[0]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[1]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[2]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[3]->icone) }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ ($team_image[1]->nom) }}</h4>
                    <span>{{ ($team_image[1]->fonction) }}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="{{ ($team_image[0]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[1]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[2]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[3]->icone) }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ ($team_image[2]->nom) }}</h4>
                    <span>{{ ($team_image[2]->fonction) }}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="{{ ($team_image[0]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[1]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[2]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[3]->icone) }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>{{ ($team_image[3]->nom) }}</h4>
                    <span>{{ ($team_image[3]->fonction) }}</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="{{ ($team_image[0]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[1]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[2]->icone) }}"></i></a>
                    <a href=""><i class="{{ ($team_image[3]->icone) }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->