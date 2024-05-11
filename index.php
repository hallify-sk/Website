<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hallify.sk | Rezervačné systémy pre sály</title>
  <link rel="stylesheet" href="css/shared.css" />
  <link rel="stylesheet" href="css/index.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
</head>

<body>
  <?php
  $errors = [];
  $errorMessage = '';

  if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || trim($name) == "") {
      $errors[] = 'Meno je prázdne';
    }

    if (empty($email)) {
      $errors[] = 'E-mail je prázdny';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'E-mail nie je platný';
    }

    if (empty($message)) {
      $errors[] = 'Správa je prázdna';
    }

    if (empty($errors)) {
      $toEmail = 'ahoj@hallify.sk';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => "form@hallify.sk", 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Meno: {$name}<br>", "E-Mail: {$email}<br>", "Správa:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

      if (mail($toEmail, $emailSubject, $body, $headers)) {

        header('Location: thank-you.html');
      } else {
        $errorMessage = 'Niečo sa pokazilo, skúste to znova neskôr.';
      }
    } else {

      $allErrors = join('<br/>', $errors);
      $errorMessage = "<p class='poppins-regular' style='color: red;'>{$allErrors}</p>";
    }
  }
  ?>
  <main>
    <div class="background"></div>
    <div class="background-2"></div>
    <div class="background-3"></div>
    <header>
      <div class="logo-wrapper">
        <a href="/" class="poppins-black-italic">Hallify</a>
      </div>
      <input type="checkbox" name="isNavOpen" id="isNavOpen">
      <label aria-label="Toggle navigation" for="isNavOpen">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 6l16 0" />
          <path d="M4 12l16 0" />
          <path d="M4 18l16 0" />
        </svg>
      </label>
      <div class="links">
        <label tabindex="0" aria-label="Close navigation" for="isNavOpen">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18 6l-12 12" />
            <path d="M6 6l12 12" />
          </svg>
        </label>
        <a href="#planRozlozenia" tabindex="0" class="poppins-regular">Prečo Hallify?</a>
        <a href="#vKocke" class="poppins-regular">Výhody</a>
        <a href="#reviews" class="poppins-regular">Referencie</a>
        <a href="#contact" class="poppins-regular highlight">Kontakt</a>
      </div>
      <div class="shadow"></div>
    </header>
    <section class="hero">
      <div class="hero-content">
        <h1 class="poppins-bold">
          <span class="pacifico-regular">Najmodernejší</span>
          rezervačný systém pre spoločenské sály
        </h1>
        <p class="poppins-regular">
          Zmodernizujte plánovanie udalostí vo vašej sále
        </p>
        <div>
          <a href="#contact" class="poppins-regular accent-button">Kontaktujte nás</a>
          <a href="#planRozlozenia" class="poppins-regular additional-button">Zistiť viac</a>
        </div>
      </div>
    </section>
  </main>
  <section class="benefits">
    <div class="wrapper">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-wifi">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 18l.01 0" />
          <path d="M9.172 15.172a4 4 0 0 1 5.656 0" />
          <path d="M6.343 12.343a8 8 0 0 1 11.314 0" />
          <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0" />
        </svg>
        <p class="poppins-medium">Online rezervácie</p>
        <p class="poppins-regular">
          Vaši klienti si môžu zarezervovať dátum jednoducho behom jednej
          minúty.
        </p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
          <path d="M16 3v4" />
          <path d="M8 3v4" />
          <path d="M4 11h16" />
          <path d="M11 15h1" />
          <path d="M12 15v3" />
        </svg>
        <p class="poppins-medium">Prehľadný kalendár</p>
        <p class="poppins-regular">
          Všetky rezervácie sa automaticky zapíšu do kalendára, aby ste mali
          všetky rezervácie pokope.
        </p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-palette">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
          <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
          <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
          <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        </svg>
        <p class="poppins-medium">Rozloženie sály</p>
        <p class="poppins-regular">
          Po zmapovaní sály si vaši klienti budú môcť navrhnúť rozloženie
          stolov vo vašej sále v našom jedinečnom editore.
        </p>
      </div>
    </div>
  </section>
  <section class="points">
    <div class="grid">
      <div id="planRozlozenia">
        <div class="image-wrapper">
          <img src="/img/nacrt.svg" width="500" alt="Event illustration" />
        </div>
        <div class="content">
          <h2 class="poppins-bold">Prečo Hallify?</h2>

          <h3 class="poppins-bold">Toto je plán rozloženia stolov</h3>
          <p class="poppins-regular">
            Táto ilustrácia je graficky pretvorený plán nakreslený klientom na
            papier. Vyznáte sa v tom?
          </p>
          <a class="primary-button poppins-regular" href="#riesenie">Nevyznám sa</a>
        </div>
      </div>
      <div id="riesenie">
        <div class="content">
          <h3 class="poppins-bold">Toto je plán vytvorený v Hallify</h3>
          <p class="poppins-regular">
            Ako správca viete pridať populárne rozloženia pre klientov, aby
            ich vedeli do minúty použiť. Ak klientovi nevyhovuje žiadne z
            rozložení, môže si vytvoriť vlastné. Editor je prispôsobený pre
            vašu sálu.
          </p>
          <a class="primary-button poppins-regular" href="#bestCalendar">To je lepšie!</a>
        </div>
        <div class="image-wrapper" id="stage-wrapper">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-armchair">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z" />
              <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5" />
              <path d="M6 19v2" />
              <path d="M18 19v2" />
            </svg>
            <p class="poppins-regular">Počet stoličiek: 92</p>
          </div>
          <div class="legend">
            <div>
              <span class="pink"></span>
              <p class="poppins-regular">Podlubia</p>
            </div>
            <div>
              <span class="green"></span>
              <p class="poppins-regular">Vchod</p>
            </div>
            <div>
              <span class="red"></span>
              <p class="poppins-regular">Pódium</p>
            </div>
            <div>
              <span class="orange"></span>
              <p class="poppins-regular">Vchod do<br> kuchyne</p>
            </div>
          </div>
          <img src="/img/stage.png" id="stage" width="400" alt="Event illustration" />
        </div>
      </div>
      <div id="bestCalendar">
        <div class="image-wrapper">
          <img src="/img/Calendar.svg" alt="Event illustration" />
        </div>
        <div class="content">
          <h2 class="poppins-bold">A to nie je všetko</h2>
          <h3 class="poppins-bold">Prijímajte rezervácie priamo v Hallify</h3>
          <p class="poppins-regular">
            Všetky rezervácie sa automaticky zapíšu do kalendára, kde si ich viete následne zobraziť.
          </p>
          <a class="accent-button poppins-regular" href="#contact">Kontaktujte nás</a>
        </div>
      </div>
    </div>
  </section>
  <section id="vKocke">
    <div class="background"></div>
    <div class="background-2"></div>
    <div class="background-3"></div>
    <div class="content">
      <h2 class="poppins-bold">Výhody Hallify</h2>
      <div>
        <div>
          <img src="/img/Graf.svg" width="500" alt="Event illustration" />
        </div>
        <div class="text">
          <p class="poppins-regular">Hallify je systém prispôsobený vaším požiadavkám. Výhody zahŕňajú:</p>
          <div class="list">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Neodolateľná cena</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Online rezervačný systém</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Zlepšenie predstavy o pláne rozloženia sály</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Komunikácia s klientom priamo v aplikácií</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Prehľadný systém na spravovanie sály</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Udalosti zaznačené v kalendári</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Uľahčenie práce personálu</p>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
              <p class="poppins-regular">Mnoho ďalších výhod</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="reviews">
    <div>
      <h2 class="poppins-bold">Referencie</h2>
      <div>
        <div>
          <div class="profile">
            <img src="/img/Profile2.svg" alt="Profile picture" />
            <div>
              <p class="poppins-medium">Jana Opatrná</p>
              <p class="poppins-regular">Finančná kontrolórka</p>
            </div>
          </div>
          <p class="poppins-regular">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec nisl nec nisl ultricies ultricies.
            Nullam nec nisl nec nisl ultricies ultricies.
          </p>
        </div>
        <div>
          <div class="profile">
            <img src="/img/Profile1.svg" alt="Profile picture" />
            <div>
              <p class="poppins-medium">Juraj Rozbehnutý</p>
              <p class="poppins-regular">Ex-holoritník</p>
            </div>
          </div>
          <p class="poppins-regular">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec nisl nec nisl ultricies ultricies.
            Nullam nec nisl nec nisl ultricies ultricies.
          </p>
        </div>
        <div>
          <div class="profile">
            <img src="/img/Profile2.svg" alt="Profile picture" />
            <div>
              <p class="poppins-medium">Alica Nadšená</p>
              <p class="poppins-regular">Mama 2 detí</p>
            </div>
          </div>
          <p class="poppins-regular">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec nisl nec nisl ultricies ultricies.
            Nullam nec nisl nec nisl ultricies ultricies.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="faq">
    <div>
      <h2 class="poppins-bold">Často kladené otázky</h2>
      <div>
        <div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Hallify je platený správcom sály vo výške (X)€/mesiac, s
                jednorázovým mapovacím poplatkom, ktorý sa odvíja od komplexity sály, a veľkosti migrovaných dát zo starých systémov. Vaši klienti za používanie
                uživateľského rozhrania neplatia nič.</p>
            </div>
            <button class="primary-button">Koľko stojí Hallify?</button>
          </div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Od začiatku sme chceli aby si Hallify vedel ktokoľvek prispôsobiť k vlastným
                potrebám, preto si v Hallify môžete meniť široké spektrum nastavení, ako je napr. jazyk, vypnutie
                editora, a mnoho ďalších nastavení.</p>
            </div>
            <button class="primary-button">Je tento systém prispôsobiteľný?</button>
          </div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Pre zmapovanie sály si môžete doplatiť zmapovanie sály našim personálom
                (odporúčané), alebo použiť na to vstavané nástroje v Hallify.</p>
            </div>
            <button class="primary-button">Ako zmapujem svoju sálu vo Vašom editore?</button>
          </div>
        </div>
        <div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Túto funkcionalitu zatiaľ nepodporujeme, ale určite ju zvažujeme do budúcnosti.</p>
            </div>
            <button class="primary-button">Viem prijímať platby cez Hallify?</button>
          </div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Údaje uživateľov sú spracované systémom Pocketbase, ktorý je izolovaný od verejného internetu. Heslá sú bezpečne šifrované, a nemôžu si ich pozrieť ani administrátori.</p>
            </div>
            <button class="primary-button">Aké bezpečnostné opatrenia máte na ochranu údajov zákazníkov?</button>
          </div>
          <div class="expand">
            <div class="expandContent">
              <p class="poppins-regular">Štandardná doba je 14 dní, ale táto doba sa môže zmeniť v závislosti od kompexity sály a od množstva migrovaných dát zo starých systémov.</p>
            </div>
            <button class="primary-button">Ako dlho trvá implementácia systému Hallify do mojej existujúcej infraštruktúry?</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contactWrapper">
    <div id="contact">
      <h2 class="poppins-bold">Kontakt</h2>
      <div>
        <form method="post" action="/#contact">
          <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
          <input <?php echo ((!empty($_POST['name'])) ? "value='$_POST[name]'" : '') ?> class="poppins-regular" name="name" id="name" placeholder="Vaše meno" type="text"><br>
          <input <?php echo ((!empty($_POST['email'])) ? "value='$_POST[email]'" : '') ?> class="poppins-regular" name="email" id="email" placeholder="Váš E-mail" type="email"><br>
          <textarea <?php echo ((!empty($_POST['message'])) ? "value='$_POST[message]'" : '') ?> placeholder="Vaša správa (napr. informácie o sále)" class="poppins-regular" maxlength="2000" name="message" id="message"></textarea>
          <button type="submit" class="accent-button">Odoslať</button>
        </form>
        <div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>
            <p class="poppins-bold">+421 919 179 325</p>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-at">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
              <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
            </svg>
            <p class="poppins-bold">ahoj@hallify.sk</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div>
      <div>
        <a href="/" class="poppins-black-italic logo">Hallify</a>
        <p class="poppins-regular">© 2024 Hallify.sk</p>
      </div>
      <div class="links">
        <a href="#planRozlozenia" class="poppins-regular">Prečo Hallify?</a>
        <a href="#vKocke" class="poppins-regular">Výhody</a>
        <a href="#reviews" class="poppins-regular">Referencie</a>
        <a href="#contact" class="poppins-regular">Kontakt</a>
      </div>
    </div>
    <span>
      <p class="poppins-regular">Website by <a target="_blank" rel="noreferrer" class="poppins-bold" href="https://github.com/Em1tt/">Richard Marcinčák</a></p>
    </span>
  </footer>

  <button aria-label="Go up" id="backToTop" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M12 5l0 14" />
      <path d="M18 11l-6 -6" />
      <path d="M6 11l6 -6" />
    </svg>
  </button>

  <script lang="js" src="/js/navigation.js"></script>
  <script lang="js" defer src="/js/accordion.js"></script>
</body>

</html>