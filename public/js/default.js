$(document).ready(function(){

});
$(document).on("click", "a", function() {
  /* $.mobile.loading( 'show', {
    text: 'foo',
    textVisible: false,
    theme: 'a',
    html: ""
  });
  */
})
.on("click", ".hide-page-loading-msg", function() {
  $.mobile.loading( 'hide' );
});