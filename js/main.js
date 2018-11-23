// check if input is URL
function isValidURL(string) {
  var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
  if (res == null)
    return false;
  else
    return true;
};

// Get URL from input
function geturl(){
    var url = document.getElementById("urlinput").value;
    var protocol_ok = url.startsWith("http://") || url.startsWith("https://");
    if(!protocol_ok){
        newurl = "http://"+url;
        return newurl;
    } else {
        return url;
    }     
};

// Create a random 4 digits number
function getrandom() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 4; i++)
    	// Math.random -> Number between 0 and 1 (eg. 0.2894437916976895)
    	// Math.floor -> round Number
    	// charAt() -> returns the character from the specified index
        text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
};

// Send long URL and random to DB
function send_request(longurl,random) {
    this.longurl = longurl;
    this.random = random;
    $.post('./php/process.php', {
        longurl: this.longurl,
        random: this.random 
    }, function(data, textStatus, xhr) {
        url = 'your-page.com/'+data;
        $('#tiny-url').html("The following URL:<br>"+longurl+"<br><br>resulted in the following short URL:<br><br><b><a href='https://your-page.com/"+data+"' target='_blank'>"+url+"</a></b>");
    });
}; 

// on button click
function shorturl() {
    var longurl = geturl();
    if(isValidURL(longurl)) {
        var random = getrandom();
        send_request(longurl,random);
    } else {
        document.getElementById("tiny-url").innerHTML = "Please enter a valid URL!"; 
    }
    document.getElementById("urlinput").value = "";
    $('#button').attr("disabled","disabled");
};

var checkField;

checkField = $("input#urlinput").val().length;  

// disable button when input is empty
var enableDisableButton = function(){         
    if(checkField > 0){
      $('#button').removeAttr("disabled");
    } 
    else {
      $('#button').attr("disabled","disabled");
    }
};        

enableDisableButton();            

$('input#urlinput').keyup(function(){ 
    checkField = $("input#urlinput").val().length;
    enableDisableButton();
});
