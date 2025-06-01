<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vertical
 */
global $main;
?>
<!doctype html>
<html
  data-wf-page="<?php echo esc_html($main) ?>"
  data-wf-site="6784794885cc7b8dbfb185e2"
  lang="ru"
  >
<head>
 <meta charset="utf-8" />
    <title>Ветрикаль</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <style>
      @media (min-width: 992px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="e63b9384-7285-77c2-71bb-074b5e6a26d5"] {
          -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
        }
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="8d4333f2-8287-f15a-2621-cb8c1dac8b46"] {
          filter: grayscale(0%);
        }
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="14380eab-3818-7a3c-e8cd-eacef28d0e61"] {
          -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
            rotateZ(0) skew(0, 0);
        }
      }
      @media (max-width: 991px) and (min-width: 768px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="e63b9384-7285-77c2-71bb-074b5e6a26d5"] {
          -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
        }
      }
      @media (max-width: 767px) and (min-width: 480px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="e63b9384-7285-77c2-71bb-074b5e6a26d5"] {
          -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
        }
      }
      @media (max-width: 479px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="e63b9384-7285-77c2-71bb-074b5e6a26d5"] {
          -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
        }
      }
      @media (min-width: 992px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="a445dac6-b2c4-57b3-82eb-f8f57196a0de"] {
          -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
            rotateZ(0) skew(0, 0);
        }
      }
    </style>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      href="https://fonts.gstatic.com"
      rel="preconnect"
      crossorigin="anonymous"
    />
    <script
      src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
      type="text/javascript"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: [
            "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
            "Geist:300,regular,600",
          ],
        },
      });
    </script>
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link
      href="https://cdn.prod.website-files.com/6784794885cc7b8dbfb185e2/678df8ff7341a72ea9e2d2d0_favicon.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://cdn.prod.website-files.com/6784794885cc7b8dbfb185e2/678df903ef7479f4b2de0fa5_webclip.png"
      rel="apple-touch-icon"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	      <div
      data-w-id="4edc08f1-263e-f242-2d27-f591cf69ac07"
      data-animation="default"
      data-collapse="medium"
      data-duration="400"
      data-easing="ease-in-out-quad"
      data-easing2="ease-in-out-quad"
      role="banner"
      class="navbar w-nav"
    >
      <div class="navbar-content">
        <a
          id="w-node-_4edc08f1-263e-f242-2d27-f591cf69ac09-cf69ac07"
          href="/"
          aria-current="page"
          class="brand-logo w-nav-brand w--current"
        >
          <!--<img
            src="https://cdn.prod.website-files.com/6784794885cc7b8dbfb185e2/678ded5a7c52fa60584a4fee_logo-dark.svg"
            loading="lazy"
            alt=""
            class="full brand-logo-image"
          />-->
          <div class="large-text logo-text">Ветрикаль</div></a
        >
        <nav
          role="navigation"
          id="w-node-_4edc08f1-263e-f242-2d27-f591cf69ac0d-cf69ac07"
          class="nav-menu w-nav-menu"
        >
          <a
            href="#"
            data-w-id="6a81d041-a58d-541f-ba1b-bccd01f85a3b"
            aria-current="page"
            class="nav-link w-inline-block w--current"
            ><div class="nav-text-wrap">
              <div class="basic-text color-grey-400 nav-menu">Главная</div>
              <div class="basic-text color-grey-400 nav-menu opacity-100">
                Главная
              </div>
            </div></a
          ><a
            href="#"
            data-w-id="f3acbd3d-09a5-09f5-852e-7aee3fc0bb15"
            class="nav-link w-inline-block"
            ><div class="nav-text-wrap">
              <div class="basic-text color-grey-400 nav-menu">О компании</div>
              <div class="basic-text color-grey-400 nav-menu opacity-100">
                О компании
              </div>
            </div></a
          ><a
            href="#"
            data-w-id="d11a56c4-6310-438a-44a5-48e692786f8a"
            class="nav-link w-inline-block"
            ><div class="nav-text-wrap">
              <div class="basic-text color-grey-400 nav-menu">Наши проекты</div>
              <div class="basic-text color-grey-400 nav-menu opacity-100">
                Наши проекты
              </div>
            </div></a
          ><a
            href="#"
            data-w-id="a979c6b7-7b8b-68e3-a39a-bc5b7beec00c"
            class="nav-link w-inline-block"
            ><div class="nav-text-wrap">
              <div class="basic-text color-grey-400 nav-menu">Отзывы</div>
              <div class="basic-text color-grey-400 nav-menu opacity-100">
                Отзывы
              </div>
            </div></a
          ><a
            href="#"
            data-w-id="f624b90b-baaf-0763-873c-77e7c42b04a7"
            class="nav-link w-inline-block"
            ><div class="nav-text-wrap">
              <div class="basic-text color-grey-400 nav-menu">Контакты</div>
              <div class="basic-text color-grey-400 nav-menu opacity-100">
                Контакты
              </div>
            </div></a
          ><a
            data-w-id="e66592fc-5fad-af30-857f-fe3b35793b21"
            href="contact.html"
            class="button navbar-button hide-in-tablet w-inline-block"
            ><div class="icon-size-small relative color-green w-embed">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true"
                role="img"
                class="iconify iconify--carbon"
                width="100%"
                height="100%"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 32 32"
              >
                <circle cx="16" cy="16" r="8" fill="currentColor"></circle>
              </svg>
            </div>
            <div class="small-text">Заказать звонок</div>
            <div class="button-circle navbar-button">
              <div class="icon-size-small navbar-button hover-in w-embed">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--carbon"
                  width="100%"
                  height="100%"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 32 32"
                >
                  <path
                    fill="currentColor"
                    d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z"
                  ></path>
                </svg>
              </div>
              <div class="icon-size-small navbar-button hover-out w-embed">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--carbon"
                  width="100%"
                  height="100%"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 32 32"
                >
                  <path
                    fill="currentColor"
                    d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z"
                  ></path>
                </svg>
              </div></div
          ></a>
        </nav>
        <div
          id="w-node-_4edc08f1-263e-f242-2d27-f591cf69ac1a-cf69ac07"
          class="nav-button-wrap"
        >
          <a
            data-w-id="4edc08f1-263e-f242-2d27-f591cf69ac1b"
            href="contact.html"
            class="button navbar-button hide-in-mobile w-inline-block"
            ><div class="icon-size-small relative color-green w-embed">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true"
                role="img"
                class="iconify iconify--carbon"
                width="100%"
                height="100%"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 32 32"
              >
                <circle cx="16" cy="16" r="8" fill="currentColor"></circle>
              </svg>
            </div>
            <div class="small-text">Заказать звонок</div>
            <div class="button-circle navbar-button">
              <div class="icon-size-small navbar-button hover-in w-embed">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--carbon"
                  width="100%"
                  height="100%"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 32 32"
                >
                  <path
                    fill="currentColor"
                    d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z"
                  ></path>
                </svg>
              </div>
              <div class="icon-size-small navbar-button hover-out w-embed">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--carbon"
                  width="100%"
                  height="100%"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 32 32"
                >
                  <path
                    fill="currentColor"
                    d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z"
                  ></path>
                </svg>
              </div></div
          ></a>
          <div class="menu-button w-nav-button">
            <div class="icon w-embed">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true"
                role="img"
                class="iconify iconify--bx"
                width="100%"
                height="100%"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

