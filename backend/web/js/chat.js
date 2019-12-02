var  VebsoketPort = wsPort ? wsPort : 8080;
var conn = new WebSocket('ws://localhost:'+ VebsoketPort);
var idMessages = 'ChatMessages';
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
    document.getElementById(idMessages).value =
        e.data + '\n' + document.getElementById(idMessages).value;
};



$( ".send_button" ).on( "click", function() {
    conn.send($(".send_text").val());
});