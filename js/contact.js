


function sendMail() {
    var link = "mailto:a.vermenot@codeur.online"
             + "?cc=a.vermenot@codeur.online"
             + "&email=" + encodeURIComponent(document.getElementById('email').value)
             + "&body=" + encodeURIComponent(document.getElementById('message').value)
    ;

    window.location.href = link;
}

// Email.send({
//     Host : "smtp.yourisp.com",
//     Username : "username",
//     Password : "password",
//     To : 'them@website.com',
//     From : "you@isp.com",
//     Subject : "This is the subject",
//     Body : "And this is the body"
// }).then(
//   message => alert(message)
// );
// Email.send({
//     SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
//     To : 'them@website.com',
//     From : "you@isp.com",
//     Subject : "This is the subject",
//     Body : "And this is the body"
// }).then(
//   message => alert(message)
// );

// function formulaire(){
//   var name = document.getElementById("name").value;
//   var email = document.getElementById("email").value;
//   var message = document.getElementById("message").value;
//   console.log(name);
//   console.log(email);
//   console.log(message);
//
// }
