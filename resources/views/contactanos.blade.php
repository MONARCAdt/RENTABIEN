<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunícate con Nosotros - Contactanos</title>
    <link rel="icon" href="{{ asset('img/INMOBILIARIA-removebg-preview.png') }}" type="image/png">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Aprende CSS desde cero">
    <meta name="description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexcgdesign.github.io">
    <meta property="og:title" content="Aprende CSS desde cero">
    <meta property="og:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="og:image" content="https://alexcgdesign.github.io/images/css.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.jordanalex.com/">
    <meta property="twitter:title" content="Aprende CSS desde cero">
    <meta property="twitter:description"
        content="Hola, soy una descripción que verás cuando busques algo de mi temática en Google.">
    <meta property="twitter:image" content="https://alexcgdesign.github.io/images/css.jpg">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Protest+Strike&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

:root {
    --padding-container: 100px 0;
    --color-title: #001A49;
}

#tabla-precios {
 display:inline-block;
 width:100%;
 margin-top:50px
}

/*Columnas*/

.imput-color {
    color: black; /* Establece el color del texto en blanco */
}

select{
    color: blacks;
}

option{
    color: black;
}

.precio-col {
 display:inline-block;
 background-color:#f3f3f3;
 width:100%;
 max-width:500px;
 border-radius:10px;
 margin-bottom:50px;
 box-shadow: 0px 2px 5px #ddd
}

@media screen and (min-width:768px) {
 .precio-col {
 width:32%;
 float:left;
 margin-right:2%
 }
 
 .precio-col:last-child {
 margin-right:0
 }
}

/*Headers*/

.precio-col-header {
 background-color:#333;
 padding:20px;
 border-top-left-radius:10px;
 border-top-right-radius:10px
}

.precio-col:nth-child(2) .precio-col-header {
 background-color:#3876b0
}

.precio-col-header h3 {
 color:#f3f3f3;
 text-align:center;
 font-size:30px;
 font-weight:600;
 margin-bottom:0
}

.precio-col-header p {
 text-align:center;
 color:#f3f3f3;
 font-size:14px;
 margin-bottom:0
}

/*Características*/

.precio-col-features {
 padding: 0 20px 20px 20px
}

.precio-col-features p {
 padding:20px 0;
 margin:0;
 text-align:center;
 border-top:1px solid #ddd
}

.precio-col-features p:first-child,
.precio-col-features p:last-child {
 border-top:none
}

/*Comprar*/

.precio-col-comprar {
 padding:10px;
 max-width:250px;
 text-align:center;
 background-color:#3876b0;
 margin: 0 auto 20px;
 border-radius:10px;
 border: 2px solid #3876b0;
 transition: all 0.3s
}

.precio-col-comprar a {
 color:#f3f3f3;
 padding:10px;
 font-size:20px;
 text-transform:uppercase;
 transition: all 0.3s
}

.precio-col-comprar:hover {
 background-color:#f3f3f3;
 transition: all 0.3s
}

.precio-col-comprar:hover a {
 color:#dd9933;
 transition: all 0.3s
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

body {
    font-family: 'Poppins', sans-serif;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
    padding: var(--padding-container);
}

.hero {
    width: 100%;
    height: 100vh;
    min-height: 600px;
    max-height: 800px;
    position: relative;
    display: grid;
    grid-template-rows: 100px 1fr;
    color: #fff;
}

.logo img {
  max-height: 150px; /* Ajusta el tamaño del logo según tus necesidades */
}

#nguia {
  border: 2px solid #2091F9;
  border-radius: 10px;
  padding: 8px;
  font-size: 16px;
}


button {
  background-color: #2091F9;
  color: #white;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #1a68b1;
}
.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(180deg, #5a58588c 0%, #0000008c 100%), url('https://images.pexels.com/photos/7018405/pexels-photo-7018405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
    background-size: cover;
    clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
    z-index: -1;
}


/* Nav */

.nav {
    --padding-container: 0;
    height: 100%;
    display: flex;
    align-items: center;
}

.nav__title {
    font-weight: 300;
}

.nav__link {
    margin-left: auto;
    padding: 0;
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: max-content;
    gap: 2em;
}

.nav__items {
    list-style: none;
}

.nav__links {
    color: #fff;
    text-decoration: none;
}

.nav__menu {
    margin-left: auto;
    cursor: pointer;
    display: none;
}

.nav__img {
    display: block;
    width: 30px;
}


.nav__close {
    display: var(--show, none);
}


/* Hero container */

.hero__container {
    max-width: 800px;
    --padding-container: 0;
    display: grid;
    grid-auto-rows: max-content;
    align-content: center;
    gap: 1em;
    padding-bottom: 100px;
    text-align: center;
}

.hero__title {
    font-size: 3rem;
}

.hero__paragraph {
    margin-bottom: 20px;
}

