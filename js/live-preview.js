//from stackoverflow
$(".live-preview").change(function(){
  var $this = $(this);
  $('.' + $this.attr('id') + '').html($this.val());
});
