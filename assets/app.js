(function() {
  var body = document.getElementsByTagName('body')[0];
  var vh   = window.innerHeight + 'px';
  console.log(['retreive body:', body, 'with size:', vh]);
  body.style.height = vh;
})();