.cta {
    display: inline-block;
    background-color: #2091F9;
    justify-self: center;
    color: #ffffff;
    text-decoration: none;
    padding: 13px 30px;
    border-radius: 32px;
}

/* About */

.about {
    text-align: center;
}

.subtitle {
    color: var(--color-title);
    font-size: 2rem;
    margin-bottom: 25px;
}


.about__paragraph {
    line-height: 1.7;
}

.about__main {
    padding-top: 80px;
    display: grid;
    width: 90%;
    margin: 0 auto;
    gap: 1em;
    overflow: hidden;
    grid-template-columns: repeat(auto-fit, minmax(260px, auto));
}


.about__icons {
    display: grid;
    gap: 1em;
    justify-items: center;
    width: 260px;
    overflow: hidden;
    margin: 0 auto;
}

.about__icon {
    width: 250px;
}

.about__icon23 {
    width: 20%;
}
/* Knowledge */

.knowledge {
    background-color: #e5e5f7;
    background-image: radial-gradient(#444cf7 0.5px, transparent 0.5px), radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
    background-size: 20px 20px;
    background-position: 0 0, 10px 10px;
    overflow: hidden;
}

.knowledge__container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1em;
    align-items: center;
}

.knowledge__picture{
    max-width: 500px;
}

.knowledge__paragraph{
    line-height: 1.7;
    margin-bottom: 15px;
}

.knowledge__img{
    width: 100%;
    display: block;
}

/* price */

.price{
    text-align: center;
}

.price__table{
    padding-top: 60px;
    display: flex;
    flex-wrap: wrap;
    gap: 2.5em;
    justify-content: space-evenly;
    align-items: center;
}

.price__element{
    background-color: #e5e5f7;
    text-align: center;
    border-radius: 10px;
    width: 330px;
    padding: 40px;
    --color-plan: #696871;
    --color-price: #1D293F;
    --bg-cta: #fff;
    --color-cta: #5454D4;
    --color-items: #696871;
}

.price__element--best{
    width: 370px;
    padding: 60px 40px;
    background-color: #FF7143;
    --color-plan: rgb(255 255 255 / 75%);
    --color-price: #fff;
    --bg-cta: #9F3919;
    --color-cta: #FFF;
    --color-items: #fff;
}


.price__name{
    color: var(--color-plan);
    margin-bottom: 15px;
    font-weight: 300;
}

.price__price{
    font-size: 2.5rem;
    color: var(--color-price);
}

.price__items{
    margin-top: 35px;
    display: grid;
    gap: 1em;
    font-weight: 300;
    font-size: 1.2rem;
    margin-bottom: 50px;
    color: var(--color-items);
}

.price__cta{
    display: block;
    padding: 20px 0;
    border-radius: 10px;
    text-decoration: none;
    background-color: var(--bg-cta);
    font-weight: 600;
    color: var(--color-cta);
    box-shadow: 0 0 1px rgba(0, 0, 0, .5);
}

/* Testimony */

.testimony{
    background-color: #e5e5f7;
}

.testimony__container{
    display: grid;
    grid-template-columns: 50px 1fr 50px;
    gap: 1em;
    align-items: center;
}

.testimony__body{
    display: grid;
    grid-template-columns: 1fr max-content;
    justify-content: space-between;
    align-items: center;
    gap: 2em;
    grid-column: 2/3;
    grid-row: 1/2;
    opacity: 0;
    pointer-events: none;
}


.testimony__body--show{
    pointer-events: unset;
    opacity: 1;
    transition: opacity 1.5s ease-in-out;
}

.testimony__img{
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    object-position: 50% 30%;
}

.testimony__texts{
    max-width: 700px;
}

.testimony__course{
    background-color: royalblue;
    color: #fff;
    display: inline-block;
    padding: 5px;
}

.testimony__arrow{
    width: 90%;
    cursor: pointer;
}

/* Questions */

.questions{
    text-align: center;
}

.questions__container{
    display: grid;
    gap: 2em;
    padding-top: 50px;
    padding-bottom: 100px;
}

.questions__padding{
    padding: 0;
    transition: padding .3s;
    border: 1px solid #5454D4;
    border-radius: 6px;
}

.questions__padding--add{
    padding-bottom: 30px;
}

.questions__answer{
    padding: 0 30px 0;
    overflow: hidden;
}

.questions__title{
    text-align: left;
    display: flex;
    font-size: 20px;
    padding: 30px 0 30px;
    cursor: pointer;
    color: var(--color-title);
    justify-content: space-between;
}

.questions__arrow{
    border-radius: 50%;
    background-color: var(--color-title);
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: flex-end;
    margin-left: 10px;
    transition:  transform .3s;
}

.questions__arrow--rotate{
    transform: rotate(180deg);
}

.questions__show{
    text-align: left;
    height: 0;
    transition: height .3s;
}

