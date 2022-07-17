// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     /* Toggle between adding and removing the "active" class,
//     to highlight the button that controls the panel */
// //     this.classList.toggle("active");

// //     /* Toggle between hiding and showing the active panel */
// //     var panel = this.nextElementSibling;
// //     if (panel.style.display === "block") {a
// //       panel.style.display = "none";
// //     } else {
// //       panel.style.display = "block";
// //     }
// //   });
// // }
var avai= document.getElementsByClassName("available")[0].innerHTML;
console.log(avai.length);
if(avai.length==11){
  buyNow.setAttribute('disabled', 'disabled');
  console.log("working");
}