function ajax(){

    let searchTerminalCode = document.getElementById('searchTerminalCode').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/terminalSearchCheck.php?', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('searchTerminalCode='+searchTerminalCode);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            document.getElementsByTagName('h5')[0].innerHTML = this.responseText;
        }
    }
}