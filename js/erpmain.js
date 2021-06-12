// ERP Start

  // student card view more button
  $(".card_box").slice(0, 5).show();
  $(".viewless").fadeOut();
  $(".viewmore").on("click", function () {
      $(".card_box:hidden").slice(0, 5).show();
      if ($(".card_box:hidden").length == 0) {
          $(".viewmore").fadeOut();
          // $(".viewless").fadeIn();
      }
  })

  // asked question card view more button
  $(".question_box").slice(0, 3).show();
  $(".viewless").fadeOut();
  $(".view_more_questions").on("click", function () {
      $(".question_box:hidden").slice(0, 3).show();
      if ($(".question_box :hidden").length == 0) {
          $(".view_more_questions").fadeOut();
          // $(".viewless").fadeIn();
      }
  })

  // personal mentorship card view more button
  $(".schedule_box").slice(0, 3).show();
  $(".viewless").fadeOut();
  $(".view_more_schedule").on("click", function () {
      $(".schedule_box:hidden").slice(0, 3).show();
      if ($(".schedule_box :hidden").length == 0) {
          $(".view_more_schedule").fadeOut();
          // $(".viewless").fadeIn();
      }
  })

  // teacher enrolled card view more button
  $(".teacher_box").slice(0, 5).show();
  $(".viewless_teacher").fadeOut();
  $(".viewmore_teacher").on("click", function () {
      $(".teacher_box:hidden").slice(0, 5).show();
      if ($(".teacher_box:hidden").length == 0) {
          $(".viewmore_teacher").fadeOut();
          // $(".viewless").fadeIn();
      }
  })

  //ERP End