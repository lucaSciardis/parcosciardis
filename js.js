$('#list-tab a').on('click', function (e) {
    e.preventDefault();
    $(this).tab('show');
    var userSelection = $(this).text();
    if ($('input[name="my_input"]').length === 0) {
      var input = $('<input type="hidden" name="my_input" />');
      input.val(userSelection)
      $('#scelta_parco').find('form').prepend(input);
    } else {
      $('input[name="my_input"]').val(userSelection);
    }
  });