.questions__img{
    display: block;
}

.questions__copy{
    width: 60%;
    margin: 0 auto;
    margin-bottom: 30px;
}

/* Footer */

.footer{
    background-color: #1D293F;
}

.footer__title{
    font-weight: 300;
    font-size: 2rem;
    margin-bottom: 30px;
}

.footer__title, .footer__newsletter{
    color: #fff;
}


.footer__container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #fff;
    padding-bottom: 60px;
}

.nav--footer{
    padding-bottom: 20px;
    display: grid;
    gap: 1em;
    grid-auto-flow: row;
    height: 100%;
}

.nav__link--footer{
    display: flex;
    margin: 0;
    margin-right: 20px;
    flex-wrap: wrap;
}

.footer__inputs{
    margin-top: 10px;
    display: flex;
    overflow: hidden;
}

.footer__input{
    background-color: #fff;
    height: 50px;
    display: block;
    padding-left: 10px;
    border-radius: 6px;
    font-size: 1rem;
    outline: none;
    border: none;
    margin-right: 16px;
}

.footer__submit{
    margin-left: auto;
    display: inline-block;
    height: 50px;
    padding: 0 20px ;
    background-color: #2091F9;
    border: none;
    font-size: 1rem;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
}

.footer__copy{
    --padding-container: 30px 0;
    text-align: center;
    color: #fff;
}

.footer__copyright{
    font-weight: 300;
}

.footer__icons{
    margin-bottom: 10px;
}

.footer__img{
    width: 30px;
}

/* Media queries */

@media (max-width:800px){
    .nav__menu{
        display: block;
    }

    .nav__link--menu{
        position: fixed;
        background-color: #000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        z-index: 100;
        opacity: 0;
        pointer-events: none;
        transition: .7s opacity;
    }

    .nav__link--show{
        --show: block;
        opacity:1 ;
        pointer-events: unset;
    }

    .nav__close{
        position: absolute;
        top: 30px;
        right: 30px;
        width: 30px;
        cursor: pointer;
    }

    .hero__title{
        font-size: 2.5rem;
    }


    .about__main{
        gap: 2em;
    }

    .about__icons:last-of-type{
        grid-column: 1/-1;
    }


    .knowledge__container{
        grid-template-columns: 1fr;
        grid-template-rows: max-content 1fr;
        gap: 3em;
        text-align: center;
    }

    .knowledge__picture{
        grid-row: 1/2;
        justify-self: center;
    }

    .testimony__container{
        grid-template-columns: 30px 1fr 30px;
    }

    .testimony__body{
        grid-template-columns: 1fr;
        grid-template-rows: max-content max-content;
        gap: 3em;
        justify-items:center ;
    }


    .testimony__img{
        width: 200px;
        height: 200px;
        
    }

    .questions__copy{
        width: 100%;
    }

    .footer__container{
        flex-wrap: wrap;
    }

    .nav--footer{
        width: 100%;
        justify-items: center;
    }

    .nav__link--footer{
        width: 100%;
        justify-content: space-evenly;
        margin: 0;
    }

    .footer__form{
        width: 100%;
        justify-content: space-evenly;
    }

    .footer__input{
        flex: 1;
    }

}

