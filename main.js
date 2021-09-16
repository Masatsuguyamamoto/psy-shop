// $(function() {
//   $('.slider').slick({
//     customPaging: function(slider, i){
//       var thumbSrc = $(slider.$slider[i])
//       return '<img src"'+thumbSrc+'">';
//     }
//   });
// });



$(function() {
  $('.section').hide();
  $('.secList').on('click', function() {
    $('.section').not($('.' + $(this).attr('id'))).hide();
    $('.' + $(this).attr('id')).show();
  })
})

