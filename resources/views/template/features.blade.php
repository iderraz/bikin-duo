    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
  
          <div class="section-title">
            <h2>{{ ($titre[2]->titre) }}</h2>
            <p>{{ ($titre[2]->description) }}</p>
          </div>
  
          <div class="row content">
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('assets/img/features-1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
              <h3>{{ ($feature_description[0]->titre) }}</h3>
              <p class="fst-italic">
                {{ ($feature_description[0]->description_1) }}
              </p>
              <ul>
                <li><i class="bi bi-check"></i> {{ ($feature_description[0]->description_2) }}</li>
                <li><i class="bi bi-check"></i> {{ ($feature_description[4]->description_2) }}</li>
                <li><i class="bi bi-check"></i> {{ ($feature_description[5]->description_2) }}</li>
              </ul>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="{{asset('assets/img/features-2.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
              <h3>{{ ($feature_description[1]->titre) }}</h3>
              <p class="fst-italic">
                {{ ($feature_description[1]->description_1) }}
              </p>
              <p>
                {{ ($feature_description[1]->description_2) }}
              </p>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-5" data-aos="fade-right">
              <img src="{{asset('assets/img/features-3.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5" data-aos="fade-left">
              <h3>{{ ($feature_description[2]->titre) }}</h3>
              <p>{{ ($feature_description[2]->description_1) }}</p>
              <ul>
                <li><i class="bi bi-check"></i> {{ ($feature_description[2]->description_2) }}</li>
                <li><i class="bi bi-check"></i> {{ ($feature_description[6]->description_2) }}</li>
                <li><i class="bi bi-check"></i> {{ ($feature_description[7]->description_2) }}</li>
              </ul>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="{{asset('assets/img/features-4.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
              <h3>{{ ($feature_description[3]->titre) }}</h3>
              <p class="fst-italic">
                {{ ($feature_description[3]->description_1) }}
              </p>
              <p>
                {{ ($feature_description[3]->description_2) }}
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End Features Section -->