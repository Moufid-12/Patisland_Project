emailjs.init('sC59pqePlPfm9hhwm');

const btn = document.getElementById('button');

 document.getElementById('form')
 .addEventListener('submit', function(event) {
 event.preventDefault();

 btn.value = 'Envoie en cours...';

 const serviceID = 'default_service';
 const templateID = 'template_7yoqqj7';

 var params ={
         sendername: document.querySelector('#name').value,
         senderemail: document.querySelector('#email').value,
         sendertel: document.querySelector('#tel').value,
         subject: document.querySelector('#subject').value,
         message: document.querySelector('#message').value
     };

 emailjs.send(serviceID, templateID, params)
     .then(() => {
     btn.value = 'Envoyer';
      $('#myModal').modal('show');
      document.querySelector('#name').value = "";
     document.querySelector('#email').value = "";
     document.querySelector('#tel').value = "";
     document.querySelector('#subject').value = "";
     document.querySelector('#message').value = "";
     }, (err) => {
     btn.value = 'Réessayer encore';
     alert(JSON.stringify(err));
     console.log(err);
     });
 });

//  function CustomAlert(){
//  this.alert = function(message,title){
//      document.body.innerHTML = document.body.innerHTML + '<div id="dialogoverlay"></div><div id="dialogbox" class="slit-in-vertical"><div><div id="dialogboxhead"></div><div id="dialogboxbody"></div><div id="dialogboxfoot"></div></div></div>';

//      let dialogoverlay = document.getElementById('dialogoverlay');
//      let dialogbox = document.getElementById('dialogbox');
     
//      let winH = window.innerHeight;
//      dialogoverlay.style.height = winH+"px";
     
//      dialogbox.style.top = "200px";

//      dialogoverlay.style.display = "block";
//      dialogbox.style.display = "block";
     
//      document.getElementById('dialogboxhead').style.display = 'block';

//      if(typeof title === 'undefined') {
//      document.getElementById('dialogboxhead').style.display = 'none';
//      } else {
//      document.getElementById('dialogboxhead').innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ title;
//      }
//      document.getElementById('dialogboxbody').innerHTML = message;
//      document.getElementById('dialogboxfoot').innerHTML = '<button class="pure-material-button-contained active" onclick="customAlert.ok()">OK</button>';
//  }
 
//  this.ok = function(){
//      document.getElementById('dialogbox').style.display = "none";
//      document.getElementById('dialogoverlay').style.display = "none";
//  }
//  }

//  let customAlert = new CustomAlert();