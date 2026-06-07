  <!-- Contact-->
  <section class="page-section" id="contact">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">{{ __('menu.Contact US') }}</h2>
              <h3 class="section-subheading text-uppercase" style="color: #fff">
                  {{ __('menu.We provide premium real estate services with trusted properties and smart investment opportunities.') }}
              </h3>
          </div>
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              <div class="row align-items-stretch mb-5">
                  <div class="col-md-6">
                      <div class="form-group">
                          <!-- Name input-->
                          <input class="form-control" id="name" type="text" placeholder="Your Name *"
                              data-sb-validations="required" />
                          <div class="invalid-feedback" data-sb-feedback="name:required">
                              {{ __('menu.A name is required.') }}</div>
                      </div>
                      <div class="form-group">
                          <!-- Email address input-->
                          <input class="form-control" id="email" type="email" placeholder="Your Email *"
                              data-sb-validations="required,email" />
                          <div class="invalid-feedback" data-sb-feedback="email:required">
                              {{ __('menu.An email is required.') }}</div>
                          <div class="invalid-feedback" data-sb-feedback="email:email">
                              {{ __('menu.Email is not valid.') }}</div>
                      </div>
                      <div class="form-group mb-md-0">
                          <!-- Phone number input-->
                          <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                              data-sb-validations="required" />
                          <div class="invalid-feedback" data-sb-feedback="phone:required">
                              {{ __('menu.A phone number is required.') }}</div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group form-group-textarea mb-md-0">
                          <!-- Message input-->
                          <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                          <div class="invalid-feedback" data-sb-feedback="message:required">
                              {{ __('menu.A message is required.') }}</div>
                      </div>
                  </div>
              </div>

              <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center text-white mb-3">
                      <div class="fw-bolder">{{ __('menu.Form submission successful!') }}</div>
                      <br />
                      <a href="https://el-shams.com">https://el-shams.com</a>
                  </div>
              </div>

              <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">{{ __('menu.Error sending message!') }}</div>
              </div>
              <!-- Submit Button-->
              <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
                      type="submit">{{ __('menu.Send Message') }}</button></div>
          </form>
      </div>
  </section>
