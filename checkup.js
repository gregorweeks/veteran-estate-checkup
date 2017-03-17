//toggles visibility of help prompts

function toggle(id,event) {
  if (id == 'edit') {
    $('.' + 'ttinner').hide();
  }
  else {
    var e = document.getElementById(id);
    if (e.style.display == 'block') {
      $('.' + 'ttinner').hide();
      e.style.display = 'none';
    }
    else {
      $('.' + 'ttinner').hide();
      e.style.display = 'block';
    }
    event.stopPropagation();
  }
}

//toggles visibility of child age question
function vis18() {
  if (document.getElementById("children").value.toLowerCase()=='yes') {
    document.getElementById("children18div").style.display="";
  }
  else {
    document.getElementById("children18div").style.display="none";
  }
}