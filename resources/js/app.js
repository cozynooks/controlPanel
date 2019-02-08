import $ from 'jQuery';

$(function() {
  $('#productDelete').click(function(e) {
    e.preventDefault();

    var result = confirm('本当に削除しますか？');

    if(result) {
      //はいを選んだときの処理
      $.ajax({
          url:'/delete/' + $(this).data('id'),
          type:'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          success: function(){
            location.href="/";
          }
      })
    }
  })
});
