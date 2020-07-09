<div dir="rtl" style="text-align: left;" trbidi="on">
  <link href="//fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
  <script>
  var blogId = '3471223273963543604';
  //The below message 5 Strings can also be edited
  var contactFormMessageSendingMsg ='Sending your message...';
  var contactFormMessageSentMsg = 'Your message sent succefully.';
  var contactFormMessageNotSentMsg = 'Your message was not sent, please try again later.';
  var contactFormEmptyMessageMsg ='Message input can not be empty.';
  var contactFormInvalidEmailMsg = 'Please try a valid E-mail Address!'
  
  var widgetLoaded=false;
  function sendEmailMsg() {
  if(widgetLoaded== false) {
  _WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'sidebar', null, document.getElementById('ContactForm1'), {'contactFormMessageSendingMsg': contactFormMessageSendingMsg , 'contactFormMessageSentMsg': contactFormMessageSentMsg , 'contactFormMessageNotSentMsg': contactFormMessageNotSentMsg , 'contactFormInvalidEmailMsg': contactFormInvalidEmailMsg , 'contactFormEmptyMessageMsg': contactFormEmptyMessageMsg , 'title': 'Contact Form', 'blogId': blogId, 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'submitUrl': 'https://www.blogger.com/contact-form.do'}, 'displayModeFull'));
  widgetLoaded=true;
  document.getElementById('ContactForm1_contact-form-submit').click();
  }
  return true;
  }
  </script>
  
  <style type="text/css">
  .login-body{
      direction: ltr;
      background: #5fa0dd;
      display: -webkit-box;
      margin: 10px;
      border-radius: 5px;
  font-family: Droid Arabic Kufi;
  
   }
  .login-01{
    width:85%;
    margin:5% auto 3%;
  }
  form {
     padding: 0% 1%;
  }
  form li.first,li.second{
    border:none;
    list-style:none;
    margin-bottom:10px;
    width:100%;
  }
  .icon,.icon2  {
    height:55px;
    width:55px;
  vertical-align: top;
    display: -webkit-inline-box;
    border-top-right-radius: 0.3em;
    -o-border-top-right-radius: 0.3em;
    -moz-border-top-right-radius: 0.3em;
    -webkit-border-top-right-radius: 0.3em;
    border-border-bottom-right-radius: 0.3em;
    -o-border-bottom-right-radius: 0.3em;
    -moz-border-bottom-right-radius: 0.3em;
    -webkit-border-bottom-right-radius: 0.3em;
  }
  .user1 {
      background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 14px 15px #0088ff;
  }
  .email{
    background:url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 15px -39px #0088ff;
  }
  .msg{
    background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/msg.png) no-repeat 16px 16px #0088ff;
  }
  li.first:hover .user1{
    background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 14px 15px #ef464b;
  }
  li.first:hover .email{
    background:url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 15px -39px #ef464b;
  }
  li.second:hover .msg {
    background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/msg.png) no-repeat 16px 16px #ef464b;
  }
  /*-----*/
  input[type="text"],form textarea {
      width: 77%;
      padding: 1.13em 1em 1.13em 1em;
      color: #858282;
      font-size: 17px;
      outline: none;
      height: 16.2px;
      background: #fff;
      font-weight: 500;
      border: none;
      font-family: inherit;
      border-top-left-radius: 0.3em;
      -o-border-top-left-radius: 0.3em;
      -moz-border-top-left-radius: 0.3em;
      -webkit-border-top-left-radius: 0.3em;
      border-border-bottom-left-radius: 0.3em;
      -o-border-bottom-left-radius: 0.3em;
      -moz-border-bottom-left-radius: 0.3em;
      -webkit-border-bottom-left-radius: 0.3em;
    }
    .button{
      
    }
  form textarea {
    resize: none;
    height: 140px;
  }
  .login-01 input[type="button"]{
    font-size: 17px;
    font-weight: 300;
    color: #fff;
    font-family: inherit;
    cursor: pointer;
    outline: none;
    padding: 5px 10px;
    width: 25%;
    border: 2px solid #0088ff;
    float: left;
    background: #0088ff;
    border-radius: 0.3em;
    -o-border-radius: 0.3em;
    -webkit-border-radius: 0.3em;
    -moz-border-radius: 0.3em;
    margin-right:2.85em;
  }
  input[type="button"]:hover{
  -webkit-transform: rotate(4deg);
    transform: rotate(4deg);
    -o-transform: rotate(4deg);
    -moz-transform: rotate(4deg);
  }
  li.lost {
    margin-bottom: 21px;
  }
  /*---------------*/
  .copy-right {
    text-align: center;
    margin: 2em 0;
  }
  .copy-right p {
   color: #fff;
   font-size: 1em;
   font-weight:400;
  }
  .copy-right p a {
   color:#fff;
  }
  .copy-right p a:hover {
   text-decoration: underline;
  }
  .login-body .contact-form-email-message{
      height: 106px;
  }
  .login-body .contact-form-error-message-with-border{
      background: #c73352;
  }
  .login-body .contact-form-success-message{
      background: #c73352;
  }
  .login-body .contact-form-error-message-with-border,.all-emil contact-form-success-message{
      color: #fff;
      padding: 3px 0px;
      border-radius: 4px;
      margin: 10px 0 0 0;
      clear: both;
  }
  .login-body .contact-form-error-message-with-border img,.all-emil contact-form-success-message img{
  cursor: pointer;
      float: right;
      padding: 0px 3px 0px 0;
  }
  /*-----start-responsive-design------*/
  @media (max-width:1440px){
    .login-01 input[type="button"]{
    margin-right:1.85em;
    }
  
  }
  @media (max-width:1366px){
    .login-01 input[type="button"]{
    margin-left: 5.6em;
    }
     
  }
  @media (max-width:1280px){
     .login-01 {
      width: 40%;
      margin:5% auto 5%;
    }
    body h1 {
    font-size: 2.7em;
  }
  
  }
  @media (max-width:1024px){
    .login-01 {
    width: 45%;
  }
   body h1 {
    font-size: 2.5em;
  }
  
  }
  @media (max-width:768px){
    .login-01 {
    width: 63%;
  }
   body h1 {
    font-size: 2.3em;
  }
  }
  @media (max-width:640px){
    .login-01 {
    width: 73%;
    }
    body h1 {
    font-size: 2.1em;
  }
  }
  @media (max-width:480px){
     .login-01 {
      width: 85%;
   }
    .copy-right p {
      font-size: 0.9em;
    }
  input[type="text"], form textarea{
   height: 14.2px;
  }
  form textarea {
      height: 140px;
  }
     input[type="text"], form textarea {
    width: 77%;
    padding: 1em 1em 1em 1em;
  
    }
    .icon, .icon2 {
    height: 48px;
    width: 48px;
    }
    .user1 {
      background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 11px 12px #0088ff;
        background-size: 45%;
  }
  .email{
    background:url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 12px -36px #0088ff;
      background-size: 45%;
  }
  .msg{
    background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/msg.png) no-repeat 14px 11px #0088ff;
      background-size: 45%;
  }
  li.first:hover .user1{
       background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 11px 9px #ef464b;
        background-size: 45%;
  }
  li.first:hover .email{
    background:url(https://p.w3layouts.com/demos/pink_contact_form/web/images/icons.png) no-repeat 12px -36px #ef464b;
     background-size: 45%;
  }
  li.second:hover .msg {
    background: url(https://p.w3layouts.com/demos/pink_contact_form/web/images/msg.png) no-repeat 14px 11px #ef464b;
     background-size: 45%;
  }
  form li.first, li.second {
    margin-bottom: 5px;
    }
  
  }
  @media (max-width:600px){
  .login-01 {
      width: 100%;
  }
  }
  input[type="text"], form textarea {
      width: 65%;
  }
  
    }
  
  
  </style>
   <br />
  <div class="login-body">
  <div class="login-01">
  <form name="contact-form">
  <ul>
  <li class="first">
       <a class=" icon user1" href="https://www.blogger.com/null"></a><input class="text" id="ContactForm1_contact-form-name" name="name" placeholder="Your Name" type="text" value="" />
       <div class="clear">
  </div>
  </li>
  <li class="first">
       <a class=" icon email" href="https://www.blogger.com/null"></a><input class="text" id="ContactForm1_contact-form-email" name="email" placeholder="Your Email Address" type="text" value="" />
       <div class="clear">
  </div>
  </li>
  <li class="second">
      <a class=" icon msg" href="https://www.blogger.com/null"></a><textarea id="ContactForm1_contact-form-email-message" name="email-message" placeholder="Your Message" value="Message"></textarea>
      <div class="clear">
  </div>
  </li>
  </ul>
  <input id="ContactForm1_contact-form-submit" onclick="sendEmailMsg()" type="button" value="Send" />
     <br />
  <div class="clear">
  </div>
  <div style="margin: 3px auto; max-width: 450px; text-align: center; width: 100%;">
  <div class="contact-form-error-message" id="ContactForm1_contact-form-error-message">
  </div>
  <div class="contact-form-success-message" id="ContactForm1_contact-form-success-message">
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>