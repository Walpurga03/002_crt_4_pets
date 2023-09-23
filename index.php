<!DOCTYPE html>
<html lang="de">
  <head>
    <title>CRT Praxis für Tiere</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Theralogy ist ein Konzept, das die Regeneration von Körperzellen und die Stärkung von Selbstheilungskräften zum Ziel hat. Dabei kommen sogenannte Redater (engl. redate = umdatieren) zum Einsatz."
    />
    <meta
      name="keywords"
      content="Theralogy, Körperzellen, Stärkung, Redater, Regeneration, Zelltraining"
    />

    <link rel="stylesheet" type="text/css" href="./dist/main.css" />
  </head>

  <body>
    <section class="booking-modal" id="booking-modal">
      <div class="booking-modal__content">
        <a class="booking-modal__close" href="#">x</a>
        <h3 class="booking-modal__heading">Jetzt Anfrage stellen!</h3>
        <p class="booking-modal__paragraph">
          Ich melde mich schnellstmöglich bei Ihnen
        </p>

        <form class="form" action="form.php" method="POST">
          <div class="form__horizontal">
            <div class="form__group">
              <input
                name="name"
                type="text"
                class="form__input"
                id="booking-modal-name"
                placeholder="Name"
              />
              <label class="form__label" for="booking-modal-name">Name</label>
            </div>
            <div class="form__group">
              <input
                name="email"
                type="text"
                class="form__input"
                id="booking-modal-email"
                placeholder="E-Mail"
              />
              <label class="form__label" for="booking-modal-email"
                >E-Mail</label
              >
            </div>
          </div>

          <label for="contact-message" class="contact-label"></label>
          <textarea
            name="nachricht"
            id="contact-message"
            class="no-outline"
            placeholder="Ihre Nachricht"
            required="required"
          ></textarea>
          <div class="booking-modal__submit-container">
            <input
              type="submit"
              class="booking-modal__button booking-modal__button--form"
              value="Anfrage abschicken!"
            />
          </div>
        </form>
      </div>
    </section>
    <section>
      <div class="navbar">
        <div class="header__logo">
          <a href="#home"
            ><img
              class="navigation__logo"
              src="./images/header/logoSchwartz.png"
              alt="logoSchwartz"
          /></a>
        </div>
        <nav class="navigation stroke">
          <ul class="navigation__list">
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#home">Home</a>
            </li>
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#eindruecke"
                >Crt-4-pets</a
              >
            </li>
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#gallery">Galerie</a>
            </li>
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#video">Video</a>
            </li>
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#ueberMich"
                >Über mich</a
              >
            </li>
            <li
              class="navigation__list-item navigation__list-item--mobile-hidden"
            >
              <a class="navigation__list-item-link" href="#kontakt">Kontakt</a>
            </li>

            <a href="#booking-modal"
              ><button
                class="button button--slim button--secondary button-anfrage"
              >
                Anfrage
              </button>
            </a>
            <li class="navigation__list-item navigation__list-item--menu">
              <label class="navigation__list-item-link" for="sidenav__opened">
                <svg class="navigation__icon" viewBox="0 0 512 512">
                  <g>
                    <path
                      d="M358.06,193.61H153.94c-3.83,0-6.93-3.1-6.93-6.93s3.1-6.93,6.93-6.93h204.13c3.83,0,6.93,3.1,6.93,6.93
                                            S361.89,193.61,358.06,193.61z"
                    />
                    <path
                      d="M358.06,262.93H153.94c-3.83,0-6.93-3.1-6.93-6.93c0-3.83,3.1-6.93,6.93-6.93h204.13
                                            c3.83,0,6.93,3.1,6.93,6.93C365,259.83,361.89,262.93,358.06,262.93z"
                    />
                    <path
                      d="M358.06,332.25H153.94c-3.83,0-6.93-3.1-6.93-6.93c0-3.83,3.1-6.93,6.93-6.93h204.13
                                            c3.83,0,6.93,3.1,6.93,6.93C365,329.15,361.89,332.25,358.06,332.25z"
                    />
                    <path
                      d="M256,474.76c-120.62,0-218.76-98.14-218.76-218.76c0-120.63,98.14-218.76,218.76-218.76
                                            c120.63,0,218.76,98.14,218.76,218.76C474.76,376.62,376.62,474.76,256,474.76z M256,51.1C143.02,51.1,51.1,143.02,51.1,256
                                            S143.02,460.9,256,460.9S460.9,368.98,460.9,256S368.98,51.1,256,51.1z"
                    />
                  </g>
                </svg>
              </label>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <input
      type="checkbox"
      class="sidenav__opened"
      id="sidenav__opened"
      autocomplete="off"
    />
    <header class="header" id="home">
      <div class="header__container">
        <?php if (isset($_GET['contacted'])): ?>
        <p id="contact-success">Das Formular wurde erfolgreich übermittelt.</p>
        <?php endif; ?>

        <div class="wrapper">
          <div class="one">
            <img
              class="header__crtStudio"
              src="./images/header/CRT-Praxis.png"
              alt="CRT-Praxis"
            />
          </div>
          <div class="two">
            <img
              class="header__logoWinkt"
              src="./images/header/logoTiere_1.jpg"
              alt="logoTiere"
            />
          </div>
          <div class="three">
            <p class="header__text-ort">Ihr Cell-Re-Active-Praxis-4-Pets</p>
          </div>
          <div class="four">
            <img
              class="header__vielFelltig"
              src="./images/animal/CRT-4-PETS.png"
              alt="vielFellitig einsatzbar"
            />
          </div>
        </div>
      </div>
    </header>
    <section class="motivation" id="eindruecke">
      <h1 class="motivation__balken">Was ist Cell-Re Aktive für Tiere?</h1>
      <div class="motivation__container">
        <div>
          <div class="motivation__column-text">
            <p class="motivation__text">
              Egal, um welche Funktionen oder Fähigkeiten es bei Tieren geht, ob
              sie sich bewegen, etwas verstehen oder wahrnehmen – ja, selbst
              alle Organ- und Nervenfunktionen, die die Vitalität und
              Leistungsfähigkeit eines Tieres erzeugen, entstehen nur, wenn in
              der Zellkommunikation Millionen von Zellen geordnet
              zusammenarbeiten können. Ist diese Zusammenarbeit aus
              irgendwelchen Gründen BLOCKIERT, hat das AUSWIRKUNGEN auf die
              natürlichen Zellfunktionen. Das äußert sich unterschiedlich, je
              nachdem <span class="motivation__text-first">WAS</span> –
              <span class="motivation__text-second">WO</span> –
              <span class="motivation__text-third">WANN</span> an
              Zellkommunikation BLOCKIERT ist. AUSWIRKUNGEN wie Bewegungs- und
              Wahrnehmungsstörungen bis hin zu Schmerzen und chronischen
              Störungen sind das Resultat der BLOCKADE. Wie wäre es, wenn du mit
              dem
              <span class="motivation__text-first">C</span>
              <span class="motivation__text-second">R</span>
              <span class="motivation__text-third">T</span>-4-Pets Hometraining:
            </p>
            <!-- <p class="motivation__text">Alle Funktionen eines Lebewesens werden von vielen einzelnen Zellen
            get&auml;tigt.&nbsp;</br>
            Ob Ihr Tier schl&auml;ft, sich bewegt oder Laute von sich gibt &ndash; alle K&ouml;rperfunktionen sind davon
            abh&auml;ngig, dass Zellen richtig aktiv zusammenarbeiten. Durch &Uuml;berforderung, Ereignisse wie Unfall,
            Schreck, Schock oder Aufnahme von Giftstoffen kann diese Kommunikationsleistung der Zellen nachhaltig
            gest&ouml;rt
            werden, sodass einige Zellen inaktiv in einem Standby-Modus verharren. Hier setzt das
            Cell-Re-Active-Training
            an,
            indem es:</p> -->

            <!-- <p class="motivation__text">Je mehr Zellen Ihres Tieres richtig aktiv zusammenarbeiten, umso mehr Lebenskraft,
            Vitalit&auml;t und Lebensfreude versp&uuml;rt Ihr Tier.&nbsp;&nbsp;
            Mit dem CRT-4-Pets-Training haben Sie die M&ouml;glichkeit, dies Ihrem Tier zu erm&ouml;glichen.
            Das Besondere am CRT-4-Pets ist, dass es jeder ausprobieren kann.
            Das CRT-Training für Tiere biete ich ausschließlich in Form von
            Hausbesuchen an.
            Mehr Informationen über dieses Training erfahren Sie unter der Telefonnummer:
            <a href="tel:+436642146872" target="_blank">+43 664 214 68 72</a>.

          </p> -->
          </div>

          <div class="motivation__column-images">
            <img
              class="motivation__image motivation__image--first"
              src="images/animal/kuh_1.png"
              alt="Kuh"
            />
            <img
              class="motivation__image motivation__image--second"
              src="images/animal/hund.png"
              alt="Hund"
            />
            <img
              class="motivation__image motivation__image--third"
              src="images/animal/katze.jpg"
              alt="Katze"
            />
          </div>
        </div>
      </div>
      <div>
        <div class="motivation__three-points">
          <ol>
            <li class="motivation__text-third">
              <p>einzelne Zellsyteme durcharbeiten,</p>
            </li>
            <li class="motivation__text-second">
              <p>Zellblockaden reflektieren und reaktiv lösen</p>
            </li>
            <li class="motivation__text-first">
              <p>und Zellkommunikation nachhaltig trainieren könntest?</p>
            </li>
          </ol>
        </div>
        <img
          class="motivation__banner"
          src="images/animal/THP_602.jpg"
          alt="Theralogy Konzept"
        />
        <div class="motivation__text1">
          <span class="motivation__text-first">
            Die Möglichkeiten, die ich Ihnen bieten kann:<br />
          </span>
          1. Sie vereinbaren einen Termin für Ihren Liebling und erleben, wie
          das CRT-4-Pets Training angewendet wird und wirkt.<br />
          2. Sie haben bereits ein Heimtrainingsset und möchten sich in einen
          Termin unterstützen lassen, noch intensiver damit arbeiten zu können.
        </div>
        <img
          class="motivation__banner"
          src="images/animal/vielFELLtig_einsetzbar.png"
          alt="Theralogy Konzept"
        />
        <div class="motivation__text1">
          <span class="motivation__text-first">
            Für wen eignet sich das CRT-4-Pets Training?<br />
          </span>

          Das CRT-4-Pets Hometraining ist das ideale Werkzeug für jeden
          Tierfreund, der bei seinem Tier ein reaktives Gesundheitstraining
          anwenden möchte. Beim CRT-4-Pets Hometraining hast du die Möglichkeit
          in allen Zellsystemen die aktuellen Zellfunktionsdaten zu
          reflektieren, wodurch der Organismus erkennt, WAS ihn WO und WANN
          blockiert. Darauf beginnen die Zellen ganz natürlich daran zu
          arbeiten, selbst die Blockade nachhaltig zu lösen, um so wieder mehr
          Leistung in ihrer Zellfunktion zu erzielen.
        </div>
        <div class="motivation__text1">
          <span class="motivation__text-second">
            Wann sollte man einen Termin bei einem CRT-4-Pets Trainer buchen?
            <br />
          </span>
          Immer wenn Sie Unterstützung brauchen, um mit Ihrem CRT-4-Pets
          Heimtraining weiter zu kommen. Das geschulte Wissen und das Arbeiten
          mit zelltreaktivierenden Lichtfrequenzen der Redater Light-Brush bei
          einem Trainer kann Ihnen helfen, Ihr Trainingsziel effektiver und
          schneller zu erreichen.
        </div>
        <img
          class="motivation__banner"
          src="images/animal/B_Gesundheit_ist_blockadefrei.png"
          alt="Theralogy Konzept"
        />
        <img
          class="motivation__banner"
          src="images/animal/drei_zellsysteme.png"
          alt="Theralogy Konzept"
        />
        <img
          class="motivation__banner"
          src="images/animal/3_CRT-4-Pets-Training.png"
          alt="Theralogy Konzept"
        />
      </div>
    </section>
    <section class="gallery" id="gallery">
      <div class="gallery__balken">
        <p>vielFelltig einsetzbar</p>
      </div>
      <div class="gallery__container">
        <div class="gallery__list">
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/katze_1.png"
              alt="Katze"
            />
          </a>
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/hund_3.png"
              alt="Hund"
            />
          </a>
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/ente_1.png  "
              alt="Ente"
            />
          </a>
        </div>

        <input
          class="gallery__cb-toggle"
          id="gallery__cb-toggle"
          type="checkbox"
          autocomplete="off"
        />
        <div class="gallery__more-button-container">
          <label class="gallery__button" for="gallery__cb-toggle">Mehr</label>
        </div>
        <div class="gallery__list gallery__list--cb-toggle">
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/hund_2.png"
              alt="Hund"
            />
          </a>
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/kuh_1.png"
              alt="Kuh"
            />
          </a>
          <a class="gallery__list-item">
            <img
              class="gallery__list-item-image"
              src="./images/gallery/pferd_1.png"
              alt="Pferd"
            />
          </a>
        </div>
      </div>
      <div class="gallery__24h-7d">
        <p class="gallery__24h-7d-color">
          Das reaktive Gesundheitstraining <span>24</span><span>/</span
          ><span>7</span>
        </p>
      </div>
    </section>

    <section class="video" id="video">
      <div class="video__container">
        <video
          class="video__movie"
          src="./videos/videoTiere.mp4"
          controls
          poster="vorschaubild.jpg"
        >
          Dies Video kann in Ihrem Browser nicht wiedergegeben werden.<br />
          Eine Download-Version steht unter <a href="URL">Link-Addresse</a> zum
          Abruf bereit.
        </video>
      </div>
    </section>
    <section class="about" id="ueberMich">
      <div class="about__balken">
        <p>Für Menschen, denen ihre Tiere lebenswert sind.</p>
      </div>

      <div class="about__container">
        <div class="about__slideshow">
          <img
            class="about__img"
            src="images/ueberMich/foto1.png"
            alt="Foto Birgit_1"
          />
          <img
            class="about__img about__img--slideshow about__img--slideshow-1"
            src="images/ueberMich/foto2.png"
            alt="Foto Birgit_2"
          />
          <img
            class="about__img about__img--slideshow about__img--slideshow-3"
            src="images/ueberMich/hundW_2.jpg"
            alt="Foto Birgit_3"
          />
        </div>
        <div class="about__text">
          <h3 class="about__heading">Über mich</h3>
          <p class="about__paragraph">
            Mein Name ist Birgit Spielberger, ich bin verheiratet und Mutter von
            2 Kindern. <br />Ich lebe mit meiner Familie in Dornbirn. <br />Auf
            meinem bisherigen Weg durfte ich bereits viel Lernen was ich gerne
            auch heute in meiner eigenen Praxis einbringen und umsetzen darf.
            Mein Bestreben nach der Ursachenfindung brachte mich schlussendlich
            zu Theralogy. Ich durfte meine Ausbildung persönlich bei David
            Overbeck,<br />
            dem Erfinder von Theralogy und dem Cell-Re-Active-Training
            absolvieren. Auch in der Zeit von und mit Corona ist es mir ein
            Anliegen,<br />
            den Menschen und Tieren mit Hilfe des Cell-Re-Active-Trainings eine
            Möglichkeit anzubieten,Ihre Zellen 24/7 zu trainieren.
            <br />
            <br />
            Hier finden Sie weitere Informationen über meine Praxis (
            <a class="about__link" href="https://spielberger.at" target="_blank"
              >klicke hier</a
            >).
            <br />
          </p>
          <blockquote>
            „Wer meint, GLÜCK könne man nicht anfassen, hat noch nie ein Tier
            gestreichelt!“
          </blockquote>
          <br />
          <p class="about__paragraph">
            Wenn auch Sie mehr für das Wohlbefinden Ihres Tieres tun wollen und
            Sie denken, dass ich Ihnen dabei behilflich sein kann, können Sie
            sich gerne mit mir in Verbindung setzen.
          </p>
        </div>
      </div>
    </section>
    <section class="footer" id="kontakt">
      <div class="footer__balken">
        <p>Ich habe Zeit für Sie und Ihr Tier</p>
      </div>
      <div class="footer__container">
        <div class="footer__text-column">
          <div class="footer__heading">
            <p>Wenn</p>
            <p>nicht</p>
            <p>jetzt</p>
            <p>wann dann?</p>
          </div>

          <div class="footer__contact-item">
            <div class="footer__contact-item-icon">
              <svg
                class="footer__icon footer__icon--no-position"
                viewBox="0 0 512 512"
              >
                <path
                  d="M432.93,176.46L278.35,76.46c-13.6-8.8-31.11-8.8-44.71,0l-154.59,100c-11.72,7.58-18.8,20.6-18.8,34.56v185.41
                                    c0,22.73,18.43,41.16,41.16,41.16h309.16c22.73,0,41.16-18.43,41.16-41.16V211.01C451.73,197.05,444.65,184.04,432.93,176.46z
                                        M206.14,339.84l-88.63,71.18c-2.77,2.22-6.09,3.31-9.38,3.31c-4.39,0-8.74-1.92-11.7-5.61c-5.19-6.46-4.16-15.9,2.3-21.09
                                    l88.63-71.18c6.46-5.19,15.9-4.16,21.09,2.3C213.63,325.21,212.6,334.66,206.14,339.84z M244.25,307.65l-122.57-79.29
                                    c-18.07-11.69-9.79-39.74,11.73-39.74h245.15c21.53,0,29.81,28.05,11.73,39.74l-122.58,79.29
                                    C260.57,312.27,251.39,312.27,244.25,307.65z M414.98,408.72c-2.96,3.69-7.31,5.61-11.71,5.61c-3.3,0-6.61-1.08-9.38-3.31
                                    l-88.63-71.18c-6.46-5.19-7.49-14.63-2.3-21.09c5.19-6.46,14.63-7.49,21.09-2.3l88.63,71.18
                                    C419.14,392.82,420.17,402.26,414.98,408.72z"
                />
              </svg>
            </div>
            <a
              class="footer__contact-item-link"
              href="mailto:praxis@spielberger.at"
              target="_blank"
              >praxis@spielberger.at</a
            >
          </div>
          <div class="footer__contact-item">
            <div
              class="footer__contact-item-icon footer__contact-item-icon--phone"
            >
              <svg class="footer__icon" viewBox="0 0 512 512">
                <g>
                  <path
                    d="M412.93,331.8l-44.52-24c-10.84-5.84-19.27-1.62-28.6,11.23c-20.5,28.2-30.44,33.78-55.6,19.73
                                        c-23.47-13.1-40.28-28.67-61.36-49.75c-21.08-21.08-36.64-37.89-49.75-61.36c-14.04-25.15-8.47-35.1,19.73-55.59
                                        c12.85-9.34,17.07-17.76,11.23-28.6l-24-44.52c-9.81-18.94-23.71-21.1-44.28-14.14c-28.37,9.6-55.82,50.57-54.43,70.01
                                        c4.07,56.81,32.51,125.07,91.71,184.26c59.19,59.2,127.45,87.64,184.27,91.71c19.44,1.39,60.14-26.33,69.74-54.7
                                        C434.03,355.52,431.86,341.61,412.93,331.8z"
                  />
                  <path
                    d="M279.74,160.35c-9.39,0.08-16.93,7.75-16.85,17.13c0.08,9.34,7.67,16.85,16.99,16.85
                                        c0.16-0.01,0.32,0,0.46,0c10.11,0,19.58,3.9,26.7,11.02c7.19,7.19,11.1,16.79,11.02,27.01c-0.08,9.38,7.47,17.05,16.85,17.13
                                        h0.14c9.31,0,16.91-7.52,16.99-16.85c0.16-19.41-7.29-37.63-20.97-51.32C317.38,167.64,298.88,160.47,279.74,160.35z
                                            M381.17,131.21c-27.06-27.07-63.52-41.95-101.35-41.75c-9.39,0.03-16.96,7.67-16.93,17.05c0.03,9.36,7.63,16.93,16.99,16.93
                                        c0.11-0.02,0.3-0.01,0.46,0c29.02,0,56.29,11.28,76.8,31.8c20.6,20.6,31.9,48.02,31.8,77.2c-0.03,9.39,7.55,17.02,16.93,17.05
                                        h0.06c9.36,0,16.96-7.57,16.99-16.93C423.05,194.25,408.23,158.26,381.17,131.21z"
                  />
                </g>
              </svg>
            </div>
            <a
              class="footer__contact-item-link"
              href="tel:+436642146872"
              target="_blank"
              >+43 664 214 68 72</a
            >
          </div>
        </div>
        <div class="footer__logo-column">
          <img
            class="footer__logo"
            src="./images/footer/spielberger-weiss-800.png"
            alt="logo_weiss"
          />
        </div>
      </div>
      <footer class="footer__footer">
        <ul class="footer__footer-list">
          <li>
            <a class="footer__footer-link" href="impressum.html">Impressum</a>
          </li>
          <li>
            <a class="footer__footer-link" href="dse.html"
              >Datenschutzerklärung</a
            >
          </li>
          <li>
            <a class="footer__footer-link">© Copyright Spielberger.at</a>
          </li>
        </ul>
      </footer>
    </section>

    <section class="sidenav">
      <label for="sidenav__opened" class="sidenav__background"></label>
      <div class="sidenav__container">
        <label for="sidenav__opened" class="sidenav__close">X</label>
        <nav>
          <ul class="sidenav__nav">
            <li><a href="#home" class="sidenav__nav-link">Home</a></li>
            <li>
              <a href="#eindruecke" class="sidenav__nav-link">CRT-4_Pets</a>
            </li>
            <li><a href="#gallery" class="sidenav__nav-link">Galerie</a></li>
            <li><a href="#video" class="sidenav__nav-link">Video</a></li>
            <li>
              <a href="#ueberMich" class="sidenav__nav-link">Über mich</a>
            </li>
            <li><a href="#kontakt" class="sidenav__nav-link">Kontakt</a></li>
          </ul>
        </nav>
      </div>
    </section>
  </body>
</html>
