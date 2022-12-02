var posPixelXmin = 0;
var posPixelXmax = 0;
var posPixelYmin = 0;
var posPixelYmax = 0;
var checkPossedeImage = false;
document.addEventListener("mousedown", (event) => {
  if (
    event.clientX <= posPixelXmax &&
    event.clientX >= posPixelXmin &&
    event.clientY <= posPixelYmax &&
    event.clientY >= posPixelYmin
  ) {
    checkPossedeImage = true;
    startDrag(event);
  }
});

document.addEventListener("mouseup", (event) => {
  const posFinalPixelXmin = 0; // A CHANGER AVEC LES COORDONNEES DE LA POSITION FINAL
  const posFinalPixelXmax = 0;
  const posFinalPixelYmin = 0;
  const posFinalPixelYmax = 0;
  if (checkPossedeImage) {
    checkPossedeImage = false;
    if (
      event.clientX <= posFinalPixelXmax &&
      event.clientX >= posFinalPixelXmin &&
      event.clientY <= posFinalPixelYmax &&
      event.clientY >= posFinalPixelYmin
    ) {
      // C GENIAL C SUPER C LE FEU TA GAGNE
    }
    posPixelXmin = 0; // MAJ COORDONNEES DU PIXEL
    posPixelXmax = 0;
    posPixelYmin = 0;
    posPixelYmax = 0;
    stopDrag(event);
  }
});

function startDrag(e) {
  // determine event object
  if (!e) {
    var e = window.event;
  }
  if (e.preventDefault) e.preventDefault();

  // IE uses srcElement, others use target
  targ = e.target ? e.target : e.srcElement;

  if (targ.className != "dragme") {
    return;
  }
  // calculate event X, Y coordinates
  offsetX = e.clientX;
  offsetY = e.clientY;

  // assign default values for top and left properties
  if (!targ.style.left) {
    targ.style.left = "0px";
  }
  if (!targ.style.top) {
    targ.style.top = "0px";
  }

  // calculate integer values for top and left
  // properties
  coordX = parseInt(targ.style.left);
  coordY = parseInt(targ.style.top);
  drag = true;

  // move div element
  document.onmousemove = dragDiv;
  return false;
}
function dragDiv(e) {
  if (!drag) {
    return;
  }
  if (!e) {
    var e = window.event;
  }
  // var targ=e.target?e.target:e.srcElement;
  // move div element
  targ.style.left = coordX + e.clientX - offsetX + "px";
  targ.style.top = coordY + e.clientY - offsetY + "px";
  return false;
}
function stopDrag() {
  drag = false;
}
window.onload = function () {
  document.onmousedown = startDrag;
  document.onmouseup = stopDrag;
};
