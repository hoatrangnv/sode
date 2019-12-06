<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <meta name="description" content="{{config('config.description')}}">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Import other AMP Extensions here -->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <style amp-custom>
   
/*! CSS Used from: https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css */
:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;}
*,::after,::before{box-sizing:border-box;}
html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent;}
footer,header,main,nav,section{display:block;}
body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff;}
html body [tabindex="-1"]:focus{outline:0;}
h1,h2,h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a:not([href]):not([tabindex]){color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus{outline:0;}
img{vertical-align:middle;border-style:none;}
table{border-collapse:collapse;}
th{text-align:inherit;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button{text-transform:none;}
button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
.h1,.h3,.h5,h1,h2,h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
.h1,h1{font-size:2.5rem;}
h2{font-size:2rem;}
.h3,h3{font-size:1.75rem;}
.h5{font-size:1.25rem;}
.img-fluid{max-width:100%;height:auto;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1140px;}
}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-10,.col-12,.col-2,.col-3,.col-9,.col-md-10,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-8,.col-md-9{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-12,.col-2,.col-4,.col-6,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%;}
.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%;}
.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%;}
.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
@media (min-width:768px){
.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%;}
.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%;}
.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%;}
}
.table{width:100%;margin-bottom:1rem;background-color:transparent;}
.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;}
.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6;}
.table-bordered{border:1px solid #dee2e6;}
.table-bordered td,.table-bordered th{border:1px solid #dee2e6;}
.table-bordered thead th{border-bottom-width:2px;}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media screen and (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.collapse:not(.show){display:none;}
.nav-link{display:block;padding:.5rem 1rem;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem;}
.navbar>.container{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;}
.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none;}
.navbar-nav .nav-link{padding-right:0;padding-left:0;}
.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center;}
.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;}
.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none;}
@media (max-width:991.98px){
.navbar-expand-lg>.container{padding-right:0;padding-left:0;}
}
@media (min-width:992px){
.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start;}
.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row;}
.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem;}
.navbar-expand-lg>.container{-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
html body .navbar-expand-lg .navbar-collapse{display:-ms-flexbox;display:flex;-ms-flex-preferred-size:auto;flex-basis:auto;}
.navbar-expand-lg .navbar-toggler{display:none;}
}
html body .bg-dark{background-color:#343a40;}
html body .bg-white{background-color:#fff;}
html body .border{border:1px solid #dee2e6;}
html body .border-top{border-top:1px solid #dee2e6;}
html body .border-bottom{border-bottom:1px solid #dee2e6;}
html body .border-0{border:0;}
html body .border-top-0{border-top:0;}
html body .border-right-0{border-right:0;}
html body .border-left-0{border-left:0;}
html body .rounded{border-radius:.25rem;}
html body .d-none{display:none;}
html body .d-block{display:block;}
@media (min-width:576px){
html body .d-sm-none{display:none;}
}
@media (min-width:768px){
html body .d-md-none{display:none;}
html body .d-md-block{display:block;}
}
html body .justify-content-end{-ms-flex-pack:end;justify-content:flex-end;}
html body .float-right{float:right;}
html body .position-relative{position:relative;}
html body .position-absolute{position:absolute;}
.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030;}
html body .w-50{width:50%;}
html body .w-75{width:75%;}
html body .my-2{margin-top:.5rem;}
html body .my-2{margin-bottom:.5rem;}
html body .m-0{margin:0;}
html body .mb-2{margin-bottom:.5rem;}
html body .mt-3,.my-3{margin-top:1rem;}
html body .mx-3{margin-right:1rem;}
html body .mb-3,.my-3{margin-bottom:1rem;}
html body .mt-3{margin-top:1rem;}
html body .mx-3{margin-right:1rem;}
html body .mb-3{margin-bottom:1rem;}
html body .mx-3{margin-left:1rem;}
html body .mt-4{margin-top:1.5rem;}
html body .mt-5{margin-top:3rem;}
html body .mb-5{margin-bottom:3rem;}
html body .pr-0,.px-0{padding-right:0;}
html body .pl-0,.px-0{padding-left:0;}
html body .pb-1{padding-bottom:.25rem;}
html body .pt-3,.py-3{padding-top:1rem;}
html body .py-3{padding-bottom:1rem;}
html body .pt-5{padding-top:3rem;}
html body .px-3{padding-right:1rem;}
html body .pb-3,.py-3{padding-bottom:1rem;}
html body .px-3{padding-left:1rem;}
html body .pb-5{padding-bottom:3rem;}
html body .my-auto{margin-top:auto;}
html body .my-auto{margin-bottom:auto;}
@media (min-width:768px){
html body .my-md-0{margin-top:0;}
html body .my-md-0{margin-bottom:0;}
html body .mt-md-5{margin-top:3rem;}
html body .mb-md-5{margin-bottom:3rem;}
html body .px-md-0{padding-right:0;}
html body .px-md-0{padding-left:0;}
}
@media (min-width:992px){
html body .mt-lg-0{margin-top:0;}
html body .mb-lg-0{margin-bottom:0;}
html body .mx-lg-3{margin-right:1rem;}
html body .mx-lg-3{margin-left:1rem;}
html body .my-lg-5{margin-top:3rem;}
html body .my-lg-5{margin-bottom:3rem;}
html body .p-lg-0{padding:0;}
html body .pt-lg-0{padding-top:0;}
html body .px-lg-0{padding-right:0;}
html body .pl-lg-0,.px-lg-0{padding-left:0;}
html body .pt-lg-3{padding-top:1rem;}
html body .pb-lg-3{padding-bottom:1rem;}
html body .pt-lg-5{padding-top:3rem;}
}
html body .text-center{text-align:center;}
html body .text-uppercase{text-transform:uppercase;}
html body .font-weight-bold{font-weight:700;}
html body .text-dark{color:#343a40;}
html body a.text-dark:focus,a.text-dark:hover{color:#1d2124;}
@media print{
html body *,::after,::before{text-shadow:none;box-shadow:none;}
a:not(.btn){text-decoration:underline;}
thead{display:table-header-group;}
img,tr{page-break-inside:avoid;}
h2,h3,p{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
html body{min-width:992px;}
html body .container{min-width:992px;}
.navbar{display:none;}
html body .table{border-collapse:collapse;}
html body .table td,.table th{background-color:#fff;}
html body .table-bordered td,.table-bordered th{border:1px solid #dee2e6;}
}
/*! CSS Used from: https://use.fontawesome.com/releases/v5.6.3/css/all.css */
.fab,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-home:before{content:"\f015";}
.fa-pinterest:before{content:"\f0d2";}
.fa-twitter:before{content:"\f099";}
.fa-youtube:before{content:"\f167";}
.fab{font-family:"Font Awesome 5 Brands";}
.fas{font-family:"Font Awesome 5 Free";}
.fas{font-weight:900;}
/*! CSS Used from: http://sode.localhost:1000/public/css/style.css */
body{font-family:'Roboto', sans-serif;background-color:#f9fbff;}
body p{font-size:15px;}
body header .navbar{background-color:#F8113A;}
body header .navbar .img-logo{width:150px;}
body header .navbar .menu-header ul li a{color:#fff;font-weight:500;font-size:16px;font-family:'Roboto Condensed', sans-serif;}
body header .navbar .menu-header ul li a:hover{color:#ffee04;}
body header .navbar .menu-header ul li{padding:5px 3px;}
.box-sidebar{margin-bottom:20px;}
footer h3{font-size:20px;margin-left:20px;}
footer a,footer a:hover,footer a:focus{color:#F8113A;text-decoration:none;}
body main{position:relative;top:25px;}
body main .content{font-size:16px;}
body main .single .content{max-width:100%;}
html body main .single .content p img{max-width:100%;margin:0 auto;height:auto;text-align:center;}
body main .single .content h1{font-size:30px;color:#F8113A;font-family:'Roboto Condensed', sans-serif;}
body main .single .content h2{font-size:25px;color:#011a32;font-family:'Roboto Condensed', sans-serif;}
html body main .single .content h3{font-size:22px;font-family:'Roboto Condensed', sans-serif;}
body main .single .content p{color:#454545;}
body main .single .content .news-diff .title-news-diff{font-family:'Roboto Condensed', sans-serif;}
body main .single .content .news-diff .box-content .grid-news{padding-right:15px;padding-left:15px;}
html body main .sidebar .border-sidebar{border-bottom-style:dotted;border-bottom-color:#bbbbbb;}
body main .sidebar .box-top{background-color:#fff;border:1px solid #ebebeb;}
body main .sidebar .box-top .mark-col{background:#ffb603;padding:13px 0px;color:#fff;font-weight:600;}
body main .sidebar .box-top .evaluate{font-weight:600;padding:13px 0px;background-color:#f4f4f4;}
body main .sidebar .box-top .evaluate a{color:#F8113A;}
body main .sidebar .box-top .evaluate a:hover{text-decoration:none;color:#F8113A;}
body main .content{font-size:16px;}
body main .content .title{font-size:25px;color:#000;text-align:center;font-weight:500;font-family:'Roboto Condensed', sans-serif;}
body main .content .content-home{color:#454545;font-weight:500;}
body main .content .table-content .tr-thead{background-color:#e3e7f1;text-align:center;}
body main .content .table-content tbody{text-align:center;}
body main .content .table-content tbody .btn-reg{color:#006eb4;font-weight:600;padding:10px 30px;text-transform:uppercase;background-color:#fff;}
body main .content .table-content tbody .btn_rate{color:#F8113A;font-weight:600;padding:10px 27px;text-transform:uppercase;background-color:#fff;}
body main .content .table-content tbody .stt{background-color:#F8113A;padding:15px 0px;margin:0px;color:#fff;font-weight:600;font-size:18px;}
body main .content .table-content tbody .diem{background-color:#484848;padding:15px 0px;margin:0px;color:#fff;font-weight:600;font-size:18px;}
body main .news .title{border-left:5px solid #bdbdbd;}
body main .news .title h2{font-size:25px;padding-left:10px;line-height:20px;}
body main .news .title h2 a{color:#F8113A;text-decoration:none;font-family:'Roboto Condensed', sans-serif;}
body main .news .content-news{border-bottom:1px dotted #bbb;}
body main .news .content-news .title-news{line-height:1;}
body main .news .content-news .title-news a{font-size:20px;font-family:'Roboto Condensed', sans-serif;color:#000;font-weight:600;}
body main .news .content-news .title-news a:hover{color:#F8113A;text-decoration:none;}
body main .news .content-news .des{color:#676767;}
body main .news-footbal .sidebar .title-sidebar{border-left:5px solid #bdbdbd;}
body main .news-footbal .sidebar .title-sidebar h2{font-size:25px;padding-left:10px;line-height:20px;}
body main .news-footbal .sidebar .title-sidebar h2 a{color:#F8113A;text-decoration:none;font-family:'Roboto Condensed', sans-serif;}
body main .news-footbal .ft-news h3{font-size:22px;font-family:'Roboto Condensed', sans-serif;}
html body main .news-footbal .ft-news a:hover{text-decoration:none;color:#F8113A;}
body main .news-footbal .ft-news .title{border-left:5px solid #bdbdbd;}
body main .news-footbal .ft-news .title h2{font-size:25px;padding-left:10px;line-height:20px;}
body main .news-footbal .ft-news .title h2 a{color:#F8113A;text-decoration:none;font-family:'Roboto Condensed', sans-serif;}
body main .sidebar .box-sidebar .title-sidebar{font-size:25px;font-family:'Roboto Condensed', sans-serif;}
body main .sidebar .box-sidebar .box-top-km{padding-left:15px;padding-right:15px;border:1px solid #ebebeb;background-color:#fff;}
body main .category .cat .title-cat h1{font-size:30px;color:#F8113A;font-family:'Roboto Condensed', sans-serif;}
html body main .category .cat .border-bottom{border-bottom-color:#bbbbbb;border-bottom-style:dotted;}
body footer .footer{border-top:3px solid #ebeff6;background:#fff;}
body footer .footer .share{color:#585858;font-weight:500;}
body footer .footer .share a i{color:#000;padding:5px;font-size:20px;}
body footer .footer .share a i:hover{color:#ed1a22;}
@media (max-width: 576px){
body p{font-size:15px;}
body header .btn-menu{margin-right:-10px;}
html body header .btn-menu:active{border:none;}
body main{top:50px;}
body main .content .table-content .table-nc{display:none;}
body main .content .title{font-size:22px;}
body main .news .content-news{border-bottom:none;}
body main .news .content-news .des p{color:#000;}
body main .news .col-12{border-top:1px solid #dee2e6;border-bottom:1px solid #dee2e6;padding-top:20px;background:#fff;}
body main .sidebar{margin-top:15px;border-top:1px solid #ebebeb;}
body main .sidebar .box-top{border:none;}
html body main .sidebar .border-sidebar{border-bottom-style:solid;border-bottom-color:#eee;}
body main .sidebar .box-sidebar{background-color:#fff;margin-left:-15px;margin-right:-15px;padding-left:15px;padding-right:15px;}
body main .sidebar .box-sidebar .title-sidebar{border-bottom:none;}
body main .sidebar .box-sidebar .title-sidebar h2{font-size:20px;color:#F8113A;font-weight:600;border-left:5px solid;text-align:left;padding-left:5px;}
body main .sidebar .box-sidebar .box-top-km{padding-left:15px;padding-right:15px;}
body main .category .cat .title-cat h1{font-size:22px;border-left:5px solid;line-height:0.8;padding-left:5px;}
body main .single .content .news-diff{border-bottom:1px solid #eee;color:#F8113A;background:#fff;margin-left:-15px;margin-right:-15px;margin-top:100px;}
body main .single .content .news-diff .box-content{padding-left:15px;padding-right:15px;}
body main .single .content .news-diff .title-news-diff{font-size:19px;border-left:5px solid;line-height:0.8;padding-left:5px;margin-left:15px;}
body main .single .content h1{font-size:25px;text-align:center;color:#000;}
body footer .footer{border-top:none;background-color:#232527;}
body footer .footer .footer-mb p{color:#6b6b6b;}
}
/*! CSS Used from: Embedded */
html body .table-bordered th{border:none;}
html body .table{border:none;}
@media only screen and (max-width: 600px){
a.btn-reg{width:100%;}
a.btn_rate{width:100%;}
html body .content .table-content tbody .stt{font-size:13px;}
html body .content .table-content tbody .diem{font-size:13px;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:italic;font-weight:700;src:local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"Font Awesome 5 Brands";font-style:normal;font-weight:normal;src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.eot);src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.eot#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-brands-400.svg#fontawesome) format("svg");}
@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.eot);src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-regular-400.svg#fontawesome) format("svg");}
@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.eot);src:url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.6.3/webfonts/fa-solid-900.svg#fontawesome) format("svg");}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYoYNNZQyQ.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYoadNZQyQ.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYoYdNZQyQ.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYobtNZQyQ.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYoYtNZQyQ.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYoY9NZQyQ.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto Condensed';font-style:italic;font-weight:700;src:local('Roboto Condensed Bold Italic'), local('RobotoCondensed-BoldItalic'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYobdNZ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19-7DRs5.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19a7DRs5.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-1967DRs5.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19G7DRs5.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-1927DRs5.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19y7DRs5.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:400;src:local('Roboto Condensed'), local('RobotoCondensed-Regular'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVl2ZhZI2eCN5jzbjEETS9weq8-19K7DQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCkYb8td.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCAYb8td.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCgYb8td.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCcYb8td.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCsYb8td.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCoYb8td.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Roboto Condensed';font-style:normal;font-weight:700;src:local('Roboto Condensed Bold'), local('RobotoCondensed-Bold'), url(https://fonts.gstatic.com/s/robotocondensed/v18/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCQYbw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    </style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,700i|Roboto:400,700,700i"
        rel="stylesheet">
    <link rel="canonical" href="{{url()->current()}}">
    <title>{{config('config.title')}}</title>
  </head>