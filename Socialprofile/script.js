function contact(){
    var name =document.getElementById("name");
    var mail =document.getElementById("email");
    var subject =document.getElementById("subject");
    var msg =document.getElementById("message");

    var f = new FormData();

    f.append("name",name.value);
    f.append("email",mail.value);
    f.append("subject",subject.value);
    f.append("message",msg.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            t = r.responseText
            if (t == "success") {
                alert("Message has been sent successfully");
            } else {
                
                alert(t);
            }
        }
    }

    r.open("POST", "forms/contact.php", true);
    r.send(f);
}