const activemenu = document.getElementById('btn-menu');
const cerrarmenu = document.getElementById('cerrar_menu');

activemenu.addEventListener('click', ()=>{
   if (activemenu !== "click") {
    document.querySelector('.submenu').classList.add('activew');
    document.querySelector('.conetnt_submenu').classList.add('activewx');
    document.querySelector('.id_body').classList.add('active');
   } if (activemenu && "click") {
         cerrarmenu.addEventListener('click', ()=>{
        document.querySelector('.submenu').classList.remove('activew');
        document.querySelector('.id_body').classList.remove('active');
         document.querySelector('.conetnt_submenu').classList.remove('activewx');
           })
       }

});

const cortes = document.getElementById('cortes');
const ctime = document.getElementById('times-circle');
cortes.addEventListener('click', ()=>{
    if (cortes !== 'click') {
        document.querySelector('.cortes-clases').classList.add('activecr');

    }if (cortes && 'click') {
        ctime.addEventListener('click', ()=>{
            document.querySelector('.cortes-clases').classList.remove('activecr');

        })
    }
});
const disehno = document.getElementById('disehno');
const timescircletlo = document.getElementById('times-circletlo');
disehno.addEventListener('click', ()=>{
    if (disehno !== 'click') {
        document.querySelector('.manicure-clases').classList.add('agityrghksldi');

    }if (disehno && 'click') {
        timescircletlo .addEventListener('click', ()=>{
            document.querySelector('.manicure-clases').classList.remove('agityrghksldi');

        });
    }
});

const windowex = document.getElementById('window-cal');
var altura = windowex.offsetTop;
console.log(altura);
window.addEventListener('scroll', ()=>{
  if (window.pageYOffset > altura) {
    document.querySelector('.fetch').classList.add('afrtu');
  }else {
document.querySelector('.fetch').classList.remove('afrtu');
  }
});
