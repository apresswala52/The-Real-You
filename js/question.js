function letterHover(item) {
  $(item).hover(function() {
    $(item + ' a .letter').css("background-color", "#2677B6");
  }, function() {
    $(item + ' a .letter').css("background-color", "#469BDC");
  });
}

letterHover("#a")
letterHover("#b")
letterHover("#c")
letterHover("#d")

function isCorrect() {
  $('.question').css("background-color", "#2ecc71");
  $('.question h3').css("color", "#fff");
}

function isWrong() {
  $('.question').css("background-color", "#E23F35");
  $('.question h3').css("color", "#fff");
}
    
function answer(item, bool) {
  if (bool === "true") {
    $(item).click(function() {
      isCorrect();
    });
    
  } else if (bool === "false") {
    $(item).click(function() {
      isWrong();
    });
  }
}

answer("#a", "true")
answer("#b", "false")
answer("#c", "false")
answer("#d", "false")