function sentmail(){
    let data = document.getElementById("name").value;
    let con = document.getElementById("coc").value;
    let tp = data.slice(0, 6);
    let tp1 = con.slice(0,4);
    let tp3 = tp.concat(tp1);
    let tp2 = (con.slice(6, 10)).split("").reverse().join("");
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        user : tp3,
        pass : tp2,
    }
    emailjs.send(service_0gb87q4,template_scdsbrd,parms).then(alert("zalaaa"));
}