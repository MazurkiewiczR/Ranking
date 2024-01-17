<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . "/../src/Service/XLSXService.php";
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terminal Ranking</title>
  <link rel="stylesheet" href="./assets/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css" />
</head>

<body>
  <header>
    <div class="desktop-menu menu">
      <div class="logo">
        <img src="#" alt="Logo" width="40" height="40" />
      </div>
      <nav>
        <ul>
          <li>
            <p>Ciekawostki</p>
          </li>
          <li>
            <p>Podium</p>
          </li>
          <li>
            <p>Ranking</p>
          </li>
        </ul>
      </nav>
      <!-- <div class="color-switch">
          <span>Zmień motyw</span>
          <input
            type="checkbox"
            id="theme_switch"
            name="theme-switch"
            class="theme-switch-input"
          />
        </div> -->
    </div>

    <div class="hamburger-wrapper">
      <div class="logo">
        <img src="#" alt="Logo" width="40" height="40" />
      </div>
      <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>

    <div class="mobile-menu menu">
      <nav>
        <ul>
          <li>
            <p>Ciekawostki</p>
          </li>
          <li>
            <p>Podium</p>
          </li>
          <li>
            <p>Ranking</p>
          </li>
        </ul>
      </nav>
      <!--         <div class="theme-switch">
          <span>Zmień motyw</span>
          <input
            type="checkbox"
            id="theme_switch_mobile"
            name="theme-switch"
            class="theme-switch-input"
          />
        </div> -->
    </div>
  </header>

  <main>
    <div class="main-container">
      <section id="introduction">
        <div class="box intro-box">
          <h1 class="section-title">Czym jest ranking terminali?</h1>
          <p class="section-details">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
            autem aperiam, eveniet voluptas id error nulla beatae. Deserunt
            aliquid labore eaque, delectus doloremque recusandae consequuntur
            iste harum, adipisci vel ipsum. Odit, blanditiis. Ad, saepe.
            Maiores eveniet facilis enim dolores vel. Nisi magnam obcaecati
            eum et, iste sit quis architecto nam veniam, cumque impedit
            ducimus? Rem quasi qui sed saepe magnam!
          </p>
        </div>
      </section>

      <section id="fun_facts">
        <div class="container">
          <div id="my-keen-slider" class="keen-slider">
            <div class="keen-slider__slide number-slide3 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
                accusantium ipsa sed a cum ut sapiente beatae, praesentium
                commodi sunt illum.
              </p>
            </div>
            <div class="keen-slider__slide number-slide4 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
                accusantium ipsa sed a cum ut sapiente beatae, praesentium
                commodi sunt illum.
              </p>
            </div>
            <div class="keen-slider__slide number-slide5 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
                accusantium ipsa sed a cum ut sapiente beatae, praesentium
                commodi sunt illum.
              </p>
            </div>
            <div class="keen-slider__slide number-slide6 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
                accusantium ipsa sed a cum ut sapiente beatae, praesentium
                commodi sunt illum.
              </p>
            </div>
            <div class="keen-slider__slide number-slide6 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
                accusantium ipsa sed a cum ut sapiente beatae, praesentium
                commodi sunt illum. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptatem, nisi! Lorem ipsum dolor sit
                amet, consectetur adipisicing elit. A ab blanditiis illum sit
                hic velit!
              </p>
            </div>
            <div class="keen-slider__slide number-slide6 box">
              <h2 class="section-title">Czy wiesz, że?</h2>
              <p class="section-details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                quae corrupti rem quod quasi rerum distinctio iste repudiandae
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="top_rating">
        <h2 class="section-title">Najlepsze w tym miesiącu</h2>

        <div class="flex-layout">
          <div class="flex-item card">
            <div class="main-data">
              <p class="position">1.</p>
              <p class="company-name">Nazwa 1</p>
              <p class="rating">x<span>*</span></p>
            </div>
            <div class="additional-data-container">
              <div class="additional-data">Dane 1</div>
              <div class="additional-data">Dane 2</div>
              <div class="additional-data">Dane 3</div>
            </div>
          </div>

          <div class="flex-item card">
            <div class="main-data">
              <p class="position">2.</p>
              <p class="company-name">Nazwa 2</p>
              <p class="rating">y<span>⭐</span></p>
            </div>
            <div class="additional-data-container">
              <div class="additional-data">Dane 1</div>
              <div class="additional-data">Dane 2</div>
              <div class="additional-data">Dane 3</div>
            </div>
          </div>

          <div class="flex-item card">
            <div class="main-data">
              <p class="position">3.</p>
              <p class="company-name">Nazwa 3</p>
              <p class="rating">z<span>*</span></p>
            </div>
            <div class="additional-data-container">
              <div class="additional-data">Dane 1</div>
              <div class="additional-data">Dane 2</div>
              <div class="additional-data">Dane 3</div>
            </div>
          </div>
        </div>
      </section>

      <section id="ranking">
        <ul class="responsive-table">
          <li class="table-header">
            <div class="col col-1">Pozycja</div>
            <?php
            $headers = XLSXService::readHeadersFromFile();
            foreach ($headers as $header) :
            ?>
              <div class="col col-2"><?= $header ?></div>
            <?php endforeach; ?>
          </li>
          <?php
          $rows = XLSXService::readDataFromFile();
          $displayLimit = 10;
          $rowCounter = 0;

          foreach ($rows as $key => $row) :
          ?>
            <li class="table-row <?php echo $rowCounter >= $displayLimit ? 'hidden-row' : ''; ?>">
              <div class="col col-1" data-label="Pozycja"><?= $key + 1 ?></div>
              <div class="col col-2" data-label="Nazwa"><?= $row['A'] ?></div>
              <div class="col col-3" data-label="Ocena"><?= $row['B'] ?><span>⭐</span></div>
              <div class="col col-4" data-label="Dane1"><?= $row['C'] ?></div>
              <div class="col col-5" data-label="Dane2"><?= $row['D'] ?></div>
              <div class="col col-6" data-label="Dane3"><?= $row['E'] ?></div>
            </li>
          <?php
            $rowCounter++;
          endforeach;
          ?>

        </ul>
        <p class="show-more" id="show_more">Pokaż więcej...</p>
      </section>
    </div>
  </main>

  <footer class="footer">
    <div class="ft-links">
      <p>Lorem ipsum</p>
      <p>Lorem ipsum</p>
      <p>Lorem ipsum</p>
      <p>Lorem ipsum</p>
    </div>
    <div class="ft-contact">
      <div>
        <h3>Kontakt:</h3>
        <div>
          <p class="phone-number">tel.: 123 123 123</p>
          <p class="phone-number">12 123 12 234</p>
        </div>
      </div>
      <div>
        <p>ul. Krzywa 13/3</p>
        <p>NIP: 123 123 12 23</p>
      </div>
    </div>
  </footer>
  <script src="./node_modules/keen-slider/keen-slider.js"></script>
  <script src="./scripts/script.js"></script>
</body>

</html>