@media (max-width:600px){
    .hero__title{
        font-size: 2rem;
    }

    .hero__paragraph{
        font-size: 1rem;
    }

    .text_color{
        colrgb(0, 0, 0) red; /* Cambia el color del texto aquí */
    }

    .subtitle{
        font-size: 1.8rem;
    }

    .price__element{
        width: 90%;
    }

    .price__element--best{
        width: 90%;
        /* padding: 40px; */
    }

    .price__price{
        font-size: 2rem;
    }

    .testimony{
        --padding-container: 60px 0;
    }

    .testimony__container{
        grid-template-columns: 28px 1fr 28px;
        gap: .9em;
    }

    .testimony__arrow{
        width: 100%;
    }

    .testimony__course{
        margin-top: 15px;
    }

    .questions__title{
        font-size: 1rem;
    }

    .footer__title{
        justify-self: start;
        margin-bottom: 15px;
    }

    .nav--footer{
        padding-bottom: 60px;
    }

    .nav__link--footer{
        justify-content: space-between;
    }

    .footer__inputs{
        flex-wrap: wrap;
    }

    .footer__input{
        flex-basis: 100%;
        margin: 0;
        margin-bottom: 16px;
    }

    .footer__submit{
        margin-right: auto;
        margin-left: 0;
        

        /* 
        margin:0;
        width: 100%;
        */
    }

            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#000000;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}

}
    </style>
            <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}

                    /* Estilos para el contenedor del mapa */
        #map-container {
            display: flex; /* Usa un diseño flexible */
        }

        /* Estilos para el mapa */
        #map {
            flex: 1; /* Toma todo el espacio disponible a la izquierda */
            height: 400px; /* Altura del mapa */
        }

        /* Estilos para la sección a la derecha */
        .section-info {
            flex: 1; /* Toma todo el espacio disponible a la derecha */
            padding: 20px; /* Espaciado interno */
            background-color: #000000; /* Color de fondo */
        }


        .container-info {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .submit-btn {
            background-color: #003366;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #002244;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .contact-info div {
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            width: 48%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3 {
            font-size: 18px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .contact-info p a {
            color: #000;
            text-decoration: none;
        }

        .contact-info p a:hover {
            text-decoration: underline;
        }


        </style>
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="logo img">
                <br><img src="{{ asset('img/INMOBILIARIA__1_-removebg-preview.png') }}" alt="RentaBien Logo" class="logo">    
            </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                <a
                                href="{{ route('welcome') }}"
                                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Inicio
                            </a>
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        
                                    Iniciar Sesión
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Crear cuenta
                                        </a>
                                    @endif
                                @endauth
                                <a
                                href="{{ url('/contactanos') }}"
                                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Contactanos
                            </a>
                            </nav>
                        @endif
            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <label for="numero_paquete" class="hero__title">Contactanos</label><br>
            
                <h3 >Carrera 36 5B 60 Ofici. 210</h3>
                <h3 >(57)316 6091919</h3>
                <h3 >Email: <a href="monarcadt@gmail.com">monarcadt@gmail.com</a></h3>

            <form action="/submit" method="post">
               
                <button type="submit" value="Buscar"></button>
            </form>
              
        </section>
    </header>

    <main>
        <section class="container-info">
            <div class="container-info">
                <center><h2 class="form-title">Formulario de Registro</h2></center>
                <form action="{{route('contactanos.store')}}" method="POST" id="contactForm">
                    @csrf
                    <label for="nombre">Nombre *</label>
                    <input type="text" id="nombre" name="nombre" required>
        
                    <label for="apellido">Apellido *</label>
                    <input type="text" id="apellido" name="apellido" required>
        
                    <label for="telefono">Teléfono *</label>
                    <input type="tel" id="telefono" name="telefono" required>
        
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="ciudad">Ciudad *</label>
                    <select id="ciudad" name="ciudad" required>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Cali">Cali</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Yopal">Yopal</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="Leticia">Leticia</option>
                    </select>
                    
        
                    <label for="servicio">Servicio de interés *</label>
                    <select id="servicio" name="servicio" required>
                        <option value="Consignar inmueble">Consignar inmueble</option>
                        <option value="Arrendar inmueble">Arrendar inmueble</option>
                    </select>
        
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje"></textarea>
        
                    <button type="submit" class="submit-btn" onclick="sendToWhatsApp()">ENVIAR</button>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </form>
                <script>
                    function sendToWhatsApp() {
                        // Captura los valores de los campos del formulario
                        const nombre = document.getElementById('nombre').value;
                        const apellido = document.getElementById('apellido').value;
                        const telefono = document.getElementById('telefono').value;
                        const email = document.getElementById('email').value;
                        const ciudad = document.getElementById('ciudad').value;
                        const servicio = document.getElementById('servicio').value;
                        const mensaje = document.getElementById('mensaje').value;
                
                        // Formatea el mensaje
                        const whatsappMessage = `Hola, mi nombre es ${nombre} ${apellido}.
                        \nTeléfono: ${telefono}
                        \nEmail: ${email}
                        \nCiudad: ${ciudad}
                        \nServicio de interés: ${servicio}
                        \nMensaje: ${mensaje}`;
                
                        // Reemplaza el número con el número de WhatsApp de destino
                        const whatsappURL = `https://wa.me/573166091919?text=${encodeURIComponent(whatsappMessage)}`;
                
                        // Redirige a WhatsApp
                        window.open(whatsappURL, '_blank');
                    }
                </script>
            </div>                     
        </section>
    
    
            <br><br>
            <center><h1  class="subtitle">DONDE ESTAMOS UBICADOS</h1></center>
            <div id="map-container">
                <div id="map" style="height: 400px;"></div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
            <script>
                function initMap() { 
                    var address = {lat: 3.43013451315452, lng: -76.5423497298243};
                    
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: address,
                        zoom: 17 // Ajusta el zoom para acercar más la vista
                    });
            
                    // Add a marker for the specific address
                    var marker = new google.maps.Marker({
                        position: address,
                        map: map,
                        title: 'Carrera 36 5B 60 Ofici. 210'
                    });
                }
            
                document.addEventListener('DOMContentLoaded', function() {
                    initMap();
                });
            </script>
                                        



    </main>

    <footer class="footer">
        <section class="footer__copy container">
            <h3 class="footer__copyright">Derechos reservados &copy; Monarca</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>


    </body>
</html>

