  <!---- Top cv -->
  @section('bloc-1')
    <img src="images/img_avatar.png" class="images_top" alt="alt text">
  @stop

  @section('bloc-2')
    <h2>Prénom</h2>
    <h3>NOM</h3>
    <i>Curieuse, motivée et déterminée</i>
  @stop

  @section('bloc-3')
    <ul>
      <li><img src="./images/icons-phone.png">Téléphone : 0X XX XX XX XX</li>
      <li><img src="./images/icons-address.png">Adresse: Lorem ipsum dolor sit </li>
      <li><img src="./images/icon-mail.png"> Ipsum@gmail.com</li>
    </ul>
  @stop
  
  <!-- Description section -->
  @section('description')
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere lacus et est pharetra, quis lobortis enim ornare. 
    Mauris scelerisque eros sed sapien viverra, a rhoncus ipsum accumsan. Duis viverra mattis magna ut egestas. Donec dui elit, 
    suscipit at sodales et, tincidunt ullamcorper nibh. Mauris at est vitae nibh porta tincidunt consequat sed velit. 
    Quisque sit amet turpis ut metus ornare convallis. Nam id massa fermentum, sodales magna sit amet, consequat libero. 
    Morbi porttitor, urna ac condimentum venenatis, nisi eros tristique magna, et efficitur risus nulla et erat. 
    Sed mattis varius nulla. 
  @stop

  <!-- Compétence section -->
  @section('competence')
    <h2><a href="{{ url('competence') }}">Compétence</a></h2>
  @stop

  @section('competence_content')
      <table>
              <tr>
                  <td class="col-1">
                      <ul>
                          <li>Création et maintenance</li>
                          <li>Product Design, Exploration</li>
                          <li>Scructural Optimization</li>
                      </ul>
                  </td>

                  <td class="col-2">
                      <table class="langue">
                          <tr>
                              <td>
                                  <ul>
                                      <li>Français</li>
                                      <li>Anglais</li>
                                      <li>Espagnol</li>
                                  </ul>
                              </td>
                              <td>
                                  <ul class="lang">
                                      <li class="fr"><hr></li>
                                      <li class="en"><hr></li>
                                      <li class="es"><hr></li>
                                  </ul>
                              </td>
                          </tr>
                      </table>
                  </td>
                
                  <td class="col-3">
                      <ul>
                          <li>Logiciels Maitrisés: Excel, Word.</li>
                          <li>PowerPoint, Outlook, Photoshop,</li>
                          <li>Illustrator, Wordpress.</li>
                      </ul>
                  </td>
              </tr>
          </table>
    @stop

  <!-- Formation section -->
  @section('formation')
    <h2><a href="{{ url('formation') }}">Formation</a></h2>
  @stop

  @section('formation_content')
  <table>
              <tr>
                  <td>20XX - 20XX
                      <p>Tanger, Maroc</p>
                  </td>
                  <td>Diplôme XXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXX
                      <p>Université, école, lycée</p>
                  </td>
              </tr>
              <tr>
                  <td>20XX - 20XX
                      <p>Tanger, Maroc</p>
                  </td>
                  <td>Diplôme XXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXX
                      <p>Université, école, lycée</p>
                  </td>
              </tr>
              <tr>
                  <td>20XX - 20XX
                      <p>Tanger, Maroc</p>
                  </td>
                  <td>Diplôme XXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXX
                      <p>Université, école, lycée</p>
                  </td>
              </tr>
          </table>
  @stop
  
  <!-- Expérience section -->
  @section('experience')
  <h2><a href="{{ url('experience') }}">Expérience professionnelle</a></h2>
  @stop

  @section('experience_content')
  <table>
              <tr>
                  <td>Nov. 20XX - Juil. 20XX
                      <p>Tanger, Maroc</p>
                  </td>
                  <td>Nom de l'entreprise
                      <p>Stage: Mission de stage</p>
                      <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere lacus </li>
                          <li>Morbi pellentesque sit amet dolor id pulvinar. Ut tristique, nisi ut eleifend malesuada,</li>
                          <li>Pellentesque dictum ligula vitae magna lobortis mollis. Donec id urna eget augue facilisis</li>
                      </ul>
                  </td> 
              </tr>
              <tr>
                  <td>Nov. 20XX - Juil. 20XX
                      <p>Tanger, Maroc</p>
                  </td>
                  <td>Nom de l'entreprise
                      <p>Job d'été: Nom du poste</p>
                      <ul>
                          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere lacus </li>
                          <li>Morbi pellentesque sit amet dolor id pulvinar. Ut tristique, nisi ut eleifend malesuada,</li>
                          <li>Pellentesque dictum ligula vitae magna lobortis mollis. Donec id urna eget augue facilisis</li>
                      </ul>
                  </td>
              </tr>
          </table>
    @stop

  <!-- Centres d'intérêt section -->
  @section('centre')
    <h2><a href="{{ url('centre') }}">Centres d'intérêt</a></h2>
  @stop

  @section('centre_content')
    <ul>
      <li>Voyages: Asie(Chine, Thailand et Japan) et autres(Brésil, Argentine, Pérou, Espagne, Angleterre et France)</li>
      <li>Sports: Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet </li>
      <li>Lorem : Lorem ipsum dolor sit amet, consectetur </li>
    </ul>
  @stop

