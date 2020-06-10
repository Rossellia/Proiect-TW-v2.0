function submitFormAjax() {
    let xmlhttp= window.XMLHttpRequest ?
        new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200)
            alert(this.responseText); // Here is the response
    }

    let username = document.getElementsByName('username').innerHTML;
    let password = document.getElementsByName('password').innerHTML;

    xmlhttp.open("POST","home.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("username=" + username + "&password=" + password);
}